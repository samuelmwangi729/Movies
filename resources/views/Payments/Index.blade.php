@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="container">
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
         <div class="row">
    <div class="col-md-5">
       <div class="card">
        <div class="card-header p-2">
        <ul class="nav nav-pills">
            <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Add Payment Method</a></li>
        </ul>
        </div><!-- /.card-header -->
        <div class="card-body">
        <form class="form-horizontal" method="post" action="{{ route('payment.store') }}">
            @csrf
            <div class="form-group row">
                <div class="col-sm-12">
                <input type="text" class="form-control" name="PaymentMethod" placeholder="Payment Method">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-danger">Add Method</button>
                </div>
            </div>
        </form>
        </div>
    </div>
    </div>
    <!-- /.col -->
    <div class="col-md-7">
       <div class="card card-pink">
           <div class="card-header">
               Payments Added
           </div>
           <!--end Card Header-->
           <div class="card-body">
               <div class="table-responsive">
                   <table class="table table-bordered table-striped table-hover">
                       <thead>
                           <tr>
                            <th>Payment Method</th>
                            <th>Status</th>
                            <th>Action</th>
                           </tr>
                       </thead>
                       <tbody style="font-family:'Times New Roman', Times, serif' !important">
                           @if(count($payments)==0)
                           <tr>
                               <td colspan="4">
                                   <div class="alert alert-danger text-center">
                                       <i class="fa fa-times-circle" style="color:red"></i><strong>No Payment Method Added</strong>
                                   </div>
                               </td>
                           </tr>
                           @else
                           @foreach ($payments as $payment)
                           <tr>
                               <td>{{ $payment->PaymentMethod }}</td>
                               <td>
                                   @if($payment->Status == 0) <div class="badge badge-success">Approved</div> @else <div class="badge badge-danger">Suspended</div> @endif
                               </td>
                               <td>
                                    <a href="{{ route('payment.delete',[$payment->id]) }}"><i class="fa fa-trash btn btn-danger btn-sm" title="Delete Payment Method"></i></a>

                                </td>
                           </tr>
                           @endforeach
                           @endif
                       </tbody>
                   </table>
               </div>
           </div>
       </div>
    <!-- /.nav-tabs-custom -->
    </div>
    <!-- /.col -->
    </div>
    </div>
</div>
@stop
