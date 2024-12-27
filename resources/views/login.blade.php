<!doctype html>
<html lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('public/css/style.css')}}" />
	<link rel="stylesheet" href="{{asset('public/css/font-awesome-4.7.0/css/font-awesome.min.css')}}" />

	<title>EMI PROCESS</title>
	<body class="login-bg">
	   <div class="container min-vh-100">
		  <div class="row justify-content-center align-items-center  min-vh-100">
			 <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8">
				<div class="login-section">
				   <div class="login-logo">
					  <img src="public/img/logo.jpg">			
				   </div>
				   <div class="login-details">
					  <div class="login-content">
						 <h4>Login</h4>
						 <form id="login_user" action="{{ url('login') }}">
							<div class="login-form" id="login">
							   <input type="hidden" name="_token" value="{{ csrf_token() }}" />
							   <div class="input-group mb-3">
								  <input type="text" class="form-control" placeholder="User Name" name="username" required>
								  
							   </div>
							   <div class="input-group mb-3">
								  <input type="password" class="form-control" placeholder="Password" name="pwd" required>
								  
							   </div>
							   <div class="text-center">
								  <button type="button" class="btn btn-white" id="smt">Sign In</button>
							   </div>
							</div>
						 </form>
					  </div>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
		<script type="text/javascript" src="{{asset('public/js/jquery-3.1.1.min.js')}}"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	   <script>
		  $(document).ready(function(){
		  
			$("#smt").click(function(){
		  
				var form = $("#login_user");
				var url = form.attr("action");
				$.ajax({
				  type:"POST",
				  url:url,
				  data:form.serialize(),
				  success: function(response){
					  if(response.status == 'Success' ){
			
						  location.href = 'loan';
		  
					  }else{
						alert(response.message);
					  }
					 
				  },
				  error: function(XMLHttpRequest, textStatus, errorThrown) { 
		  
					  alert("Oops!","Something went to wrong", "error");
				  }
		  
				});
		  
			});
		  });
		  
	   </script>
	</body>
</html>