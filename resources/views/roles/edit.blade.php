@section('title')
    Chimptools.eu - @lang('Roles').@lang('- NEW')
@endsection
@extends('layouts.main')
@section('style')

@endsection
@section('rightbar-content')
    @component('common.components.simple-breadcrumb')
        @slot('title') @lang('Edit role') @endslot
        <li class="breadcrumb-item active" aria-current="page"><a href="{{route('roles.index')}}">@lang('Roles')</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">@lang('Edit')</li>
    @endcomponent

    <!-- Start Contentbar -->
    <div class="contentbar">

        {!! Form::model($role, ['method'=>'PATCH','url'=>route('roles.update', [$role->id]), 'class'=>'row']) !!}

        @include('roles.form')

        {!! Form::close() !!}

    </div>
    <!-- End Contentbar -->
@endsection
@section('script')
    <!-- Tabledit js -->
@endsection
