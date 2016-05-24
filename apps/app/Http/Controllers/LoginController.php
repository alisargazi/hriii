<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Employee;

class LoginController extends Controller
{
    //
    public function index(Request $request){
        
        //$request->session()->put('em_id', '1');
        if($request->session()->has('em_id')){
            return redirect('/dashboard');
        }else{
            return redirect('/login');
        }
          
    }
    
    public function authen(Request $request){
        
        if($request->session()->has('em_id')){
            return redirect('/');
        }else{
            return view('auth_v');
        }
        
    }
    
    public function checkAuth(Request $request){
            
       
            
         if($result=Employee::CheckUser($request->input('username'),$request->input('password'))){
             
             if($result!='ไม่ผ่าน'){
                 
             $request->session()->put('em_id',$result->em_id);
             $request->session()->put('em_name',$result->em_name);
             $request->session()->put('em_role',$result->em_role);
             $request->session()->put('em_number',$result->em_number);
             $request->session()->put('em_file',$result->em_file);
             $request->session()->put('company',$result->customer_id);
             
             return redirect('/');
           
             }  else {
                 
                 return redirect('/');
                 
             }
 
               
        }
    }
    public function logout(){
        
         $data = session()->flush();
         
         return redirect('/');
    }
    
   
}
