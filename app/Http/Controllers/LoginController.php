<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    function LoginPagesShow()
    {
        //return view('sign_up_Process');
        return view('LoginPage');
        //return view('HeaderPage');
        //return view('FooterPage');
    }
    function LoginDetail(Request $request)
    {
         
        
        $data = array (

            'EmailID'=>$request->EmailID,
             'Pass'=>$request->Pass
          

        );

      $getdata =  DB::table('tbl_userlogin')->select('ID')->where($data)->first();
       
      //$request->session()->put('ID',$getdata->ID);
     // $getid = $request->session()->get('ID');
      
     // $val = ("ID"->25);
     //echo $getdata;
      //return   isset($val['ID']) ? $val['ID'] : '5';
      if($getdata=="")
      {
        return "1";
      }
      else
      {
        return  $getdata->ID;
      }
       
      //return {{$getdata->"ID"};
    }
    function VendorDashboard()
    {
         return view('HeaderPage');
         return view('FooterPage');
    }
}
