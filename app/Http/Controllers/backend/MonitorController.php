<?php

namespace App\Http\Controllers\backend;

use App\Models\Monitor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class MonitorController extends Controller
{
    public function monitor(){
        $monitors= Monitor::all();
        return view('admin.pages.monitor.list', compact('monitors'));
    }
    public function monitorform()
    {
        return view('admin.pages.monitor.form');
    }

    public function monitorstore(Request $request)
    {
        // dd($request);
        $validate = Validator::make($request->all(), [
            'image' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'display_size' => 'required',
            'touch_screen' => 'required',
            'display_resolution' => 'required',
            'hdmi_port' => 'required',
            'thunderbolt' => 'required',
            'rotatable' => 'required',
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
        Monitor::create([
            'image' => $fileName,
            'brand' => $request->brand,
            'model' => $request->model,
            'display_size' => $request->display_size,
            'touch_screen' => $request->touch_screen,
            'display_resolution' => $request->display_resolution,
            'hdmi_port' => $request->hdmi_port,
            'thunderbolt' => $request->thunderbolt,
            'rotatable' => $request->rotatable,
            'price' => $request->price,
        ]);

        return redirect()->route('monitor');
    }

}
