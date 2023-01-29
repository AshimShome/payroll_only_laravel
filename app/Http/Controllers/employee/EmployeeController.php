<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller  
{
    public function employeeIndex(){
        $employee=Employee::all();
        return view('admin.employee.employee');

    }
}
