<?php

namespace App\Http\Controllers;

use App\GeneralPayroll;
use App\Employee;
use Illuminate\Http\Request;

class PayrollController extends Controller
{
    //
    public function createsalary($years,$month){
        $names=Employee::select()->get();

        return view('payroll.create', compact('names','years','month'));  
    }
    public function editsalary($years,$month){
        $names=Employee::select()->get();

        return view('payroll.edit', compact('names','years','month'));   
    }
    public function managesalary($years,$month){
        $names=Employee::select()->get();

        return view('payroll.index', compact('names','years','month'));   
    }

    public function yearm(){ 
       
        $years=date('Y');
        

        return view('payroll.yearm', compact('years'));  
    }

    public function monthm($years){ 
       
        return view('payroll.monthm', compact('years'));  
    }
    public function yearc(){ 
       
        $years=date('Y');
        

        return view('payroll.yearc', compact('years'));  
    }

    public function monthc($years){ 
       
        return view('payroll.monthc', compact('years'));  
    }
    public function yeare(){ 
       
        $years=date('Y');
        

        return view('payroll.yeare', compact('years'));  
    }

    public function monthe($years){ 
       
        return view('payroll.monthe', compact('years'));  
    }
   
}
