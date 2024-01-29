<?php

namespace App\Http\Controllers\backend;

use App\Models\HDD;
use App\Models\Ram;
use App\Models\SSD;
use App\Models\Ups;
use App\Models\Mouse;
use App\Models\Casing;
use App\Models\Graphic;
use App\Models\Optical;
use App\Models\Keyboard;
use App\Models\Processor;
use App\Models\Casing_fan;
use App\Models\CPU_cooler;
use App\Models\Motherboard;
use App\Models\Power_supply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class DesktopController extends Controller
{
    public function motherboard()
    {
        $motherboards = Motherboard::all();
        return view('admin.pages.desktop.motherboard.list', compact('motherboards'));
    }
    public function motherboardform()
    {
        return view('admin.pages.desktop.motherboard.form');
    }

    public function motherboardstore(Request $request)
    {
        // dd($request);
        $validate = Validator::make($request->all(), [
            'image' => 'required',
            'model' => 'required',
            'chipset' => 'required',
            'socket_supported' => 'required',
            'generation' => 'required',
            'memory_slot' => 'required',
            'memory_max' => 'required',
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
        Motherboard::create([
            'image' => $fileName,
            'model' => $request->model,
            'chipset' => $request->chipset,
            'socket_supported' => $request->socket_supported,
            'generation' => $request->generation,
            'memory_slot' => $request->memory_slot,
            'memory_max' => $request->memory_max,
            'price' => $request->price,
        ]);

        return redirect()->route('motherboard');
    }


    public function processor()
    {
        $processors = Processor::all();
        return view('admin.pages.desktop.processor.list', compact('processors'));
    }
    public function processorform()
    {
        return view('admin.pages.desktop.processor.form');
    }

    public function processortore(Request $request)
    {
        // dd($request);
        $validate = Validator::make($request->all(), [
            'image' => 'required',
            'model' => 'required',
            'processor_type' => 'required',
            'cpu_cooler' => 'required',
            'generation' => 'required',
            'tube_freuency_max' => 'required',
            'core' => 'required',
            'cpu_cache' => 'required',
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
        Processor::create([
            'image' => $fileName,
            'model' => $request->model,
            'processor_type' => $request->processor_type,
            'cpu_cooler' => $request->cpu_cooler,
            'generation' => $request->generation,
            'tube_freuency_max' => $request->tube_freuency_max,
            'core' => $request->core,
            'cpu_cache' => $request->cpu_cache,
            'price' => $request->price,
        ]);

        return redirect()->route('processor');
    }


    public function ram()
    {
        $rams = Ram::all();
        return view('admin.pages.desktop.ram.list', compact('rams'));
    }
    public function ramform()
    {
        return view('admin.pages.desktop.ram.form');
    }

    public function ramstore(Request $request)
    {
        //  dd($request);
        $validate = Validator::make($request->all(), [
            'image' => 'required',
            'model' => 'required',
            'capacity' => 'required',
            'ram_type' => 'required',
            'bus_speed' => 'required',
            'number_of_pin' => 'required',
            'led_lighting' => 'required',
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
        Ram::create([
            'image' => $fileName,
            'model' => $request->model,
            'capacity' => $request->capacity,
            'ram_type' => $request->ram_type,
            'bus_speed' => $request->bus_speed,
            'number_of_pin' => $request->number_of_pin,
            'led_lighting' => $request->led_lighting,
            'price' => $request->price,
        ]);

        return redirect()->route('ram');
    }


    public function optical()
    {
        $opticals = Optical::all();
        return view('admin.pages.desktop.optical.list', compact('opticals'));
    }
    public function opticalform()
    {
        return view('admin.pages.desktop.optical.form');
    }

    public function opticalstore(Request $request)
    {
        // dd($request);
        $validate = Validator::make($request->all(), [
            'image' => 'required',
            'model' => 'required',
            'read_speed_CD' => 'required',
            'read_speed_DVD' => 'required',
            'write_speed_CD' => 'required',
            'write_speed_DVD' => 'required',
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
        Optical::create([
            'image' => $fileName,
            'model' => $request->model,
            'read_speed_CD' => $request->read_speed_CD,
            'read_speed_DVD' => $request->read_speed_DVD,
            'write_speed_CD' => $request->write_speed_CD,
            'write_speed_DVD' => $request->write_speed_DVD,
            'price' => $request->price,
        ]);

        return redirect()->route('optical');
    }

    public function graphics()
    {
        $graphics = Graphic::all();
        return view('admin.pages.desktop.graphics.list', compact('graphics'));
    }
    public function graphicsform()
    {
        return view('admin.pages.desktop.graphics.form');
    }

    public function graphicsstore(Request $request)
    {
        // dd($request);
        $validate = Validator::make($request->all(), [
            'image' => 'required',
            'model' => 'required',
            'type' => 'required',
            'chipset' => 'required',
            'capcity' => 'required',
            'vga_port' => 'required',
            'hdmi_port' => 'required',
            'multi_display_capability' => 'required',
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
        Graphic::create([
            'image' => $fileName,
            'model' => $request->model,
            'type' => $request->type,
            'chipset' => $request->chipset,
            'capcity' => $request->capcity,
            'vga_port' => $request->vga_port,
            'hdmi_port' => $request->hdmi_port,
            'multi_display_capability' => $request->hdmi_port,
            'price' => $request->price,
        ]);

        return redirect()->route('graphics');
    }

    public function power_supply()
    {
        $power_supplys = Power_supply::all();
        return view('admin.pages.desktop.power_supply.list', compact('power_supplys'));
    }
    public function power_supplyform()
    {
        return view('admin.pages.desktop.power_supply.form');
    }

    public function power_supplystore(Request $request)
    {
        // dd($request);
        $validate = Validator::make($request->all(), [
            'image' => 'required',
            'model' => 'required',
            'psu_category' => 'required',
            'type' => 'required',
            'maximum_power' => 'required',
            'efficency_rating' => 'required',
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
        Power_supply::create([
            'image' => $fileName,
            'model' => $request->model,
            'psu_category' => $request->psu_category,
            'type' => $request->type,
            'maximum_power' => $request->maximum_power,
            'efficency_rating' => $request->efficency_rating,
            'price' => $request->price,
        ]);

        return redirect()->route('power_supply');
    }


    public function casing()
    {
        $casings = Casing::all();
        return view('admin.pages.desktop.casing.list', compact('casings'));
    }
    public function casingform()
    {
        return view('admin.pages.desktop.casing.form');
    }

    public function casingstore(Request $request)
    {
        // dd($request);
        $validate = Validator::make($request->all(), [
            'image' => 'required',
            'model' => 'required',
            'case_type' => 'required',
            'optical_drive_bay' => 'required',
            'cooling_fan' => 'required',
            'lighting_fan' => 'required',
            'power_supply' => 'required',
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
        Casing::create([
            'image' => $fileName,
            'model' => $request->model,
            'case_type' => $request->case_type,
            'optical_drive_bay' => $request->optical_drive_bay,
            'cooling_fan' => $request->cooling_fan,
            'lighting_fan' => $request->lighting_fan,
            'power_supply' => $request->power_supply,
            'price' => $request->price,
        ]);

        return redirect()->route('casing');
    }

    public function casing_fan()
    {
        $casing_fans = Casing_fan::all();
        return view('admin.pages.desktop.casing_fan.list', compact('casing_fans'));
    }
    public function casing_fanform()
    {
        return view('admin.pages.desktop.casing_fan.form');
    }

    public function casing_fanstore(Request $request)
    {
        // dd($request);
        $validate = Validator::make($request->all(), [
            'image' => 'required',
            'model' => 'required',
            'type' => 'required',
            'fan_size' => 'required',
            'fan_spped' => 'required',
            'blade_qty' => 'required',
            'lighting_effect' => 'required',
            'power_source' => 'required',
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
        Casing_fan::create([
            'image' => $fileName,
            'model' => $request->model,
            'type' => $request->type,
            'fan_size' => $request->fan_size,
            'fan_spped' => $request->fan_spped,
            'blade_qty' => $request->blade_qty,
            'lighting_effect' => $request->lighting_effect,
            'power_source' => $request->power_source,
            'price' => $request->price,
        ]);

        return redirect()->route('casing_fan');
    }


    public function ssd()
    {
        $ssds = SSD::all();
        return view('admin.pages.desktop.ssd.list', compact('ssds'));
    }
    public function ssdform()
    {
        return view('admin.pages.desktop.ssd.form');
    }

    public function ssdstore(Request $request)
    {
        // dd($request);
        $validate = Validator::make($request->all(), [
            'image' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'type' => 'required',
            'storage' => 'required',
            'form_factor' => 'required',
            'intreface' => 'required',
            'read_speed' => 'required',
            'write_speed' => 'required',
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
        SSD::create([
            'image' => $fileName,
            'brand' => $request->brand,
            'model' => $request->model,
            'type' => $request->type,
            'storage' => $request->storage,
            'form_factor' => $request->form_factor,
            'intreface' => $request->intreface,
            'read_speed' => $request->read_speed,
            'write_speed' => $request->write_speed,
            'price' => $request->price,
        ]);

        return redirect()->route('ssd');
    }


    public function hdd()
    {
        $hdds = HDD::all();
        return view('admin.pages.desktop.hdd.list', compact('hdds'));
    }
    public function hddform()
    {
        return view('admin.pages.desktop.hdd.form');
    }

    public function hddstore(Request $request)
    {
        // dd($request);
        $validate = Validator::make($request->all(), [
            'image' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'type' => 'required',
            'storage' => 'required',
            'form_factor' => 'required',
            'intreface' => 'required',
            'rpm' => 'required',
            'data_transfer_rate' => 'required',
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
        HDD::create([
            'image' => $fileName,
            'brand' => $request->brand,
            'model' => $request->model,
            'type' => $request->type,
            'storage' => $request->storage,
            'form_factor' => $request->form_factor,
            'intreface' => $request->intreface,
            'rpm' => $request->rpm,
            'data_transfer_rate' => $request->data_transfer_rate,
            'price' => $request->price,
        ]);

        return redirect()->route('hhd');
    }

    public function cpu_cooler()
    {
        $cpu_coolers = CPU_cooler::all();
        return view('admin.pages.desktop.cpu_cooler.list', compact('cpu_coolers'));
    }
    public function cpu_coolerform()
    {
        return view('admin.pages.desktop.cpu_cooler.form');
    }

    public function cpu_coolerstore(Request $request)
    {
        // dd($request);
        $validate = Validator::make($request->all(), [
            'image' => 'required',
            'model' => 'required',
            'cooler_type' => 'required',
            'socket_supported' => 'required',
            'fan_height' => 'required',
            'led_color' => 'required',
            'supported_socket' => 'required',
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
        CPU_cooler::create([
            'image' => $fileName,
            'model' => $request->model,
            'cooler_type' => $request->cooler_type,
            'socket_supported' => $request->socket_supported,
            'fan_height' => $request->fan_height,
            'led_color' => $request->led_color,
            'supported_socket' => $request->supported_socket,
            'price' => $request->price,
        ]);

        return redirect()->route('cpu_cooler');
    }


    public function keyboard()
    {   $keyboards =Keyboard::all();
        return view('admin.pages.desktop.keyboard.list', compact('keyboards'));
    }
    public function keyboardform()
    {
        return view('admin.pages.desktop.keyboard.form');
    }

    public function keyboardstore(Request $request)
    {
        // dd($request);
        $validate = Validator::make($request->all(), [
            'image' => 'required',
            'model' => 'required',
            'type' => 'required',
            'interface' => 'required',
            'lighting' => 'required',
            'mechanical' => 'required',
            'switch_type' => 'required',
            'combo_package' => 'required',
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
        Keyboard::create([
            'image' => $fileName,
            'model' => $request->model,
            'type' => $request->type,
            'interface' => $request->interface,
            'lighting' => $request->lighting,
            'mechanical' => $request->mechanical,
            'switch_type' => $request->switch_type,
            'combo_package' => $request->combo_package,
            'price' => $request->price,
        ]);

        return redirect()->route('keyboard');
    }



    public function mouse()
    {    $mouses=Mouse::all();
        return view('admin.pages.desktop.mouse.list', compact('mouses'));
    }
    public function mouseform()
    {
        return view('admin.pages.desktop.mouse.form');
    }

    public function mousestore(Request $request)
    {
        // dd($request);
        $validate = Validator::make($request->all(), [
            'image' => 'required',
            'model' => 'required',
            'type' => 'required',
            'connection_type' => 'required',
            'style_and_size' => 'required',
            'click_sound' => 'required',
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
        Mouse::create([
            'image' => $fileName,
            'model' => $request->model,
            'type' => $request->type,
            'connection_type' => $request->connection_type,
            'style_and_size' => $request->style_and_size,
            'click_sound' => $request->click_sound,
            'price' => $request->price,
        ]);

        return redirect()->route('mouse');
    }


    public function ups()
    {   $upss=Ups::all();
        return view('admin.pages.desktop.ups.list', compact('upss'));
    }
    public function upsform()
    {
        return view('admin.pages.desktop.ups.form');
    }

    public function upsstore(Request $request)
    {
        // dd($request);
        $validate = Validator::make($request->all(), [
            'image' => 'required',
            'model' => 'required',
            'type' => 'required',
            'input_voltage' => 'required',
            'output_voltage' => 'required',
            'load_capacity' => 'required',
            'backup_time' => 'required',
            'body_metarials' => 'required',
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
        Ups::create([
            'image' => $fileName,
            'model' => $request->model,
            'type' => $request->type,
            'input_voltage' => $request->input_voltage,
            'output_voltage' => $request->style_and_size,
            'load_capacity' => $request->load_capacity,
            'backup_time' => $request->backup_time,
            'body_metarials' => $request->body_metarials,
            'price' => $request->price,
        ]);

        return redirect()->route('ups');
    }
}
