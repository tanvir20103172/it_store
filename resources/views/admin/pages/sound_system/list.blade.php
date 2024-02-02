@extends('admin.master')

@section('store')
    <div class="container">
        <h3 align="center"><u>Sound System List</u></h3>
        <div class="mb-3">
            <a href="{{ route('sound_system.form') }}" class="btn btn-success">Add Sound System</a>
            <a href="#" class="btn btn-primary">Print</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Si No.</th>
                <th scope="col">Image</th>
                <th scope="col">Brand</th>
                <th scope="col">Model</th>
                <th scope="col">Channel</th>
                <th scope="col">Connectivity Mode</th>
                <th scope="col">Memory Card Slot</th>
                <th scope="col">USB Port</th>
                <th scope="col">Remote Control</th>
                <th scope="col">FM Radio</th>
                <th scope="col">Voice Enable</th>
                <th scope="col">Touch Controls</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sound_systems as $key => $sound_system)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>
                        <img style="border-radius: 10px;" width="60" height="60"
                            src="{{ url('uploads/', $sound_system->image) }}" alt="image">
                    </td>
                    <td>{{ $sound_system->brand }}</td>
                    <td>{{ $sound_system->model }}</td>
                    <td>{{ $sound_system->channel}}</td>
                    <td>{{ $sound_system->connectivity_mode}}</td>
                    <td>{{ $sound_system->memory_card_slot}}</td>
                    <td>{{ $sound_system->usb_port }}</td>
                    <td>{{ $sound_system->remote_control }}</td>
                    <td>{{ $sound_system->fm_radio }}</td>
                    <td>{{ $sound_system->voice_enable }}</td>
                    <td>{{ $sound_system->touch_controls }}</td>
                    <td>{{ $sound_system->price }} BDT</td>
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
