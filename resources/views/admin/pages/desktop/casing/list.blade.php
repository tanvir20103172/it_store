@extends('admin.master')
@section('store')
<div class="container mt-4">
    <h3 align="center"><u>Casing List</u></h3>
    <div class="mb-3">
        <a href="{{ route('casing.form') }}" class="btn btn-success">Add Casing</a>
        <a href="#" class="btn btn-primary">Print</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Si No.</th>
                <th scope="col">Image</th>
                <th scope="col">Model</th>
                <th scope="col">Case Type</th>
                <th scope="col">Optical Drive Bay</th>
                <th scope="col">Cooling Fan(Build-In)</th>
                <th scope="col">Lighting Fan</th>
                <th scope="col">Power Supply</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($casings as $key => $casing)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td><img style="border-radius: 10px;" width="60" height="60"
                            src="{{ url('uploads/', $casing->image) }}" alt="image"></td>
                    <td>{{ $casing->model }}</td>
                    <td>{{ $casing->case_type}}</td>
                    <td>{{ $casing->optical_drive_bay }}</td>
                    <td>{{ $casing->cooling_fan }}</td>
                    <td>{{ $casing->lighting_fan }}</td>
                    <td>{{ $casing->power_supply }}</td>
                    <td>{{ $casing->price }} BDT</td>
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
