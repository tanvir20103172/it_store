@extends('admin.master')

@section('store')
    <div class="container">
        <h3 align="center"><u>Monitor List</u></h3>
        <div class="mb-3">
            <a href="{{ route('monitor.form') }}" class="btn btn-success btn-sm">Add Monitor</a>
            <a href="#" class="btn btn-primary btn-sm">Print</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
            <tr>
                <th scope="col">Si No.</th>
                <th scope="col">Image</th>
                <th scope="col">Brand</th>
                <th scope="col">Model</th>
                <th scope="col">Display Size</th>
                <th scope="col">Touch Screen</th>
                <th scope="col">Display Resolution</th>
                <th scope="col">HDMI Port</th>
                <th scope="col">Thunderbolt</th>
                <th scope="col">Rotatable</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($monitors as $key => $monitor)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>
                        <img style="border-radius: 10px;" width="60" height="60"
                            src="{{ url('uploads/', $monitor->image) }}" alt="image">
                    </td>
                    <td>{{ $monitor->brand }}</td>
                    <td>{{ $monitor->model }}</td>
                    <td>{{ $monitor->display_size}}</td>
                    <td>{{ $monitor->touch_screen}}</td>
                    <td>{{ $monitor->display_resolution}}</td>
                    <td>{{ $monitor->hdmi_port }}</td>
                    <td>{{ $monitor->thunderbolt }}</td>
                    <td>{{ $monitor->rotatable }}</td>
                    <td>{{ $monitor->price }} BDT</td>
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
@endsection
