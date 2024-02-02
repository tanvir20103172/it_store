@extends('admin.master')

@section('store')
    <div class="container">
        <h3 align="center"><u>Camera List</u></h3>
        <div class="mb-3">
            <a href="{{ route('camera.form') }}" class="btn btn-success btn-sm">Add Camera</a>
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
                        <th scope="col">Mega Pixels</th>
                        <th scope="col">Sensor Type</th>
                        <th scope="col">Shutter Speed</th>
                        <th scope="col">Build-in-flash</th>
                        <th scope="col">Digital Zoom</th>
                        <th scope="col">HDMI Port</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cameras as $key => $camera)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>
                                <img style="border-radius: 10px;" width="60" height="60"
                                    src="{{ url('uploads/', $camera->image) }}" alt="image">
                            </td>
                            <td>{{ $camera->brand }}</td>
                            <td>{{ $camera->model }}</td>
                            <td>{{ $camera->mega_pixels }}</td>
                            <td>{{ $camera->sensor_type }}</td>
                            <td>{{ $camera->shutter_speed }}</td>
                            <td>{{ $camera->build_flash }}</td>
                            <td>{{ $camera->digital_zoom }}</td>
                            <td>{{ $camera->hdmi_port }}</td>
                            <td>{{ $camera->price }} BDT</td>
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
    </div>
@endsection
