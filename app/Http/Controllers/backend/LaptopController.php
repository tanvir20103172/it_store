<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    public function laptop(){
        return view('admin.pages.laptop.list');
    }
}
