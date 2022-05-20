@extends('admin.layouts.app')

@section('title', 'Admin Login')

@section('content')
    <nav class="text-center">
        <a href="{{ route('home') }}" class="nav-logo--centered" tabindex="1" rel="home" title="Home">
            <img src="/images/logo.png" class="nav-logo__image" alt="StarNow" width="110">
        </a>
    </nav>
    <!-- begin:: Content -->
    <div style="margin-top:230px">
        <div class="kt-container  kt-grid__item kt-grid__item--fluid" style="width:30%">

            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h1 class="kt-portlet__head-title">
                            Administrator Login
                        </h1>
                    </div>
                </div>
                <div class="mx-4 mt-4">
                    @include('common.partials.alerts')
                    @include('common.partials.error-summary')
                </div>
                <!--begin::Form-->
                <form class="kt-form kt-form--label-right" id="kt_form_1" method="post"
                    action="{{ route('admin.login.post') }}">
                    @csrf
                    <div class="kt-portlet__body ">
                        <div class="form-group row ">
                            <label class="col-form-label col-lg-3 col-sm-12">Email Address *</label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <div class='input-group'>
                                    <input type='text' class="form-control" name="email" />
                                    {{-- <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="la la-calendar-check-o"></i>
                                        </span>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12">Password *</label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <div class='input-group'>
                                    <input type='password' class="form-control" name="password" />
                                    {{-- <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="la la-calendar-check-o"></i>
                                        </span>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label class="col-form-label col-lg-3 col-sm-12"></label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <button type="submit" class="btn btn-success w-50 float-right">LOGIN</button>
                            </div>
                        </div>
                    </div>
                </form>

                <!--end::Form-->
            </div>

            <!--end::Portlet-->
        </div>
    </div>

    <!-- end:: Content -->

@endsection
