<?php

namespace App\Http\Controllers\deductions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Deductions;


class DeductionsController extends Controller
{
    public function deductionsIndex(){
        return view('admin.deductions.deductions');

    }

    public function store(Request $request){
        $validated = $request->validate([
            'deductions_name' => 'required|unique:deductions',
            'deductions_amount' => 'required',
        ]);
        $deductions = new Deductions();
        $deductions->deductions_name = $request->deductions_name;
        $deductions->deductions_amount = $request->deductions_amount;
        $deductions->save();
        return response($deductions);
    }

    public function show(){
        $deductions=Deductions::orderBy('id', 'DESC')->get();
        return response($deductions);

    }
}
