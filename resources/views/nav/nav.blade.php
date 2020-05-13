

	<!-- Header section -->
	<header class="header-section">

@if(!empty($menu))
		<div class="logo col-md-2">
			<img class="" src="{{asset('storage/'.$menu->logo)}}" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li><a href="/homes">Home</a></li>
				<li><a href="/services">{{$menu->lien1}}</a></li>
				<li><a href="/blog">{{$menu->lien2}}</a></li>
				<li><a href="/contact">{{$menu->lien3}}</a></li>
				<li class="active"><a href="/elements">{{$menu->lien4}}</a></li>
				<li><a href="/admin">admin</a></li>
			</ul>
		</nav>
@else

		<div class="logo">
			<img src="img/logo.png" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li><a href="/homes">Home</a></li>
				<li><a href="/services">Services</a></li>
				<li><a href="/blog">Blog</a></li>
				<li><a href="/contact">Contact</a></li>
				<li class="active"><a href="/elements">Elements</a></li>
				<li><a href="/admin">admin</a></li>
			</ul>
		</nav>
@endif

	</header>
	<!-- Header section end -->