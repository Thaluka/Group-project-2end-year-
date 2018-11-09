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
        $complain->category=$data['equipment'];
        // $complain->productname=$data['Pname'];
        $complain->description=$data['complain'];
        // $complain->productimage=$cover->getFilename().'.'.$extension;

        $complain->address=$data['address'];
        $complain->location=$data['region'];
        $complain->status='pending';
        $complain->type='nonargend';
        $complain->save();
          return redirect ('/complain')->with('flash_message_success','Thank you! Your complaint has submitted successfully.Your complaint ID is ________. For more details; contact- 0710565832(Operator)');
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


    public function assign(Request $request)
    {

      $complains = complain::get();
      $complains = json_decode(json_encode($complains));
      //echo "<pre>"; print_r($complains);die;
      return view ('user.supervisor.assign')->with(compact('complains'));
    }




    public function makecomplainoperator(Request $request)
    {
      if ($request->isMethod('post')) {
        $data=$request->all();
        //echo "<pre>"; print_r($data);die;
        $complain=new Complain;
        $complain->company=$data['comp_name'];
        $complain->customeremail=$data['email'];
        $complain->category=$data['equipment'];
        // $complain->productname=$data['Pname'];
        $complain->description=$data['complain'];
        // $complain->productimage=$cover->getFilename().'.'.$extension;

        $complain->address=$data['address'];
        $complain->location=$data['region'];
        $complain->status='pending';
        $complain->type='nonargend';
        $complain->save();
          return redirect ('/addjoboperator')->with('flash_message_success','Thank you! Your complaint has submitted successfully.Your complaint ID is ________. For more details; contact- 0710565832(Operator)');
      }

      return view ('user.operator.addjoboperator')->with('flash_message_success','Your message submit');
    }





}
