@extends('admin.master')
@section('store')
<div class="container mt-4">
    <h3 align="center"><u>Power Supply List</u></h3>
    <div class="mb-3">
        <a href="{{ route('power_supply.form') }}" class="btn btn-success">Add Power Supply</a>
        <a href="#" class="btn btn-primary">Print</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Si No.</th>
                <th scope="col">Image</th>
                <th scope="col">Model</th>
                <th scope="col">PSU Category</th>
                <th scope="col">Type</th>
                <th scope="col">Maximum Power</th>
                <th scope="col">Efficiency Rating</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($power_supplys as $key => $power_supply)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td><img style="border-radius: 10px;" width="60" height="60"
                            src="{{ url('uploads/', $power_supply->image) }}" alt="image"></td>
                    <td>{{ $power_supply->model }}</td>
                    <td>{{ $power_supply->psu_category }}</td>
                    <td>{{ $power_supply->type }}</td>
                    <td>{{ $power_supply->maximum_power }}</td>
                    <td>{{ $power_supply->efficiency_rating }}</td>
                    <td>{{ $power_supply->price }} BDT</td>
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
