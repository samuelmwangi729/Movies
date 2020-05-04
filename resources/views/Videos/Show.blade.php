@extends('layouts.app')
@section('content')
<div class="content-wrapper">
   <div class="container-fluid">
    <div class="card" style="height:300px;font-size:12px !important">
        <div class="card-header border-0">
          <h3 class="card-title">Video Overview</h3>
        </div>
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
            <p class="text-success text-xl">
              <i class="ion ion-ios-refresh-empty"></i>
            </p>
            <p class="d-flex flex-column text-right">
              <span class="font-weight-bold">
                <i class="ion ion-android-arrow-up text-success"></i> {{ $video->VideoDescription }}
              </span>
              <span class="text-muted">Description</span>
            </p>
          </div>
          <!-- /.d-flex -->
          <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
            <p class="text-warning text-xl">
              <i class="ion ion-ios-cart-outline"></i>
            </p>
            <p class="d-flex flex-column text-right">
              <span class="font-weight-bold">
                <i class="ion ion-android-arrow-up text-warning"></i> {{ $video->VideoTitle }}
              </span>
              <span class="text-muted">Video Title</span>
            </p>
          </div>
          <!-- /.d-flex -->
          <div class="d-flex justify-content-between align-items-center mb-0">
            <p class="text-danger text-xl">
              <i class="ion ion-ios-people-outline"></i>
            </p>
            <p class="d-flex flex-column text-right">
              <span class="font-weight-bold">
                <i class="ion ion-android-arrow-down text-danger"></i>
              </span>
              <span class="text-muted">Share Icons</span>
            </p>
          </div>
          <!-- /.d-flex -->
        </div>
      </div>
    </div>
    <div class="timeline-body">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="{{ url($video->VideoFile) }}" controls frameborder="0" allowfullscreen="true" height="auto"></iframe>
        </div>
       <div class="container-fluid">
        <div class="row" style="background-color:gray">
            <div class="col-sm-2 text-center" style="color:white">
             <a href="jvaascript::void;" style="color:red"><i class="fa fa-thumbs-up"></i></a> &nbsp;{{ $video->Views }} Likes
            </div>
            <div class="col-sm-2 text-center" style="color:white">
             <a href="javascript::void;" style="color:red"><i class="fa fa-eye"></i></a> &nbsp;{{ $video->Views }} Views
            </div>
            <div class="col-sm-2 text-center" style="color:white">
                <a href="javascript::void;" style="color:red"><button class="btn btn-flat btn-sm" style="background-color:red;color:white">Subscribers</button>
               </div>
         </div>
       </div>
   </div>
</div>
@endsection
