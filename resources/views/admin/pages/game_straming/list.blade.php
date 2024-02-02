@extends('admin.master')

@section('store')
    <div class="container">
        <h3 align="center"><u>Game Streaming List</u></h3>
        <div class="mb-3">
            <a href="{{ route('game_straming.form') }}" class="btn btn-success">Add Game Streaming</a>
            <a href="#" class="btn btn-primary">Print</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Si No.</th>
                <th scope="col">Image</th>
                <th scope="col">Brand</th>
                <th scope="col">Model</th>
                <th scope="col">Capture</th>
                <th scope="col">Resolution(Pixel)</th>
                <th scope="col">Interface(s)</th>
                <th scope="col">HDMI Ports</th>
                <th scope="col">USB Ports</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($game_stramings as $key => $game_straming)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td><img style="border-radius: 10px; max-width: 60px; max-height: 60px;"
                            src="{{ url('uploads/', $game_straming->image) }}" alt="image"></td>
                    <td>{{ $game_straming->brand }}</td>
                    <td>{{ $game_straming->model }}</td>
                    <td>{{ $game_straming->capture }}</td>
                    <td>{{ $game_straming->resolution }}</td>
                    <td>{{ $game_straming->interface }}</td>
                    <td>{{ $game_straming->hdmi_port }}</td>
                    <td>{{ $game_straming->usb_port }}</td>
                    <td>{{ $game_straming->price }} BDT</td>
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
