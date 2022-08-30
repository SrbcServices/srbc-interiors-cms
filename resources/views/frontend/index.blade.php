@extends('layouts.frontend')
@section('content')

<section id="introduce">

    <div uk-slider style="z-index: -999;">

        <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-1@s uk-child-width-1-1@m uk-light">


            <li class="uk-transition-toggle" tabindex="0">
                <img src="{{asset('/assets/frontent/images/banner/interior2.png')}}" alt="">
                <div class="page" data-aos="fade-down"
                data-aos-easing="linear"
                data-aos-duration="2000" >
                    <h3>INTRODUCE</h3>
                </div>
                <div class="banner-head" data-aos="fade-up"
                data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                    <h4>Welcome to</h4>
                    <h2><span>SRBC</span> INTERIORS</h2>
                    <h3>Let's make it happen!</h3>
                </div>
            </li>
            <li class="uk-transition-toggle" tabindex="0">
                <img src="{{asset('/assets/frontent/images/banner/interior9.png')}}" alt="">
                <div class="page" data-aos="fade-down"
                data-aos-easing="linear"
                data-aos-duration="2000" >
                    <h3>INTRODUCE</h3>
                </div>
                <div class="banner-head" data-aos="fade-up"
                data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                    <h2>TRANSFORM YOUR <br> INTERIOR</h2>
                </div>
            </li>
            <li class="uk-transition-toggle" tabindex="0">
                <img src="{{asset('/assets/frontent/images/banner/interior10.png')}}" alt="">
                <div class="page" data-aos="fade-down"
                data-aos-easing="linear"
                data-aos-duration="2000">
                    <h3>INTRODUCE</h3>
                </div>
                <div class="banner-head" data-aos="fade-up"
                data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                    <h2>INSPIRING DESIGNS <br> INSPIRING MOMENTS</h2>
                </div>
            </li>
            <li class="uk-transition-toggle" tabindex="0">
                <img src="{{asset('/assets/frontent/images/banner/interior4.png')}}" alt="">
                <div class="page" data-aos="fade-down"
                data-aos-easing="linear"
                data-aos-duration="2000">
                    <h3>INTRODUCE</h3>
                </div>
                <div class="banner-head" data-aos="fade-up"
                data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                    <h2>INVESTMENT RETURNS. <br> YOUR OFFICE SPACE</h2>
                </div>
            </li>
            <li class="uk-transition-toggle" tabindex="0">
                <img src="{{asset('/assets/frontent/images/banner/interior11.png')}}" alt="">
                <div class="page" data-aos="fade-down"
                data-aos-easing="linear"
                data-aos-duration="2000">
                    <h3>INTRODUCE</h3>
                </div>
                <div class="banner-head" data-aos="fade-up"
                data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                    <h2>Let's make it happen!</h2>
                </div>
            </li>
        </ul>

        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

    </div>


</section>

<section id="who">
    <div class="who-page" data-aos="fade-down"
    data-aos-duration="2000">
        <h3>WHO WE ARE</h3>
    </div>
    <div class="uk-container whoweare">
        <div class="who-content" data-aos="zoom-in-up" data-aos-duration="1500">
            <h2>OUR SPECIALIZATION</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo quia ducimus aliquid illum cum id
                rem Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo quia ducimus aliquid illum
                cum id
                rem</p>
            <div class="who-content-list">
                <h4>01. HOME DESIGN</h4>
                <h4>02. COMMERCIAL DESIGN</h4>
                <h4>03. LANDSCAPE</h4>
                <h4>04. GARDEN & OUTDOOR</h4>
                <h4>05. CONSULTANT</h4>
            </div>

        </div>

        <div class="who-image" data-aos="zoom-in-up" data-aos-duration="1500">
            <img src="{{asset('/assets/frontent/images/banner/whoweare.png')}}" alt="" srcset="">
            <div class="particle">
                <img src="{{asset('/assets/frontent/images/banner/particles.png')}}" alt="" srcset="">
            </div>
        </div>
    </div>


</section>

<section id="works">

    <div class="work-page" data-aos="fade-down"
    data-aos-duration="2000">
        <h3>OUR WORKS</h3>
    </div>

    <div class="our-works">

        <div class="work-content" data-aos="fade-down" data-aos-duration="1500">
            <h2>LATEST PROJECTS</h2>
        </div>
        <div class="work-boxs">
            <div class="work-box" data-aos="zoom-out-up" data-aos-duration="1500">
                <h4>Minimalist <br> Apartments</h4>

            </div>
            <div class="work-box" data-aos="zoom-out-up" data-aos-duration="1500">
                <h4>Living Room</h4>

            </div>
            <div class="work-box" data-aos="zoom-out-up" data-aos-duration="1500">

                <h4>Office for Fashion <br> Brand Store</h4>

            </div>
            <div class="work-box" data-aos="zoom-out-up" data-aos-duration="1500">

                <h4>The Luxury Interior <br> Design</h4>

            </div>
            <div class="work-box" data-aos="zoom-out-up" data-aos-duration="1500">

                <h4>Largest Hall Interior<br> Design</h4>

            </div>
        </div>

    </div>


</section>

<section id="projects">
    
    <div class="project-page" data-aos="fade-down"
    data-aos-duration="2000">
        <h3>PROJECTS</h3>
    </div>

  

    <div class="uk-container">
        <div class="project-content">
            <h2 class="type"></h2>
        </div>
        <div uk-slider>

            <div class="uk-position-relative">

                <div class="uk-slider-container uk-light ">
                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
                        <li class="project-slide">
                            <img src="{{asset('/assets/frontent/images/sliders/office1.jpeg')}}" alt="">

                        </li>
                        <li class="project-slide">
                            <img src="{{asset('/assets/frontent/images/sliders/office2.jpeg')}}" alt="">

                        </li>
                        <li class="project-slide">
                            <img src="{{asset('/assets/frontent/images/sliders/office3.jpeg')}}" alt="">

                        </li>
                        <li class="project-slide">
                            <img src="{{asset('/assets/frontent/images/sliders/office4.jpeg')}}" alt="">

                        </li>
                        <li class="project-slide">
                            <img src="{{asset('/assets/frontent/images/sliders/office5.jpeg')}}" alt="">

                        </li>
                        <li class="project-slide">
                            <img src="{{asset('/assets/frontent/images/sliders/office6.jpeg')}}" alt="">

                        </li>
                        <li class="project-slide">
                            <img src="{{asset('/assets/frontent/images/sliders/office7.jpeg')}}" alt="">

                        </li>
                        <li class="project-slide">
                            <img src="{{asset('/assets/frontent/images/sliders/office8.jpeg')}}" alt="">

                        </li>
                    </ul>
                </div>
                <div class="uk-hidden@s uk-light">
                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>
        
                <div class="uk-visible@m">
                    <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>
            </div>
            <div class="investment-content" data-aos="fade-down"
            data-aos-duration="1500">
                <h2>CREATING EXPERIENCES
                THAT CHERISH YOUR LIVES</h2>
            </div>
            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

        </div>

    </div>


</section>

    
@endsection