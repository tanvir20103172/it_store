<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrinterController extends Controller
{
    public function printer(){
        return view('admin.pages.printer.list');
    }
}
