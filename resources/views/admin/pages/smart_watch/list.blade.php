@extends('admin.master')
@section('store')
    <h3 align="center"><u>Smart Watch List</u></h3>
    <div>
        <a href="{{ route('gaming_streamming.form') }}" class="btn btn-success">Add Smart Watch</a>
        <a href="#" class="btn btn-primary">Print</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Si No.</th>
                <th scope="col">Image</th>
                <th scope="col">Brand</th>
                <th scope="col">Model</th>
                <th scope="col">Watch Size</th>
                <th scope="col">Cellular Network</th>
                <th scope="col">Screen/Display(Size)</th>
                <th scope="col">Water Proof</th>
                <th scope="col">Heart rate</th>
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
                    <td>{{ $game_straming->watch_size}}</td>
                    <td>{{ $game_straming->cellular_network}}</td>
                    <td>{{ $game_straming->display}}</td>
                    <td>{{ $game_straming->water_proof }}</td>
                    <td>{{ $game_straming->heart_rate }}</td>
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
