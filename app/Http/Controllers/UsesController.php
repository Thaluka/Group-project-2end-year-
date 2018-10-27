<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Auth;

use Session;

class UsesController extends Controller
{
    public function log(Request $request)
    {
      if($request->isMethod('post')){
        $data=$request->input();
        if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>'Manager'])){
            return redirect('/user/userdash');
          /*Session::put('adminSession',$data['email']);*/
        }
        elseif(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>'Operator'])){
          return redirect('/user/useropedash')->with('flash_message_success','Logged in as Operator');
        }
        elseif(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>'customer'])){
          return redirect('/complain');
        }
        // elseif(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>'T.supervisor'])){
        //   return redirect('/viewcomplain');
        // }

        elseif(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>'T.supervisor'])){
          return redirect('/user/usersupvisor');
        }
        elseif(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>'Technician'])){
          return redirect('/user/user_technician')->with('flash_message_success','Logged in as Technican ');
        }
        else {
          return redirect('/user')->with('flash_message_error','Invalid Username or Password');
        }
       }

      return view ('user.user_login');
    }

    public function dashboard()
    {
      return view('user.userdash');
    }
    public function opdashboard()
    {
      return view('user.useroperatordash');
    }

    public function customerdashboard()
    {
      return view('user.usercustomer');
    }
    public function supervisordashboard()
    {
      return view('user.usersupvisor');
    }

     public function techniciandashboard()
    {
      return view('user.user_technician');
    }


   

  /*public function ushome()
  //  {
      return view('user.welcome');
    }
*/
/*public function viewuser(Request $request)
{
  $complains = complain::get();
  $complains = json_decode(json_encode($users));
  //echo "<pre>"; print_r($complains);die;
  return view ('user.supervisor.viewcomplain')->with(compact('users'));
}*/
      public function logout()
    {
      Session::flush();
      return redirect('/user')->with('flash_message_success','Logged out successfully');
    }

}
