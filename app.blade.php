<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mercado Escolar</title>
	<link rel="stylesheet" href="{{asset('css/main.css')}}">
	{{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('vendors/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
	{{-- @livewireStyles --}}
</head>

<body>
	<!-- Home About Services Contact Us Login/Registe -->
	<nav class="navbar">
		<!-- LOGO -->
		<div class="logo">
			<img src="{{asset('images/logo2.png')}}" height="70px" />
		</div>

		<ul class="nav-links">
			<input type="checkbox" id="checkbox_toggle" />
			<label for="checkbox_toggle" class="hamburger">&#9776;</label>

			<div class="menu">
				<li><a href="{{url('/')}}">Home</a></li>
				<li><a href="{{url('/about')}}">About</a></li>
				<li><a href="{{url('/services')}}">Services</a></li>
				<li><a href="{{url('/contact')}}">Contact US</a></li>
                @if (!Auth::User()== null)
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                   
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
				</div><li><a href="{{url('/student')}}">My Dashboard</a></li></div>
                </div>                    
             
                    
                @else
             
				<li><a href="{{url('login')}}">Login/Register</a></li>
                @endif
			</div>
		</ul>
	</nav>
	<div>
        @yield('content')
    </div>

	<footer class="footer">
		<p class="text-footer">
			Copyright ©Mercado Escolar
		</p>


	</footer>
	@livewireScripts
</body>

</html>