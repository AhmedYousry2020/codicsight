@extends('layouts.master')
@section('content')

<div id="page-title" class="page-title page-title-3 bg-black dark">
	<div class="bg-image" style="background-image: url(&quot;assets/img/photos/classic_title01.jpg&quot;);"><img src="assets/img/photos/classic_title01.jpg" alt="" style="display: none;"></div>
	<div class="container">
		<h1>{{__('general.portfolio')}}</h1>
	</div>
	<div class="breadcrumb-wrapper border-top">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="index.html">{{__('general.home')}}</a></li>
				<li class="active">{{__('general.portfolio')}}</li>
			</ol>
		</div>
	</div>
</div>
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
<section class="bg-grey">

    <div class="container">

        <div class="row row-double right mb-60">
            <div class="col-md-6 image">
                <div class="bg-image" style="background-image: url(&quot;assets/img/photos/classic_photo02.jpg&quot;);"><img src="assets/img/photos/classic_photo02.jpg" alt="" style="display: none;"></div>
            </div>
            <div class="col-md-6 content bg-white">
                <h2>{{__('general.headline2')}}</h2>
                <p class="lead">{{__('general.Build your digital world in the new virtual reality')}}</p>
                <span data-target="local-scroll"><a href="#footer" class="btn btn-filled btn-primary"><i class="i-before ti-email"></i>{{__('general.contact us')}}</a></span>
            </div>
        </div>

        <h3 class="text-center mb-40">Look at those numbers!</h3>

        <div class="row text-center">

            <div class="col-sm-4">
                <div class="counter counter-1">
                    <div class="number text-primary">11</div>
                    <h5>Home page concepts</h5>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="counter counter-1">
                    <div class="number text-primary">+100</div>
                    <h5>HTML Files</h5>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="counter counter-1">
                    <div class="number text-primary">+1000</div>
                    <h5>Happy customers</h5>
                </div>
            </div>

        </div>



    </div>

</section>
        @endsection
