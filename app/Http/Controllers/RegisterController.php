<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{

    public function custregister(Request $request)
    {
      if ($request->isMethod('post')) {
        $data=$request->all();

        //echo "<pre>"; print_r($data);die;
        $this->validate($request,[
          'password' => 'required|string|min:6'
        ]);
        $user=new user;
        $user->fname=$data['fname'];
        $user->lname=$data['lname'];
        $user->email=$data['email'];
        $user->password=Hash::make($data['password']);
        $user->nic=$data['nid'];
        $user->mobile=$data['mobile'];
        $user->compname=$data['company'];
        $user->address=$data['address'];
        $user->admin='customer';

      //  $register->mobile=$data['mobile'];
      //  $register->address=$data['address'];
      //  $register->region=$data['region'];
        $user->save();
        return redirect('/user')->with('flash_message_success','Register successfully, please login now..');
      }
      return view('user.custregister');
    }



    public function custopregister(Request $request)
    {
      if ($request->isMethod('post')) {
        $data=$request->all();

        //echo "<pre>"; print_r($data);die;
        $this->validate($request,[
          'password' => 'required|string|min:6'
        ]);
        $user=new user;
        $user->fname=$data['fname'];
        $user->lname=$data['lname'];
        $user->email=$data['email'];
        $user->password=Hash::make($data['password']);
        $user->nic=$data['nid'];
        $user->mobile=$data['mobile'];
        $user->compname=$data['company'];
        $user->address=$data['address'];
        $user->admin='customer';

      //  $register->mobile=$data['mobile'];
      //  $register->address=$data['address'];
      //  $register->region=$data['region'];
        $user->save();
        return redirect('/user')->with('flash_message_success','Register successfully, please login now..');
      }
      return view('user.operator.custregoperator');
    }


     public function employregister(Request $request)
    {
      if ($request->isMethod('post')) {
        $data=$request->all();

        //echo "<pre>"; print_r($data);die;
        $this->validate($request,[
          'password' => 'required|string|min:6'
        ]);
        // $user=new user;
        // $user->fname=$data['fname'];
        // $user->lname=$data['lname'];
        // $user->email=$data['email'];
        // $user->password=Hash::make($data['password']);
        // $user->nic=$data['nid'];
        // $user->mobile=$data['mobile'];
        // $user->compname=$data['company'];
        // $user->address=$data['address'];
        // $user->admin='customer';

      //  $register->mobile=$data['mobile'];
      //  $register->address=$data['address'];
      //  $register->region=$data['region'];
        $user->save();
        return redirect('/user')->with('flash_message_success','Register successfully, please login now..');
      }
      return view('user.manager.employreg');
    }





}
