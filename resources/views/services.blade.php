@extends('layouts.master')
@section('content')

<div id="page-title" class="page-title page-title-3 bg-black dark">
	<div class="bg-image" style="background-image: url(&quot;assets/img/photos/classic_title01.jpg&quot;);"><img src="assets/img/photos/classic_title01.jpg" alt="" style="display: none;"></div>
	<div class="container">
		<h1>{{__('general.services')}}</h1>
	</div>
	<div class="breadcrumb-wrapper border-top">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="/">{{__('general.home')}}</a></li>
				<li class="active">{{__('general.services')}}</li>
			</ol>
		</div>
	</div>
</div>
<!-- Section-->
<div id="content">
    <section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-push-2">
                <h1 class="text-center">{{__('general.Our Services')}}</h1>
                <p class="mb-90 text-center lead">{{__('general.Our Services body')}}</p>
            </div>
        </div>
    </div>

	<!-- Section -->
	<section class="section-double right">

		<div class="col-md-6 content">
			<h4>{{__('general.Software Solutions')}}</h4>
							<p class="mb-0">{{__('general.Software Solutions body')}}</p>
		</div>
		<div class="col-md-6 image">
			<div class="bg-image" style="background-image: url(&quot;assets/img/photos/classic_photo01.jpg&quot;);"><img src="assets/img/photos/classic_photo01.jpg" alt="" style="display: none;"></div>
		</div>

	</section>

	<!-- Section -->
	<section class="section-double left">

		<div class="col-md-6 content">
			<h4>{{__('general.App Development')}}</h4>
							<p class="mb-0">{{__('general.App Development body')}}</p>
		</div>
		<div class="col-md-6 image">
			<div class="bg-image" style="background-image: url(&quot;assets/img/photos/classic_photo02.jpg&quot;);"><img src="assets/img/photos/classic_photo02.jpg" alt="" style="display: none;"></div>
		</div>

	</section>

	<!-- Section -->
	<section class="section-double right">

		<div class="col-md-6 content">
            <h4>{{__('general.UI/UX Design')}}</h4>
            <p class="mb-0">{{__('general.UI/UX Design body')}}</p>
		</div>
		<div class="col-md-6 image">
			<div class="bg-image" style="background-image: url(&quot;assets/img/photos/classic_photo03.jpg&quot;);"><img src="assets/img/photos/classic_photo03.jpg" alt="" style="display: none;"></div>
		</div>

	</section>
    	<!-- Section -->
	<section class="section-double left">

		<div class="col-md-6 content">
            <h4>{{__('general.Web Development')}}</h4>
							<p class="mb-0">{{__('general.Web Development body')}}</p>
		</div>
		<div class="col-md-6 image">
			<div class="bg-image" style="background-image: url(&quot;assets/img/posts/post03.jpg&quot;);"><img src="assets/img/posts/post03.jpg" alt="" style="display: none;"></div>
		</div>

	</section>

    <section>
		<div class="container text-center">
			<h4 class="mb-70">{{__('general.How do we work?')}}</h4>
			<div class="row workflow-steps">
				<span class="workflow-progress animated visible"></span>
				<!-- Step -->
				<div class="col-md-4">
					<div class="step pl-20-lg pr-20-lg animated visible" data-animation-delay="700">
						<span class="icon icon-circle icon-white"><i class="ti-pie-chart text-primary"></i></span>
						<h3>1. {{__('general.Analysing')}}</h3>
					</div>
				</div>
				<!-- Step -->
				<div class="col-md-4">
					<div class="step pl-20-lg pr-20-lg animated visible" data-animation-delay="2000">
						<span class="icon icon-circle icon-white"><i class="ti-ruler-pencil text-primary"></i></span>
                        <h3>2. {{__('general.Develpoment')}}</h3>

					</div>
				</div>
				<!-- Step -->
				<div class="col-md-4">
					<div class="step pl-20-lg pr-20-lg animated visible" data-animation-delay="3300">
						<span class="icon icon-circle icon-white"><i class="ti-stats-up text-primary"></i></span>
                        <h3>3. {{__('general.production')}}</h3>

					</div>
				</div>
			</div>
		</div>
	</section>

</div>
@endsection
