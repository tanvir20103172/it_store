@extends('admin.master')
@section('store')
<div class="container mt-4">
    <h3 align="center"><u>UPS List</u></h3>
    <div class="mb-3">
        <a href="{{ route('ups.form') }}" class="btn btn-success">Add UPS</a>
        <a href="#" class="btn btn-primary">Print</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Si No.</th>
                <th scope="col">Image</th>
                <th scope="col">Model</th>
                <th scope="col">Type</th>
                <th scope="col">Input Voltage (V)</th>
                <th scope="col">Output Voltage (V)</th>
                <th scope="col">Load Capacity</th>
                <th scope="col">Backup Time</th>
                <th scope="col">Body Materials</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($upss as $key => $ups)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td><img style="border-radius: 10px;" width="60" height="60"
                            src="{{ url('uploads/', $ups->image) }}" alt="image"></td>
                    <td>{{ $ups->model }}</td>
                    <td>{{ $ups->type }}</td>
                    <td>{{ $ups->input_voltage}}</td>
                    <td>{{ $ups->output_voltage}}</td>
                    <td>{{ $ups->load_capacity}}</td>
                    <td>{{ $ups->backup_time}}</td>
                    <td>{{ $ups->body_metarials }}</td>
                    <td>{{ $ups->price }} BDT</td>
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
