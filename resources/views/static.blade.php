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
@endsection
