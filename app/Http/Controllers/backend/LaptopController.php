<?php

namespace App\Http\Controllers\backend;

use App\Models\Laptop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class LaptopController extends Controller
{
    public function laptop(){
        $laptops = Laptop::all();
        return view('admin.pages.laptop.list', compact('laptops'));
    }
    public function laptopform()
    {
        return view('admin.pages.laptop.form');
    }

    public function laptopstore(Request $request)
    {
        // dd($request);
        $validate = Validator::make($request->all(), [
            'image' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'channel' => 'required',
            'processor_type' => 'required',
            'generation' => 'required',
            'display_size' => 'required',
            'ram' => 'required',
            'storage' => 'required',
            'graphics_memory' => 'required',
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
        Laptop::create([
            'image' => $fileName,
            'brand' => $request->brand,
            'model' => $request->model,
            'channel' => $request->channel,
            'processor_type' => $request->processor_type,
            'generation' => $request->generation,
            'display_size' => $request->display_size,
            'ram' => $request->ram,
            'storage' => $request->storage,
            'graphics_memory' => $request->graphics_memory,
            'price' => $request->price,
        ]);

        return redirect()->route('laptop');
    }

}
