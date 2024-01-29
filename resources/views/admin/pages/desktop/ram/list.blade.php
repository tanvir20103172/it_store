@extends('admin.master')
@section('store')
    <div class="container-fluid">
        <h3 class="text-center mb-4"><u>Desktop RAM List</u></h3>
        <div class="mb-3">
            <a href="{{ route('ram.form') }}" class="btn btn-success">Add Desktop RAM</a>
            <a href="#" class="btn btn-primary">Print</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Si No.</th>
                    <th scope="col">Image</th>
                    <th scope="col">Model</th>
                    <th scope="col">Capacity(GB/TB)</th>
                    <th scope="col">RAM Type</th>
                    <th scope="col">Bus Speed(MHz)</th>
                    <th scope="col">Number of Pin</th>
                    <th scope="col">LED Lighting</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rams as $key => $ram)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td><img style="border-radius: 60px;" width="100" height="100"
                                src="{{ url('uploads/', $ram->image) }}" alt="image"></td>
                        <td>{{ $ram->model }}</td>
                        <td>{{ $ram->capacity }}</td>
                        <td>{{ $ram->ram_type }}</td>
                        <td>{{ $ram->bus_speed }}</td>
                        <td>{{ $ram->number_of_pin }}</td>
                        <td>{{ $ram->led_lighting }}</td>
                        <td>{{ $ram->price }}.BTD</td>
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
