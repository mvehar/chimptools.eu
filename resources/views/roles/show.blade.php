@section('title')
    Chimptools.eu - @lang('Roles')
@endsection
@extends('layouts.main')
@section('style')

@endsection
@section('rightbar-content')

    @component('common.components.widgets-breadcrumb')
        @slot('title') @lang('Role') @endslot
        <li class="breadcrumb-item active" aria-current="page"><a href="{{route('roles.index')}}">@lang('Roles')</a></li>
        <li class="breadcrumb-item active" aria-current="page">@lang('Show')</li>

        @slot('widget')
            <div class="col-md-6 col-lg-6">
                <div class="widgetbar">
                    {{-- TODO: Restrict access --}}
                    <a href="{{route('roles.edit', [$role->id])}}" class="btn btn-primary-rgba"><i class="fa fa-pencil"></i> @lang('Edit')</a>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Start Contentbar -->
    <div class="contentbar">
        <!-- Start row -->
        <div class="row">
        @include('roles.form', ['showMode' => true])
        <!-- End row -->
        </div>
        <!-- End Contentbar -->
    @endsection
    @section('script')
        <!-- Tabledit js -->
@endsection
