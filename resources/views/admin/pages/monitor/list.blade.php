@extends('admin.master')
@section('store')
<h3 align="center"><u>Monitor List</u></h3>
<div>
<a href="" class="btn btn-success">Add Monitor</a>
<a href="" class="btn btn-primary">Print</a>
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Si No.</th>
            <th scope="col">Image</th>
            <th scope="col">Brand</th>
            <th scope="col">Model</th>
            <th scope="col">Display Size</th>
            <th scope="col">Touch Screen</th>
            <th scope="col">isplay Resolution</th>
            <th scope="col">HDMI Port</th>
            <th scope="col">Thunderbolt</th>
            <th scope="col">Rotatable</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>
                <a type="button" href="" class="btn btn-outline-success">Edit</a>
                <a type="button" href="" class="btn btn-outline-danger">Delete</a>
            </td>
        </tr>
    </tbody>
</table>

@endsection