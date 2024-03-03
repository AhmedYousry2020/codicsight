
@extends('layouts.master')
@section('content')

<!-- Content -->
<div id="content">

	<!-- Section -->
	<section id="home" class="h-lg cover dark bg-black">

		<div class="carousel inner-controls" data-single-item="true" data-navigation="true" data-pagination="true" data-autoplay="5000">
			<!-- Slide -->
			<div class="slide h-lg">
				<div class="bg-image"><img src="assets/img/photos/corporate_bg02.jpg" alt=""></div>
				<div class="container v-center text-center">
					<div class="row text-center">
                        <div class="col-lg-8 col-md-8 col-lg-push-2">
                            <h1 class="font-secondary">{{__('general.headline')}}</h1>
                            <a href="#case-study" class="btn btn-primary animated fadeInUp visible" data-animation="fadeInUp">{{__('general.about us')}} <i class="i-after ti-arrow-down"></i></a>
                        </div>
                    </div>
				</div>
			</div>
			<!-- Slide -->
			<div class="slide h-lg">
				<div class="bg-image"><img src="assets/img/photos/finance_bg02.jpg" alt=""></div>
				<div class="container v-center text-center">
					<div class="row text-center">
                        <div class="col-lg-8 col-lg-push-2">
                            <h1 class="font-secondary">{{__('general.headline2')}}</h1>
                            <a href="#case-study" class="btn btn-primary animated fadeInUp visible" data-animation="fadeInUp">{{__('general.contact us')}} <i class="i-after ti-arrow-down"></i></a>
                        </div>
                    </div>
				</div>
			</div>
		</div>

	</section>

	<!-- Section-->
	<section id="services" class="bg-primary dark">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<!-- Service -->
					<div class="feature feature-2 animated" data-animation="fadeInUp">
						<span class="icon icon-sm"><i class="ti-pie-chart"></i></span>
						<div class="feature-content">
							<h5>{{__('general.Software Solutions')}}</h5>
							<p>{{__('general.Software Solutions body')}} </p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<!-- Service -->
					<div class="feature feature-2 animated" data-animation="fadeInUp" data-animation-delay="300">
						<span class="icon icon-sm"><i class="ti-pulse"></i></span>
						<div class="feature-content">
							<h5>{{__('general.App Development')}}</h5>
							<p>{{__('general.App Development body')}}</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<!-- Service -->
					<div class="feature feature-2 animated" data-animation="fadeInUp" data-animation-delay="600">
						<span class="icon icon-sm"><i class="ti-comments"></i></span>
						<div class="feature-content">
							<h5>{{__('general.UI/UX Design')}}</h5>
							<p>{{__('general.UI/UX Design body')}}</p>
						</div>
					</div>
				</div>
                <div class="col-md-3">
					<!-- Service -->
					<div class="feature feature-2 animated" data-animation="fadeInUp" data-animation-delay="600">
						<span class="icon icon-sm"><i class="ti-comments"></i></span>
						<div class="feature-content">
							<h4>{{__('general.Web Development')}}</h4>
							<p>{{__('general.Web Development body')}}</p>
						</div>
					</div>
				</div>
			</div>
			<p class="lead text-center"><strong>{{__('general.Need our service')}}</strong> {{__('general.Do not hesitate to')}}<a href="#" class="link-underline">{{__('general.contact us')}}</a>!</p>
		</div>
	</section>

    <!--about-->
    <section id="about">

		<div class="container text-center">
			<div class="row">
				<div class="col-md-8 col-md-push-2">
					<h1>{{__('general.about us')}}</h1>
					<p class="lead">{{__('general.headline details')}}</p>
                </div>
			</div>


            <div class="row v-center-items text-center">
				<div class="col-lg-3 col-lg-push-1 col-md-4">
					<!-- Icon Box -->
					<div class="feature feature-1">
						<span class="icon icon-circle icon-primary icon-sm"><i class="ti-bolt"></i></span>
						<h4>{{__('general.Innovative Design')}}</h4>
						<p class="mb-0">{{__('general.Innovative Design body')}}</p>
					</div>
					<!-- Icon Box -->
					<div class="feature feature-1">
						<span class="icon icon-circle icon-primary icon-sm"><i class="ti-calendar"></i></span>
						<h4>{{__('general.User-Centric Approach')}}</h4>
						<p class="mb-0">{{__('general.User-Centric Approach body')}}</p>
					</div>
				</div>
				<div class="col-lg-4 col-lg-push-1 col-md-4">
					<img src="assets/img/about us.png" alt="" class="animated bounceInUp visible" data-animation="bounceInUp">
				</div>
				<div class="col-lg-3 col-lg-push-1 col-md-4">
					<!-- Icon Box -->
					<div class="feature feature-1">
						<span class="icon icon-circle icon-primary icon-sm"><i class="ti-mobile"></i></span>
						<h4>{{__('general.Innovative Design')}}</h4>
						<p class="mb-0">{{__('general.Innovative Design body')}}</p>
					</div>
					<!-- Icon Box -->
					<div class="feature feature-1">
						<span class="icon icon-circle icon-primary icon-sm"><i class="ti-comments"></i></span>
						<h4>{{__('general.Custom Development')}}</h4>
						<p class="mb-0">{{__('general.Custom Development body')}}</p>
					</div>
				</div>
			</div>
			<div class="row pt-30">
				<div class="col-md-4 col-md-push-4 col-sm-6 col-sm-push-3">
					<a href="#" class="btn btn-primary btn-block">{{__('general.portfolio')}}<i class="i-after ti-arrow-down"></i></a>
				</div>
			</div>
		</div>



	</section>

    <!--about end -->

    <section id="clients" class="bg-grey">
		<div class="container">
			<div class="row text-center">
				<div class="col-lg-8 col-lg-push-2">
					<h2 class="mb-40">{{__('general.Over 50 companies trust us')}}</h2>
					<div class="row">
						<div class="col-sm-4"><a href="#"><img class="gray-to-color" src="assets/img/logotypes/sass.png" alt=""></a></div>
						<div class="col-sm-4"><a href="#"><img class="gray-to-color" src="assets/img/logotypes/envato.png" alt=""></a></div>
						<div class="col-sm-4"><a href="#"><img class="gray-to-color" src="assets/img/logotypes/suelo.png" alt=""></a></div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <section class="section h-md bg-dark dark">

		<div class="bg-image" style="background-image: url(&quot;assets/img/photos/corporate_bg03.jpg&quot;);"><img src="assets/img/photos/corporate_bg03.jpg" alt="" style="display: none;"></div>

		<div class="v-center text-center">
			<a href="#" class="btn-play btn-lg mb-30" data-toggle="modal" data-target="#modalVideo"></a>
			<h1 class="animated fadeInUp visible" data-animation="fadeInUp">Look how do we work!</h1>
		</div>

	</section>


    <section>
		<div class="container">

			<ul class="nav nav-tabs filter-isotope mb-50 text-center" data-filter-list="#works-list">
				<li class=""><a href="#" data-filter="*">All</a></li>
				<li class=""><a href="#" data-filter=".webdesign">Webdesign</a></li>
				<li class="active"><a href="#" data-filter=".development">Development</a></li>
				<li><a href="#" data-filter=".corporate-identity">Corporate Identity</a></li>
			</ul>

		 	<div id="works-list" class="masonry row" style="position: relative; height: 856.463px;">
				<div class="masonry-sizer col-sm-6 col-xs-12"></div>
				<div class="masonry-item webdesign col-sm-6 col-xs-12" style="position: absolute; left: 0%; top: 0px; display: none;">
					<!-- Image -->
					<div class="image-box image-hover text-center">
						<div class="image">
							<a href="assets/img/2.jpg" data-lightbox="gallery" data-title="Image Title"><img src="assets/img/2.jpg" alt=""></a>
						</div>
						<div class="title">
							<a href="#">
								<h5 class="mb-0">The Flower</h5>
								<span class="text-muted">Webdesign</span>
							</a>
						</div>
					</div>
				</div>
				<div class="masonry-item development col-sm-6 col-xs-12" style="left: 0%; top: 0px;">
					<!-- Image -->
					<div class="image-box image-hover text-center">
						<div class="image">
							<a href="assets/img/1.jpg" data-lightbox="gallery" data-title="Image Title"><img src="assets/img/1.jpg" alt=""></a>
						</div>
						<div class="title">
							<a href="#">
								<h5 class="mb-0">The Bridge</h5>
								<span class="text-muted">Webdesign</span>
							</a>
						</div>
					</div>
				</div>
				<div class="masonry-item webdesign col-sm-6 col-xs-12" style="position: absolute; display: none;">
					<!-- Image -->
					<div class="image-box image-hover text-center">
						<div class="image">
							<a href="assets/img/3.jpg" data-lightbox="gallery" data-title="Image Title"><img src="assets/img/3.jpg" alt=""></a>
						</div>
						<div class="title">
							<a href="#">
								<h5 class="mb-0">The Beach</h5>
								<span class="text-muted">Webdesign</span>
							</a>
						</div>
					</div>
				</div>
				<div class="masonry-item corporate-identity col-sm-6 col-xs-12" style="position: absolute; left: 50%; top: 856px; display: none;">
					<!-- Image -->
					<div class="image-box image-hover text-center">
						<div class="image">
							<a href="assets/img/4.jpg" data-lightbox="gallery" data-title="Image Title"><img src="assets/img/4.jpg" alt=""></a>
						</div>
						<div class="title">
							<a href="#">
								<h5 class="mb-0">The Forest</h5>
								<span class="text-muted">Webdesign</span>
							</a>
						</div>
					</div>
				</div>
				<div class="masonry-item corporate-identity col-sm-6 col-xs-12" style="position: absolute; left: 0%; top: 1127px; display: none;">
					<!-- Image -->
					<div class="image-box image-hover text-center">
						<div class="image">
							<a href="assets/img/6.jpg" data-lightbox="gallery" data-title="Image Title"><img src="assets/img/6.jpg" alt=""></a>
						</div>
						<div class="title">
							<a href="#">
								<h5 class="mb-0">The Landscape</h5>
								<span class="text-muted">Webdesign</span>
							</a>
						</div>
					</div>
				</div>
				<div class="masonry-item development col-sm-6 col-xs-12" style="position: absolute; left: 50%; top: 0px;">
					<!-- Image -->
					<div class="image-box image-hover text-center">
						<div class="image">
							<a href="assets/img/works/5.jpg" data-lightbox="gallery" data-title="Image Title"><img src="assets/img/5.jpg" alt=""></a>
						</div>
						<div class="title">
							<a href="#">
								<h5 class="mb-0">The Band</h5>
								<span class="text-muted">Webdesign</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</div>
<!-- Content / End -->
<section id="services" class="bg-grey">

    <div class="container text-center">
        <h2 class="mb-70">{{__('general.Work Process')}}</h2>
        <div class="row mb-80">
            <!-- Feature -->
            <div class="col-md-4">
                <div class="feature feature-1">
                    <span class="icon icon-lg icon-primary"><i class="ti-files"></i></span>
                    <h4 class="mb-5">1.{{__('general.Client brief')}}</h4>
                </div>
            </div>
            <!-- Feature -->
            <div class="col-md-4">
                <div class="feature feature-1">
                    <span class="icon icon-lg icon-primary"><i class="ti-desktop"></i></span>
                    <h4 class="mb-5">2.{{__('general.Planning')}}</h4>
                </div>
            </div>
            <!-- Feature -->
            <div class="col-md-4">
                <div class="feature feature-1">
                    <span class="icon icon-lg icon-primary"><i class="ti-package"></i></span>
                    <h4 class="mb-5">3.{{__('general.UI/UX Design ')}}</h4>
                </div>
            </div>
            <!-- Feature -->
            <div class="col-md-4">
                <div class="feature feature-1">
                    <span class="icon icon-lg icon-primary"><i class="ti-bolt"></i></span>
                    <h4 class="mb-5">4.{{__('general.Development')}}</h4>
                </div>
            </div>
            <!-- Feature -->
            <div class="col-md-4">
                <div class="feature feature-1">
                    <span class="icon icon-lg icon-primary"><i class="ti-rocket"></i></span>
                    <h4 class="mb-5">5.{{__('general.Testing QA')}}</h4>
                </div>
            </div>
            <!-- Feature -->
            <div class="col-md-4">
                <div class="feature feature-1">
                    <span class="icon icon-lg icon-primary"><i class="ti-layers-alt"></i></span>
                    <h4 class="mb-5">6.{{__('general.Production live')}}</h4>
                </div>
            </div>
        </div>
        <h4>{{__('general.Build your digital world in the new virtual reality')}}</h4>
        <span data-target="local-scroll"><a href="#contact" class="btn btn-filled btn-primary"><i class="i-before ti-email"></i>{{__('general.contact us')}}</a></span>
    </div>

</section>
@endsection
