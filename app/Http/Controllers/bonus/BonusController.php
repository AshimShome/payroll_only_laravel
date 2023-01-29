<?php

namespace App\Http\Controllers\bonus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bonus;

class BonusController extends Controller
{
    public function bonusIndex(){
        $bonus=Bonus::all();
        return view('admin.bonus.bouns');

    }
}
