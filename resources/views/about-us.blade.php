@extends('layouts.master')
@section('content')

<div id="page-title" class="page-title page-title-3 bg-black dark">
	<div class="bg-image" style="background-image: url(&quot;assets/img/photos/classic_title01.jpg&quot;);"><img src="assets/img/photos/classic_title01.jpg" alt="" style="display: none;"></div>
	<div class="container">
		<h1>{{__('general.about us')}}</h1>
	</div>
	<div class="breadcrumb-wrapper border-top">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="index.html">{{__('general.home')}}</a></li>
				<li class="active">{{__('general.about us')}}</li>
			</ol>
		</div>
	</div>
</div>

<div id="content">

	<!-- Section -->
	<section>
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-8 col-lg-push-2">
                    <h1>{{__('general.about us')}}</h1>
					<p class="lead">{{__('general.headline details')}}</p>					<!-- Nav tabs -->
  					<ul class="nav nav-pills mb-40" role="tablist">
  						<li class="active"><a href="#history" role="tab" data-toggle="tab" aria-expanded="false">{{__('general.Our mission')}}</a></li>
  						<li class=""><a href="#mission" role="tab" data-toggle="tab" aria-expanded="false">{{__('general.Our story')}}</a></li>
  						<li class=""><a href="#whats-next" role="tab" data-toggle="tab" aria-expanded="true">{{__('general.Our vision')}}</a></li>
  					</ul>
  					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade active in" id="history">
							<p class="lead">{{__('general.Our mission body')}}</p>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="mission">
                            <p class="lead">{{__('general.Our story body')}}</p>
                            <p class="lead">{{__('general.our story body 2')}}</p>

						</div>
						<div role="tabpanel" class="tab-pane fade " id="whats-next">
							<p class="lead">{{__('general.Our vision body')}}</p>

                        </div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<!-- Section -->
	<section id="clients" class="bg-grey">
		<div class="container">
			<div class="row text-center">
				<div class="col-lg-8 col-lg-push-2">
					<h2 class="mb-40">أكثر من خمسون شركة كسبنا ثقتهم</h2>
					<div class="row">
						<div class="col-sm-4"><a href="#"><img class="gray-to-color" src="assets/img/logotypes/sass.png" alt=""></a></div>
						<div class="col-sm-4"><a href="#"><img class="gray-to-color" src="assets/img/logotypes/envato.png" alt=""></a></div>
						<div class="col-sm-4"><a href="#"><img class="gray-to-color" src="assets/img/logotypes/suelo.png" alt=""></a></div>
					</div>
				</div>
			</div>
		</div>
	</section>

</div>
@endsection
