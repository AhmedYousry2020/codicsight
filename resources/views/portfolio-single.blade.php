
@extends('layouts.master')
@section('content')
<section>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-push-3">
                <h2 class="text-uppercase font-secondary text-spacing mb-60">Project Title</h2>
                <div class="row mb-30">
                    <div class="col-sm-6">
                        <dl class="description-2">
                            <dt>Speciality</dt>
                            <dd>Front-End Development</dd>
                            <dt>Years experience</dt>
                            <dd>6+</dd>
                        </dl>
                    </div>
                    <div class="col-sm-6">
                        <dl class="description-2">
                            <dt>Born date</dt>
                            <dd>1985</dd>
                            <dt>Current company</dt>
                            <dd>Envato</dd>
                        </dl>
                    </div>
                </div>
                <p class="lead">Deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
            </div>
        </div>
    </div>

</section>

<div class="carousel inner-controls" data-single-item="true" data-autoplay="3000" data-navigation="true" data-pagination="true">
    <img src="assets/img/screens/multipage-agency.jpg" alt="">
    <img src="assets/img/screens/multipage-classic.jpg" alt="">
    <img src="assets/img/screens/multipage-classic-2.jpg" alt="">
</div>

<section class="section-sm text-center">
    <h6 class="text-muted text-uppercase">Share it!</h6>
    <a href="#" class="icon icon-circle icon-facebook icon-xs"><i class="fa fa-facebook"></i></a>
    <a href="#" class="icon icon-circle icon-twitter icon-xs"><i class="fa fa-twitter"></i></a>
    <a href="#" class="icon icon-circle icon-google-plus icon-xs"><i class="fa fa-google-plus"></i></a>
</section>

@endsection
