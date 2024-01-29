<?php

namespace App\Http\Controllers\backend;
use App\Models\Cc_camera;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CccameraController extends Controller
{
    public function cc_camera(){
        $cc_cameras=Cc_camera::all();
        return view('admin.pages.cc_camera.list', compact('cc_cameras'));
    }
    public function cc_cameraform()
    {
        return view('admin.pages.cc_camera.form');
    }

    public function cc_camerastore(Request $request)
    {
        // dd($request);
        $validate = Validator::make($request->all(), [
            'image' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'usage' => 'required',
            'form_factor' => 'required',
            'mega_pixel' => 'required',
            'night_version' => 'required',
            'ir_range' => 'required',
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
        Cc_camera::create([
            'image' => $fileName,
            'brand' => $request->brand,
            'model' => $request->model,
            'usage' => $request->usage,
            'form_factor' => $request->form_factor,
            'mega_pixel' => $request->mega_pixel,
            'night_version' => $request->night_version,
            'ir_range' => $request->ir_range,
            'price' => $request->price,
        ]);

        return redirect()->route('cc_camera');
    }

}
