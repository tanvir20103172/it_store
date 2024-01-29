<?php

namespace App\Http\Controllers\backend;

use App\Models\Router;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class RouterController extends Controller
{
    public function router(){
        $routers= Router::all();
        return view('admin.pages.router.list', compact('routers'));
    }
    public function routerform()
    {
        return view('admin.pages.router.form');
    }

    public function routerstore(Request $request)
    {
        // dd($request);
        $validate = Validator::make($request->all(), [
            'image' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'router_type' => 'required',
            'antenna' => 'required',
            'band' => 'required',
            'wifi_coverage' => 'required',
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
        Router::create([
            'image' => $fileName,
            'brand' => $request->brand,
            'model' => $request->model,
            'router_type' => $request->router_type,
            'antenna' => $request->antenna,
            'band' => $request->band,
            'wifi_coverage' => $request->wifi_coverage,
            'price' => $request->price,
        ]);

        return redirect()->route('router');
    }

}
