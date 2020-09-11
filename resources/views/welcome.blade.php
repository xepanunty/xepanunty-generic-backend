<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ trans('app.title') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">{{ trans('app.loading') }}</span>
    </div>
</div>


<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

        <div class="container">
            <div class="row align-items-center">

                <div class="col-6 col-xl-2">
                    <div class="mb-0 site-logo"><a href="index.html" class="mb-0">{{ trans('app.logo') }}<span
                                    class="text-primary">.</span> </a></div>
                </div>

                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="#home-section" class="nav-link">{{ trans('app.home') }}</a></li>
                            <li>
                                <a href="#features-section" class="nav-link">{{ trans('app.features') }}</a>
                            </li>
                            <li><a href="#pricing-section" class="nav-link">{{ trans('app.pricing') }}</a></li>

                            <li><a href="/store" class="nav-link">{{ trans('app.store') }}</a></li>
                            <li><a href="#blog-section" class="nav-link">{{ trans('app.blog') }}</a></li>
                            <li><a href="#contact-section" class="nav-link">{{ trans('app.contact') }}</a></li>
                            <li class="social"><a href="#contact-section" class="nav-link"><span
                                            class="icon-facebook"></span></a></li>
                            <li class="social"><a href="#contact-section" class="nav-link"><span
                                            class="icon-instagram"></span></a></li>
                            <li class="social"><a href="#contact-section" class="nav-link"><span
                                            class="icon-linkedin"></span></a></li>
                            @auth
                                <a class="btn btn-primary text-black" type="button" href="/admin">{{ trans('app.admin') }}
                                </a>
                            @else
                                <a class="btn btn-primary text-black"  href="/admin/login" type="button" >{{ trans('app.login') }}
                                </a>
                            @endauth
                        </ul>
                    </nav>
                </div>
                <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a
                            href="#" class="site-menu-toggle js-menu-toggle float-right"><span
                                class="icon-menu h3 text-black"></span></a></div>
            </div>
        </div>
    </header>
    <div class="site-section hero" id="home-section">
        <div class="container text-center">
            <div class="row justify-content-center text-center">
                <div class="col-lg-10">
                    <div class="mb-5">
                        <h1 class="hero-heading">{{ trans('app.productivity') }}</h1>
                        <p>{{ trans('app.marketing') }}</p>
                        <a href="#" class="btn btn-primary">{{ trans('app.free') }}</a>
                    </div>
                    <img src="{{ asset('assets/images/untree.co_dashboard_mocklayout_laptop.png') }}" alt="image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>


    <div class="site-section pt-0" id="features-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <span class="subtitle-1">{{ trans('app.features_desc') }}</span>
                    <h2 class="section-title-1 font-weight-bold">{{ trans('app.features_desc_2') }}</h2>
                </div>
            </div>
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 mb-5 order-lg-2 mb-lg-0" data-aos="fade-right">
                    <img src="{{ asset('assets/images/untree.co_dashboard_mocklayout.jpg') }}" alt="Image" class="img-fluid img-shadow">
                </div>
                <div class="col-lg-5 mr-auto">
                    <div class="mb-4">
                        <h2 class="section-title-2">{{ trans('app.features_pw') }}</h2>
                        <p>{{ trans('app.features_description') }}</p>
                    </div>

                    <div class="d-flex feature-v1">
                        <span class="wrap-icon icon-users"></span>
                        <div>
                            <h3>{{ trans('app.features_description_title_small') }}</h3>
                            <p>{{ trans('app.features_description_title_small_desc') }}</p>
                        </div>
                    </div>

                    <div class="d-flex feature-v1">
                        <span class="wrap-icon icon-layers"></span>
                        <div>
                            <h3>{{ trans('app.features_description_title') }}</h3>
                            <p>{{ trans('app.features_description_title_desc') }}</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-left">
                    <img src="{{ asset('assets/images/untree.co_dashboard_mocklayout.jpg') }}" alt="Image" class="img-fluid img-shadow">
                </div>
                <div class="col-lg-5 order-lg-1 ml-auto">
                    <div class="mb-4">
                        <h2 class="section-title-2">{{ trans('app.invovate') }}</h2>
                        <p>{{ trans('app.many') }}</p>
                    </div>

                    <div class="d-flex feature-v1">
                        <span class="wrap-icon icon-cog"></span>
                        <div>
                            <h3>{{ trans('app.many_desc') }}</h3>
                            <p>{{ trans('app.many_desc_big') }}</p>
                        </div>
                    </div>

                    <div class="d-flex feature-v1">
                        <span class="wrap-icon icon-bolt"></span>
                        <div>
                            <h3>{{ trans('app.easy') }}</h3>
                            <p>{{ trans('app.easy_desc') }}</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row align-items-center mb-5">
                <div class="col-lg-6 mb-5 order-lg-2 mb-lg-0" data-aos="fade-right">
                    <img src="{{ asset('assets/images/untree.co_dashboard_mocklayout.jpg') }}" alt="Image" class="img-fluid img-shadow">
                </div>
                <div class="col-lg-5 mr-auto">
                    <div class="mb-4">
                        <h2 class="section-title-2">{{ trans('app.safe') }}</h2>
                        <p>{{ trans('app.safe_desc') }}</p>
                    </div>

                    <div class="d-flex feature-v1">
                        <span class="wrap-icon icon-users"></span>
                        <div>
                            <h3>{{ trans('app.safe_one') }}</h3>
                            <p>{{ trans('app.safe_one_desc') }}</p>
                        </div>
                    </div>

                    <div class="d-flex feature-v1">
                        <span class="wrap-icon icon-layers"></span>
                        <div>
                            <h3>{{ trans('app.safe_two') }}</h3>
                            <p>{{ trans('app.safe_two_desc') }}</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7 text-center mb-5 mx-auto">
                    <span class="subtitle-1">{{ trans('app.more') }}</span>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="feature-v2">
                        <span class="icon-people_outline"></span>
                        <h3>{{ trans('app.user_col') }}</h3>
                        <p>{{ trans('app.user_col_desc') }}</p>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-v2">
                        <span class="icon-phone_android"></span>
                        <h3>{{ trans('app.user_sms') }}</h3>
                        <p>{{ trans('app.user_sms_desc') }}</p>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-v2">
                        <span class="icon-pie_chart"></span>
                        <h3>{{ trans('app.analytics') }}</h3>
                        <p>{{ trans('app.analytics_desc') }}</p>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-v2">
                        <span class="icon-public"></span>
                        <h3>{{ trans('app.geolocation') }}</h3>
                        <p>{{ trans('app.geolocation_desc') }}</p>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="feature-v2">
                        <span class=" icon-search2"></span>
                        <h3>{{ trans('app.easytofind') }}</h3>
                        <p>{{ trans('app.easytofind_desc') }}</p>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-v2">
                        <span class=" icon-security"></span>
                        <h3>{{ trans('app.aesthetic') }}</h3>
                        <p>{{ trans('app.aesthetic_desc') }}</p>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-v2">
                        <span class="icon-visibility"></span>
                        <h3>{{ trans('app.goodsecurity') }}</h3>
                        <p>{{ trans('app.goodsecurity_desc') }}</p>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-v2">
                        <span class="icon-settings"></span>
                        <h3>{{ trans('app.dashboard') }}</h3>
                        <p>{{ trans('app.dashboard_desc') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-light testimonial-wrap" id="testimonials-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <span class="subtitle-1">{{ trans('app.testimonials') }}</span>
                    <h2 class="section-title-1 font-weight-bold">{{ trans('app.whatPeopleSays') }}</h2>
                </div>
            </div>
        </div>
        <div class="slide-one-item home-slider owl-carousel">
            <div>
                <div class="testimonial">

                    <blockquote class="mb-5">
                        <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and
                            Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the
                            coast of the Semantics, a large language ocean.&rdquo;</p>
                    </blockquote>

                    <figure class="mb-4 d-flex align-items-center justify-content-center">
                        <div><img src="{{ asset('assets/images/person_3.jpg') }}" alt="Image" class="w-50 img-fluid mb-3"></div>
                        <p>John Smith</p>
                    </figure>
                </div>
            </div>
            <div>
                <div class="testimonial">

                    <blockquote class="mb-5">
                        <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary
                            regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your
                            mouth.&rdquo;</p>
                    </blockquote>
                    <figure class="mb-4 d-flex align-items-center justify-content-center">
                        <div><img src="{{ asset('assets/images/person_2.jpg') }}" alt="Image" class="w-50 img-fluid mb-3"></div>
                        <p>Christine Aguilar</p>
                    </figure>

                </div>
            </div>

            <div>
                <div class="testimonial">

                    <blockquote class="mb-5">
                        <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic life One day however a small line of blind text by the name of Lorem Ipsum
                            decided to leave for the far World of Grammar.&rdquo;</p>
                    </blockquote>
                    <figure class="mb-4 d-flex align-items-center justify-content-center">
                        <div><img src="{{ asset('assets/images/person_4.jpg') }}" alt="Image" class="w-50 img-fluid mb-3"></div>
                        <p>Robert Spears</p>
                    </figure>


                </div>
            </div>

            <div>
                <div class="testimonial">

                    <blockquote class="mb-5">
                        <p>&ldquo;The Big Oxmox advised her not to do so, because there were thousands of bad Commas,
                            wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She
                            packed her seven versalia, put her initial into the belt and made herself on the
                            way.&rdquo;</p>
                    </blockquote>
                    <figure class="mb-4 d-flex align-items-center justify-content-center">
                        <div><img src="{{ asset('assets/images/person_4.jpg') }}" alt="Image" class="w-50 img-fluid mb-3"></div>
                        <p>Bruce Rogers</p>
                    </figure>

                </div>
            </div>

        </div>
    </div>

    <div class="site-section" id="pricing-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-7 text-center mb-5">
                    <span class="subtitle-1">{{ trans('app.pricing') }}</span>
                    <h2 class="section-title-1 font-weight-bold">{{ trans('app.pricing_desc') }}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-3 mb-lg-0 pricing">
                    <div class="border p-5 text-center rounded">
                        <h3>Starter</h3>
                        <div class="price mb-3"><sup class="currency">$</sup><span class="number">30</span> <span
                                    class="per">/year</span></div>
                        <p class="text-muted mb-4">* Billed annualy or $10 per month</p>
                        <ul class="list-unstyled ul-check text-left success mb-5">
                            <li>Max 5 users</li>
                            <li>29 local security</li>
                            <li class="text-muted">
                                <del>Desktop App</del>
                            </li>
                            <li class="text-muted">
                                <del>Email Support</del>
                            </li>
                            <li class="text-muted">
                                <del>Phone Support 24/7</del>
                            </li>
                        </ul>
                        <p><a href="#" class="btn btn-lg btn-secondary rounded-0 btn-block">Buy Now</a></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-3 mb-lg-0 pricing">
                    <div class="border p-5 text-center rounded">
                        <h3>Starter</h3>
                        <div class="price mb-3"><sup class="currency">$</sup><span class="number">30</span> <span
                                    class="per">/year</span></div>
                        <p class="text-muted mb-4">* Billed annualy or $10 per month</p>
                        <ul class="list-unstyled ul-check text-left success mb-5">
                            <li>Max 5 users</li>
                            <li>29 local security</li>
                            <li class="text-muted">
                                <del>Desktop App</del>
                            </li>
                            <li class="text-muted">
                                <del>Email Support</del>
                            </li>
                            <li class="text-muted">
                                <del>Phone Support 24/7</del>
                            </li>
                        </ul>
                        <p><a href="#" class="btn btn-lg btn-secondary rounded-0 btn-block">Buy Now</a></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-3 mb-lg-0 pricing">
                    <div class="border p-5 text-center rounded">
                        <h3>Professional</h3>
                        <div class="price mb-3"><sup class="currency">$</sup><span class="number">72</span> <span
                                    class="per">/year</span></div>
                        <p class="text-muted mb-4">* Billed annualy or $30 per month</p>
                        <ul class="list-unstyled ul-check text-left success mb-5">
                            <li>Max 10 users</li>
                            <li>29 local security</li>
                            <li>Desktop App</li>
                            <li>Email Support</li>
                            <li class="text-muted">
                                <del>Phone Support 24/7</del>
                            </li>
                        </ul>
                        <p><a href="#" class="btn btn-lg btn-primary rounded-0 btn-block">Buy Now</a></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-3 mb-lg-0 pricing">
                    <div class="border p-5 text-center rounded">
                        <h3>Enterprise</h3>
                        <div class="price mb-3"><sup class="currency">$</sup><span class="number">130</span> <span
                                    class="per">/year</span></div>
                        <p class="text-muted mb-4">* Billed annualy or $10 per month</p>
                        <ul class="list-unstyled ul-check text-left success mb-5">
                            <li>Unlimitted users</li>
                            <li>29 local security</li>
                            <li>Desktop App</li>
                            <li>Email Support</li>
                            <li>Phone Support 24/7</li>
                        </ul>
                        <p><a href="#" class="btn btn-lg btn-secondary rounded-0 btn-block">Buy Now</a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="site-section bg-light" id="blog-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <span class="sub-title">Blog</span>
                    <h2 class="font-weight-bold text-black">{{ trans('app.news_updates') }}</h2>
                    <p class="mb-5">{{ trans('app.news_updates_desc') }}</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">
                    <div class="h-entry">
                        <a href="single.html">
                            <img src="{{ asset('assets/images/img_2.jpg') }}" alt="Image" class="img-fluid">
                        </a>
                        <h2 class="font-size-regular"><a href="#">Best For Web Startups and Web Apps</a></h2>
                        <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2020<span
                                    class="mx-2">&bullet;</span> <a href="#">News</a></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores
                            sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                        <p><a href="#">Continue Reading...</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="h-entry">
                        <a href="single.html">
                            <img src="{{ asset('assets/images/img_4.jpg') }}" alt="Image" class="img-fluid">
                        </a>
                        <h2 class="font-size-regular"><a href="#">Best For Web Startups and Web Apps</a></h2>
                        <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2020<span
                                    class="mx-2">&bullet;</span> <a href="#">News</a></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores
                            sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                        <p><a href="#">Continue Reading...</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="h-entry">
                        <a href="single.html">
                            <img src="{{ asset('assets/images/img_2.jpg') }}" alt="Image" class="img-fluid">
                        </a>
                        <h2 class="font-size-regular"><a href="#">Best For Web Startups and Web Apps</a></h2>
                        <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2020<span
                                    class="mx-2">&bullet;</span> <a href="#">News</a></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores
                            sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                        <p><a href="#">Continue Reading...</a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="site-section pb-0 bg-light" id="contact-section">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 class="font-weight-bold text-black">{{ trans('app.where') }}</h2>
                    <p class="mb-5">{{ trans('app.where_us') }}</p>
                </div>
            </div>

            <div class="row mb-5">


                <div class="col-md-4 text-center">
                    <p class="mb-4">
                        <span class="icon-room d-block h2 text-primary"></span>
                        <span>{{ trans('app.address') }}</span>
                    </p>
                </div>
                <div class="col-md-4 text-center">
                    <p class="mb-4">
                        <span class="icon-phone d-block h2 text-primary"></span>
                        <a href="#">{{ trans('app.phone') }}</a>
                    </p>
                </div>
                <div class="col-md-4 text-center">
                    <p class="mb-0">
                        <span class="icon-mail_outline d-block h2 text-primary"></span>
                        <a href="#">{{ trans('app.email') }}</a>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-5">


                    <form action="#" class="p-5 bg-white">

                        <h2 class="h4 text-black mb-5">{{ trans('app.contacts') }}</h2>

                        <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="text-black" for="fname">{{ trans('app.fristname') }}</label>
                                <input type="text" id="fname" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="text-black" for="lname">{{ trans('app.lastname') }}</label>
                                <input type="text" id="lname" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="email">{{ trans('app.email_contact') }}</label>
                                <input type="email" id="email" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="subject">{{ trans('app.subject') }}</label>
                                <input type="subject" id="subject" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="message">{{ trans('app.message') }}</label>
                                <textarea name="message" id="message" cols="30" rows="7" class="form-control"
                                          placeholder="{{ trans('app.message_notes') }}"></textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="{{ trans('app.send_message') }}" class="btn btn-primary btn-md text-white">
                            </div>
                        </div>


                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="site-section text-center">
        <div class="container">
            <h2 class="text-black mb-3">{{ trans('app.join') }}</h2>
            <p class="mb-5">{{ trans('app.focus') }}</p>
            <p><a href="#" class="btn btn-primary">{{ trans('app.request_demo') }}</a></p>
        </div>
    </div>

    <footer class="site-footer bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-5">
                            <h2 class="footer-heading mb-4">{{ trans('app.about_us') }}</h2>
                            <p>{{ trans('app.about_us_desc') }}</p>
                        </div>
                        <div class="col-md-3 ml-auto">
                            <h2 class="footer-heading mb-4">{{ trans('app.links') }}</h2>
                            <ul class="list-unstyled">
                                <li><a href="#about-section" class="smoothscroll">{{ trans('app.Terms') }}</a></li>
                                <li><a href="#about-section" class="smoothscroll">{{ trans('app.Policy') }}</a></li>
                                <li><a href="#about-section" class="smoothscroll">{{ trans('app.About') }}</a></li>
                                <li><a href="#services-section" class="smoothscroll">{{ trans('app.Services') }}</a></li>
                                <li><a href="#testimonials-section" class="smoothscroll">{{ trans('app.Testimonials') }}</a></li>
                                <li><a href="#contact-section" class="smoothscroll">{{ trans('app.Contact') }}</a></li>
                                <li><a href="{{ backpack_url() }}" class="smoothscroll">{{ trans('app.Login') }}</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 footer-social">
                            <h2 class="footer-heading mb-4">{{ trans('app.FollowUs') }}</h2>
                            <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <h2 class="footer-heading mb-4">{{ trans('app.SubscribeNewsletter') }}</h2>
                    <form action="#" method="post" class="footer-subscribe">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control border-secondary bg-transparent"
                                   placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary text-black" type="button" id="button-addon2">{{ trans('app.send') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <div class="border-top pt-5">
                        <p class="copyright"><small>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                                All rights reserved | Created by <i class="icon-heart text-danger"
                                                                                    aria-hidden="true"></i> by <a
                                        href="https://xepanunty.com" target="_blank">Xepanunty software services</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </small></p>

                    </div>
                </div>

            </div>
        </div>
    </footer>

</div> <!-- .site-wrap -->
<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('assets/js/aos.js') }}"></script>
<script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
