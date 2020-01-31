@section('title')
    Chimptools.eu - {{__('Users').__('- NEW')}}
@endsection
@extends('layouts.main')
@section('style')

@endsection
@section('rightbar-content')
    @component('common.components.widgets-breadcrumb')
        @slot('title') @lang('Add User') @endslot
        <li class="breadcrumb-item"><a href="{{route('users.index')}}">@lang('Users')</a></li>
        <li class="breadcrumb-item active" aria-current="page">@lang('Add')</li>
    @endcomponent

    <!-- Start Contentbar -->
    <div class="contentbar">

        {!! Form::model($user, ['method'=>'POST','route'=>['users.store'], 'class'=>'row']) !!}

        @include('users.form')

        {!! Form::close() !!}

    </div>
    <!-- End Contentbar -->
@endsection
@section('script')
    <!-- Tabledit js -->
@endsection
