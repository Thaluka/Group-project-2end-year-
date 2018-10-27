<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Complain;   //model calling

class ComplainController extends Controller
{
    public function makecomplain(Request $request)
    {
      if ($request->isMethod('post')) {
        $data=$request->all();
        //echo "<pre>"; print_r($data);die;
        $complain=new Complain;
        $complain->company=$data['comp_name'];
        $complain->customeremail=$data['email'];
        $complain->description=$data['complain'];
        $complain->address=$data['address'];
        $complain->location=$data['region'];
        $complain->status='pending';
        $complain->type='nonargend';
        $complain->save();
          return redirect ('/complain')->with('flash_message_success','Your message submit');
      }

      return view ('user.customer.makecomplain')->with('flash_message_success','Your message submit');
    }

    public function viewcomplain(Request $request)
    {
      $complains = complain::get();
      $complains = json_decode(json_encode($complains));
      //echo "<pre>"; print_r($complains);die;
      return view ('user.supervisor.viewcomplain')->with(compact('complains'));
    }
}
