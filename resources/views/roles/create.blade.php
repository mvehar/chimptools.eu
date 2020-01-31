@section('title')
    Chimptools.eu - {{__('Roles').__('- NEW')}}
@endsection
@extends('layouts.main')
@section('style')

@endsection
@section('rightbar-content')
    @component('common.components.widgets-breadcrumb')
        @slot('title') @lang('Add Role') @endslot
        <li class="breadcrumb-item"><a href="{{route('roles.index')}}">@lang('Roles')</a></li>
        <li class="breadcrumb-item active" aria-current="page">@lang('Add')</li>
    @endcomponent

    <!-- Start Contentbar -->
    <div class="contentbar">

        {!! Form::model($role, ['method'=>'POST','route'=>['roles.store'], 'class'=>'row']) !!}

        @include('roles.form')

        {!! Form::close() !!}

    </div>
    <!-- End Contentbar -->
@endsection
@section('script')
    <!-- Tabledit js -->
@endsection
