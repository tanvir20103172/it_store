<?php

namespace App\Http\Controllers\backend;

use App\Models\Printer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PrinterController extends Controller
{
    public function printer(){
        $printer= Printer::all();
        return view('admin.pages.printer.list', compact('printers'));
    }
    public function printerform()
    {
        return view('admin.pages.printer.form');
    }

    public function printerstore(Request $request)
    {
        // dd($request);
        $validate = Validator::make($request->all(), [
            'image' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'channel' => 'required',
            'functions' => 'required',
            'output_color' => 'required',
            'print_speed_black' => 'required',
            'print_speed_color' => 'required',
            'interface' => 'required',
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
        Printer::create([
            'image' => $fileName,
            'brand' => $request->brand,
            'model' => $request->model,
            'channel' => $request->channel,
            'functions' => $request->functions,
            'output_color' => $request->output_color,
            'print_speed_black' => $request->print_speed_black,
            'print_speed_color' => $request->print_speed_color,
            'interface' => $request->interface,
            'touch_controls' => $request->touch_controls,
            'price' => $request->price,
        ]);

        return redirect()->route('printer');
    }

}
