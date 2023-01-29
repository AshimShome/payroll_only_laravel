<?php

namespace App\Http\Controllers\position;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Position;

class PositionController extends Controller
{
    public function positionIndex(){
        $position=Position::all();
        return view('admin.position.position');

    }
}
