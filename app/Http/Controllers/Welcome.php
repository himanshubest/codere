<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use Illuminate\Support\Facades\DB;

class Welcome extends Controller
{
    function show()
    {
        return view('sign_up_Process');
        //return view('LoginPage');
    }
    public function Signin(Request $request)
    {
        $data = array (

            'FirstName'=>$request->FirstName,
          'LastName'=>$request->LastName,
          'EmailID'=>$request->EmailID,
          'Pass'=>$request->Pass

        );

         $lastid = DB::table('tbl_userlogin')->insertGetId($data);

        $request->session()->put('ID',$lastid);
     
         return $lastid;
        
      
    }
   public function step1(Request $request)
   {
        $getid = $request->session()->get('ID');
        //$FirstName =$request->input('Home_Loan');
        $data = array (

            'Home_Loan'=>$request->input('Home_Loan')
          

        );
        DB::table('tbl_userlogin')->where(['id' => $getid])->update($data);
        
  }
  public function step2(Request $request)
    {
        $getid = $request->session()->get('ID');
        
        $data = array (

            'Working_Real_Estate'=>$request->input('Working_Real_Estate')
          

        );
        DB::table('tbl_userlogin')->where(['id' => $getid])->update($data);
        
    }
    public function step3(Request $request)
    {
        $getid = $request->session()->get('ID');
        $data = array (

            'Agent_First_Name'=>$request->input('Agent_First_Name'),
            'Agent_Last_Name'=>$request->input('Agent_Last_Name'),
            'Agent_Email'=>$request->input('Agent_Email'),
            'Agent_Number'=>$request->input('Agent_Number')
          

        );

       DB::table('tbl_userlogin')->where(['id' => $getid])->update($data);
       
    }
    public function step4(Request $request)
    {
         $getid = $request->session()->get('ID');
       
        $data = array (

            'Mortgage_Options'=>$request->input('Mortgage_Options')
            
          

        );
        DB::table('tbl_userlogin')->where(['id' => $getid])->update($data);
    }
    public function step5(Request $request)
    {
        
       $getid = $request->session()->get('ID');
      
        $data = array (

            'Covid_19_Disclosure'=>$request->input('Covid_19_Disclosure')
            
          

        );
        DB::table('tbl_userlogin')->where(['id' => $getid])->update($data);
    }
}
