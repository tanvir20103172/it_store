<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function game_straming(){
        return view('admin.pages.game_straming.list');
    }
}
