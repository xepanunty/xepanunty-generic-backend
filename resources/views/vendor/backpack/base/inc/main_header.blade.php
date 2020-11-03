<?php
// change styles and logo, based on the logo
$country = env('APP_LOCAL') === "PT" ? "pt" : "lu";
$isPortugal = env('APP_LOCAL') === "PT";
$link  = "/";
if(env('APP_ENV') !== 'local' && $isPortugal) {
  $link  = "https://incomeportugal.pt";
}else if(env('APP_ENV') !== 'local' && !$isPortugal) {
  $link  = "https://incomeluxembourg.lu";
}
?>

<header class="{{ config('backpack.base.header_class') }}">
  <!-- Logo -->
  <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto ml-3" type="button" data-toggle="sidebar-show" aria-label="{{ trans('backpack::base.toggle_navigation')}}">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="{{ $link }}" title="{{ config('backpack.base.project_name') }}">
    <img width="100%" src="{{
     $isPortugal ? asset('assets/logo/income_pt.png') : asset('assets/logo/income_lu_white.png')}}"
         alt="{{ trans('app.logo') }}"/>

  </a>
  <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show" aria-label="{{ trans('backpack::base.toggle_navigation')}}">
    <span class="navbar-toggler-icon"></span>
  </button>

  @include(backpack_view('inc.menu'))
</header>
