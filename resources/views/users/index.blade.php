@section('title')
    Chimptools.eu - @lang('Users')
@endsection
@extends('layouts.main')
@section('style')
    <!-- DataTables css -->
    <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Responsive Datatable css -->
    <link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet"
          type="text/css"/>
@endsection
@section('rightbar-content')
    @component('common.components.widgets-breadcrumb')
        @slot('title') @lang('Users') @endslot
        <li class="breadcrumb-item active" aria-current="page"><a
                href="{{route('users.index')}}">@lang('Users')</a></li>
        @slot('widget')
            <div class="col-md-6 col-lg-6">
                <div class="widgetbar">
                    {{-- TODO: Restrict access --}}
                    <a href="{{route('users.create')}}" class="btn btn-primary-rgba"><i
                            class="feather icon-plus mr-2"></i>@lang('New')</a>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Start Contentbar -->
    <div class="contentbar">
        <!-- Start row -->
        <div class="row">
            <!-- Start col -->
            <div class="col-lg-12">
                <div class="card m-b-15">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>@lang('Name')</th>
                                    <th>@lang('Email')</th>
                                    <th>@lang('Assigned Persons')</th>
                                    <th>@lang('Roles')</th>
                                    <th>@lang('Updated at')</th>
                                    <th>@lang('Actions:')</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>
                                            <a href="{{route('users.show', $user->id)}}">{{$user->name}}</a></td>
                                        <td>{{$user->email}}</td>
                                        @if(!$user->persons()->count())
                                            <td>
                                                <a href="{{route('persons.index')}}">@lang('Create/Assign person')</a>
                                            </td>
                                        @else
                                            <td>
                                                @foreach($user->persons as $person)
                                                    <a href="{{route('persons.show', $person->id)}}">{{$person->full_name}}</a>
                                                @endforeach
                                            </td>
                                        @endif
                                        <td>{{$user->roles()->pluck('name')->join(',')}}</td>
                                        <td>{{$user->updated_at}}</td>
                                        <td>
                                            <a href="{{route('users.show', $user->id)}}"
                                               class="btn btn-primary"> @lang('Show/Edit')</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End col -->
        </div>
        <!-- End row -->
    </div>
    <!-- End Contentbar -->
@endsection
@section('script')
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            /* -- Table - Datatable -- */
            $('#datatable').DataTable({
                responsive: true,
            });
            var table = $('#datatable-buttons').DataTable({
                lengthChange: false,
                responsive: true,
                // buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
                'order': [[1, 'desc']],
            });
            table.buttons().container().appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection
