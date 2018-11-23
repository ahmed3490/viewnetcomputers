<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Admin;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input as input;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }


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
        return view('admin.register');
    }



    public function showResetform()
    {
        return view('admin.reset');
    }



    public function resetPass(Request $request)
      {
        $admin=new Admin;

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            Session::flash('error','Your current password is incorrect, Please try again..');
            return redirect()->back();
        }


        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same

            Session::flash('error','New Password cannot be same as your current password. Please choose a different password.');
            return redirect()->back();
        }
        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6',
        ]);

        //Change Password
        $admin = Auth::user();
        $admin->password = bcrypt($request->get('new-password'));
        $admin->save();

        Session::flash('success','Password changed successfully !');

        return redirect()->back();




      }



















    public function logout()
    {
        Session::flush();
       /*  Session::flash('success','Logged out sucessfully!');  */
        return redirect('/admin')->with('flash_message_error','Please login to access portal!');
        ;
    }


    public function settings()
    {
            return view('admin.settings');
    }








}
