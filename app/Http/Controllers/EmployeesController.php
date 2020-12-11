<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeesController extends Controller
{
    
	public function getAllEmployees()
	{
		$employees = Employee::all();
		return view('listEmployees', compact('employees'));
	}

	
public function changeStatus(Request $request)
    {
        $employee = Employee::find($request->id);
        $employee->emp_status = $request->emp_status;
        $employee->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }

     public function create(){
        return view('create');
    }

    
    public function store(){
        $employee = new Employee;
        $employee->emp_code = request('emp_code');
        $employee->emp_name = request('emp_name');
        $employee->emp_doj = request('emp_doj');
        $employee->emp_department = request('emp_department');
        $employee->emp_position = request('emp_position');
        $employee->emp_reporting_to = request('emp_reporting_to');
        $employee->save();
        return redirect()->route('create')->with('success','Employee record is created but its inactive/ Waiting for the approval');

       
    }

}
