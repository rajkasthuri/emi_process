@extends('layout.master')
@section('content')
@section('breadcrumb')

   <ol class="breadcrumb">
       <li class="breadcrumb-item active" aria-current="page">/Loan</li>
   </ol>

@endsection

<div class="card">
   <div class="card-header">
      <h6>Loan Management</h6>
   </div>
   <div class="card-body">
      <div class="table-responsive">
         <table class="table table-striped table-bordered" style="width:100%">
            <thead>
			  <tr>
				 <th>Client ID</th>
				 <th>Number of Payment</th>
				 <th>First Payment Date</th>
				 <th>Last Payment Date</th>
				 <th>Loan Amount</th>
				 <th>Action</th>
			  </tr>
		   </thead>
		   <tbody>
		   @foreach($loan_details as $loan)
			  <tr>
				<td>{{$loan->clientid}}</td>
				<td>{{$loan->num_of_payment}}</td>
				<td>{{$loan->first_payment_date}}</td>
				<td>{{$loan->last_payment_date}}</td>
				<td>INR {{$loan->loan_amount}}</td>
				<td><a href="{{url('emi/list')}}/{{$loan->clientid}}">EMI Detail</a></td>

			  </tr>
			 @endforeach
		   </tbody>
         </table>
      </div>
   </div>
</div>
@endsection
@section('script')
	
@endsection
