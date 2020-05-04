@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        @if($errors->all())
         <div class="alert alert-danger">
             <a href="#" class="close" data-dismiss="alert">&times;</a>
             @foreach ($errors->all() as $error)
             <span><i class="fa fa-exclamation-circle" style="color:red"></i> {{ $error }}</span><br>
             @endforeach
         </div>
         @endif
         @if(Session::has('error'))
         <div class="alert alert-danger">
             <a href="#" class="close" data-dismiss="alert">&nbsp;</a>
             {{ Session::get('error') }}
         </div>
         @endif
         @if(Session::has('success'))
         <div class="alert alert-success">
             <a href="#" class="close" data-dismiss="alert">&nbsp;</a>
             {{ Session::get('success') }}
         </div>
         @endif
        <form method="POST" action="{{ route('video.update',[$video->VideoSlug]) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Video's Title</span>
                    </div>
                    <input type="text" class="form-control" name="VideoTitle" value="{{ $video->VideoTitle }}">
                  </div>
                <label>Choose A Category</label>
                <select class="form-control select2 select2-danger" name="VideoCategory" data-dropdown-css-class="select2-danger" style="width: 100%;">
                @foreach ($categories as $category)
                <option value="{{ $category->CategoryName }}" @if($video->VideoCategory == $category->CategoryName) selected @endif>{{ $category->CategoryName }}</option>
                @endforeach
                </select>
            </div>
            <!-- /.form-group -->
            <div class="mb-3">
                <textarea class="textarea" placeholder="Simple Video Description" name="VideoDescription"
                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $video->VideoDescription }}</textarea>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="VideoPoster">
                <label class="custom-file-label" for="customFile">Video Poster</label>
            </div><br></br>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="VideoFile">
                <label class="custom-file-label" for="customFile">Video File</label>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="submit" class="btn btn-primary"><i class="fa fa-upload"></i>&nbsp;Update Video</button>
              </div>
        </form>
    </div>
</div>
@endsection
