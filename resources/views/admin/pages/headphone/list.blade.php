@extends('admin.master')
@section('store')
    <h3 align="center"><u>Headphone List</u></h3>
    <div class="mb-3">
        <a href="{{ route('headphone.form') }}" class="btn btn-success btn-sm">Add Headphone</a>
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
                <th scope="col">Connection Type</th>
                <th scope="col">Microphone</th>
                <th scope="col">Plug Type</th>
                <th scope="col">Cable Length</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($headphones as $key => $headphone)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>
                        <img style="border-radius: 10px;" width="60" height="60"
                            src="{{ url('uploads/', $headphone->image) }}" alt="image">
                    </td>
                    <td>{{ $headphone->brand }}</td>
                    <td>{{ $headphone->model }}</td>
                    <td>{{ $headphone->type }}</td>
                    <td>{{ $headphone->connection_type }}</td>
                    <td>{{ $headphone->microphone }}</td>
                    <td>{{ $headphone->plug_type }}</td>
                    <td>{{ $headphone->cable_length }}</td>
                    <td>{{ $headphone->price }} BDT</td>
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
