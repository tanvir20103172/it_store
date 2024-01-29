@extends('admin.master')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Casing</div>

                    <div class="card-body">
                        <form action="{{ route('casing.store') }}" method="post" enctype="multipart/form-data">
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
                                <label for="exampleFormControlInput1">Case Type</label>
                                <input required name="case_type" type="text" class="form-control"
                                    id="exampleFormControlInput1" placeholder="">
                                @error('case_type')
                                    <div class ="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Optical Drive Bay</label>
                                <input required name="optical_drive_bay" type="text" class="form-control"
                                    id="exampleFormControlInput1" placeholder="">
                                @error('optical_drive_bay')
                                    <div class ="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Cooling Fan(Build-In)</label>
                                <input required name="cooling_fan" type="text" class="form-control"
                                    id="exampleFormControlInput1" placeholder="">
                                @error('cooling_fan')
                                    <div class ="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Lighting Fan</label>
                                <input required name="lighting_fan" type="text" class="form-control"
                                    id="exampleFormControlInput1" placeholder="">
                                @error('lighting_fan')
                                    <div class ="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Power Supply</label>
                                <input required name="power_supply" type="text" class="form-control"
                                    id="exampleFormControlInput1" placeholder="">
                                @error('power_supply')
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
