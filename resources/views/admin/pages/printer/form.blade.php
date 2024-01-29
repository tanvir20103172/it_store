@extends('admin.master')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">Add Sound System</div>

                    <div class="card-body">
                        <form action="{{route('printer.store')}}"  method="post" enctype="multipart/form-data">
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
                                <label for="exampleFormControlInput1">Channel</label>
                                <input required name="channel" type="text" class="form-control"
                                    id="exampleFormControlInput1" placeholder="">
                                @error('channel')
                                    <div class ="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Functions</label>
                                <input required name="functions" type="text" class="form-control"
                                    id="exampleFormControlInput1" placeholder="">
                                @error('functions')
                                    <div class ="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Output Color</label>
                                <input required name="output_color" type="text" class="form-control"
                                    id="exampleFormControlInput1" placeholder="">
                                @error('output_color')
                                    <div class ="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Print Speed(Black)</label>
                                <input required name="print_speed_black" type="text" class="form-control"
                                    id="exampleFormControlInput1" placeholder="">
                                @error('print_speed_black')
                                    <div class ="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Print Speed(Color)l</label>
                                <input required name="print_speed_color" type="text" class="form-control"
                                    id="exampleFormControlInput1" placeholder="">
                                @error('print_speed_color')
                                    <div class ="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Paper Size(Max)</label>
                                <input required name="paper_size" type="text" class="form-control"
                                    id="exampleFormControlInput1" placeholder="">
                                @error('paper_size')
                                    <div class ="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Interface(Built-in)</label>
                                <input required name="interface" type="text" class="form-control"
                                    id="exampleFormControlInput1" placeholder="">
                                @error('interface')
                                    <div class ="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Touch Controls</label>
                                <input required name="touch_controls" type="text" class="form-control"
                                    id="exampleFormControlInput1" placeholder="">
                                @error('touch_controls')
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
