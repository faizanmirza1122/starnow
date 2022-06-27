@extends('client.layouts.app')

@section('title', 'Client | All plans')

@section('content')
    <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
        <div class="kt-container  kt-container--fluid  kt-grid kt-grid--ver">
            @include('client.partials.side-bar')
            <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

                <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                    @include('common.partials.alerts')

                    <div class="row">
                        <div class="col-lg-12 col-xl-12 order-lg-1 order-xl-1">
                            <div class="col-lg-12 col-xl-12 order-lg-2 order-xl-1">
                                <div class="kt-portlet kt-portlet--height-fluid kt-portlet--mobile ">
                                    <div
                                        class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
                                        <div class="kt-portlet__head-label">
                                            <h3 class="kt-portlet__head-title">
                                                All plans
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="kt-portlet__body kt-portlet__body--fit p-4">
                                        <div class="row">
                                            @foreach ($packagePlans as $packagePlan)
                                                <div class="col-xl-4">

                                                    <!--begin:: Widgets/Personal Income-->
                                                    <div
                                                        class="kt-portlet kt-portlet--fit kt-portlet--head-lg kt-portlet--head-overlay kt-portlet--height-fluid">
                                                        <div class="kt-portlet__head kt-portlet__space-x">
                                                            <div class="kt-portlet__head-label">
                                                                <h3 class="kt-portlet__head-title kt-font-light">
                                                                    {{ $packagePlan->name }}
                                                                </h3>
                                                            </div>
                                                            {{-- <div class="kt-portlet__head-toolbar">
                                                                        <a href="#" class="btn btn-outline-light btn-sm btn-bold dropdown-toggle" data-toggle="dropdown">
                                                                              March, 2019
                                                                        </a>
                                                                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                                                              <ul class="kt-nav">
                                                                                    <li class="kt-nav__item">
                                                                                          <a href="#" class="kt-nav__link">
                                                                                                <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                                                                <span class="kt-nav__link-text">Reports</span>
                                                                                          </a>
                                                                                    </li>
                                                                                    <li class="kt-nav__item">
                                                                                          <a href="#" class="kt-nav__link">
                                                                                                <i class="kt-nav__link-icon flaticon2-send"></i>
                                                                                                <span class="kt-nav__link-text">Messages</span>
                                                                                          </a>
                                                                                    </li>
                                                                                    <li class="kt-nav__item">
                                                                                          <a href="#" class="kt-nav__link">
                                                                                                <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                                                                <span class="kt-nav__link-text">Charts</span>
                                                                                          </a>
                                                                                    </li>
                                                                                    <li class="kt-nav__item">
                                                                                          <a href="#" class="kt-nav__link">
                                                                                                <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                                                                <span class="kt-nav__link-text">Members</span>
                                                                                          </a>
                                                                                    </li>
                                                                                    <li class="kt-nav__item">
                                                                                          <a href="#" class="kt-nav__link">
                                                                                                <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                                                                <span class="kt-nav__link-text">Settings</span>
                                                                                          </a>
                                                                                    </li>
                                                                              </ul>
                                                                        </div>
                                                                  </div> --}}
                                                        </div>
                                                        <div class="kt-portlet__body">
                                                            <div class="kt-widget27">
                                                                <div class="kt-widget27__visual">
                                                                    <img src="{{ asset('images/backgrounds/bg-2.jpg') }}"
                                                                        alt="">
                                                                    <h3 class="kt-widget27__title">
                                                                        <span><span>PKR</span>{{ $packagePlan->price }}</span>
                                                                    </h3>
                                                                    <div class="kt-widget27__btn">
                                                                        <a href="#"
                                                                            class="btn btn-pill btn-light btn-elevate btn-bold">Including
                                                                            features</a>
                                                                    </div>
                                                                </div>
                                                                <div class="kt-widget27__container kt-portlet__space-x">
                                                                    <div class="tab-content">
                                                                        <div id="kt_personal_income_quater_1"
                                                                            class="tab-pane active">
                                                                            <div class="kt-widget11">
                                                                                <div class="table-responsive">
                                                                                    <table class="table">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td colspan="3">
                                                                                                    <span
                                                                                                        class="kt-widget11__title">Description:
                                                                                                    </span>
                                                                                                    <span
                                                                                                        class="kt-widget28__tab-item">{{ $packagePlan->description }}</span>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <span
                                                                                                        class="kt-widget11__title">Package
                                                                                                        duration</span>
                                                                                                </td>
                                                                                                <td>
                                                                                                </td>
                                                                                                <td
                                                                                                    class="kt-align-right kt-font-brand kt-font-bold">
                                                                                                    {{ $packagePlan->package_expire_duration_in_days }}
                                                                                                    Day's</td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <td>
                                                                                                    <span
                                                                                                        class="kt-widget11__title">Job
                                                                                                        expire
                                                                                                        duration</span>
                                                                                                </td>
                                                                                                <td>
                                                                                                </td>
                                                                                                <td
                                                                                                    class="kt-align-right kt-font-brand kt-font-bold">
                                                                                                    {{ $packagePlan->job_expire_duration_in_days }}
                                                                                                    Day's</td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <td>
                                                                                                    <span
                                                                                                        class="kt-widget11__title">Allowed
                                                                                                        jobs post per
                                                                                                        day</span>
                                                                                                </td>
                                                                                                <td>
                                                                                                </td>
                                                                                                <td
                                                                                                    class="kt-align-right kt-font-brand kt-font-bold">
                                                                                                    {{ $packagePlan->allowed_no_of_jobs_per_day }}
                                                                                                </td>
                                                                                            </tr>
                                                                                             <tr>
                                                                                                <td colspan="3" style="text-align:center">
                                                                                                      <button type="button" class="btn btn-brand btn-elevate btn-elevate-air">Subscribe</button>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!--end:: Widgets/Personal Income-->
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
