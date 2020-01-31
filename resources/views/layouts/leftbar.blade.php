<div class="leftbar">
    <!-- Start Sidebar -->
    <div class="sidebar">
        <!-- Start Logobar -->
        <div class="logobar">
            <a href="{{url('/')}}" class="logo logo-large"><img src="/logo.png" class="img-fluid" alt="logo"></a>
            <a href="{{url('/')}}" class="logo logo-small"><img src="/logo.png" class="img-fluid" alt="logo"></a>
        </div>
        <!-- End Logobar -->
        <!-- Start Navigationbar -->
        <div class="navigationbar">
            <ul class="vertical-menu">
                {{--                <li>--}}
                {{--                    <a href="{{url('/')}}">--}}
                {{--                        <i class="fa fa-dashboard"></i><span>@lang('Dashboard')</span>--}}
                {{--                    </a>--}}
                {{--                    --}}{{--                    <ul class="vertical-submenu">--}}
                {{--                    --}}{{--                        <li><a href="{{url('/')}}">CRM</a></li>--}}
                {{--                    --}}{{--                        <li><a href="{{url('/dashboard-ecommerce')}}">eCommerce</a></li>--}}
                {{--                    --}}{{--                        <li><a href="{{url('/dashboard-hospital')}}">Hospital</a></li>--}}
                {{--                    --}}{{--                    </ul>--}}
                {{--                </li>--}}

                <li>
                    <a href="javaScript:void();">
                        <i class="fa fa-lightbulb-o"></i> <span>@lang('Projects')</span><i
                            class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{route('projects.index')}}">@lang('Projects')</a></li>
                        <li><a href="{{route('projects.pipeline')}}">@lang('Pipeline')</a></li>
                        <li><a href="{{route('momos.index')}}">@lang('Momos')</a></li>
                        {{--                        <li><a href="{{route('project-members')}}">@lang('Project Members')</a></li>--}}
                    </ul>
                </li>
                <li>
                    <a href="javaScript:void();">
                        <i class="fa fa-building-o"></i><span>@lang('Organisations')</span><i
                            class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{route('external-organisations.index')}}">@lang('External')</a></li>
                        <li><a href="{{route('managed-organisations.index')}}">@lang('Managed')</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javaScript:void();">
                        <i class="fa fa-clock-o"></i><span>@lang('Time')</span><i
                            class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{route('time-records.index')}}">@lang('Record')</a></li>
                        <li><a href="{{route('time-reports.index')}}">@lang('Reports')</a></li>
                        <li><a href="{{route('time-records.logs')}}">@lang('Logs')</a></li>
                        <li><a href="{{route('time-defreezes.index')}}">@lang('Defreezes')</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javaScript:void();">
                        <i class="fa fa-building-o"></i><span>@lang('Persons')</span><i
                            class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{route('persons.index')}}">@lang('List')</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javaScript:void();">
                        <img src="{{asset('assets/images/svg-icon/advanced.svg')}}" class="img-fluid"
                             alt="layouts"><span>@lang('Admin')</span><i
                            class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{route('person-groups.index')}}">@lang('Person Groups')</a></li>
                        <li><a href="{{route('project-groups.index')}}">@lang('Project groups')</a></li>
                        <li><a href="{{route('project-statuses.index')}}">@lang('Project Statuses')</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javaScript:void();">
                        <i class="fa fa-users"></i>
                        <span>@lang('Users & groups')</span><i
                            class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{route('users.index')}}">@lang('Users')</a></li>
                        <li><a href="{{route('roles.index')}}">@lang('Roles')</a></li>
                    </ul>
                </li>
                @include('layouts.tool-menu')
            </ul>
        </div>
        <!-- End Navigationbar -->
    </div>
    <!-- End Sidebar -->
</div>
