@extends('admin.master')
@section('store')
<h3 align="center"><u>CPU Cooler List</u></h3>
<div>
    <a href="{{route('cpu_cooler.form')}}" class="btn btn-success">Add CPU Cooler</a>
    <a href="" class="btn btn-primary">Print</a>
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Si No.</th>
            <th scope="col">Image</th>
            <th scope="col">Model</th>
            <th scope="col">Cooler Type</th>
            <th scope="col">Fan(Height)</th>
            <th scope="col">Fan Speed</th>
            <th scope="col">LED Color</th>
            <th scope="col">Supported Socket</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cpu_coolers as $key => $cpu_coolers)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td><img style="border-radius: 10px;" width="60" height="60"
                        src="{{ url('uploads/', $cpu_coolers->image) }}" alt="image"></td>
                <td>{{ $cpu_coolers->model }}</td>
                <td>{{ $cpu_coolers->cooler_type }}</td>
                <td>{{ $cpu_coolers->fan_height}}</td>
                <td>{{ $cpu_coolers->fan_speed }}</td>
                <td>{{ $cpu_coolers->led_color}}</td>
                <td>{{ $cpu_coolers->supported_socket }}</td>
                <td>{{ $cpu_coolers->price }} BDT</td>
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
