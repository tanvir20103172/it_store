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
}
