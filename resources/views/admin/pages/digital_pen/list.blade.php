@extends('admin.master')
@section('store')
    <h3 align="center"><u>Digital Pen List</u></h3>
    <div>
        <a href="{{ route('digital_pen.form') }}" class="btn btn-success">Add Digital Pen</a>
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
                <th scope="col">Connectivity Mode</th>
                <th scope="col">Pen Resolution</th>
                <th scope="col">Color</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($digital_pens as $key => $digital_pen)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td><img style="border-radius: 10px; max-width: 60px; max-height: 60px;"
                            src="{{ url('uploads/', $digital_pen->image) }}" alt="image"></td>
                    <td>{{ $digital_pen->brand }}</td>
                    <td>{{ $digital_pen->model }}</td>
                    <td>{{ $digital_pen->type }}</td>
                    <td>{{ $digital_pen->connectivity_mode }}</td>
                    <td>{{ $digital_pen->pen_resolution }}</td>
                    <td>{{ $digital_pen->color }}</td>
                    <td>{{ $digital_pen->price }} BDT</td>
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
