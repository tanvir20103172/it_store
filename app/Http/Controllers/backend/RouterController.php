<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RouterController extends Controller
{
    public function router(){
        return view('admin.pages.router.list');
    }
}
