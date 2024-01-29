<?php

namespace App\Http\Controllers\backend;
use App\Models\Digital_pen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PenController extends Controller
{
    public function digital_pen(){
        $digital_pens=Digital_pen::all();
        return view('admin.pages.digital_pen.list', compact('digital_pens'));
    }
    public function digital_penform()
    {
        return view('admin.pages.digital_pen.form');
    }

    public function digital_penstore(Request $request)
    {
        // dd($request);
        $validate = Validator::make($request->all(), [
            'image' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'type' => 'required',
            'connectivity_mode' => 'required',
            'pen_resolution' => 'required',
            'color' => 'required',
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
        Digital_pen::create([
            'image' => $fileName,
            'brand' => $request->brand,
            'model' => $request->model,
            'type' => $request->type,
            'connectivity_mode' => $request->connectivity_mode,
            'pen_resolution' => $request->pen_resolution,
            'color' => $request->color,
            'price' => $request->price,
        ]);

        return redirect()->route('digital_pen');
    }

}
