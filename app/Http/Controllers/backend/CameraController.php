<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CameraController extends Controller
{
    public function camera(){
        return view('admin.pages.camera.list');
    }
}
