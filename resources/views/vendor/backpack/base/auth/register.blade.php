<?php header("Access-Control-Allow-Origin: *"); ?>
@extends(backpack_view('layouts.plain'))
<?php
$request = request()->fullUrl();
$explodeUri =  explode('/', $request);
$selectedPackage = isset(array_reverse($explodeUri)[0]) ? strtoupper(array_reverse($explodeUri)[0]) : "FREE";
$selectedPackage = $selectedPackage != "REGISTER" ? $selectedPackage : "FREE";
?>
@section('content')
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-4">
            <h3 class="text-center mb-4">{{ trans('backpack::base.register') }}</h3>
            <div class="card">
                <div class="card-body">
                    <form class="col-md-12 p-t-10" role="form" method="POST" action="{{ route('backpack.auth.register') }}">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label class="control-label" for="name">{{ trans('app.NIF') }}</label>
                            <div>
                                <input type="text" maxlength="9" class="form-control{{ $errors->has('nif') ? ' is-invalid' : '' }}" name="nif" id="nif-nif" value="{{ old('nif') }}">

                                @if ($errors->has('nif'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nif') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="name">{{ trans('backpack::base.name') }}</label>

                            <div>
                                <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="name">{{ trans('app.insert_phone') }}</label>

                            <div>
                                <input type="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" id="phone" value="{{ old('phone') }}">

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="name">{{ trans('app.package') }}</label>

                            <div>
                                <select  {{$selectedPackage !== "FREE" ? 'disabled' : '' }} name="package" id="package"  class="form-control{{ $errors->has('package') ? ' is-invalid' : '' }}">
                                    <option value="FREE" {{$selectedPackage == "FREE" ? 'selected' : '' }}>{{trans('app.FREE') }}</option>
                                    <option value="STARTER" {{$selectedPackage == "STARTER" ? 'selected' : '' }}>{{trans('app.STARTER') }}</option>
                                    <option value="PROFESSIONAL" {{$selectedPackage == "PROFESSIONAL" ? 'selected' : '' }}>{{trans('app.PROFESSIONAL') }}</option>
                                    <option value="ENTERPRISE" {{$selectedPackage == "ENTERPRISE" ? 'selected' : '' }}>{{trans('app.ENTERPRISE') }}</option>
                                </select>
                                @if ($errors->has('package'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('package') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="{{ backpack_authentication_column() }}">{{ config('backpack.base.authentication_column_name') }}</label>

                            <div>
                                <input type="{{ backpack_authentication_column()=='email'?'email':'text'}}" class="form-control{{ $errors->has(backpack_authentication_column()) ? ' is-invalid' : '' }}" name="{{ backpack_authentication_column() }}" id="{{ backpack_authentication_column() }}" value="{{ old(backpack_authentication_column()) }}">

                                @if ($errors->has(backpack_authentication_column()))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first(backpack_authentication_column()) }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="password">{{ trans('backpack::base.password') }}</label>

                            <div>
                                <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="password_confirmation">{{ trans('backpack::base.confirm_password') }}</label>

                            <div>
                                <input type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" id="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="{{ $errors->has('terms_and_conditions') ? ' is-invalid' : '' }}" name="terms_and_conditions" id="terms_and_conditions">
                           <label class="control-label" for="terms_and_conditions"><a href="terms" target="_blank"><span >{{ trans('app.terms_and_conditions') }}</span></a></label>
                        @if ($errors->has('terms_and_conditions'))
                                    <span class="invalid-feedback" style="display: block!important;">
                                        <strong>{{ $errors->first('terms_and_conditions') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="{{ $errors->has('use_phone_in_transactions') ? ' is-invalid' : '' }}" name="use_phone_in_transactions" id="use_phone_in_transactions">
                            <label class="control-label" for="use_phone_in_transactions">{{ trans('app.use_phone_in_transactions') }}</label>
                            @if ($errors->has('use_phone_in_transactions'))
                                <span class="invalid-feedback" style="display: block!important;">
                                        <strong>{{ $errors->first('use_phone_in_transactions') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-block btn-primary">
                                    {{ trans('backpack::base.register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection