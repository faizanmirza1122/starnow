@extends('admin.layouts.app')

@section('title', 'Admin | Update Job Category')

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
                                            Update Job Category
                                        </h3>
                                    </div>
                                </div>

                                <!--begin::Form-->
                                <form class="kt-form kt-form--label-right" method="post"
                                    action="{{ route('job-categories.update', $jobCategory->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="m-3">
                                          @include('common.partials.error-summary')
                                    </div>

                                    <div class="kt-portlet__body col-lg-6 col-xl-6">
                                        <div class="form-group ">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i
                                                            class="bi bi-person-lines-fill"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Name"
                                                    aria-describedby="basic-addon1" name="name" value="{{ $jobCategory->name }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-portlet__foot">
                                        <div class="kt-form__actions">
                                            <button class="btn btn-primary" type="submit">Update</button>
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
