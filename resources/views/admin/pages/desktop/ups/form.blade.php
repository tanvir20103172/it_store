@extends('admin.master')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add UPS</div>

                    <div class="card-body">
                        <form action="{{route('ups.store')}}"  method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="custom-file">
                                <label class="custom-file-label" for="validatedCustomFile">Image</label><br>
                                <input required name="image" type="file" class="custom-file-input"
                                    id="validatedCustomFile" required>
                                @error('image')
                                    <div class ="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Model</label>
                                <input required name="model" type="text" class="form-control"
                                    id="exampleFormControlInput1" placeholder="">
                                @error('model')
                                    <div class ="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1"> Type</label>
                                <input required name="type" type="text" class="form-control"
                                    id="exampleFormControlInput1" placeholder="">
                                @error('type')
                                    <div class ="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Input Voltage(V)</label>
                                <input required name="input_voltage" type="text" class="form-control"
                                    id="exampleFormControlInput1" placeholder="">
                                @error('input_voltage')
                                    <div class ="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Output Voltage(V)</label>
                                <input required name="output_voltage" type="text" class="form-control"
                                    id="exampleFormControlInput1" placeholder="">
                                @error('output_voltage')
                                    <div class ="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Load Capacity</label>
                                <input required name="load_capacity" type="text" class="form-control"
                                    id="exampleFormControlInput1" placeholder="">
                                @error('load_capacity')
                                    <div class ="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Backup Time</label>
                                <input required name="backup_time" type="text" class="form-control"
                                    id="exampleFormControlInput1" placeholder="">
                                @error('backup_time')
                                    <div class ="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Body Materials</label>
                                <input required name="body_metarials" type="text" class="form-control"
                                    id="exampleFormControlInput1" placeholder="">
                                @error('body_metarials')
                                    <div class ="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Price</label>
                                <input required name="price" type="number" class="form-control"
                                    id="exampleFormControlInput1" placeholder=" ">
                                @error('price')
                                    <div class ="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <button type="submit" class="btn btn-info bg-info text-dark">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
