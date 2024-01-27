@extends('admin.master')
@section('content')
    <div class="container-fluid">
        <form action ="{{ route('motherboard.store') }}"method='post' enctype="multipart/form-data">
            @csrf
            <div class="custom-file">
                <label class="custom-file-label" for="validatedCustomFile">Image</label><br>
                <input required name="image" type="file" class="custom-file-input" id="validatedCustomFile" required>
                @error('image')
                    <div class ="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Model</label>
                <input required name="model" type="text" class="form-control" id="exampleFormControlInput1"
                    placeholder="">
                @error('model')
                    <div class ="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Chipset</label>
                <input required name="chipset" type="text" class="form-control" id="exampleFormControlInput1"
                    placeholder="">
                @error('chipset')
                    <div class ="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Socket Supported</label>
                <input required name="socket_supported" type="text" class="form-control" id="exampleFormControlInput1"
                    placeholder="">
                @error('socket_supported')
                    <div class ="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Generation</label>
                <input required name="generation" type="text" class="form-control" id="exampleFormControlInput1"
                    placeholder="">
                @error('generation')
                    <div class ="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Memory Slot</label>
                <input required name="memory_slot" type="text" class="form-control" id="exampleFormControlInput1"
                    placeholder="">
                @error('memory_slot')
                    <div class ="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Memory Max</label>
                <input required name="memory_max" type="text" class="form-control" id="exampleFormControlInput1"
                    placeholder="">
                @error('memory_max')
                    <div class ="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Price</label>
                <input required name="price" type="number" class="form-control" id="exampleFormControlInput1"
                    placeholder=" ">
                @error('price')
                    <div class ="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <button type="submit" class="btn btn-info bg-info text-dark">Submit</button>
            </div>
        </form>
    </div>
@endsection
