@extends('admin.master')
@section('store')

<div class="container-fluid">
    <h3 class="text-center"><u>Motherboard List</u></h3>

    <a href="{{ route('motherboard.form') }}" type="button" class="btn btn-info bg-success text-dark mb-3">Add Motherboard</a>
    <a href="#" class="btn btn-primary mb-3">Print</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Si No.</th>
                <th scope="col">Image</th>
                <th scope="col">Model</th>
                <th scope="col">Chipset</th>
                <th scope="col">Socket Supported</th>
                <th scope="col">Generation</th>
                <th scope="col">Memory Slot</th>
                <th scope="col">Memory Max</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($motherboards as $key => $motherboard)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td><img style="border-radius: 60px;" width="20%" src="{{ url('uploads/', $motherboard->image) }}" alt="image"></td>
                <td>{{ $motherboard->model }}</td>
                <td>{{ $motherboard->chipset }}</td>
                <td>{{ $motherboard->socket_supported }}</td>
                <td>{{ $motherboard->generation }}</td>
                <td>{{ $motherboard->memory_slot }}</td>
                <td>{{ $motherboard->memory_max }}</td>
                <td>{{ $motherboard->price }}.BTD</td>
                <td>
                    <div class="btn-group" role="group">
                        <a class="btn btn-success" href="#">Edit</a>
                        <a class="btn btn-primary" href="#">View</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
