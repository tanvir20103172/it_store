@extends('admin.master')
@section('store')
<div class="container mt-4">
    <h3 align="center"><u>Cc Camera List</u></h3>
    <div class="mb-3">
        <a href="{{ route('cc_camera.form') }}" class="btn btn-success">Add Cc Camera</a>
        <a href="#" class="btn btn-primary">Print</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Si No.</th>
                <th scope="col">Image</th>
                <th scope="col">Brand</th>
                <th scope="col">Model</th>
                <th scope="col">Usage</th>
                <th scope="col">Form Factor</th>
                <th scope="col">Mega Pixel</th>
                <th scope="col">Night Version</th>
                <th scope="col">IR Range</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cc_cameras as $key => $cc_camera)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td><img style="border-radius: 10px;" width="60" height="60"
                            src="{{ url('uploads/', $cc_camera->image) }}" alt="image"></td>
                    <td>{{ $cc_camera->brand }}</td>
                    <td>{{ $cc_camera->model }}</td>
                    <td>{{ $cc_camera->usage }}</td>
                    <td>{{ $cc_camera->form_factor}}</td>
                    <td>{{ $cc_camera->mega_pixel}}</td>
                    <td>{{ $cc_camera->night_version}}</td>
                    <td>{{ $cc_camera->ir_range}}</td>
                    <td>{{ $cc_camera->price }} BDT</td>
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
