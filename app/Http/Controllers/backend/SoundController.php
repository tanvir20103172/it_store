<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SoundController extends Controller
{
    public function sound_system(){
        return view('admin.pages.sound_system.list');
    }
}
