<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Employee;

class DashboardController extends Controller
{
    //
    public function index(Request $request){
        
        if($request->session()->has('em_id')){

            return view('dashboard');
        }else{
            return redirect('/');
        }   
    }
}
