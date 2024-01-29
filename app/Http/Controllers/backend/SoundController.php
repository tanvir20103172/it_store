<?php

namespace App\Http\Controllers\backend;

use App\Models\Sound;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SoundController extends Controller
{
    public function sound_system(){
        $sound_systems=Sound::all();
        return view('admin.pages.sound_system.list', compact('sound_systems'));
    }
    public function sound_systemform()
    {
        return view('admin.pages.sound_system.form');
    }

    public function sound_systemstore(Request $request)
    {
        // dd($request);
        $validate = Validator::make($request->all(), [
            'image' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'channel' => 'required',
            'connectivity_mode' => 'required',
            'memory_card_slot' => 'required',
            'usb_port' => 'required',
            'remote_control' => 'required',
            'fm_radio' => 'required',
            'voice_enable' => 'required',
            'touch_controls' => 'required',
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
        Sound::create([
            'image' => $fileName,
            'brand' => $request->brand,
            'model' => $request->model,
            'channel' => $request->channel,
            'connectivity_mode' => $request->connectivity_mode,
            'memory_card_slot' => $request->memory_card_slot,
            'usb_port' => $request->usb_port,
            'remote_control' => $request->remote_control,
            'fm_radio' => $request->fm_radio,
            'voice_enable' => $request->voice_enable,
            'touch_controls' => $request->touch_controls,
            'price' => $request->price,
        ]);

        return redirect()->route('sound_system');
    }

}
