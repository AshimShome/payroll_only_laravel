<?php

namespace App\Http\Controllers\department;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
class DepartmentController extends Controller
{
    public function departmentIndex(){
        $department=Department::all();
        return view('admin.department.department');

    }
}
