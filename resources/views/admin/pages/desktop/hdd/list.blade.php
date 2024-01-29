@extends('admin.master')
@section('store')
<div class="container mt-4">
    <h3 align="center"><u>HDD List</u></h3>
    <div class="mb-3">
        <a href="{{ route('hdd.form') }}" class="btn btn-success">Add HDD</a>
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
                <th scope="col">RPM</th>
                <th scope="col">Data Transfer Rate</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hdds as $key => $hdd)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td><img style="border-radius: 10px;" width="60" height="60"
                            src="{{ url('uploads/', $hdd->image) }}" alt="image"></td>
                    <td>{{ $hdd->brand }}</td>
                    <td>{{ $hdd->model }}</td>
                    <td>{{ $hdd->type }}</td>
                    <td>{{ $hdd->storage }}</td>
                    <td>{{ $hdd->form_factor }}</td>
                    <td>{{ $hdd->intreface }}</td>
                    <td>{{ $hdd->rpm }}</td>
                    <td>{{ $hdd->data_transfer_rate }}</td>
                    <td>{{ $hdd->price }} BDT</td>
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
