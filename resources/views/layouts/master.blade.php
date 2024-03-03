<!DOCTYPE html>
@if (app()->getLocale() == 'ar')
<html lang="ar" data-cookies-popup="true" dir="rtl">

@elseif(app()->getLocale() == 'en')
<html lang="en" data-cookies-popup="true">

@endif

<head>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Title -->
<title>Okno - Ultimate Multi-Purpose HTML5 Template</title>

<!-- Favicons -->
<link rel="shortcut icon" href="assets/img/favicon.png">
<link rel="apple-touch-icon" href="assets/img/favicon_60x60.png">
<link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon_76x76.png">
<link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon_120x120.png">
<link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon_152x152.png">

<!-- Google Web Fonts -->
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway:400,200,300,100,500,600,700' rel='stylesheet' type='text/css'>
@include('layouts.styles')
</head>

<body class="one-page">


<!-- Loader -->
<div id="page-loader"><svg class="loader-1 loader-primary" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg"><circle class="circle" fill="none" stroke-width="3" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div>
<!-- Loader / End -->

<!-- Header -->
<header id="header" class="fullwidth light">

	<!-- Top Bar -->
	<div id="top-bar">
		<div class="container">
			<div class="module left">
				<ul class="list-inline">
					<li><i class="i-before ti-email text-primary"></i>Info@codicsight.com</li>
					<li><i class="i-before ti-mobile text-primary"></i>123-456-7890
                    </li>
				</ul>
			</div>
			<div class="module right">
				<ul class="list-inline">
					<li><i class="i-before ti-time text-primary"></i>sun to thu 09:00 - 18:00</li>
				</ul>
			</div>
		</div>
	</div>

	<!-- Navigation Bar -->
	<div id="nav-bar">

		<div class="container">
			<!-- Logo -->
			<a class="logo-wrapper" href="index.html">
				<img class="logo logo-dark" src="{{asset('assets/img/LOGOS-06.png')}}" alt="Okno">
			</a>

			<nav class="module-group right">

				<!-- Primary Menu -->
				<div class="module menu left">
					<ul id="nav-primary" class="nav nav-primary">
						<li>
							<a href="/">{{__('general.home')}}</a>

						</li>
						<li>
							<a href="/about-us">{{__('general.about us')}}</a>

						</li>
						<li>
							<a href="/services">{{__('general.services')}}</a>

						</li>
						<li>
							<a href="/portfolio">{{__('general.portfolio')}}</a>

                        </li>
						<li class="has-dropdown lang">
							<a href="#">Language Version</a>
							<ul>
								<li><a href="/change-language/en">{{__('general.English')}}</a></li>
								<li><a href="/change-language/ar">{{__('general.Arabic')}}</a></li>

							</ul>
						</li>
					</ul>
				</div>

				<!-- Language Menu -->
				<div class="module language left">
					<ul class="nav nav-primary">
						<li class="has-dropdown">
							<a href="#">Eng</a>
							<ul>
                                <li><a href="/change-language/en">{{__('general.English')}}</a></li>
								<li><a href="/change-language/ar">{{__('general.Arabic')}}</a></li>

							</ul>
						</li>
					</ul>
				</div>
			</nav>

			<!-- Menu Toggle -->
			<div class="menu-toggle">
				<a href="#" data-toggle="mobile-menu" class="mobile-trigger"><span><span></span></span></a>
			</div>
		</div>

	</div>


</header>
<!-- Header / End -->
@yield('content')

<!-- Footer -->
<section id="contact" class="bg-dark dark">

    <div class="container">
        <div class="row mb-80">
            <div class="col-md-4">
                <img src="assets/img/avatars/avatar03.jpg" class="img-circle mb-30" alt="">
                <address class="mb-60">
                    <strong>{{__('general.address')}}</strong><br>
                    A795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br><br>
                    <strong>{{__('general.phone')}}</strong><br>
                    +48 221 909 99<br><br>
                    <strong>{{__('general.email')}}</strong><br>
                    <a href="#">your.name@example.com</a><br>
                </address>
            </div>
            <div class="col-md-8">
                <h5 class="mb-40">{{__('general.contact us')}}</h5>
                <form class="contact-form validate-form" id="contact-form" novalidate="novalidate">
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <input name="name" id="name" type="text" class="form-control bordered" placeholder="Name" required="" aria-required="true" aria-invalid="true">
                        </div>
                        <div class="form-group col-sm-6">
                            <input name="email" id="email" type="text" class="form-control bordered" placeholder="E-mail address" required="" aria-required="true" aria-invalid="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="message" cols="30" rows="7" class="form-control bordered" placeholder="Message" required="" aria-required="true" aria-invalid="true"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <button class="btn btn-filled btn-primary btn-block">{{__('general.SEND MESSAGE')}}<i class="i-after ti-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>
</section>
<!-- Footer / End -->



@include('layouts.scripts')

</body>

</html>
