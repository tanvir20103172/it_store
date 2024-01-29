@extends('admin.master')
@section('store')
    <h3 align="center"><u>Router List</u></h3>
    <div class="mb-3">
        <a href="{{ route('router.form') }}" class="btn btn-success btn-sm">Add Router</a>
        <a href="#" class="btn btn-primary btn-sm">Print</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Si No.</th>
                <th scope="col">Image</th>
                <th scope="col">Brand</th>
                <th scope="col">Model</th>
                <th scope="col">Router Type</th>
                <th scope="col">Antenna(Type & Qty)</th>
                <th scope="col">Band</th>
                <th scope="col">Wifi Coverage</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($routers as $key => $router)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>
                        <img style="border-radius: 10px;" width="60" height="60"
                            src="{{ url('uploads/', $router->image) }}" alt="image">
                    </td>
                    <td>{{ $router->brand }}</td>
                    <td>{{ $router->model }}</td>
                    <td>{{ $router->router_type }}</td>
                    <td>{{ $router->antenna }}</td>
                    <td>{{ $router->band }}</td>
                    <td>{{ $router->wifi_coverage }}</td>
                    <td>{{ $router->price }} BDT</td>
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
