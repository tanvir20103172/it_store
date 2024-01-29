@extends('admin.master')
@section('store')
<div class="container mt-4">
    <h3 align="center"><u>Casing Fan List</u></h3>
    <div class="mb-3">
        <a href="{{ route('casing_fan.form') }}" class="btn btn-success">Add Casing Fan</a>
        <a href="#" class="btn btn-primary">Print</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Si No.</th>
                <th scope="col">Image</th>
                <th scope="col">Model</th>
                <th scope="col">Type</th>
                <th scope="col">Fan Size (height)</th>
                <th scope="col">Fan Speed</th>
                <th scope="col">Blade Qty</th>
                <th scope="col">Lighting Effect</th>
                <th scope="col">Power Source</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($casing_fans as $key => $casing_fan)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td><img style="border-radius: 10px;" width="60" height="60"
                            src="{{ url('uploads/', $casing_fan->image) }}" alt="image"></td>
                    <td>{{ $casing_fan->model }}</td>
                    <td>{{ $casing_fan->type }}</td>
                    <td>{{ $casing_fan->fan_size }}</td>
                    <td>{{ $casing_fan->fan_spped }}</td>
                    <td>{{ $casing_fan->blade_qty }}</td>
                    <td>{{ $casing_fan->lighting_effect }}</td>
                    <td>{{ $casing_fan->power_source }}</td>
                    <td>{{ $casing_fan->price }} BDT</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-success btn-sm" href="#">Edit</a>
                            <a class="btn btn-primary btn-sm" href="#">View</a>
                            <a class="btn btn-danger btn-sm" href="#">Delete</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
