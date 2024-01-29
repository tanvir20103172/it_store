<?php

namespace App\Http\Controllers\backend;
use App\Models\Calculator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CalculatorController extends Controller
{
    public function calculator(){
        $calculators=Calculator::all();
        return view('admin.pages.calculator.list', compact('calculators'));
    }
    public function calculatorform()
    {
        return view('admin.pages.calculator.form');
    }

    public function calculatorstore(Request $request)
    {
        // dd($request);
        $validate = Validator::make($request->all(), [
            'image' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'type' => 'required',
            'print_speed' => 'required',
            'print_speed' => 'required',
            'memory' => 'required',
            'key' => 'required',
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
        Calculator::create([
            'image' => $fileName,
            'brand' => $request->brand,
            'model' => $request->model,
            'type' => $request->type,
            'print_speed' => $request->print_speed,
            'print_speed' => $request->print_speed,
            'memory' => $request->memory,
            'key' => $request->key,
            'price' => $request->price,
        ]);

        return redirect()->route('calculator');
    }

}
