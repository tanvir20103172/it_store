@extends('admin.master')
@section('store')
<div class="container-fluid">
    <h3 class="text-center mb-4"><u>Processor List</u></h3>
    <div class="mb-3">
        <a href="{{ route('processor.form') }}"  class="btn btn-success">Add Processor</a>
        <a href="#" class="btn btn-primary">Print</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Si No.</th>
                <th scope="col">Image</th>
                <th scope="col">Model</th>
                <th scope="col">Processor Type</th>
                <th scope="col">CPU Cooler</th>
                <th scope="col">Generation</th>
                <th scope="col">Turbo Frequency Max</th>
                <th scope="col">Core</th>
                <th scope="col">CPU Cache</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($processors as $key => $processor)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td><img style="border-radius: 60px;" width="100" height="100" src="{{ url('uploads/', $processor->image) }}" alt="image"></td>
                <td>{{ $processor->model }}</td>
                <td>{{ $processor->processor_type}}</td>
                <td>{{ $processor->cpu_cooler}}</td>
                <td>{{ $processor->generation }}</td>
                <td>{{ $processor->turbo_frequency_max}}</td>
                <td>{{ $processor->core }}</td>
                <td>{{ $processor->cpu_cache}}</td>
                <td>{{ $processor->price }}.BTD</td>
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
