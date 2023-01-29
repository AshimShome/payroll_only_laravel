<?php

namespace App\Http\Controllers\attendance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function addAttendance(){
        return view('attendance.add_attendance');

    }

    public function viewAttendance(){
        return view('attendance.view_attendance');

    }
}
