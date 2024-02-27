<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use MongoDB\Driver\Session;

class RestoController extends Controller
{
    //
    function index(){
        return view('home');
    }


    function list(){
        $restaurants=Restaurant::all();
        return view('list',["restaurants"=>$restaurants]);
    }

    function save(Request $req)
    {
        $restaurant=new Restaurant();
        $restaurant->email=$req->email;
        $restaurant->address=$req->address;
        $restaurant->name=$req->name;
        $result=$restaurant->save();
        $req->session()->flash('status','Restaurant entered successfully');
        return redirect('list');
    }

    function delete($id)
    {
    $restaurant=Restaurant::find($id);
    $restaurant->delete();
    return redirect('list');
    }

    function edit($id)
    {
        $restaurant= Restaurant::find($id);

        return view('edit',compact('restaurant'));
    }

    function saveChanges(Request $req)
    {

         $restaurant=Restaurant::find($req->id);
        $restaurant->email=$req->email;
        $restaurant->address=$req->address;
        $restaurant->name=$req->name;
        $restaurant->save();
        $req->session()->flash('status','Restaurant updated successfully');

        return redirect('list');
    }

    function register(Request $req)
    {
    $user=new User();
    $user->email=$req->email;
    $user->name=$req->name;
    $user->password =Crypt::encrypt($req->password);
    $user->contact=$req->number;
    $result=User::where('email',$user->email);
    if($result->count()>0){
        $req->session()->flash('status','User already exists');
        return redirect('register');
    }
    else{


    if($user->save()){
        $req->session()->flash('status','Registration done successfully');
        Session()->put('user',$req->name);
        Session()->put('email',$req->email);

        return redirect('/');
    }
    }
    }

    function logout()
    {
        Session()->flush();
        return redirect('/');
    }
    function login(Request $req)
    {
        $result=User::where('email',$req->email)->get();
        if($req->password==Crypt::decrypt($result[0]->password)){
            Session()->put('user',$result[0]->name);
            $req->session()->flash('status','Successful log in');
            return redirect('/');
        }
        else{
            $req->session()->flash('status','Incorrect email or password');
            return redirect('login');
        }

    }

}
