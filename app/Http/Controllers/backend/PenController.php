<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenController extends Controller
{
    public function digital_pen(){
        return view('admin.pages.digital_pen.list');
    }
}
