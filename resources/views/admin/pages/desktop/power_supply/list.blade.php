@extends('admin.master')
@section('store')
<h3 align="center"><u>Power Supply List</u></h3>
<div>
    <a href="" class="btn btn-success">Add Power Supply</a>
    <a href="" class="btn btn-primary">Print</a>
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Si No.</th>
            <th scope="col">Image</th>
            <th scope="col">Model</th>
            <th scope="col">PSU Category</th>
            <th scope="col">Type</th>
            <th scope="col">Maximum Power</th>
            <th scope="col">Efficency Rating</th>
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
            <td>
                <a type="button" href="" class="btn btn-outline-success">Edit</a>
                <a type="button" href="" class="btn btn-outline-danger">Delete</a>
            </td>
        </tr>
    </tbody>
</table>

@endsection