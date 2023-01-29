<?php

namespace App\Http\Controllers\allowance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Allowance;

class AllowanceController extends Controller
{
    public function allowanceIndex(){
        $allowance=Allowance::all();
        return view('admin.allowance.allowance');  

    }

    public function store(Request $request){
        $validated = $request->validate([
            'allowances_name' => 'required|unique:allowances',
            'allowances_amount' => 'required',
        ]);
        $allowance = new Allowance();
        $allowance->allowances_name = $request->allowances_name;
        $allowance->allowances_amount = $request->allowances_amount;
        $allowance->save();
        return response($allowance);
    }

    public function show(){
        $allowance=Allowance::orderBy('id', 'DESC')->get();
        return response($allowance);

    }
}
