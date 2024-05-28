@extends('layouts.master')
@section('content')

        <!-- content -->
        <div class="mil-content">
            <div id="swupMain" class="mil-main-transition">

              <!-- banner -->
              <div class="mil-inner-banner">
                <div class="mil-banner-content mil-up">
                    <div class="mil-animation-frame">
                        <div class="mil-animation mil-position-4 mil-dark mil-scale" data-value-1="6" data-value-2="1.4"></div>
                    </div>
                    <div class="container">
                        <ul class="mil-breadcrumbs mil-mb-60">
                            <li><a href="/">Homepage</a></li>
                            <li><a href="/about-us">About</a></li>
                        </ul>
                        <h1 class="mil-mb-60">{{__('general.Designing')}} <span class="mil-thin">{{__('general.a Better')}}</span> {{__('general.World')}} <span class="mil-thin">{{__('general.Today')}}</span></h1>
                        <div class="row paragraph">
                            <div class="col-md-7 col-lg-5">

                                <p class="mil-dark-soft mil-mb-60">{{__('general.title')}}</p>

                            </div>
                        </div>
                        <a href="/portfolio" class="mil-button mil-arrow-place mil-btn-space">
                            <span>{{__('general.View works')}}</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- banner end -->

                <!-- about -->
                <section id="about">
                    <div class="container mil-p-120-30">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-lg-6 col-xl-5">

                                <div class="mil-mb-90">
                                    <h2 class="mil-up mil-mb-60">{{__('general.Discover')}} <span class="mil-thin">{{__('general.Our World')}}</span></h2>
                                    <p class="mil-up mil-mb-30">{{__('general.about body')}}</p>
                                    <p class="mil-up mil-mb-60">{{__('general.about body2')}}</p>


                                    <div class="mil-about-quote">
                                        <div class="mil-avatar mil-up">
                                            <img src="{{asset('assets/img/faces/customers/2.jpg')}}" alt="Founder">
                                        </div>
                                        <h6 class="mil-quote mil-up">Passionately Creating <span class="mil-thin">Design Wonders:</span> Unleashing <span class="mil-thin">Boundless Creativity</span></h6>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-5">

                                <div class="mil-about-photo mil-mb-90">
                                    <div class="mil-lines-place"></div>
                                    <div class="mil-up mil-img-frame" style="padding-bottom: 160%;">
                                        <img src="{{asset('assets/img/photo/1.jpg')}}" alt="img" class="mil-scale" data-value-1="1" data-value-2="1.2">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <!-- about end -->

    <!-- reviews -->
    <section class="mil-soft-bg">
        <div class="container mil-p-120-120">

            <div class="row">
                <div class="col-lg-10">

                    <span class="mil-suptitle mil-suptitle-right mil-suptitle-dark mil-up">Customer reviews are a valuable source <br>of information for both businesses and consumers.</span>

                </div>
            </div>

            <h2 class="mil-center mil-up mil-mb-60">Customer <span class="mil-thin">Voices:</span> <br>Hear What <span class="mil-thin">They Say!</span></h2>

            <div class="mil-revi-pagination mil-up mil-mb-60"></div>

            <div class="row mil-relative justify-content-center">
                <div class="col-lg-8">

                    <div class="mil-slider-nav mil-soft mil-reviews-nav mil-up">
                        <div class="mil-slider-arrow mil-prev mil-revi-prev mil-arrow-place"></div>
                        <div class="mil-slider-arrow mil-revi-next mil-arrow-place"></div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="mil-quote-icon mil-up">
                        <path d="M 13.5 10 A 8.5 8.5 0 0 0 13.5 27 A 8.5 8.5 0 0 0 18.291016 25.519531 C 17.422273 29.222843 15.877848 31.803343 14.357422 33.589844 C 12.068414 36.279429 9.9433594 37.107422 9.9433594 37.107422 A 1.50015 1.50015 0 1 0 11.056641 39.892578 C 11.056641 39.892578 13.931586 38.720571 16.642578 35.535156 C 19.35357 32.349741 22 27.072581 22 19 A 1.50015 1.50015 0 0 0 21.984375 18.78125 A 8.5 8.5 0 0 0 13.5 10 z M 34.5 10 A 8.5 8.5 0 0 0 34.5 27 A 8.5 8.5 0 0 0 39.291016 25.519531 C 38.422273 29.222843 36.877848 31.803343 35.357422 33.589844 C 33.068414 36.279429 30.943359 37.107422 30.943359 37.107422 A 1.50015 1.50015 0 1 0 32.056641 39.892578 C 32.056641 39.892578 34.931586 38.720571 37.642578 35.535156 C 40.35357 32.349741 43 27.072581 43 19 A 1.50015 1.50015 0 0 0 42.984375 18.78125 A 8.5 8.5 0 0 0 34.5 10 z" fill="#000000" />
                    </svg>

                    <div class="swiper-container mil-reviews-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="mil-review-frame mil-center" data-swiper-parallax="-200" data-swiper-parallax-opacity="0">
                                    <h5 class="mil-up mil-mb-10">Sarah Newman</h5>
                                    <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Envato market</p>
                                    <p class="mil-text-xl mil-up">This creative agency stands out with their exceptional talent and expertise. Their ability to think outside the box and bring unique ideas to life is truly impressive. With meticulous attention to detail, they consistently deliver visually stunning and impactful work.</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="mil-review-frame mil-center" data-swiper-parallax="-200" data-swiper-parallax-opacity="0">
                                    <h5 class="mil-up mil-mb-10">Emma Trueman</h5>
                                    <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Envato market</p>
                                    <p class="mil-text-xl mil-up">I had the pleasure of working with this creative agency, and I must say, they truly impressed me. They consistently think outside the box, resulting in impressive and impactful work. I highly recommend this agency for their consistent delivery of exceptional creative solutions.</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="mil-review-frame mil-center" data-swiper-parallax="-200" data-swiper-parallax-opacity="0">
                                    <h5 class="mil-up mil-mb-10">Sarah Newman</h5>
                                    <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Envato market</p>
                                    <p class="mil-text-xl mil-up">This creative agency stands out with their exceptional talent and expertise. Their ability to think outside the box and bring unique ideas to life is truly impressive. With meticulous attention to detail, they consistently deliver visually stunning and impactful work.</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="mil-review-frame mil-center" data-swiper-parallax="-200" data-swiper-parallax-opacity="0">
                                    <h5 class="mil-up mil-mb-10">Emma Trueman</h5>
                                    <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Envato market</p>
                                    <p class="mil-text-xl mil-up">I had the pleasure of working with this creative agency, and I must say, they truly impressed me. They consistently think outside the box, resulting in impressive and impactful work. I highly recommend this agency for their consistent delivery of exceptional creative solutions.</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="mil-review-frame mil-center" data-swiper-parallax="-200" data-swiper-parallax-opacity="0">
                                    <h5 class="mil-up mil-mb-10">Sarah Newman</h5>
                                    <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Envato market</p>
                                    <p class="mil-text-xl mil-up">This creative agency stands out with their exceptional talent and expertise. Their ability to think outside the box and bring unique ideas to life is truly impressive. With meticulous attention to detail, they consistently deliver visually stunning and impactful work.</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="mil-review-frame mil-center" data-swiper-parallax="-200" data-swiper-parallax-opacity="0">
                                    <h5 class="mil-up mil-mb-10">Emma Trueman</h5>
                                    <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Envato market</p>
                                    <p class="mil-text-xl mil-up">I had the pleasure of working with this creative agency, and I must say, they truly impressed me. They consistently think outside the box, resulting in impressive and impactful work. I highly recommend this agency for their consistent delivery of exceptional creative solutions.</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="mil-review-frame mil-center" data-swiper-parallax="-200" data-swiper-parallax-opacity="0">
                                    <h5 class="mil-up mil-mb-10">Sarah Newman</h5>
                                    <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Envato market</p>
                                    <p class="mil-text-xl mil-up">This creative agency stands out with their exceptional talent and expertise. Their ability to think outside the box and bring unique ideas to life is truly impressive. With meticulous attention to detail, they consistently deliver visually stunning and impactful work.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- reviews end -->

    <!-- partners -->
    <div class="mil-soft-bg">
        <div class="container mil-p-0-120">

            <div class="swiper-container mil-infinite-show mil-up">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="#." class="mil-partner-frame" style="width: 60px;"><img src="{{asset('assets/img/logotypes/LOGOS-01.png')}}" alt="logo"></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#." class="mil-partner-frame" style="width: 100px;"><img src="{{asset('assets/img/logotypes/LOGOS-02.png')}}" alt="logo"></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#." class="mil-partner-frame" style="width: 60px;"><img src="{{asset('assets/img/logotypes/LOGOS-03.png')}}" alt="logo"></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#." class="mil-partner-frame" style="width: 100px;"><img src="{{asset('assets/img/logotypes/LOGOS-04.png')}}" alt="logo"></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#." class="mil-partner-frame" style="width: 100px;"><img src="{{asset('assets/img/logotypes/LOGOS-05.png')}}" alt="logo"></a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#." class="mil-partner-frame" style="width: 100px;"><img src="{{asset('assets/img/logotypes/LOGOS-06.png')}}" alt="logo"></a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#." class="mil-partner-frame" style="width: 100px;"><img src="{{asset('assets/img/logotypes/LOGOS-07.png')}}" alt="logo"></a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#." class="mil-partner-frame" style="width: 100px;"><img src="{{asset('assets/img/logotypes/LOGOS-08.png')}}" alt="logo"></a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#." class="mil-partner-frame" style="width: 100px;"><img src="{{asset('assets/img/logotypes/LOGOS-09.png')}}" alt="logo"></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#." class="mil-partner-frame" style="width: 100px;"><img src="{{asset('assets/img/logotypes/LOGOS-10.png')}}" alt="logo"></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#." class="mil-partner-frame" style="width: 100px;"><img src="{{asset('assets/img/logotypes/LOGOS-11.png')}}" alt="logo"></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#." class="mil-partner-frame" style="width: 100px;"><img src="{{asset('assets/img/logotypes/LOGOS-12.png')}}" alt="logo"></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- partners end -->

                <!-- footer -->
                @include('layouts.footer')
                <!-- footer end -->

                <!-- hidden elements -->
                <div class="mil-hidden-elements">
                    <div class="mil-dodecahedron">
                        <div class="mil-pentagon">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="mil-pentagon">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="mil-pentagon">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="mil-pentagon">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="mil-pentagon">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="mil-pentagon">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="mil-pentagon">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="mil-pentagon">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="mil-pentagon">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="mil-pentagon">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="mil-pentagon">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="mil-pentagon">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="mil-arrow">
                        <path d="M 14 5.3417969 C 13.744125 5.3417969 13.487969 5.4412187 13.292969 5.6367188 L 13.207031 5.7226562 C 12.816031 6.1136563 12.816031 6.7467188 13.207031 7.1367188 L 17.070312 11 L 4 11 C 3.448 11 3 11.448 3 12 C 3 12.552 3.448 13 4 13 L 17.070312 13 L 13.207031 16.863281 C 12.816031 17.254281 12.816031 17.887344 13.207031 18.277344 L 13.292969 18.363281 C 13.683969 18.754281 14.317031 18.754281 14.707031 18.363281 L 20.363281 12.707031 C 20.754281 12.316031 20.754281 11.682969 20.363281 11.292969 L 14.707031 5.6367188 C 14.511531 5.4412187 14.255875 5.3417969 14 5.3417969 z" />
                    </svg>

                    <svg width="250" viewBox="0 0 300 1404" fill="none" xmlns="http://www.w3.org/2000/svg" class="mil-lines">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1 892L1 941H299V892C299 809.71 232.29 743 150 743C67.7096 743 1 809.71 1 892ZM0 942H300V892C300 809.157 232.843 742 150 742C67.1573 742 0 809.157 0 892L0 942Z" class="mil-move" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M299 146V97L1 97V146C1 228.29 67.7096 295 150 295C232.29 295 299 228.29 299 146ZM300 96L0 96V146C0 228.843 67.1573 296 150 296C232.843 296 300 228.843 300 146V96Z" class="mil-move" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M299 1H1V1403H299V1ZM0 0V1404H300V0H0Z" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M150 -4.37115e-08L150 1404L149 1404L149 0L150 -4.37115e-08Z" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M150 1324C232.29 1324 299 1257.29 299 1175C299 1092.71 232.29 1026 150 1026C67.7096 1026 1 1092.71 1 1175C1 1257.29 67.7096 1324 150 1324ZM150 1325C232.843 1325 300 1257.84 300 1175C300 1092.16 232.843 1025 150 1025C67.1573 1025 0 1092.16 0 1175C0 1257.84 67.1573 1325 150 1325Z" class="mil-move" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M300 1175H0V1174H300V1175Z" class="mil-move" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M150 678C232.29 678 299 611.29 299 529C299 446.71 232.29 380 150 380C67.7096 380 1 446.71 1 529C1 611.29 67.7096 678 150 678ZM150 679C232.843 679 300 611.843 300 529C300 446.157 232.843 379 150 379C67.1573 379 0 446.157 0 529C0 611.843 67.1573 679 150 679Z" class="mil-move" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M299 380H1V678H299V380ZM0 379V679H300V379H0Z" class="mil-move" />
                    </svg>
                </div>
                <!-- hidden elements end -->

            </div>
        </div>
        <!-- content -->



@endsection
