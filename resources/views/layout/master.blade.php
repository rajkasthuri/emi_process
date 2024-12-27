<!doctype html>
<html lang="en">
	<head>
		@include('layout.header') 
		@yield('css')
	</head>
	<body>    
		<div class="main"> 
			@include('layout.sidebar') 
			<div class="content">
				<header>
					<nav class="navbar navbar-expand-lg p-0">  
						<ul class="navbar-nav ms-auto align-items-center">
							<li class="nav-item dropdown user-h">
							  <h6 style="font-size: 14px;font-weight: bold;">Hi, @if(Auth::check()) {{ Auth::user()->name }} @endif
									<a href="{{url('/logout')}}" style="margin-left: 10px;font-weight: bold;cursor: pointer;">logout</a>
								</h6>
							</li>
						  </ul>  
					</nav>
					<nav aria-label="breadcrumb">
					  @yield('breadcrumb')
					</nav>
				</header>
				@yield('content')
				<!-- Footer content -->
				<div class="clearfix"></div>
				@include('layout.footer') 
				@yield('script')
			</div>
		</div>
	</body>
</html>