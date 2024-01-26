<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DesktopController extends Controller
{
    public function motherboard(){
        return view('admin.pages.desktop.motherboard.list');
    }

    public function processor(){
        return view('admin.pages.desktop.processor.list');
    }

    public function ram(){
        return view('admin.pages.desktop.ram.list');
    }
}
