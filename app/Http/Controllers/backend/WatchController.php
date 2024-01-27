<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WatchController extends Controller
{
    public function smart_watch(){
        return view('admin.pages.smart_watch.list');
    }
}
