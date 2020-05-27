@extends('layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        @if($errors->all())
        <div class="alert alert-danger" >
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            @foreach ($errors->all() as $error)
            <span>{{ $error }}</span><br>
            @endforeach
        </div>
        @endif
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
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{ asset('img/default.png') }}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

                <p class="text-muted text-center">{{ Auth::user()->email }}</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Change Password</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <form class="form-horizontal" method="post" action="{{ route('account.update') }}">
                    @csrf
                    <div class="form-group row">
                      <label for="inputName" class="col-sm-2 col-form-label">Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail" class="col-sm-2 col-form-label"> Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" name="Confirmpassword" placeholder="Confirm Password">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-danger">Update Password</button>
                      </div>
                    </div>
                  </form>
              </div>
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
              <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Update Payment Details</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <form class="form-horizontal" method="post" action="{{ route('payment.update') }}">
                    @csrf
                    <div class="form-group row">
                      <label for="inputName" class="col-sm-4 col-form-label">Choose Payment Method</label>
                      <div class="col-sm-8">
                        <select class="form-control" name="paymentMethod">
                          @foreach($methods as $method)
                            <option>{{ $method->PaymentMethod }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail" class="col-sm-4 col-form-label"> Payment Address</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="paymentAddress" placeholder="Payment Address">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-sm-4 col-sm-7">
                        <button type="submit" class="btn btn-danger">Update Details</button>
                      </div>
                    </div>
                  </form>
              </div>
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@stop
