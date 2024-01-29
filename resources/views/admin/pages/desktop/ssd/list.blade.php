@extends('admin.master')
@section('store')
<div class="container mt-4">
    <h3 align="center"><u>SSD List</u></h3>
    <div class="mb-3">
        <a href="{{ route('ssd.form') }}" class="btn btn-success">Add SSD</a>
        <a href="#" class="btn btn-primary">Print</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Si No.</th>
                <th scope="col">Image</th>
                <th scope="col">Brand</th>
                <th scope="col">Model</th>
                <th scope="col">Type</th>
                <th scope="col">Storage</th>
                <th scope="col">Form Factor(Inch)</th>
                <th scope="col">Interface(s)</th>
                <th scope="col">Read Speed(Max)</th>
                <th scope="col">Write Speed(Max)</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ssds as $key => $ssd)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td><img style="border-radius: 10px;" width="60" height="60"
                            src="{{ url('uploads/', $ssd->image) }}" alt="image"></td>
                    <td>{{ $ssd->brand }}</td>
                    <td>{{ $ssd->model }}</td>
                    <td>{{ $ssd->type }}</td>
                    <td>{{ $ssd->storage }}</td>
                    <td>{{ $ssd->form_factor }}</td>
                    <td>{{ $ssd->intreface }}</td>
                    <td>{{ $ssd->read_speed }}</td>
                    <td>{{ $ssd->write_speed }}</td>
                    <td>{{ $ssd->price }} BDT</td>
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
