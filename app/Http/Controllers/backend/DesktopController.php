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

    public function optical(){
        return view('admin.pages.desktop.optical.list');
    }

    public function graphics(){
        return view('admin.pages.desktop.graphics.list');
    }

    public function power_supply(){
        return view('admin.pages.desktop.power_supply.list');
    }

    public function casing(){
        return view('admin.pages.desktop.casing.list');
    }

    public function casing_fan(){
        return view('admin.pages.desktop.casing_fan.list');
    }

    public function ssd(){
        return view('admin.pages.desktop.ssd.list');
    }

    public function hdd(){
        return view('admin.pages.desktop.hdd.list');
    }

    public function cpu_cooler(){
        return view('admin.pages.desktop.cpu_cooler.list');
    }

    public function keyboard(){
        return view('admin.pages.desktop.keyboard.list');
    }

    public function mouse(){
        return view('admin.pages.desktop.mouse.list');
    }

    public function ups(){
        return view('admin.pages.desktop.ups.list');
    }
}
  