@extends('client.layouts.app')

@section('title', 'Client | Update Job')

<!-- Latest compiled and minified CSS -->
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css"> --}}

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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
                                            Update Job
                                        </h3>
                                    </div>
                                </div>

                                <!--begin::Form-->
                                <form class="kt-form kt-form--label-right" method="post"
                                    action="{{ route('client-jobs.update', $job->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="m-3">
                                        @include('common.partials.error-summary')
                                    </div>
                                    <div class="kt-portlet__body">
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Title *</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <input type="text" class="form-control" name="title"
                                                    placeholder="Enter your title" value="{{ old('title', $job->title) }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Description *</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <textarea class="form-control" name="description" placeholder="Enter a description" rows="8">{{ old('description', $job->description) }}</textarea>
                                            </div>
                                        </div>
                                        {{-- <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Expire in *</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <input type="date" class="form-control" name="expire_in" value="{{ old('expire_in', $job->expire_in) }}">
                                            </div>
                                        </div> --}}
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Job Category *</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12 form-group-sub">
                                                <select class="form-control" name="job_category_id" data-live-search="true">
                                                    <option value="">Select Job Category</option>
                                                    @foreach ($jobCategories as $jobCategory)
                                                        <option {{ old('job_category_id', $job->job_category_id) == $jobCategory->id ? 'selected' : '' }} value="{{ $jobCategory->id }}">{{ $jobCategory->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <span class="form-text text-muted">Please select an option.</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Salary Range *</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12 form-group-sub">
                                                <select class="form-control" name="salary_range_id" data-live-search="true">
                                                    <option value="">Select Salary Range </option>
                                                    @foreach ($salaryRanges as $salaryRange)
                                                        <option {{ old('salary_range_id', $job->salary_range_id) == $salaryRange->id ? 'selected' : '' }} value="{{ $salaryRange->id }}">
                                                            {{ $salaryRange->salary }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="form-text text-muted">Please select an option.</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Experience *</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12 form-group-sub">
                                                <select class="form-control" name="experience_duration_id" data-live-search="true">
                                                    <option value="">Select Required Experience </option>
                                                    @foreach ($expreienceDurations as $expreienceDuration)
                                                        <option {{ old('experience_duration_id', $job->experience_duration_id) == $expreienceDuration->id ? 'selected' : '' }} value="{{ $expreienceDuration->id }}">
                                                            {{ $expreienceDuration->duration }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="form-text text-muted">Please select an option.</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Experience Level *</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12 form-group-sub">
                                                <select class="form-control" name="experience_level_id" data-live-search="true">
                                                    <option value="">Select Required Experience Level </option>
                                                    @foreach ($expreienceLevels as $expreienceLevel)
                                                        <option {{ old('experience_level_id', $job->experience_level_id) == $expreienceLevel->id ? 'selected' : '' }} value="{{ $expreienceLevel->id }}">
                                                            {{ $expreienceLevel->experience_level }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="form-text text-muted">Please select an option.</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Country *</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12 form-group-sub">
                                                <select class="form-control" name="country_id" data-live-search="true">
                                                    <option value="">Select Country </option>
                                                    @foreach ($countries as $country)
                                                        <option {{ old('country_id', $job->country_id) == $country->id ? 'selected' : '' }} value="{{ $country->id }}">{{ $country->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <span class="form-text text-muted">Please select an option.</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Required Roles *</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12 form-group-sub">
                                                <select class="form-control selectpicker" name="worker_roles[]" multiple data-live-search="true">
                                                    <option value="">Select Roles for Job </option>
                                                    @foreach ($workerRoles as $workerRole)
                                                        <option value="{{ $workerRole->id }}">{{ $workerRole->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <span class="form-text text-muted">Please select an option.</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Tags *</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12 form-group-sub">
                                                <select class="form-control selectpicker" name="tags[]" multiple data-live-search="true">
                                                    <option value="">Select Tags for Job </option>
                                                    @foreach ($tags as $tag)
                                                        <option value="{{ $tag->id }}">{{ $tag->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <span class="form-text text-muted">Please select an option.</span>
                                            </div>
                                        </div>

                                        {{-- @foreach ($workerRoles as $workerRole)
                                            <div class="form-group" style="display: inline-block !important;">
                                                <div class="form-check">
                                                    <input class="form-check-input" style="display: none !important;"
                                                        type="checkbox" value="{{ $workerRole->id }}"
                                                        id="workerRole{{ $workerRole->id }}" name="worker_roles[]">
                                                    <label class="worker-roles form-check-label "
                                                        for="workerRole{{ $workerRole->id }}">
                                                        {{ $workerRole->name }}
                                                    </label>
                                                </div>
                                            </div>
                                        @endforeach --}}
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
<script>
    $(document).ready(function() {
        $('select').selectpicker();
    });
</script>
