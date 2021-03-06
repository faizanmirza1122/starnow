@extends('client.layouts.app')

@section('title', 'Client | All Jobs')

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
                                                All Jobs
                                            </h3>
                                        </div>
                                        <div class="kt-portlet__head-toolbar">
                                            <div class="dropdown dropdown-inline">
                                                <a href="{{ route('client-jobs.create') }}"
                                                    class="btn btn-primary">Create
                                                    new</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-portlet__body kt-portlet__body--fit p-4">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Salary Range</th>
                                                    <th>Experience Level</th>
                                                    <th>Job Category</th>
                                                    <th>Expiry Date</th>
                                                    <th>Posted Date</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($jobs as $job)
                                                    <tr>
                                                        <td>{{ $job->title }}</td>
                                                        <td>Rs. {{ $job->salaryRange->salary }}</td>
                                                        <td>{{ $job->experienceLevel->experience_level }}</td>
                                                        <td>{{ $job->category->name }}</td>
                                                        <td>
                                                            @if ($job->status === 1)
                                                                {{ $job->expiry_date->format('d-m-Y') }}
                                                            @else
                                                                <span> ----------- </span>
                                                            @endif
                                                        </td>
                                                        <td>{{ $job->created_at->format('d F Y') }}</td>
                                                        <td>
                                                            @if($job->status == 1)
                                                                <span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">Active</span>
                                                            @else
                                                                <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">Inactive</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <div class="dropdown-toggle" data-toggle="dropdown">
                                                                    <i class="bi bi-gear-fill cursor-pointer"></i>
                                                                </div>
                                                                <div class="dropdown-menu ">
                                                                    <a class="dropdown-item"
                                                                        href="">
                                                                        <i class="bi bi-currency-dollar"></i>
                                                                        Pay Now
                                                                    </a>
                                                                    <a class="dropdown-item"
                                                                        href="{{ route('client-jobs.edit', [$job->id]) }}">
                                                                        <i class="bi bi-pencil-square"></i>
                                                                        Edit
                                                                    </a>
                                                                    <a class="dropdown-item" href="#"
                                                                        onclick="event.preventDefault(); if(confirm('Are you sure you want to perform this action?')){document.getElementById('delete-job-{{ $job->id }}-form').submit();}">
                                                                        <i class="bi bi-trash3-fill"></i> Delete
                                                                    </a>
                                                                    <form
                                                                        action="{{ route('client-jobs.destroy', $job->id) }}"
                                                                        id="delete-job-{{ $job->id }}-form"
                                                                        method="POST" style="display: none;">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                        </table>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                {{ $jobs->links() }}
                                            </div>
                                            <div style="font-size:20px;">
                                                Showing {{ ($jobs->currentpage() - 1) * $jobs->perpage() + 1 }} to
                                                {{ ($jobs->currentpage() - 1) * $jobs->perpage() + $jobs->count() }}
                                                of {{ $jobs->total() }} entries
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
    </div>

@endsection
