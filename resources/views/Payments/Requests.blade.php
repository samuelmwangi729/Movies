@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="container">
       <div class="pull-right"> <button class="no-print btn  btn-success fa fa-print" onclick="window.print()">Print</button><br></div>
        <div class="card card-pink">
           <div class="card-header text-center">
               {{ config('app.name') }} Payouts Requests
           </div>
           <!--end Card Header-->
           <div class="card-body">
               <div class="table-responsive">
                   <table class="table table-bordered table-striped table-hover">
                       <thead>
                           <tr style="font-size:10px">
                            <th>User Email</th>
                            <th>Payment Method</th>
                            <th>payment Address</th>
                            <th>Amount Requested</th>
                            <th>Amount Status</th>
                            <th  class="no-print">Action</th>
                           </tr>
                       </thead>
                       <tbody style="font-family:'Times New Roman', Times, serif' !important">
                        @if($requests->count()==0)
                        <tr>
                            <td colspan="6">
                                <div class="alert alert-danger">
                                    No Payout Request Received
                                </div>
                            </td>
                        </tr>
                        @else
                            @foreach($requests as $request)
                             <tr style="font-size:10px">
                                <td>{{ $request->Username }}</td>
                                <td>{{ $request->PaymentMethod }}</td>
                                <td>{{ $request->PaymentAddress }}</td>
                                <td>{{ $request->Amount }}</td>
                                <td>
                                    @if($request->Status ==0) <span style="color:red;font-weight:bold">Pending ...</span> @else <span style="color:green;font-weight:bold">Approved</span> @endif
                                </td>
                                <td class="no-print"><a href="#" class="btn btn-success btn-sm">Approve</a></td>
                            </tr>
                            @endforeach
                        @endif
                       </tbody>
                   </table>
               </div>
           </div>
       </div>
    </div>
</div>
@endsection
