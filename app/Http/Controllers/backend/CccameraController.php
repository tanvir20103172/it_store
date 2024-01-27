<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CccameraController extends Controller
{
    public function cc_camera(){
        return view('admin.pages.cc_camera.list');
    }
}
