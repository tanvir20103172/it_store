@extends('admin.master')
@section('store')
    <h3 align="center"><u>Calculator List</u></h3>
    <div class="mb-3">
        <a href="{{ route('calculator.form') }}" class="btn btn-success btn-sm">Add Calculator</a>
        <a href="#" class="btn btn-primary btn-sm">Print</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Si No.</th>
                <th scope="col">Image</th>
                <th scope="col">Brand</th>
                <th scope="col">Model</th>
                <th scope="col">Type</th>
                <th scope="col">Print Speed</th>
                <th scope="col">Memory</th>
                <th scope="col">Key</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($calculators as $key => $calculator)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>
                        <img style="border-radius: 10px;" width="60" height="60"
                            src="{{ url('uploads/', $calculator->image) }}" alt="image">
                    </td>
                    <td>{{ $calculator->brand }}</td>
                    <td>{{ $calculator->model }}</td>
                    <td>{{ $calculator->type }}</td>
                    <td>{{ $calculator->print_speed }}</td>
                    <td>{{ $calculator->memory }}</td>
                    <td>{{ $calculator->key }}</td>
                    <td>{{ $calculator->price }} BDT</td>
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
