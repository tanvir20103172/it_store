@extends('admin.master')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">Add Sound System</div>

                    <div class="card-body">
                        <form action="{{route('sound_system.store')}}"  method="post" enctype="multipart/form-data">
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
                                <label for="exampleFormControlInput1">Connectivity Mode</label>
                                <input required name="connectivity_mode" type="text" class="form-control"
                                    id="exampleFormControlInput1" placeholder="">
                                @error('connectivity_mode')
                                    <div class ="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Memory Card Slot</label>
                                <input required name="memory_card_slot" type="text" class="form-control"
                                    id="exampleFormControlInput1" placeholder="">
                                @error('memory_card_slot')
                                    <div class ="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">USB Port</label>
                                <input required name="usb_port" type="text" class="form-control"
                                    id="exampleFormControlInput1" placeholder="">
                                @error('usb_port')
                                    <div class ="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Remote Comtrol</label>
                                <input required name="remote_control" type="text" class="form-control"
                                    id="exampleFormControlInput1" placeholder="">
                                @error('remote_control')
                                    <div class ="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">FM Radio</label>
                                <input required name="fm_radio" type="text" class="form-control"
                                    id="exampleFormControlInput1" placeholder="">
                                @error('fm_radio')
                                    <div class ="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Voice Enable</label>
                                <input required name="voice_enable" type="text" class="form-control"
                                    id="exampleFormControlInput1" placeholder="">
                                @error('voice_enable')
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
