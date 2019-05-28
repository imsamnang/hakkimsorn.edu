<header id="header" class="bg-white border-bottom">
	<div class="my-container header-content">
		@if (Auth::check())
			<nav class="navbar row">
				<a href="{{route('home')}}" class="navbar-brand"><img src="{{asset('assets/img/tinhtoday_navbar.png')}}" alt="Khmer24"></a>
				<ul class="nav mr-auto left-nav">
				<li class="nav-item">
				<a class="nav-link disabled btn-change-lang" href="#manage-ads.html"><span class="icon khmer-flage"></span></a>
				</li>
				</ul>
				<ul class="nav nav-pills justify-content-end right-nav">
				<li class="nav-item nav-item-login">
				<a class="nav-link" href="#notifications"><span class="icon icon-notification-fill"></span><span id="notification-badge" class="badge badge-pill badge-danger d-none">0</span></a>
				</li>

				<li class="nav-item nav-item-login nav-user-photo">
					<div class="dropdown">
						<a class="nav-link" href="{{route('property.allProperties')}}" id="dropdownUserMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="icon icon-user-photo">
								<img class="img-cover" src="{{asset('assets/img/user.png')}}">
							</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownUserMenu">
							<a class="dropdown-item" href="{{route('post.index')}}" title="POST FREE AD">
								<span class="icon-plus-full"></span> 
								POST FREE AD
							</a>
							<a class="dropdown-item" href="{{route('member.home')}}" title="My Ads">
								<span class="icon-folder"></span> 
								My Ads
							</a>
							<a class="dropdown-item" href="#" title="Likes">
								<span class="icon-like"></span> 
								Likes
							</a>
							<a class="dropdown-item" href="#" title="Setting">
								<span class="icon-setting-outline"></span> 
								Setting
							</a>
							<a class="dropdown-item" href="{{route('logout')}}"  
								onclick="event.preventDefault();
	              document.getElementById('logout-form').submit();" title="Log out">
								<span class="icon-off"></span> 
								Log out
							</a>
	            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                @csrf
	            </form>						
						</div>
					</div>
				</li>
				<li class="nav-item ml-2">
				<a class="nav-link btn-post btn-warning long-text" href="{{route('post.index')}}">POST FREE AD</a>
				<a class="nav-link btn-post btn-warning short-text" href="{{route('post.index')}}">POST</a>
				</li>
				</ul>
			</nav>	
		@else	
			<nav class="navbar row">
				<a href="{{route('home')}}" class="navbar-brand"><img src="{{asset('assets/img/tinhtoday_navbar.png')}}" alt="Khmer24"></a>
				<ul class="nav mr-auto left-nav">
					<li class="nav-item">
						<a class="nav-link disabled btn-change-lang" href="{{route('post.index')}}"><span class="icon khmer-flage"></span></a>
					</li>
				</ul>
				<ul class="nav nav-pills justify-content-end right-nav">
					<li class="nav-item item-wide-screen">
						<a class="nav-link" href="{{route('login')}}">Log in</a>
					</li>
					<li class="nav-item item-wide-screen">
						<sapn class="nav-link disabled pl-0 pr-0">Or</sapn>
					</li>
					<li class="nav-item item-wide-screen">
						<a class="nav-link" href="{{route('register')}}">Register</a>
					</li>				
					<li class="nav-item item-small-screen">
						<a class="nav-link" href="{{route('register')}}"><span class="icon icon-user2"></span></a>
					</li>
					<li class="nav-item ml-2">
						<a class="nav-link btn-post btn-warning long-text" href="{{route('post.index')}}">POST FREE AD</a>
						<a class="nav-link btn-post btn-warning short-text" href="{{route('post.index')}}">POST</a>
					</li>
				</ul>
			</nav>
		@endif

		<div id="header-search">
			<form class="form-inline form-mini-search p-0 pb-2 mr-auto" action="#search" method="get">
				<input class="form-control col-12 pr-4 input-keyword" type="search" placeholder="What are you looking for..." aria-label="What are you looking for..." value="" name="q">

					@include('front.category_menu')
					
				<button class="btn my-0 my-sm-0" type="submit"><span class="icon ion-ios-search"></span></button>
			</form>
		</div>
	</div>
</header>