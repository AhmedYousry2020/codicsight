
@extends('layouts.master')
@section('content')

<!-- Content -->
<div id="content">
	<div class="carousel inner-controls" data-single-item="true" data-pagination="true" data-navigation="true" data-transition="fade">

		<!-- Section / Edge -->
		<section class="section-image-edge dark cover pb-40">

			<div class="bg-image"><img src="assets/img/photos/corporate_bg02.jpg" alt=""></div>

			<div class="col-md-6 image zooming">
				<img src="assets/img/devices/ipad_edge_2.png" alt="" class="mb-40 animated" data-animation="fadeInLeft">
			</div>
			<div class="container">
				<div class="col-md-6 col-md-push-6 content">
					<h1 class="mb-40">{{__('general.headline')}}</h1>
                    <a href="/about-us" class="btn btn-default">{{__('general.about us')}} <i class="i-after ti-arrow-right"></i></a>

				</div>
			</div>

		</section>

		<!-- Section / Edge -->
		<section class="section-image-edge dark cover pb-40">

			<div class="bg-image"><img src="assets/img/photos/finance_bg02.jpg" alt=""></div>

			<div class="col-md-6 col-md-push-6 image right">
				<img src="assets/img/devices/iphone_edge_2.png" alt="" class="mb-40 animated" data-animation="fadeInRight">
			</div>
			<div class="container">
				<div class="col-md-6 content">
					<h1 class="b-40">{{__('general.headline2')}}</h1>
                    <a href="/contact" class="btn btn-default">{{__('general.contact us')}} <i class="i-after ti-arrow-right"></i></a>
				</div>
			</div>

		</section>

	</div>




	<!-- Section-->
	<section id="services" class="bg-primary dark">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<!-- Service -->
					<div class="feature feature-2 animated" data-animation="fadeInUp">
						<span class="icon icon-sm"><i class="ti-pie-chart"></i></span>
						<div class="feature-content">
							<h4>{{__('general.Software Solutions')}}</h4>
							<p>{{__('general.Software Solutions body')}} </p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<!-- Service -->
					<div class="feature feature-2 animated" data-animation="fadeInUp" data-animation-delay="300">
						<span class="icon icon-sm"><i class="ti-pulse"></i></span>
						<div class="feature-content">
							<h4>{{__('general.App Development')}}</h4>
							<p>{{__('general.App Development body')}}</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<!-- Service -->
					<div class="feature feature-2 animated" data-animation="fadeInUp" data-animation-delay="600">
						<span class="icon icon-sm"><i class="ti-comments"></i></span>
						<div class="feature-content">
							<h4>{{__('general.UI/UX Design')}}</h4>
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

            <div class="row">
				<div class="col-md-4">
					<!-- Icon Box -->
					<div class="feature feature-1">
						<span class="icon icon-circle icon-primary icon-sm"><i class="ti-bolt"></i></span>
						<h4>{{__('general.Innovative Design')}}</h4>
						<p class="mb-0">{{__('general.Innovative Design body')}}</p>
					</div>
                </div>
                <div class="col-md-4">
					<!-- Icon Box -->
					<div class="feature feature-1">
						<span class="icon icon-circle icon-primary icon-sm"><i class="ti-calendar"></i></span>
						<h4>{{__('general.User-Centric Approach')}}</h4>
						<p class="mb-0">{{__('general.User-Centric Approach body')}}</p>
					</div>
                </div>
                <div class="col-md-4">
                    <div class="feature feature-1">
						<span class="icon icon-circle icon-primary icon-sm"><i class="ti-comments"></i></span>
						<h4>{{__('general.Custom Development')}}</h4>
						<p class="mb-0">{{__('general.Custom Development body')}}</p>
					</div>
				</div>
            </div>


			</div>
			<div class="row pt-30">
				<div class="col-md-4 col-md-push-4 col-sm-6 col-sm-push-3">
					<a href="/portfolio" class="btn btn-primary btn-block">{{__('general.portfolio')}}<i class="i-after ti-arrow-down"></i></a>
				</div>
			</div>
		</div>



	</section>

    <!--about end -->

   <!-- Section -->
	<section id="clients" class="bg-grey">
		<div class="container">
			<div class="row">
                <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                    <div class="MultiCarousel-inner">
                        <div class="item">
                            <img src="assets/img/logotypes/LOGOS-01.png">
                        </div>
                        <div class="item">
                            <img src="assets/img/logotypes/LOGOS-02.png">
                        </div>
                        <div class="item">
                            <img src="assets/img/logotypes/LOGOS-03.png">
                        </div>
                        <div class="item">
                            <img src="assets/img/logotypes/LOGOS-04.png">
                        </div>
                        <div class="item">
                            <img src="assets/img/logotypes/LOGOS-05.png">
                        </div>
                        <div class="item">
                            <img src="assets/img/logotypes/LOGOS-06.png">
                        </div>
                        <div class="item">
                            <img src="assets/img/logotypes/LOGOS-07.png">
                        </div>
                        <div class="item">
                            <img src="assets/img/logotypes/LOGOS-08.png">
                        </div>
                        <div class="item">
                            <img src="assets/img/logotypes/LOGOS-09.png">
                        </div>
                        <div class="item">
                            <img src="assets/img/logotypes/LOGOS-10.png">
                        </div>
                        <div class="item">
                            <img src="assets/img/logotypes/LOGOS-11.png">
                        </div>
                        <div class="item">
                            <img src="assets/img/logotypes/LOGOS-12.png">
                        </div>
                                          </div>
                    <button class="btn btn-primary leftLst" style="padding: 10px"><</button>
                    <button class="btn btn-primary rightLst" style="padding: 10px" >></button>
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
                    <div class="masonry-item webdesign col-sm-6 col-xs-12" style="position: absolute; left: 0%; top: 0px; display: none;" onclick="alert('sss')">
                        <!-- Image -->
                        <div class="image-box image-hover text-center">
                                <div class="image">
                                    <a href="/portfolio-single" data-title="Image Title"><img src="assets/img/2.jpg" alt=""></a>
                                </div>

                                <div class="title">
                                    <a href="/portfolio-single">
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
                                <a href="/portfolio-single"  data-title="Image Title"><img src="assets/img/1.jpg" alt=""></a>
                            </div>

						<div class="title">
							<a href="/portfolio-single">
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
							<a href="/portfolio-single" data-title="Image Title"><img src="assets/img/3.jpg" alt=""></a>
						</div>

						<div class="title">
							<a href="/portfolio-single">
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
							<a href="/portfolio-single" data-title="Image Title"><img src="assets/img/4.jpg" alt=""></a>
						</div>

						<div class="title">
							<a href="/portfolio-single">
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
							<a href="/portfolio-single" data-title="Image Title"><img src="assets/img/6.jpg" alt=""></a>
						</div>

						<div class="title">
							<a href="portfolio-single">
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
							<a href="portfolio-single" data-title="Image Title"><img src="assets/img/5.jpg" alt=""></a>
						</div>
						<div class="title">
							<a href="portfolio-single">
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
