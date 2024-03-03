
@extends('layouts.master')
@section('content')
<!-- PAGE TITLE -->
        <div class="page-title-cont page-title-big grey-light-bg ">
          <div class="relative container align-left">
            <div class="row">

              <div class="col-md-8">
                <h1 class="page-title">SINGLE PROJECT</h1>
                <div class="page-sub-title">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </div>
              </div>

              <div class="col-md-4">
                <div class="breadcrumbs">
                  <a href="/">Home</a><span class="slash-divider">/</span><a href="/portfolio">PORTFOLIO</a><span class="slash-divider">/</span><span class="bread-current">SINGLE</span>
                </div>
              </div>

            </div>
          </div>
        </div>

        <!-- COTENT CONTAINER -->
        <div class="p-140-cont">
          <!-- PORTFOLIO INFO -->
          <div class="container">
            <div class="row">

              <!-- SIDEBAR -->
              <div class="col-sm-4 col-md-3">
                <!-- PROJECT DETAIL -->
                <div class="port-detail-cont mb-30">
                  <h4 class="blog-page-title mt-0 mb-20">PROJECT DETAILS</h4>
                  <div class="port-detail">
                    <p>
                      <strong>CLIENT:</strong>
                        ENVATO
                    </p>
                    <p>
                      <strong>DATE:</strong>
                        10 OCTOBER, 2016
                    </p>
                    <p>
                      <strong>CATEGORY:</strong>
                        <a href="#">DESIGN</a>, <a href="#">PHOTO</a>
                    </p>
                    <p>
                      <strong>ONLINE:</strong>
                      <a href="https://1.envato.market/1rOKNa" target="_blank">WWW.ABC-STUDIO.COM</a>
                    </p>
                  </div>
                </div>
              </div>

              <!-- CONTENT -->
              <div class="col-sm-8 col-md-offset-1 ">
                <div class="lightbox-item popup-gallery mb-30">
                  <a href="images/blog/post-wide-1.jpg">
                    <div class="port-img-overlay">
                      <img class="port-main-img" src="{{asset('assets/images/blog/post-wide-1.jpg')}}" alt="img">
                    </div>
                    <div class="port-overlay-cont">
                      <div class="port-btn-cont">
                        <div aria-hidden="true" class="icon_search"></div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="container">
          	<div class="row mt-30 mb-60 ">

              <div class="popup-gallery">

                <!-- IMG -->
                <div class="col-sm-3 col-xs-6 mb-20">
                  <div class="lightbox-item">
                    <a href="{{asset('assets/images/blog/post-wide-2.jpg')}}">
                      <div class="port-img-overlay">
                        <img class="port-main-img" src="{{asset('assets/images/blog/post-wide-2.jpg')}}" alt="img">
                      </div>
                      <div class="port-overlay-cont">
                        <div class="port-btn-cont">
                          <div aria-hidden="true" class="icon_search"></div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>

                <!-- IMG -->
                <div class="col-sm-3 col-xs-6 mb-20">
                  <div class="lightbox-item">
                    <a href="{{asset('assets/images/blog/post-wide-3.jpg')}}">
                      <div class="port-img-overlay">
                        <img class="port-main-img" src="{{asset('assets/images/blog/post-wide-3.jpg')}}" alt="img">
                      </div>
                      <div class="port-overlay-cont">
                        <div class="port-btn-cont">
                          <div aria-hidden="true" class="icon_search"></div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>

                <!-- IMG -->
                <div class="col-sm-3 col-xs-6 mb-20">
                  <div class="lightbox-item">
                    <a href="{{asset('assets/images/blog/post-wide-4.jpg')}}">
                      <div class="port-img-overlay">
                        <img class="port-main-img" src="{{asset('assets/images/blog/post-wide-4.jpg')}}" alt="img">
                      </div>
                      <div class="port-overlay-cont">
                        <div class="port-btn-cont">
                          <div aria-hidden="true" class="icon_search"></div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>

                <!-- IMG -->
                <div class="col-sm-3 col-xs-6 mb-20">
                  <div class="lightbox-item">
                    <a href="{{asset('assets/images/blog/post-wide-5.jpg')}}">
                      <div class="port-img-overlay">
                        <img class="port-main-img" src="{{asset('assets/images/blog/post-wide-5.jpg')}}" alt="img">
                      </div>
                      <div class="port-overlay-cont">
                        <div class="port-btn-cont">
                          <div aria-hidden="true" class="icon_search"></div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>

              </div>

          	</div>
          </div>


          <!-- DIVIDER -->
          <hr class="mt-0 mb-0">

          <div class="container">
            <div class="row p-80-cont">
                <div class="col-md-12">
                  <h4 class="blog-page-title mt-0 mb-20">PROJECT DESCRIPTION</h4>
                </div>
              <div class="col-md-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, quis molestiae quia iusto quae commodi ad totam ratione porro nisi nesciunt ipsum amet dolores delectus esse modi maiores laborum veniam!</p>
              </div>
              <div class="col-md-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, quis molestiae quia iusto quae commodi ad totam ratione porro nisi nesciunt ipsum amet dolores delectus esse modi maiores laborum veniam!</p>
              </div>

            </div>
          </div>

          <!-- CAROUSEL -->
          <div class="container mb-140">

            <div class="fullwidth-slider owl-carousel owl-arrows-bg owl-dark-bg owl-pag-2" >

              <!-- ITEM -->
              <div class="item m-0">
                <div>
                  <img alt="about us" src="{{asset('assets/images/blog/post-wide-1.jpg')}}">
                </div>
              </div>

              <!-- ITEM -->
              <div class="item m-0">
                <div>
                  <img alt="about us" src="{{asset('assets/images/blog/post-wide-2.jpg')}}">
                </div>
              </div>

              <!-- ITEM -->
              <div class="item m-0">
                <div>
                  <img alt="about us" src="{{asset('assets/images/blog/post-wide-5.jpg')}}">
                </div>
              </div>

            </div>

          </div>

          <!-- VIDEO ADS 1 -->
          <div class="page-section video-ads-bg" >
            <div class="container">
              <div class="video-ads-text-cont clearfix">
                <span class="video-ads-text">BE CREATIVE</span>
                <span class="video-ads-a">
                  <a class="popup-youtube" href="https://www.youtube.com/watch?v=0gv7OC9L2s8">
                    <span class="icon icon-music-play-button"></span>
                  </a>
                </span>
                <span class="video-ads-text">WITH HASWELL</span>
              </div>
            </div>
          </div>

          <!-- RELATED PORT ITEMS -->
          <div class="page-section mt-80 mb-0" >
            <div class="container">

              <h4 class="blog-page-title mt-0 mb-40">RELATED PROJECTS</h4>
              <ul class="port-grid display-hover-on-mobile port-grid-gut clearfix" id="items-grid" style="position: relative; height: 564px;">

                <!-- Item 1 -->
                <li role="button" class="port-item mix development" style="position: absolute; left: 0px; top: 0px;">
                  <a href="portfolio-single1.html">
                    <div class="port-img-overlay"><img class="port-main-img" src="{{asset('assets/images/portfolio/projects-5.jpg')}}" alt="img"></div>
                  </a>
                  <div class="port-overlay-cont">

                      <div class="port-title-cont">
                        <h3><a href="portfolio-single1.html">MINIMALISM BOOKS</a></h3>
                        <span><a href="#">ui elements</a><span class="slash-divider">/</span><a href="#">media</a></span>
                      </div>
                      <div class="port-btn-cont">
                        <a href="{{asset('assets/images/portfolio/projects-5.jpg')}}" class="lightbox mr-20"><div aria-hidden="true" class="icon_search"></div></a>
                        <a href="portfolio-single1.html"><div aria-hidden="true" class="icon_link"></div></a>
                      </div>

                  </div>
                </li>

                <!-- Item 2 -->
                <li role="button" class="port-item mix design" style="position: absolute; left: 287px; top: 0px;">
                  <a href="portfolio-single1.html">
                    <div class="port-img-overlay">
                      <img class="port-main-img" src="{{asset('assets/images/portfolio/projects-3.jpg')}}" alt="img">
                    </div>
                  </a>
                  <div class="port-overlay-cont">

                      <div class="port-title-cont">
                        <h3><a href="portfolio-single1.html">CALENDAR</a></h3>
                        <span><a href="#">photography</a><span class="slash-divider">/</span><a href="#">media</a></span>
                      </div>
                      <div class="port-btn-cont">
                        <a href="{{asset('assets/images/portfolio/projects-3.jpg"')}}" class="lightbox mr-20"><div aria-hidden="true" class="icon_search"></div></a>
                        <a href="portfolio-single1.html"><div aria-hidden="true" class="icon_link"></div></a>
                      </div>

                  </div>
                </li>

                <!-- Item 3 -->
                <li role="button" class="port-item mix photography" style="position: absolute; left: 575px; top: 0px;">
                  <a href="portfolio-single1.html">
                    <div class="port-img-overlay">
                      <img class="port-main-img" src="{{asset('assets/images/portfolio/projects-1.jpg')}}" alt="img">
                    </div>
                  </a>
                  <div class="port-overlay-cont">

                      <div class="port-title-cont">
                        <h3><a href="portfolio-single1.html">EYES OF THE CAR</a></h3>
                        <span><a href="#">branding</a><span class="slash-divider">/</span><a href="#">marketing</a></span>
                      </div>
                      <div class="port-btn-cont">
                        <a href="{{asset('assets/images/portfolio/projects-1.jpg')}}" class="lightbox mr-20"><div aria-hidden="true" class="icon_search"></div></a>
                        <a href="portfolio-single1.html"><div aria-hidden="true" class="icon_link"></div></a>
                      </div>

                  </div>
                </li>

                <!-- Item 4 -->
                <li role="button" class="port-item mix development" style="position: absolute; left: 862px; top: 0px;">
                  <a href="portfolio-single1.html">
                    <div class="port-img-overlay">
                      <img class="port-main-img" src="{{asset('assets/images/portfolio/projects-6.jpg')}}" alt="img">
                    </div>
                  </a>
                  <div class="port-overlay-cont">

                      <div class="port-title-cont">
                        <h3><a href="portfolio-single1.html">NOW IS NOW</a></h3>
                        <span><a href="#">design</a><span class="slash-divider">/</span><a href="#">photography</a></span>
                      </div>
                      <div class="port-btn-cont">
                        <a href="{{asset('assets/images/portfolio/projects-6.jpg')}}" class="lightbox mr-20"><div aria-hidden="true" class="icon_search"></div></a>
                        <a href="portfolio-single1.html"><div aria-hidden="true" class="icon_link"></div></a>
                      </div>

                  </div>
                </li>

              </ul>
            </div>
          </div>

        </div>

        <!-- DIVIDER -->
        <hr class="mt-0 mb-0">

        <!-- WORK NAVIGATION -->
        <div class="work-navigation plr-10 clearfix">
          <a href="#" class="work-prev"><span><span class="icon icon-arrows-left"></span>&nbsp;Prev</span></a>
          <a href="portfolio-wide-4col.html" class="work-all" title="View all"><span class="icon icon-arrows-squares"></span></a>
          <a href="#" class="work-next"><span>Next&nbsp;<span class="icon icon-arrows-right"></span></span></a>
        </div>

        <!-- NEWS LETTER -->
        <div class="page-section nl-cont">
          <div class="container">
            <div class="relative" >
              <div id="mc_embed_signup" class="nl-form-container clearfix">
                <form action="http://abcgomel.us9.list-manage.com/subscribe/post-json?u=ba37086d08bdc9f56f3592af0&amp;id=e38247f7cc&amp;c=?" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletterform validate" target="_blank" novalidate>   <!-- EDIT THIS ACTION URL (add "post-json?u" instead of "post?u" and appended "&amp;c=?" to the end of this URL) -->
                  <input type="email" value="" name="EMAIL" class="email nl-email-input" id="mce-EMAIL" placeholder="Enter your email" required>
                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;"><input type="text" name="b_ba37086d08bdc9f56f3592af0_e38247f7cc" tabindex="-1" value=""></div>

                  <input type="submit" value="SUBSCRIBE" name="subscribe" id="mc-embedded-subscribe" class="button medium gray">
                </form>
                <div id="notification_container"  ></div>
              </div>
            </div>
          </div>
        </div>
@endsection
