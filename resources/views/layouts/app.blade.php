<!DOCTYPE html>
<?php
// change styles and logo, based on the logo
$country = env('APP_LOCAL') === "PT" ? "pt" : "lu";
$isPortugal = env('APP_LOCAL') === "PT";
?>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ trans('app.title') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/'.$country.'/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select-country.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/'.$country.'/style.css') }}">

    <link rel="stylesheet" href="//unpkg.com/bootstrap@3.3.7/dist/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="//unpkg.com/bootstrap-select@1.12.4/dist/css/bootstrap-select.min.css" type="text/css" />
    <link rel="stylesheet" href="//unpkg.com/bootstrap-select-country@4.0.0/dist/css/bootstrap-select-country.min.css" type="text/css" />

    <script src="//unpkg.com/jquery@3.4.1/dist/jquery.min.js"></script>
    <script src="//unpkg.com/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <script src="//unpkg.com/bootstrap-select@1.12.4/dist/js/bootstrap-select.min.js"></script>
    <script src="//unpkg.com/bootstrap-select-country@4.0.0/dist/js/bootstrap-select-country.min.js"></script>

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
                    <div class="mb-0 mr-10">
                        <img class="mb-0 site-logo" src="{{
   $isPortugal ? asset('assets/logo/income_pt.png') : asset('assets/logo/income_lu.png')}}"
                             alt="{{ trans('app.logo') }}"/>
                    </div>
                </div>
<!--https://laracasts.com/discuss/channels/laravel/jumping-to-an-anchor-tag-in-routes-->
                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" style="margin-right: -20px;"
                         role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="{{route('base')}}/#home-section" class="nav-link">{{ trans('app.home') }}</a></li>
                            <li>
                                <a href="#features-section" class="nav-link">{{ trans('app.features') }}</a>
                            </li>
                            <li><a href="#pricing-section" class="nav-link">{{ trans('app.pricing') }}</a></li>

                            <li><a href="/store" class="nav-link">{{ trans('app.store') }}</a></li>
                            <li><a href="#blog-section" class="nav-link">{{ trans('app.blog') }}</a></li>
                            <li><a href="#contact-section" class="nav-link">{{ trans('app.contact') }}</a></li>


                            <li class="social"><a
                                        href="https://www.facebook.com/{{$isPortugal ? 'INCOMEPORTUGAL' : 'INCOMELUXEMBOURG' }}"
                                        target="_blank" class="nav-link"><span
                                            class="icon-facebook"></span></a></li>
                            <li class="social"><a
                                        href="https://www.instagram.com/{{$isPortugal ? 'INCOMEPORTUGAL' : 'INCOMELUXEMBOURG' }}"
                                        target="_blank" class="nav-link"><span
                                            class="icon-instagram"></span></a></li>
                            <li class="social"><a
                                        href="https://www.linkedin.com/in/{{$isPortugal ? 'INCOMEPORTUGAL' : 'INCOMELUXEMBOURG' }}"
                                        target="_blank" class="nav-link"><span
                                            class="icon-linkedin"></span></a></li>
                            @auth
                                <a class="btn btn-primary text-black" type="button"
                                   href="admin/dashboard">{{ trans('app.admin') }}
                                </a>
                            @else
                                <a class="btn btn-primary" href="admin/dashboard" type="button">{{ trans('app.login') }}
                                </a>
                            @endauth
                        </ul>
                    </nav>
                    @if(!$isPortugal)
                        <div>
                            <select class="selectpicker countrypicker" data-default="LU"
                                    data-flag="true"  data-text="false" data-countries="PT,GB,FR,DE,LU"></select>
                        </div>
                    @endif
                </div>
                <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a
                            href="#" class="site-menu-toggle js-menu-toggle float-right"><span
                                class="icon-menu h3 text-black"></span></a></div>
            </div>
        </div>
    </header>
    <div class="container">
        @yield('content')
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
                                <li><a href="/static/faqs"
                                       class="smoothscroll">{{ trans('app.FAQs') }}</a></li>
                                <li><a href="/static/terms"
                                       class="smoothscroll">{{ trans('app.Terms') }}</a></li>
                                <li><a href="/static/policy"
                                       class="smoothscroll">{{ trans('app.Policy') }}</a></li>
                                <li><a href="/static/cookies"
                                       class="smoothscroll">{{ trans('app.cookies') }}</a></li>
                                <li><a href="/static/refound"
                                       class="smoothscroll">{{ trans('app.refound') }}</a></li>
                                <li><a href="/static/claims"
                                       class="smoothscroll">{{ trans('app.claims') }}</a></li>
                                <li><a href="/static/about"
                                       class="smoothscroll">{{ trans('app.About') }}</a></li>
                                <li><a href="/#pricing-section"
                                       class="smoothscroll">{{ trans('app.Services') }}</a>
                                </li>
                                <li><a href="#testimonials-section"
                                       class="smoothscroll">{{ trans('app.Testimonials') }}</a></li>
                                <li><a href="#contact-section"
                                       class="smoothscroll">{{ trans('app.Contact') }}</a></li>
                                <li><a href="{{ backpack_url() }}" class="smoothscroll">{{ trans('app.Login') }}</a>
                                </li>
                                <li><a href="/static/GDPR"
                                       class="smoothscroll">{{ trans('app.GDPR') }}</a></li>
                                <li><a href="/static/licence"
                                       class="smoothscroll">{{ trans('app.licence') }}</a></li>
                                <li><a href="/static/team"
                                       class="smoothscroll">{{ trans('app.team') }}</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 footer-social">
                            <h2 class="footer-heading mb-4">{{ trans('app.FollowUs') }}</h2>
                            <a href="https://www.facebook.com/{{$isPortugal ? 'INCOMEPORTUGAL' : 'INCOMELUXEMBOURG' }}"
                               target="_blank" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                            <a href="https://www.instagram.com/{{$isPortugal ? 'INCOMEPORTUGAL' : 'INCOMELUXEMBOURG' }}"
                               target="_blank" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                            <a href="https://www.linkedin.com/in/{{$isPortugal ? 'INCOMEPORTUGAL' : 'INCOMELUXEMBOURG' }}"
                               target="_blank" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" id="newsletter-section">
                    <h2 class="footer-heading mb-4">{{ trans('app.SubscribeNewsletter') }}</h2>
                    <form method="post" action="{{ route('contact.newsletter', '#newsletter-section') }}"
                          class="footer-subscribe">
                        @csrf
                        <div class="input-group mb-3">
                            <input required type="email" name="email"
                                   class="form-control border-secondary bg-transparent"
                                   placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary text-black" type="submit"
                                        id="button-addon2">{{ trans('app.send') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    @if(Session::has('success-sub'))
                        <div class="alert alert-success">
                            {{Session::get('success-sub')}}
                        </div>
                    @endif
                    @if(Session::has('error-sub'))
                        <div class="alert alert-danger">
                            {{Session::get('error-sub')}}
                        </div>
                    @endif
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
<script src="{{ asset('assets/js/bootstrap-select-country.min.js') }}"></script>
</body>
</html>
