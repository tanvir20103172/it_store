<?php

namespace App\Http\Controllers\backend;
use App\Model\Smart_watch;
use App\Models\SmartWatch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class WatchController extends Controller
{
    public function smart_watch(){
        $smart_watchs= SmartWatch::all();
        return view('admin.pages.smart_watch.list', compact('smart_watchs'));
    }
    public function smart_watchform()
    {
        return view('admin.pages.smart_watch.form');
    }

    public function smart_watchstore(Request $request)
    {
        // dd($request);
        $validate = Validator::make($request->all(), [
            'image' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'watch_size' => 'required',
            'cellular_network' => 'required',
            'display' => 'required',
            'water_proof' => 'required',
            'heart_rate' => 'required',
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
        SmartWatch::create([
            'image' => $fileName,
            'brand' => $request->brand,
            'model' => $request->model,
            'watch_size' => $request->watch_size,
            'cellular_network' => $request->cellular_network,
            'display' => $request->display,
            'water_proof' => $request->water_proof,
            'heart_rate' => $request->heart_rate,
            'price' => $request->price,
        ]);

        return redirect()->route('smart_watch');
    }

}
