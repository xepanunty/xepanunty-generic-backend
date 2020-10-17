@extends('layouts.app')

@section('content')
    <div class="site-section hero" id="home-section">
        <div class="container text-center">
            <div class="row justify-content-center text-center">
                <div class="col-lg-10">
                    <div class="mb-5">
                        <h1 class="hero-heading">{{ trans('app.productivity') }}</h1>
                        <p>{{ trans('app.marketing') }}</p>
                        <a href="#pricing-section" class="btn btn-primary">{{ trans('app.free') }}</a>
                    </div>
                    <img src="{{ asset('assets/images/untree.co_dashboard_mocklayout_laptop.png') }}" alt="image"
                         class="img-fluid">
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
                    <img src="{{ asset('assets/images/untree.co_dashboard_mocklayout.jpg') }}" alt="Image"
                         class="img-fluid img-shadow">
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
                    <img src="{{ asset('assets/images/untree.co_dashboard_mocklayout.jpg') }}" alt="Image"
                         class="img-fluid img-shadow">
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
                    <img src="{{ asset('assets/images/untree.co_dashboard_mocklayout.jpg') }}" alt="Image"
                         class="img-fluid img-shadow">
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
                            Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at
                            the
                            coast of the Semantics, a large language ocean.&rdquo;</p>
                    </blockquote>

                    <figure class="mb-4 d-flex align-items-center justify-content-center">
                        <div><img src="{{ asset('assets/images/person_3.jpg') }}" alt="Image"
                                  class="w-50 img-fluid mb-3"></div>
                        <p>John Smith</p>
                    </figure>
                </div>
            </div>
            <div>
                <div class="testimonial">

                    <blockquote class="mb-5">
                        <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary
                            regelialia. It is a paradisematic country, in which roasted parts of sentences fly into
                            your
                            mouth.&rdquo;</p>
                    </blockquote>
                    <figure class="mb-4 d-flex align-items-center justify-content-center">
                        <div><img src="{{ asset('assets/images/person_2.jpg') }}" alt="Image"
                                  class="w-50 img-fluid mb-3"></div>
                        <p>Christine Aguilar</p>
                    </figure>

                </div>
            </div>

            <div>
                <div class="testimonial">

                    <blockquote class="mb-5">
                        <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an
                            almost
                            unorthographic life One day however a small line of blind text by the name of Lorem
                            Ipsum
                            decided to leave for the far World of Grammar.&rdquo;</p>
                    </blockquote>
                    <figure class="mb-4 d-flex align-items-center justify-content-center">
                        <div><img src="{{ asset('assets/images/person_4.jpg') }}" alt="Image"
                                  class="w-50 img-fluid mb-3"></div>
                        <p>Robert Spears</p>
                    </figure>


                </div>
            </div>

            <div>
                <div class="testimonial">

                    <blockquote class="mb-5">
                        <p>&ldquo;The Big Oxmox advised her not to do so, because there were thousands of bad
                            Commas,
                            wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She
                            packed her seven versalia, put her initial into the belt and made herself on the
                            way.&rdquo;</p>
                    </blockquote>
                    <figure class="mb-4 d-flex align-items-center justify-content-center">
                        <div><img src="{{ asset('assets/images/person_4.jpg') }}" alt="Image"
                                  class="w-50 img-fluid mb-3"></div>
                        <p>Bruce Rogers</p>
                    </figure>

                </div>
            </div>

        </div>
    </div>
    <!--test -->
    <div class="site-section" id="pricing-section">
        <ul class="nav nav-tabs mt-md-1" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab-b" data-toggle="tab" href="#pricing-section-1" role="tab" aria-controls="pricing-section-1"
                   aria-selected="true">BUSSINESS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                   aria-selected="false">PERSONAL</a>
            </li>
        </ul>
    </div>
    <div class="tab-content" id="tabs-ids">
        <div class="tab-pane fade active in show" id="pricing-section-1" role="tabpanel" aria-labelledby="home-tab-b">
            <div>
                <div >
                    <div class="row justify-content-center text-center">
                        <div class="col-7 text-center mb-5">
                            <span class="subtitle-1">{{ trans('app.pricing') }}</span>
                            <h2 class="section-title-1 font-weight-bold">{{ trans('app.pricing_desc') }}</h2>
                        </div>
                    </div>
                    <p class="text-muted mb-4">* Pode alterar funcionalidades mediante pagamento!</p>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 mb-3 mb-lg-0 pricing">
                            <div class="border p-5 text-center rounded">
                                <h3>FREE</h3>
                                <div class="price mb-3"><sup class="currency"></sup><span class="number">0€</span> <span
                                            class="per">/MONTH</span></div>
                                <ul class="list-unstyled ul-check text-left success mb-5">
                                    <li>5 Productos e servicos</li>
                                    <li>5 Postagens Facebook</li>
                                    <li>5 Postagens instagram</li>
                                    <li>5 Postagem em site de anuncios</li>
                                    <li class="text-muted">
                                        <del>Loja Online / Vendas</del>
                                    </li>
                                    <li class="text-muted">
                                        <del>Gestao de redes Sociais</del>
                                    </li>
                                    <li class="text-muted">
                                        <del>Gestao de clientes</del>
                                    </li>
                                    <li class="text-muted">
                                        <del>Facturacao</del>
                                    </li>
                                    <li class="text-muted">
                                        <del>Gestao de parceiros</del>
                                    </li>
                                </ul>
                                <p><a href="register/free"
                                      class="btn btn-lg btn-secondary rounded-0 btn-block">Subscreva</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-3 mb-lg-0 pricing">
                            <div class="border p-5 text-center rounded">
                                <h3>Starter</h3>
                                <div class="price mb-3"><sup class="currency"></sup><span class="number">11€</span> <span
                                            class="per">/MONTH</span></div>
                                <ul class="list-unstyled ul-check text-left success mb-5">
                                    <li>15 Productos e servicos</li>
                                    <li>15 Postagens Facebook</li>
                                    <li>15 Postagens instagram</li>
                                    <li>15 Postagem em site de anuncio</li>
                                    <li class="text-muted">
                                        <del>Loja Online / Vendas</del>
                                    </li>
                                    <li class="text-muted">
                                        <del>Gestao de redes Sociais</del>
                                    </li>
                                    <li class="text-muted">
                                        <del>Gestao de clientes</del>
                                    </li>
                                    <li class="text-muted">
                                        <del>Facturacao</del>
                                    </li>
                                    <li class="text-muted">
                                        <del>Gestao de parceiros</del>
                                    </li>
                                </ul>
                                <p><a href="register/starter"
                                      class="btn btn-lg btn-secondary rounded-0 btn-block">Subscreva</a>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-3 mb-lg-0 pricing">
                            <div class="border p-5 text-center rounded">
                                <h3>Professional</h3>
                                <div class="price mb-3"><sup class="currency"></sup><span class="number">22€</span> <span
                                            class="per">/MONTH</span></div>
                                <ul class="list-unstyled ul-check text-left success mb-5">
                                    <li>Productos e servicos ilimitados</li>
                                    <li>Postagens Facebook ilimitadas</li>
                                    <li>Postagens instagram ilimitadas</li>
                                    <li>Postagem em site de anuncio ilimitadas</li>
                                    <li class="text-muted">
                                        <del>Loja Online / Vendas</del>
                                    </li>
                                    <li class="text-muted">
                                        <del>Gestao de redes Sociais</del>
                                    </li>
                                    <li class="text-muted">
                                        <del>Gestao de clientes</del>
                                    </li>
                                    <li class="text-muted">
                                        <del>Facturacao</del>
                                    </li>
                                    <li class="text-muted">
                                        <del>Gestao de parceiros</del>
                                    </li>
                                </ul>
                                <p><a href="register/professional"
                                      class="btn btn-lg btn-primary rounded-0 btn-block">Subscreva</a></p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-3 mb-lg-0 pricing">
                            <div class="border p-5 text-center rounded">
                                <h3>Enterprise</h3>
                                <div class="price mb-3"><sup class="currency"></sup><span class="number">43€</span> <span
                                            class="per">/MONTH</span></div>
                                <ul class="list-unstyled ul-check text-left success mb-5">
                                    <li>Productos e servicos ilimitados</li>
                                    <li>Postagens Facebook ilimitadas</li>
                                    <li>Postagens instagram ilimitadas</li>
                                    <li>Postagem em site de anuncio ilimitadas</li>
                                    <li>Loja Online / Vendas</li>
                                    <li>Gestao de redes Sociais</li>
                                    <li>Gestao de clientes</li>
                                    <li>Facturacao</li>
                                    <li>Gestao de parceiros</li>
                                </ul>
                                <p><a href="register/enterprise"
                                      class="btn btn-lg btn-secondary rounded-0 btn-block">Subscreva</a></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div>
                <div>
                    <div class="row justify-content-center text-center">
                        <div class="col-7 text-center mb-5">
                            <span class="subtitle-1">{{ trans('app.pricing') }}</span>
                            <h2 class="section-title-1 font-weight-bold">{{ trans('app.pricing_desc_personal') }}</h2>
                        </div>
                    </div>
                    <p class="text-muted mb-4">* Pode alterar funcionalidades mediante pagamento!</p>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 mb-3 mb-lg-0 pricing">
                            <div class="border p-5 text-center rounded">
                                <h3>PERSONAL</h3>
                                <div class="price mb-3"><sup class="currency"></sup><span class="number">0€</span> <span
                                            class="per">/MONTH</span></div>
                                <ul class="list-unstyled ul-check text-left success mb-5">
                                    <li>5 Productos e servicos</li>
                                    <li>5 Postagens Facebook</li>
                                    <li>5 Postagens instagram</li>
                                    <li>5 Postagem em site de anuncios</li>
                                    <li class="text-muted">
                                        <del>Loja Online / Vendas</del>
                                    </li>
                                    <li class="text-muted">
                                        <del>Gestao de redes Sociais</del>
                                    </li>
                                    <li class="text-muted">
                                        <del>Gestao de clientes</del>
                                    </li>
                                    <li class="text-muted">
                                        <del>Facturacao</del>
                                    </li>
                                    <li class="text-muted">
                                        <del>Gestao de parceiros</del>
                                    </li>
                                </ul>
                                <p><a href="register/personal"
                                      class="btn btn-lg btn-secondary rounded-0 btn-block">Subscreva</a>
                                </p>
                            </div>
                        </div>
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
                        <h2 class="font-size-regular"><a href="#">Support Mb-Away</a></h2>
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
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    <form method="post" action="{{ route('contact.store', '#contact-section') }}"
                          class="p-5 bg-white">
                        <!-- CROSS Site Request Forgery Protection -->
                        @csrf

                        <h2 class="h4 text-black mb-5">{{ trans('app.contacts') }}</h2>

                        <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="text-black" for="fname">{{ trans('app.fristname') }}</label>
                                <input required type="text"
                                       class="form-control {{ $errors->has('fname') ? 'error' : '' }}" name="fname"
                                       id="fname">
                                <!-- Error -->
                                @if ($errors->has('fname'))
                                    <div class="text-danger">
                                        {{ $errors->first('fname') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label class="text-black" for="lname">{{ trans('app.lastname') }}</label>
                                <input required type="text"
                                       class="form-control {{ $errors->has('lname') ? 'error' : '' }}" name="lname"
                                       id="lname">
                                @if ($errors->has('lname'))
                                    <div class="text-danger">
                                        {{ $errors->first('lname') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="email">{{ trans('app.email_contact') }}</label>
                                <input required type="email"
                                       class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email"
                                       id="email">
                                @if ($errors->has('email'))
                                    <div class="text-danger">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="subject">{{ trans('app.subject') }}</label>
                                <input required type="text"
                                       class="form-control {{ $errors->has('subject') ? 'error' : '' }}"
                                       name="subject"
                                       id="subject">
                                @if ($errors->has('subject'))
                                    <div class="text-danger">
                                        {{ $errors->first('subject') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="message">{{ trans('app.message') }}</label>

                                <textarea required class="form-control {{ $errors->has('message') ? 'error' : '' }}"
                                          name="message" id="message" cols="30" rows="7"
                                          placeholder="{{ trans('app.message_notes') }}"></textarea>

                                @if ($errors->has('message'))
                                    <div class="text-danger">
                                        {{ $errors->first('message') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="{{ trans('app.send_message') }}"
                                       name="send" class="btn btn-primary btn-md text-white">
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
            <p><a href="/register" class="btn btn-primary">{{ trans('app.request_demo') }}</a></p>
        </div>
    </div>
    <!-- Modal -->
    <!--<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true close-btn">×</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
        data-toggle="modal" data-target="#exampleModal" -> use
    </div> -->
@endsection