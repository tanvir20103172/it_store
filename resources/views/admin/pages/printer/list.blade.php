@extends('admin.master')

@section('store')
    <div class="container">
        <h3 align="center"><u>Printer List</u></h3>
        <div class="mb-3">
            <a href="{{ route('printer.form') }}" class="btn btn-success btn-sm">Add Printer</a>
            <a href="#" class="btn btn-primary btn-sm">Print</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
            <tr>
                <th scope="col">Si No.</th>
                <th scope="col">Image</th>
                <th scope="col">Brand</th>
                <th scope="col">Model</th>
                <th scope="col">Functions</th>
                <th scope="col">Output Color</th>
                <th scope="col">Print Speed(Black)</th>
                <th scope="col">Print Speed(Color)</th>
                <th scope="col">Paper Size(Max)</th>
                <th scope="col">Interface(Built-in)</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($printers as $key => $printer)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>
                        <img style="border-radius: 10px;" width="60" height="60"
                            src="{{ url('uploads/', $printer->image) }}" alt="image">
                    </td>
                    <td>{{ $printer->brand }}</td>
                    <td>{{ $printer->model }}</td>
                    <td>{{ $printer->functions }}</td>
                    <td>{{ $printer->output_color }}</td>
                    <td>{{ $printer->print_speed_black }}</td>
                    <td>{{ $printer->print_speed_color }}</td>
                    <td>{{ $printer->paper_size }}</td>
                    <td>{{ $printer->interface }}</td>
                    <td>{{ $printer->price }} BDT</td>
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
