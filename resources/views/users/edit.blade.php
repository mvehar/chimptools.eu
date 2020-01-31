@section('title')
    Chimptools.eu - @lang('Users').@lang('- NEW')
@endsection
@extends('layouts.main')
@section('style')

@endsection
@section('rightbar-content')
    @component('common.components.simple-breadcrumb')
        @slot('title') @lang('Edit user') @endslot
        <li class="breadcrumb-item active" aria-current="page"><a href="{{route('users.index')}}">@lang('Users')</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">@lang('Edit')</li>
    @endcomponent

    <!-- Start Contentbar -->
    <div class="contentbar">

        {!! Form::model($user, ['method'=>'PATCH','url'=>route('users.update', [$user->id]), 'class'=>'row']) !!}

        @include('users.form')

        {!! Form::close() !!}

    </div>
    <!-- End Contentbar -->
@endsection
@section('script')
    <!-- Tabledit js -->
@endsection
