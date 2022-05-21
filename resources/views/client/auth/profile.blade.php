@extends('client.layouts.app')

@section('title', 'Client | Profile')

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
                            @include('common.partials.error-summary')
                            @include('common.partials.alerts')
                            <!--begin::Portlet-->
                            <div class="kt-portlet w-100">
                                <div class="kt-portlet__head">
                                    <div class="kt-portlet__head-label">
                                        <h3 class="kt-portlet__head-title">
                                            Profile
                                        </h3>
                                    </div>
                                </div>

                                <!--begin::Form-->
                                <form class="kt-form kt-form--label-right p-4" method="post"
                                    action="{{ route('client.update.profile') }}">
                                    @csrf
                                    @method('PUT')

                                    <div class="container-fluid row col-lg-12 col-xl-12">
                                        <div class="form-group col-lg-6 col-xl-6">
                                            <label for="email">Email</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i
                                                            class="bi bi-envelope-fill"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-addon1"
                                                    id="email" name="email" value="{{ old('email',$user->email) }}" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6 col-xl-6">
                                            <label for="first_name">First name</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i
                                                            class="bi bi-person-fill"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-addon1"
                                                    name="first_name" id="first_name" value="{{ old('first_name',  $user->first_name) }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row col-lg-12">
                                        <div class="form-group col-lg-6 col-xl-6">
                                            <label for="last_name">Last name</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i
                                                            class="bi bi-person-fill"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-addon1"
                                                    name="last_name" id="last_name" value="{{ old('last_name',$user->last_name) }}">
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6 col-xl-6">
                                            <label for="username">Username</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i
                                                            class="bi bi-person-circle"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-addon1"
                                                    name="username" id="username" value="{{ old('username',$user->username ) }}">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row col-lg-12">
                                        <div class="form-group col-lg-6 col-xl-6">
                                            <label for="phone">Phone #</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i
                                                            class="bi bi-telephone-fill"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-addon1"
                                                    name="phone" id="phone" value="{{ old('phone',$user->phone) }}">
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6 col-xl-6">
                                            <label for="company_name">Company name</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i
                                                            class="bi bi-building"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-addon1"
                                                    name="company_name" id="company_name"
                                                    value="{{ old('company_name',$user->client->company_name) }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row col-lg-12">
                                        <div class="form-group col-lg-6 col-xl-6">
                                            <label for="website">Website</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i
                                                            class="bi bi-link-45deg"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-addon1"
                                                    name="website" id="website" value="{{ old('website',$user->client->website) }}">
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6 col-xl-6">
                                            <label for="dob">Date of Birth</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i
                                                            class="bi bi-calendar"></i></span>
                                                </div>
                                                <input type="date" class="form-control" aria-describedby="basic-addon1"
                                                    name="dob" id="dob" value="{{ old('dob', $user->dob) }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row col-lg-12">
                                        <div class="form-group col-lg-6 col-xl-6">
                                            <label>Gender</label>
                                            <div class="kt-radio-inline">
                                                <label class="kt-radio">
                                                    <input type="radio" name="gender"
                                                        @if ($user->gender == 'male') checked @endif value="male"> Male
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio">
                                                    <input type="radio" name="gender"
                                                        @if ($user->gender == 'female') checked @endif value="female">
                                                    Female
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6 col-xl-6">
                                            <label for="country">Country</label>
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="bi bi-globe"></i></span>
                                                <div class="input-group">
                                                    <select class="form-control" id="country" name="country">
                                                        @foreach ($countries as $country)
                                                            <option value="{{ old('country',$country->id) }}"
                                                                @if ($country->id == $user->country) selected @endif>
                                                                {{ $country->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row col-lg-12 col-xl-12">
                                            <div class="form-group col-lg-6 col-xl-6">
                                                <label for="role">Role</label>
                                                <div class="input-group-prepend"><span class="input-group-text"><i
                                                            class="bi bi-person-check-fill"></i></span>
                                                    <div class="input-group">
                                                        <select class="form-control" id="role" name="role">
                                                            @foreach ($clientRoles as $clientRole)
                                                                <option value="{{ old('role',$clientRole->id) }}"
                                                                    @if ($clientRole->id == $user->client->role) selected @endif>
                                                                    {{ $clientRole->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                         
                                        </div>

                                        <div class="kt-portlet__foot">
                                            <div class="kt-form__actions">
                                                <button class="btn btn-primary" type="submit">Update profile</button>
                                            </div>
                                        </div>
                                </form>

                                <!--end::Form-->
                            </div>

                            <!--end::Portlet-->
                        </div>
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
                                action="{{ route('client.change.password') }}">
                                @csrf
                                @method('PUT')
                                <div class="container-fluid row col-lg-12 col-xl-12">
                                    <div class="form-group col-lg-12 col-xl-12">
                                        <label for="old_password">Old password</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
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
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                                            </div>
                                            <input type="password" class="form-control" aria-describedby="basic-addon1"
                                                id="new_password" name="new_password" value="{{ old('new_password')}}">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6 col-xl-6">
                                        <label for="confirm_password">Confirm Password name</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                                            </div>
                                            <input type="password" class="form-control" aria-describedby="basic-addon1"
                                                name="confirm_password" id="confirm_password" value="{{ old('confirm_password')}}">
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
