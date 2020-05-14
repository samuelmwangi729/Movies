@extends('layouts.app')

@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
    <div class="content-header">
        @if(Session::has('error'))</br>
        <div class="alert alert-danger text-center" >
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <i class="fa fa-times-circle" style="color:red"></i>&nbsp;{{ Session::get('error') }}
        </div>
        @endif
        @if(Session::has('success'))</br>
        <div class="alert alert-success text-center" >
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <i class="fa fa-check-circle"></i>&nbsp;{{ Session::get('success') }}
        </div>
        @endif
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Welcome <span style="font-weight:bold">{{Auth::user()->name}}</span></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fa fa-video"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">My Videos</span>
                  <span class="info-box-number">
                    {{ $mtVideo }}
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Likes</span>
                  <span class="info-box-number">{{ $totalLikes }}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Amount Spent</span>
                  <span class="info-box-number"> $ {{ $totalAmount }}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">All Videos</span>
                  <span class="info-box-number">{{ $totalVideos }}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <div class="col-md-8">
             <!-- TABLE: LATEST ORDERS -->
             <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Last 5  Subscriptions</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Category</th>
                      <th>End Date</th>
                      <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($histories as $history)
                        <tr>
                            <td>{{ $history->Category }}</td>
                            <td>{{ $history->EndDate }}</td>
                           @if($history->Status==0)
                           <td><span class="badge badge-success">Completed</span></td>
                           @else
                           <td><span class="badge badge-danger">Expired</span></td>
                           @endif
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                  <!-- <button type="button" class="btn btn-default" >
                  Launch Default Modal
                </button> -->
                {{-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left" data-toggle="modal" data-target="#modal-default">Place New Order</a> --}}
                {{-- <a href="javascript:void(0)" class="btn btn-sm btn-danger float-right" id="view">View All Order</a> --}}
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->


            </div>
            <!-- /.col -->

            <div class="col-md-4">
              <!-- Info Boxes Style 2 -->
              <div class="info-box mb-3 bg-warning">
                <span class="info-box-icon"><i class="fas fa-tag"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Categories</span>
                  <span class="info-box-number">{{ $categories }}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
              <div class="info-box mb-3 bg-success">
                <span class="info-box-icon"><i class="fa fa-heart"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">My Categories</span>
                  <span class="info-box-number">{{ $subscribed->count() }}/ {{ $categories }}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
              <div class="info-box mb-3 bg-danger">
                <span class="info-box-icon"><i class="fa fa-eye"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Views</span>
                  <span class="info-box-number">{{ $totalViews }}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
               <div class="info-box mb-3 bg-danger">
                <span class="info-box-icon"><i class="fa fa-money"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">My Earnings</span>
                  <span class="info-box-number">$ {{ 0.015 * $totalViews }}</span>
                  <form  id="payout" method="post" action="{{ route('payout.register') }}">
                      @csrf
                  </form>
                  <button class="btn btn-warning btn-sm" onclick="$('#payout').submit()">Request Payout</button>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->

              <!-- /.info-box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!--/. container-fluid -->
        <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">New Subscription</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="form">
                    <form>
                        <div class="form-group">
                  <label>Choose A Category</label>
                  <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                   @foreach($Allcategories as $ac)
                   <option>{{ $ac->CategoryName}}</option>
                   @endforeach
                  </select>
                </div>
                <!-- /.form-group -->
                    </form>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Subscribe changes</button>
            </div>
        </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      </section>
      <!-- /.content -->
</div>
<!-- /.control-sidebar -->
@endsection

