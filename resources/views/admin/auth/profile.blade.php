@extends('admin.layouts.app')

@section('title', 'Admin | Profile')

@section('content')
    <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
        <div class="kt-container  kt-container--fluid  kt-grid kt-grid--ver">
            @include('admin.partials.side-bar')
            <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

                <!-- begin:: Content -->
                <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

                    @include('common.partials.error-summary')
                    @include('common.partials.alerts')

                        <div class="col-lg-12 col-xl-12 order-lg-1 order-xl-1">
                            <!--begin::Portlet-->
                            <div class="kt-portlet w-100">
                                <div class="kt-portlet__head">
                                    <div class="kt-portlet__head-label">
                                        <h3 class="kt-portlet__head-title">
                                            Profile
                                        </h3>
                                    </div>
                                </div>

                                <div class="container-fluid row col-lg-12 col-xl-12 m-3">
                                    <div class="form-group col-lg-6 col-xl-6">
                                        <label for="email">Email</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="bi bi-envelope-fill"></i></span>
                                            </div>
                                            <input type="text" class="form-control" aria-describedby="basic-addon1"
                                                id="email" name="email" value="{{ old('email', $user->email) }}" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--end::Portlet-->
                        </div>
                    <div class="col-lg-12 col-xl-12 order-lg-1 order-xl-1">
                        <!--begin::Portlet-->
                        <div class="kt-portlet w-100">
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                                    <h3 class="kt-portlet__head-title">
                                        Change password
                                    </h3>
                                </div>
                            </div>

                            <!--begin::Form-->
                            <form class="kt-form kt-form--label-right p-4" method="post"
                                action="{{ route('admin.change.password') }}">
                                @csrf
                                @method('PUT')
                                <div class="container-fluid row col-lg-12 col-xl-12">
                                    <div class="form-group col-lg-12 col-xl-12">
                                        <label for="old_password">Old password</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="bi bi-lock-fill"></i></span>
                                            </div>
                                            <input type="password" class="form-control" aria-describedby="basic-addon1"
                                                id="old_password" name="old_password" value="{{ old('old_password') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid row col-lg-12 col-xl-12">
                                    <div class="form-group col-lg-6 col-xl-6">
                                        <label for="new_password">New password</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="bi bi-lock-fill"></i></span>
                                            </div>
                                            <input type="password" class="form-control" aria-describedby="basic-addon1"
                                                id="new_password" name="new_password" value="{{ old('new_password') }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6 col-xl-6">
                                        <label for="confirm_password">Confirm Password name</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="bi bi-lock-fill"></i></span>
                                            </div>
                                            <input type="password" class="form-control" aria-describedby="basic-addon1"
                                                name="confirm_password" id="confirm_password"
                                                value="{{ old('confirm_password') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="kt-portlet__foot">
                                    <div class="kt-form__actions">
                                        <button class="btn btn-primary" type="submit">Update password</button>
                                    </div>
                                </div>
                            </form>

                            <!--end::Form-->
                        </div>

                        <!--end::Portlet-->
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
