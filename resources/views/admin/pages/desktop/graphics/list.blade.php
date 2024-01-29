@extends('admin.master')
@section('store')
<div class="container mt-4">
    <h3 align="center"><u>Graphics Card List</u></h3>
    <div class="mb-3">
        <a href="{{ route('graphics.form') }}" class="btn btn-success">Add Graphics Card</a>
        <a href="#" class="btn btn-primary">Print</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Si No.</th>
                <th scope="col">Image</th>
                <th scope="col">Model</th>
                <th scope="col">Chipset</th>
                <th scope="col">Capacity(GB/TB)</th>
                <th scope="col">VGA Port</th>
                <th scope="col">HDMI Port</th>
                <th scope="col">Multi Display Capability</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($graphics as $key => $graphic)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td><img style="border-radius: 10px;" width="60" height="60"
                            src="{{ url('uploads/', $graphic->image) }}" alt="image"></td>
                    <td>{{ $graphic->model }}</td>
                    <td>{{ $graphic->type}}</td>
                    <td>{{ $graphic->chipset}}</td>
                    <td>{{ $graphic->capcity}}</td>
                    <td>{{ $graphic->vga_port }}</td>
                    <td>{{ $graphic->hdmi_port }}</td>
                    <td>{{ $graphic->multi_display_capability }}</td>
                    <td>{{ $graphic->price }} BDT</td>
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
