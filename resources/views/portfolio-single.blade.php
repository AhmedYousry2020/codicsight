
@extends('layouts.master')
@section('content')
<div id="page-title" class="page-title page-title-1 bg-grey">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1>Project Title</h1>
			</div>
			<div class="col-md-6">
				<ol class="breadcrumb">
					<li><a href="index.html">Home Page</a></li>
					<li class="active">Project Title</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div id="content">

	<img src="assets/img/works/details/single-work01.jpg" alt="" class="zooming">

	<section>

		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<dl class="description-2">
						<dt>Speciality</dt>
						<dd>Front-End Development</dd>
						<dt>Years experience</dt>
						<dd>6+</dd>
					</dl>
				</div>
				<div class="col-sm-3">
					<dl class="description-2">
						<dt>Born date</dt>
						<dd>1985</dd>
						<dt>Current company</dt>
						<dd>Envato</dd>
					</dl>
				</div>
				<div class="col-sm-6">
					<h6 class="text-muted text-uppercase">Description</h6>
					<p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
				</div>
			</div>
		</div>

	</section>

	<div class="container-fluid">
		<div class="masonry" style="position: relative; height: 788.05px;">
			<div class="masonry-sizer col-sm-4"></div>
			<div class="masonry-item col-sm-4 mb-30" style="position: absolute; left: 0%; top: 0px;">
				<a href="assets/img/works/details/single-work-grid01.jpg" data-lightbox="project" data-title="Image Title">
					<img src="assets/img/works/details/single-work-grid01.jpg" alt="">
				</a>
			</div>
			<div class="masonry-item col-sm-4 mb-30" style="position: absolute; left: 33.3065%; top: 0px;">
				<a href="assets/img/works/details/single-work-grid02.jpg" data-lightbox="project" data-title="Image Title">
					<img src="assets/img/works/details/single-work-grid02.jpg" alt="">
				</a>
			</div>
			<div class="masonry-item col-sm-4 mb-30" style="position: absolute; left: 66.6129%; top: 0px;">
				<a href="assets/img/works/details/single-work-grid03.jpg" data-lightbox="project" data-title="Image Title">
					<img src="assets/img/works/details/single-work-grid03.jpg" alt="">
				</a>
			</div>
			<div class="masonry-item col-sm-4 mb-30" style="position: absolute; left: 33.3065%; top: 394px;">
				<a href="assets/img/works/details/single-work-grid04.jpg" data-lightbox="project" data-title="Image Title">
					<img src="assets/img/works/details/single-work-grid04.jpg" alt="">
				</a>
			</div>
		</div>
	</div>

	<section class="section-sm text-center">
		<h6 class="text-muted text-uppercase">Share it!</h6>
		<a href="#" class="icon icon-circle icon-facebook icon-xs"><i class="fa fa-facebook"></i></a>
		<a href="#" class="icon icon-circle icon-twitter icon-xs"><i class="fa fa-twitter"></i></a>
		<a href="#" class="icon icon-circle icon-google-plus icon-xs"><i class="fa fa-google-plus"></i></a>
	</section>

	<section class="bg-secondary dark text-center border-bottom">

		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-push-3">
					<h2>Whould like to use this template with your next project?</h2>
					<div class="row">
						<div class="col-sm-6"><a href="#" class="btn btn-primary btn-filled btn-block">Yes, want to buy it now!</a></div>
						<div class="col-sm-6"><a href="#" class="btn btn-link btn-block">Check documentation</a></div>
					</div>
				</div>
			</div>
		</div>

	</section>

</div>

@endsection
