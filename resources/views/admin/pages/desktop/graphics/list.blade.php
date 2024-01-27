@extends('admin.master')
@section('store')
<h3 align="center"><u>Graphics Card List</u></h3>
<div>
    <a href="" class="btn btn-success">Add Graphics Card</a>
    <a href="" class="btn btn-primary">Print</a>
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Si No.</th>
            <th scope="col">Image</th>
            <th scope="col">Model</th>
            <th scope="col">Chipset</th>
            <th scope="col">Capacity(GB/TB)</th>
            <th scope="col">VGA Port</th>
            <th scope="col">HDMI Port</th>
            <th scope="col">Multi Display Capability</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Mark</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Mark</td>
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