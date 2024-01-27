<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HeadphoneController extends Controller
{
    public function headphone(){
        return view('admin.pages.headphone.list');
    }
}
