@extends('admin.layouts.app')

@section('title', 'Admin | All Client Pakcages')

@section('content')
    <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
        <div class="kt-container  kt-container--fluid  kt-grid kt-grid--ver">
            @include('admin.partials.side-bar')
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
                                                All client packages
                                            </h3>
                                        </div>
                                        <div class="kt-portlet__head-toolbar">
                                            <div class="dropdown dropdown-inline">
                                                <a href="{{ route('client-packages.create') }}"
                                                    class="btn btn-primary">Create
                                                    new</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-portlet__body kt-portlet__body--fit p-4">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Price</th>
                                                    <th>Package expire duration (days)</th>
                                                    <th>Job expire duration (days)</th>
                                                    <th>Allowed jobs per day</th>
                                                    <th>Status</th>
                                                    <th>Created At</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($clientPackages as $clientPackage)
                                                    <tr>
                                                        <td>{{ $clientPackage->name }}</td>
                                                        <td>Rs. {{ $clientPackage->price }}</td>
                                                        <td>{{ $clientPackage->package_expire_duration_in_days }}</td>
                                                        <td>{{ $clientPackage->job_expire_duration_in_days }}</td>
                                                        <td>{{ $clientPackage->allowed_no_of_jobs_per_day }}</td>
                                                        <td>
                                                            @if ($clientPackage->is_active == 1)
                                                                <span
                                                                    class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">Active</span>
                                                            @else
                                                                <span
                                                                    class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">Inactive</span>
                                                            @endif
                                                        </td>
                                                        <td>{{ $clientPackage->created_at->format('d F Y') }}</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <div class="dropdown-toggle" data-toggle="dropdown">
                                                                    <i class="bi bi-gear-fill cursor-pointer"></i>
                                                                </div>
                                                                <div class="dropdown-menu ">
                                                                    <a class="dropdown-item" href="#"
                                                                        onclick="event.preventDefault(); if(confirm('Are you sure you want to perform this action?')){document.getElementById('update-status-clientPackage-{{ $clientPackage->id }}-form').submit();}">
                                                                        <i class="bi bi-broadcast"></i>
                                                                        @if ($clientPackage->is_active == 1)
                                                                            <span
                                                                                class="kt-nav__link-text">Deactivate</span>
                                                                        @else
                                                                            <span class="kt-nav__link-text">Activate</span>
                                                                        @endif
                                                                    </a>
                                                                    <form
                                                                        action="{{ route('client-packages.update-status', $clientPackage->id) }}"
                                                                        id="update-status-clientPackage-{{ $clientPackage->id }}-form"
                                                                        method="POST" style="display: none;">
                                                                        @csrf
                                                                        @method('PUT')
                                                                    </form>
                                                                    <a class="dropdown-item"
                                                                        href="{{ route('client-packages.edit', [$clientPackage->id]) }}">
                                                                        <i class="bi bi-pencil-square"></i>
                                                                        Edit
                                                                    </a>
                                                                    <a class="dropdown-item" href="#"
                                                                        onclick="event.preventDefault(); if(confirm('Are you sure you want to perform this action?')){document.getElementById('delete-clientPackage-{{ $clientPackage->id }}-form').submit();}">
                                                                        <i class="bi bi-trash3-fill"></i> Delete
                                                                    </a>
                                                                    <form
                                                                        action="{{ route('client-packages.destroy', $clientPackage->id) }}"
                                                                        id="delete-clientPackage-{{ $clientPackage->id }}-form"
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
                                                {{ $clientPackages->links() }}
                                            </div>
                                            <div style="font-size:20px;">
                                                Showing
                                                {{ ($clientPackages->currentpage() - 1) * $clientPackages->perpage() + 1 }}
                                                to
                                                {{ ($clientPackages->currentpage() - 1) * $clientPackages->perpage() + $clientPackages->count() }}
                                                of {{ $clientPackages->total() }} entries
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
