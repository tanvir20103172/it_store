<?php

namespace App\Http\Controllers\backend;

use App\Models\Headphone;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class HeadphoneController extends Controller
{
    public function headphone(){
        $headphones=Headphone::all();
        return view('admin.pages.headphone.list', compact('headphones'));
    }
    public function headphoneform()
    {
        return view('admin.pages.headphone.form');
    }

    public function headphonestore(Request $request)
    {
        // dd($request);
        $validate = Validator::make($request->all(), [
            'image' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'connection_type' => 'required',
            'microphone' => 'required',
            'plug_type' => 'required',
            'cable_lenght' => 'required',
            'price' => 'required'
        ]);
        if ($validate->fails()) {

            return redirect()->back()->with('myError', $validate->getMessageBag());
        }

        $fileName = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();

            $file->storeAs('/', $fileName);
        }

        if ($validate->fails()) {

            return redirect()->back()->withErrors($validate);
        }
        Headphone::create([
            'image' => $fileName,
            'brand' => $request->model,
            'model' => $request->model,
            'connection_type' => $request->connection_type,
            'microphone' => $request->microphone,
            'plug_type' => $request->plug_type,
            'cable_lenght' => $request->cable_lenght,
            'price' => $request->price,
        ]);

        return redirect()->route('headphone');
    }

}
