@extends('admin.master')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">Add Smart Watch </div>

                    <div class="card-body">
                        <form action="{{route('smart_watch.store')}}"  method="post" enctype="multipart/form-data">
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
                                <label for="exampleFormControlInput1">Brand</label>
                                <input required name="brand" type="text" class="form-control"
                                    id="exampleFormControlInput1" placeholder="">
                                @error('brand')
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
                                <label for="exampleFormControlInput1">Watch Size</label>
                                <input required name="watch_size" type="text" class="form-control"
                                    id="exampleFormControlInput1" placeholder="">
                                @error('watch_size')
                                    <div class ="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Cellular Network</label>
                                <input required name="cellular_network" type="text" class="form-control"
                                    id="exampleFormControlInput1" placeholder="">
                                @error('cellular_network')
                                    <div class ="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Interface</label>
                                <input required name="interface" type="text" class="form-control"
                                    id="exampleFormControlInput1" placeholder="">
                                @error('interface')
                                    <div class ="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Screen/Display(Size)</label>
                                <input required name="display" type="text" class="form-control"
                                    id="exampleFormControlInput1" placeholder="">
                                @error('display')
                                    <div class ="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Water Proof</label>
                                <input required name="water_proof" type="text" class="form-control"
                                    id="exampleFormControlInput1" placeholder="">
                                @error('water_proof')
                                    <div class ="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Heart rate</label>
                                <input required name="heart_rate" type="text" class="form-control"
                                    id="exampleFormControlInput1" placeholder="">
                                @error('heart_rate')
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
