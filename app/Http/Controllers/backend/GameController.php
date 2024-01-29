<?php

namespace App\Http\Controllers\backend;

use App\Models\Game;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class GameController extends Controller
{
    public function game_straming(){
        $game_stramings= Game::all();
        return view('admin.pages.game_straming.list', compact('game_stramings'));
    }
    public function game_stramingform()
    {
        return view('admin.pages.game_straming.form');
    }

    public function game_stramingstore(Request $request)
    {
        // dd($request);
        $validate = Validator::make($request->all(), [
            'image' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'capture' => 'required',
            'resolution' => 'required',
            'interface' => 'required',
            'hdmi_port' => 'required',
            'usb_port' => 'required',
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
        Game::create([
            'image' => $fileName,
            'brand' => $request->brand,
            'model' => $request->model,
            'capture' => $request->capture,
            'resolution' => $request->resolution,
            'interface' => $request->interface,
            'hdmi_port' => $request->hdmi_port,
            'usb_port' => $request->usb_port,
            'price' => $request->price,
        ]);

        return redirect()->route('game_straming');
    }

}
