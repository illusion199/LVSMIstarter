@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="text-center text-info" style="padding:15px 0 15px 0">Profile Image Gallery</h1>
    @if (session()->has('error') )
    <div class="alert alert-danger">{{ session()->get('error') }}</div>
    @endif
    @foreach ($avatar as $item)
       <div class="text-center">{{$item}} </div>
    @endforeach
    <form method="POST" action="{{route('avatar.store')}}" enctype="multipart/form-data">
        @csrf        
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <input type="submit" class="btn btn-info" value="upload">
            </div>
            <div class="custom-file">
                <input type="file" name="avatar" class="custom-file-input">
                <label class="custom-file-label">Choose file</label>              
            </div>            
        </div>
    </form> 
    
</div>
@endsection