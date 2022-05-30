@extends('admin.layouts.app')

@section('title', 'Admin | All Job Categories')

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
                                                All Job Categories
                                            </h3>
                                        </div>
                                        <div class="kt-portlet__head-toolbar">
                                            <div class="dropdown dropdown-inline">
                                                <a href="{{ route('job-categories.create') }}"
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
                                                    <th>Created At</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($jobCategories as $jobCategory)
                                                    <tr>
                                                        <td>{{ $jobCategory->name }}</td>
                                                        <td>{{ $jobCategory->created_at->format('d F Y') }}</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <div class="dropdown-toggle" data-toggle="dropdown">
                                                                    <i class="bi bi-gear-fill cursor-pointer"></i>
                                                                </div>
                                                                <div class="dropdown-menu ">
                                                                    <a class="dropdown-item"
                                                                        href="{{ route('job-categories.edit', [$jobCategory->id]) }}">
                                                                        <i class="bi bi-pencil-square"></i>
                                                                        Edit
                                                                    </a>
                                                                    <a class="dropdown-item" href="#"
                                                                        onclick="event.preventDefault(); if(confirm('Are you sure you want to perform this action?')){document.getElementById('delete-job-categories-{{ $jobCategory->id }}-form').submit();}">
                                                                        <i class="bi bi-trash3-fill"></i> Delete
                                                                    </a>
                                                                    <form
                                                                        action="{{ route('job-categories.destroy', $jobCategory->id) }}"
                                                                        id="delete-job-categories-{{ $jobCategory->id }}-form"
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
                                                {{ $jobCategories->links() }}
                                            </div>
                                            <div style="font-size:20px;">
                                                Showing {{ ($jobCategories->currentpage() - 1) * $jobCategories->perpage() + 1 }} to
                                                {{ ($jobCategories->currentpage() - 1) * $jobCategories->perpage() + $jobCategories->count() }}
                                                of {{ $jobCategories->total() }} entries
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
