<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Employee;

class EmployeeController extends Controller
{
    //
    public function index(){
    
        return view('welcome');
      // return view('data/employee_list');
    }
    
    public function profile(Request $request){
        
        if($request->input('em_id')){
            $var_em_id = $request->input('em_id');
            
        }else{
            $var_em_id = $request->session()->get('em_id');
            
        }
        
        //$var_em_id = $request->session()->get('em_id');
        //return $var_em_id;
        
        $result = Employee::Sel_em_id($var_em_id);
        unset($result['em_password']);
        
        return view('data/employee_detail')->with('result',$result);
    }
    
    public function employee_list(Request $request){
        if ($request->session()->has('em_id')){
            
            $result=Employee::Sel_em_list();
            
            //return $result;
            return view('data/customer_list')->with('result',$result);
        }
        
    }

    public function insert(Request $request){
        if ($request->session()->has('em_id')){
            
            //return response()->json($request->all());
            $result=Employee::Ins_em($request->all());
            
            
        }
    }
    
    public function update(Request $request){
        if($request->session()->get('em_role') == "ผู้ใช้งาน"){
            $dataEmployee=$request->all();
            unset($dataEmployee['em_id'],
                  $dataEmployee['em_status'],
                  $dataEmployee['em_role'],
                  $dataEmployee['em_number'],
                  $dataEmployee['em_audit_number'],
                  $dataEmployee['em_start_work'],
                  $dataEmployee['em_salary_rate'],
                  $dataEmployee['em_salary_day'],
                  $dataEmployee['em_day_work'],
                  $dataEmployee['em_benefit'],
                  $dataEmployee['em_note'],
                  $dataEmployee['customer_id']);
            $result=Employee::Update_em($request->input('em_id'),$dataEmployee);
            
           
            
        }elseif($request->session()->get('em_role') == "ผู้ดูแลระบบ"){
            $dataEmployee=$request->all();
            unset($dataEmployee['em_id']);
             $result=Employee::Update_em($request->input('em_id'),$dataEmployee);
            
            
        }
    }
    
    function sel_photo(Request $request){
        $result = Employee::sel_photo_em($request->input('em_id'));
        
        return $result;
    }


    public function delete(Request $request){
        
        $result=Employee::Delete_em_id($request->input('em_id'));
    }
    
  
    
    
    
}
