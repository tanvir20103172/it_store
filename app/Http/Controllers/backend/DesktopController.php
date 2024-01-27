<?php

namespace App\Http\Controllers\backend;

use App\Models\Motherboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class DesktopController extends Controller
{
    public function motherboard(){
        $motherboards= Motherboard::all();
        return view('admin.pages.desktop.motherboard.list',compact('motherboards'));
    }
    public function motherboardform(){
        return view('admin.pages.desktop.motherboard.form');
    }
   
    public function motherboardstore(Request $request){
        dd($request);
       $validate=Validator::make($request->all(),[
           'image'=>'required',
           'model'=>'required',
           'chipset'=>'required',
           'socket_supported'=>'required',
           'generation'=>'required',
           'memory_slot'=>'required',
           'memory_max'=>'required',
           'price'=>'required'
       ]); 
       if ($validate->fails()) {

           return redirect()->back()->with('myError', $validate->getMessageBag());
       }

       $fileName=null;
        
       if($request->hasFile('image'))
       {
           $file=$request->file('image');
           $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();

           $file->storeAs('/',$fileName);

       }
       
       if($validate->fails())
     {
       
       return redirect()->back()->withErrors($validate);
     }
       Motherboard::create([
           'image'=>$fileName,
           'model'=>$request->model,
           'chipset'=>$request->chipset,
           'socket_supported'=>$request->socket_supported,
           'generation' =>$request->generation,
           'memory_slot' =>$request->memory_slot,
           'memory_max' =>$request->memory_max,
           'price' =>$request->price,
       ]);
       
       return redirect()->route ('motherboard');
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
  