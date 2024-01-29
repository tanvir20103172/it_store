@extends('admin.master')
@section('store')
<div class="container mt-4">
    <h3 align="center"><u>Keyboard List</u></h3>
    <div class="mb-3">
        <a href="{{ route('keyboard.form') }}" class="btn btn-success">Add Keyboard</a>
        <a href="#" class="btn btn-primary">Print</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Si No.</th>
                <th scope="col">Image</th>
                <th scope="col">Model</th>
                <th scope="col">Type</th>
                <th scope="col">Interface</th>
                <th scope="col">Lighting</th>
                <th scope="col">Mechanical (Key)</th>
                <th scope="col">Switch Type</th>
                <th scope="col">Combo Package</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($keyboards as $key => $keyboard)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td><img style="border-radius: 10px;" width="60" height="60"
                            src="{{ url('uploads/', $keyboard->image) }}" alt="image"></td>
                    <td>{{ $keyboard->model }}</td>
                    <td>{{ $keyboard->type }}</td>
                    <td>{{ $keyboard->interface}}</td>
                    <td>{{ $keyboard->lighting}}</td>
                    <td>{{ $keyboard->mechanical}}</td>
                    <td>{{ $keyboard->switch_type }}</td>
                    <td>{{ $keyboard->combo_package }}</td>
                    <td>{{ $keyboard->price }} BDT</td>
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
