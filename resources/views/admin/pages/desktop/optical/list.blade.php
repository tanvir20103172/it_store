@extends('admin.master')
@section('store')
<div class="container mt-4">
    <h3 align="center"><u>Optical Device List</u></h3>
    <div class="mb-3">
        <a href="{{ route('optical.form') }}" class="btn btn-success">Add Optical Device</a>
        <a href="#" class="btn btn-primary">Print</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Si No.</th>
                <th scope="col">Image</th>
                <th scope="col">Model</th>
                <th scope="col">Type</th>
                <th scope="col">Read Speed(CD)</th>
                <th scope="col">Read Speed(DVD)</th>
                <th scope="col">Write Speed(CD)</th>
                <th scope="col">Write Speed(DVD)</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($opticals as $key => $optical)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td><img style="border-radius: 10px;" width="60" height="60"
                            src="{{ url('uploads/', $optical->image) }}" alt="image"></td>
                    <td>{{ $optical->model }}</td>
                    <td>{{ $optical->type}}</td>
                    <td>{{ $optical->read_speed_CD}}</td>
                    <td>{{ $optical->read_speed_DVD }}</td>
                    <td>{{ $optical->write_speed_CD }}</td>
                    <td>{{ $optical->write_speed_DVD }}</td>
                    <td>{{ $optical->price }} BDT</td>
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
