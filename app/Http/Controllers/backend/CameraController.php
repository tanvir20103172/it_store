<?php

namespace App\Http\Controllers\backend;

use App\Models\Camera;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CameraController extends Controller
{
    public function camera(){
        $cameras = Camera::all();
        return view('admin.pages.camera.list',compact('cameras'));
    }
    public function cameraform()
    {
        return view('admin.pages.camera.form');
    }

    public function camerastore(Request $request)
    {
        // dd($request);
        $validate = Validator::make($request->all(), [
            'image' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'channel' => 'required',
            'mega_pixels' => 'required',
            'sensor_type' => 'required',
            'shutter_speed' => 'required',
            'build_flash' => 'required',
            'digital_zoom' => 'required',
            'hdmi_port' => 'required',
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
        Camera::create([
            'image' => $fileName,
            'brand' => $request->brand,
            'model' => $request->model,
            'channel' => $request->channel,
            'mega_pixels' => $request->mega_pixels,
            'sensor_type' => $request->sensor_type,
            'shutter_speed' => $request->shutter_speed,
            'build_flash' => $request->build_flash,
            'digital_zoom' => $request->digital_zoom,
            'hdmi_port' => $request->hdmi_port,
            'price' => $request->price,
        ]);

        return redirect()->route('camera');
    }

}
