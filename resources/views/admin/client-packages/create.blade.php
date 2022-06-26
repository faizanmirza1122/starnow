@extends('admin.layouts.app')

@section('title', 'Admin | Create Package for client')

<!-- Latest compiled and minified CSS -->
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css"> --}}

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

@section('content')
    <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
        <div class="kt-container  kt-container--fluid  kt-grid kt-grid--ver">
            @include('admin.partials.side-bar')
            <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

                <!-- begin:: Content -->
                <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

                    <!--Begin::Dashboard 1-->

                    <!--Begin::Row-->
                    <div class="row">
                        <div class="col-lg-12 col-xl-12 order-lg-1 order-xl-1">
                            <!--begin::Portlet-->
                            <div class="kt-portlet w-100">
                                <div class="kt-portlet__head">
                                    <div class="kt-portlet__head-label">
                                        <h3 class="kt-portlet__head-title">
                                            Create Package for client
                                        </h3>
                                    </div>
                                </div>

                                <!--begin::Form-->
                                <form class="kt-form kt-form--label-right" method="post"
                                    action="{{ route('client-packages.store') }}">
                                    @csrf
                                    <div class="m-3">
                                        @include('common.partials.error-summary')
                                    </div>
                                    <div class="kt-portlet__body">
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Name *</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <input type="text" class="form-control" name="name"
                                                    value="{{ old('name') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Description *</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <textarea class="form-control" name="description" placeholder="Enter a description" rows="8">{{ old('description') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Price *</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <input min="1" type="number" class="form-control" name="price"
                                                   value="{{ old('price') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Package expire duration (days) *</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <input min="1" type="number" class="form-control" name="package_expire_duration_in_days"
                                                     value="{{ old('package_expire_duration_in_days') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Allowed jobs per day *</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <input min="1" type="number" class="form-control" name="allowed_no_of_jobs_per_day"
                                                     value="{{ old('allowed_no_of_jobs_per_day') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Job expire duration (days) *</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <input min="1" type="number" class="form-control" name="job_expire_duration_in_days"
                                                     value="{{ old('job_expire_duration_in_days') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="kt-portlet__foot">
                                        <div class="kt-form__actions">
                                            <button class="btn btn-primary" type="submit">Create</button>
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
    </div>
@endsection
<script>
    $(document).ready(function() {
        $('select').selectpicker();
    });
</script>
