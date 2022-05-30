@extends('admin.layouts.app')

@section('title', 'Admin | Create Job')

@section('content')
    <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
        <div class="kt-container  kt-container--fluid  kt-grid kt-grid--ver">
            @include('client.partials.side-bar')
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
                                            Create Job
                                        </h3>
                                    </div>
                                </div>

                                <!--begin::Form-->
                                <form class="kt-form kt-form--label-right" method="post"
                                    action="{{ route('client-jobs.store') }}">
                                    @csrf
                                    <div class="m-3">
                                        @include('common.partials.error-summary')
                                    </div>
                                    <div class="kt-portlet__body">
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Title *</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <input type="text" class="form-control" name="title" placeholder="Enter your title">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Description *</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <textarea class="form-control" name="description" placeholder="Enter a description" rows="8"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Expire in *</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <input type="date" class="form-control" name="expire_in" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Job Category *</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12 form-group-sub">
                                                <select class="form-control" name="job_category_id">
                                                    <option value="">Select Job Category</option>
                                                    @foreach($jobCategories as $jobCategory)
                                                    <option value="{{ $jobCategory->id }}">{{ $jobCategory->name }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="form-text text-muted">Please select an option.</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Salary Range *</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12 form-group-sub">
                                                <select class="form-control" name="salary_range">
                                                    <option value="">Select Salary Range </option>
                                                    @foreach($salaryRanges as $salaryRange)
                                                    <option value="{{ $salaryRange->id }}">{{ $salaryRange->salary }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="form-text text-muted">Please select an option.</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Experience *</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12 form-group-sub">
                                                <select class="form-control" name="required_experience_id">
                                                    <option value="">Select Required Experience </option>
                                                    @foreach($requiredExpreiences as $requiredExpreience)
                                                    <option value="{{ $requiredExpreience->id }}">{{ $requiredExpreience->experience }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="form-text text-muted">Please select an option.</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Experience Level *</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12 form-group-sub">
                                                <select class="form-control" name="experience_level_id">
                                                    <option value="">Select Required Experience Level </option>
                                                    @foreach($expreienceLevels as $expreienceLevel)
                                                    <option value="{{ $expreienceLevel->id }}">{{ $expreienceLevel->experience_level }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="form-text text-muted">Please select an option.</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Country *</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12 form-group-sub">
                                                <select class="form-control" name="country">
                                                    <option value="">Select Country </option>
                                                    @foreach($countries as $country)
                                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="form-text text-muted">Please select an option.</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Worker Roles for Job *</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12 form-group-sub">
                                                <select class="form-control" name="worker_roles" multiple>
                                                    <option value="">Select Roles for Job </option>
                                                    @foreach($workerRoles as $workerRole)
                                                    <option value="{{ $workerRole->id }}">{{ $workerRole->name }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="form-text text-muted">Please select an option.</span>
                                            </div>
                                        </div>
                                     
                                        {{-- <div class="kt-separator kt-separator--border-dashed kt-separator--space-xl"></div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Checkbox *</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <div class="kt-checkbox-inline">
                                                    <label class="kt-checkbox">
                                                        <input type="checkbox" name="checkbox"> Tick me
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <span class="form-text text-muted">Please tick the checkbox</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Checkboxes *</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <div class="kt-checkbox-list">
                                                    <label class="kt-checkbox">
                                                        <input type="checkbox" name="checkboxes"> Option 1
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox">
                                                        <input type="checkbox" name="checkboxes"> Option 2
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox">
                                                        <input type="checkbox" name="checkboxes"> Option 3
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <span class="form-text text-muted">Please select at lease 1 and maximum 2 options</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Radios *</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <div class="kt-radio-inline">
                                                    <label class="kt-radio">
                                                        <input type="checkbox" name="radio"> Option 1
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-radio">
                                                        <input type="checkbox" name="radio"> Option 2
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-radio">
                                                        <input type="radio" name="radio"> Option 3
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <span class="form-text text-muted">Please select an option</span>
                                            </div>
                                        </div> --}}
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
