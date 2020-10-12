@extends('layouts.app')

@section('content')
    <div class="site-section hero">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    {{$page->title}}
                    {!! $page->content !!}
                </div>
            </div>
        </div>
    </div>
@endsection
