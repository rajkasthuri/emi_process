@extends('layout.master')
@section('content')
@section('breadcrumb')

   <ol class="breadcrumb">
       <li class="breadcrumb-item active" aria-current="page">/EMI Calculator</li>
   </ol>

@endsection

<div class="card">
   <div class="card-header">
      <h6>EMI Calculator</h6>
   </div>
   <div class="card-body">
      <div class="table-responsive">
		   <div class="text-center" style="margin-bottom:10px;">
				<a href="{{url('emi/calculator')}}"><button type="button" class="btn btn-blue" style="background-color: #25acac;" id="search-btn">Process Data</button></a>
			</div>
			@if(!empty($loan_emi_details))
				<table class="table table-striped table-bordered" style="width:100%">
				   <thead>
					  <tr>
						<th>Client ID</th>
						@foreach($emi_column_names as $col_name)
							@if($col_name !='updated_at')
								<?php  
									$month_col = date('Y-M', strtotime($col_name));
								?>
								<th>{{$month_col}}</th>
							@else
								<th>Refresh AT</th>
							@endif
						@endforeach
					  </tr>
				   </thead>
				   <tbody>
				   @foreach($loan_emi_details as $loan_emi)
					  <tr>
						<td>{{$loan_emi->client_id}}</td>
						@foreach($emi_column_names as $col_name)
							@if($col_name !='updated_at')
								<td>{{$loan_emi->$col_name}}</td>
							@endif
						@endforeach
						<td>{{$loan_emi->updated_at}}</td>
					  </tr>
					 @endforeach
				   </tbody>
				</table>
			@endif
      </div>
   </div>
</div>
@endsection
@section('script')
	
@endsection
