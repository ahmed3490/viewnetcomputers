<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Admin;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input as input;

class RemoteAdmin extends Controller
{


    public function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }




  public function register(Request $request)
  {
    if ($request->isMethod('post')){

        $this->validator($request->all())->validate();

        $data=$request->all();
          $admin=new Admin;
          Admin::create([
          'name' => $data['name'],
          'email' => $data['email'],
          'password' => Hash::make($data['password']),
          ]);

          Session::flash('success','New Admin Created!');
    }



    return view('admin.remoteregister');
  } 
  
}
