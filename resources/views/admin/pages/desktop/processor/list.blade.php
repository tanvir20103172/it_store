@extends('admin.master')
@section('store')
<h3 align="center"><u>Processor List</u></h3>
<div>
<a href="" class="btn btn-success">Add Processor</a>
<a href="" class="btn btn-primary">Print</a>
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
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Mark</td>
            <td>Otto</td>
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