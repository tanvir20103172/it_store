@extends('admin.master')
@section('store')
    <h3 align="center"><u>Laptop List</u></h3>
    <div class="mb-3">
        <a href="{{ route('laptop.form') }}" class="btn btn-success btn-sm">Add Laptop</a>
        <a href="#" class="btn btn-primary btn-sm">Print</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Si No.</th>
                <th scope="col">Image</th>
                <th scope="col">Brand</th>
                <th scope="col">Model</th>
                <th scope="col">Processor Type</th>
                <th scope="col">Generation</th>
                <th scope="col">Display Size(Inch)</th>
                <th scope="col">RAM</th>
                <th scope="col">Storage</th>
                <th scope="col">Graphics Memory</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laptops as $key => $laptop)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>
                        <img style="border-radius: 10px;" width="60" height="60"
                            src="{{ url('uploads/', $laptop->image) }}" alt="image">
                    </td>
                    <td>{{ $laptop->brand }}</td>
                    <td>{{ $laptop->model }}</td>
                    <td>{{ $laptop->processor_type}}</td>
                    <td>{{ $laptop->generation}}</td>
                    <td>{{ $laptop->display_size}}</td>
                    <td>{{ $laptop->ram }}</td>
                    <td>{{ $laptop->storage }}</td>
                    <td>{{ $laptop->graphics_memory }}</td>
                    <td>{{ $laptop->price }} BDT</td>
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
