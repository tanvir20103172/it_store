@extends('admin.master')
@section('store')
<div class="container mt-4">
    <h3 align="center"><u>Mouse List</u></h3>
    <div class="mb-3">
        <a href="{{ route('mouse.form') }}" class="btn btn-success">Add Mouse</a>
        <a href="#" class="btn btn-primary">Print</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Si No.</th>
                <th scope="col">Image</th>
                <th scope="col">Model</th>
                <th scope="col">Type</th>
                <th scope="col">Connection Type</th>
                <th scope="col">Interface</th>
                <th scope="col">Style & Size</th>
                <th scope="col">Click Sound</th>
                <th scope="col">Lighting</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mouses as $key => $mouse)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td><img style="border-radius: 10px;" width="60" height="60"
                            src="{{ url('uploads/', $mouse->image) }}" alt="image"></td>
                    <td>{{ $mouse->model }}</td>
                    <td>{{ $mouse->type }}</td>
                    <td>{{ $mouse->connection_type}}</td>
                    <td>{{ $mouse->interface}}</td>
                    <td>{{ $mouse->style_and_size}}</td>
                    <td>{{ $mouse->click_sound}}</td>
                    <td>{{ $mouse->lighting }}</td>
                    <td>{{ $mouse->price }} BDT</td>
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
