@extends('layouts.app')
@section('content')
<div class="content-wrapper" style="overflow:hidden !important">
  <div class="row">
      <div class="col-sm-9">
         <h1 class="text-center"> Trailers</h1>
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
         <table class="table m-0">
            <thead>
            <tr>
              <th>Image</th>
              <th>Title</th>
              <th>Category</th>
              <th>Unique Link</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($trailers as $trailer)
                <tr>
                    <td><img src="{{ asset($trailer->TrailerPoster) }}" width="30px" height="30px" style="border-radius:50px"></td>
                    <td>{{ $trailer->TrailerTitle }}</td>
                    <td>{{ $trailer->VideoCategory }}</td>
                    <td><a href="{{ url($trailer->TrailerFile) }}"><i class="fa fa-play" style="color:red"></i>&nbsp;Play Video</a></td>
                    <td></a>&nbsp;@if(Auth::user()->isAdmin==1) <a href="{{ route('trailer.delete',[$trailer->TrailerSlug]) }}" class="fa fa-trash-alt" style="color:red"></a>&nbsp;@endif</td>
                  </tr>
                @endforeach
                <tr>
                    <td colspan="2" style="color:red;font-size:20px;font-weight:bold">
                        Total
                    </td>
                    <td class="text-center pull-right">
                        <span class="badge badge-warning"> {{ $trailers->count() }} Trailer</span>
                    </td>
                </tr>
            </tbody>
          </table>
      </div>
      <div class="col-sm-3" style="margin-top:60px">
        <button class="btn btn-primary btn-flat" type="button" data-toggle="modal" data-target="#modal-default"><i class="fa fa-video"><sup><i class="fa fa-plus-circle"></i></sup></i> Upload New Trailer</button>
    </div>
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Upload New Trailer</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="form">
                    <form method="POST" action="{{ route('trailer.add') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="TrailerTitle" placeholder="Trailer's Title">
                            </div>
                        </div>
                        <!-- /.form-group -->
                        <div class="mb-3">
                            <textarea class="textarea" placeholder="Sample Trailer Description" name="TrailerDescription"
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="TrailerPoster">
                            <label class="custom-file-label" for="customFile">Trailer Poster</label>
                        </div><br></br>
                        <div class="alert alert-danger">
                            <Strong>Maximum Filesize uploaded is 100 Megabytes</Strong>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="TrailerFile">
                            <label class="custom-file-label" for="customFile">Trailer File</label>
                        </div>
                        <div class="uploading text-center" style="position:relative; width:100%;style:none" id="uploading">
                            <span style="paddig-top:-20px;color:red;font-weight:bold"> Uploading in Progress</span>
                         </div>
                         <br>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-upload"></i>&nbsp;Upload Trailer</button>
                          </div>
                    </form>
                </div>
            </div>
        </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $(function() {
         $(document).ready(function()
         {
           $("#uploading").hide();
   });
   $("#upload").on("click",function(){
    $("#uploading").show();
   })
 });
</script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $(function() {
         $(document).ready(function()
         {
           $("#uploading").hide();
   });
   $("#upload").on("click",function(){
    $("#uploading").show();
   })
 });
</script>
@stop
