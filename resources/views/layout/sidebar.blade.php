@php
	$current_route = Route::getCurrentRoute()->uri();
@endphp

<div class="sidebar">	  	
		  <div class="logo"><img src="{{asset('public/img/min_logo.png')}}"></div>
		  <ul class="side-menu">
			  <li class="{{ ($current_route == 'loan')?'active':''}}"> 
				<a href="{{ url('loan')}}"><img src="{{asset('public/img/loan.png')}}" style="width:49px;">
</a> 
			  </li>
			  <li class="{{ ($current_route == 'loan/emi')?'active':''}}" title="EMI">
				<a href="{{ url('emi/list')}}"><img src="{{asset('public/img/loan_emi.png')}}" style="width:49px;">
</a>  
			  </li>
			  <li class="{{ ($current_route == 'loan/calculator')?'active':''}}" title="EMI Calculator">
				<a href="{{ url('emi/cal')}}"><img src="{{asset('public/img/accounts.png')}}" style="width:49px;">
</a>  
			  </li>
		  </ul>
</div>