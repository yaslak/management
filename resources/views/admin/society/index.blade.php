@extends('layouts.layout')
@section('theme-js')
    <script type="text/javascript" src="{{asset('js/plugins/tables/datatables/datatables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/pages/datatables_data_sources.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins/tables/datatables/datatables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins/forms/selects/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins/notifications/bootbox.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins/notifications/sweet_alert.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins/notifications/sweet_alert.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/pages/components_modals.js')}}"></script>

@stop
@section('content')
    <!-- Content area -->
    <div class="content-group border-top-lg border-top-slate-300">
        <div class="page-header page-header-default page-header-lg"
             style="border-left: 1px solid #ddd; border-right: 1px solid #ddd;">
            <div class="page-header-content">
                <div class="page-title">
                    <a href="{{route('home')}}"><h4>
                            <i class="icon-arrow-left52 position-left"></i>
                            <span class="text-semibold">{{ trans('pages/societies.names.home') }}</span></h4>
                    </a>
                </div>
                <div class="heading-elements">
                    <div class="btn-group heading-btn">
                        <a href="{{route('societies.create')}}">
                            <i class="fas fa-plus fa-2x text-slate-300"></i>
                        </a>
                    </div>
                </div>
            </div>
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}"><i class="icon-home2 position-left ml-5"></i> {{ trans('pages/societies.names.home') }}</a></li>

                <li class="active">{{ trans('pages/societies.admin.societies.index.list') }}</li>
            </ul>
        </div>
    </div>
    <div class="content mt-10">
        <table class="table datatable-html dataTable no-footer"
               id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
            <thead>
            <tr role="row">
                <th class="sorting_asc" tabindex="0"
                    aria-controls="DataTables_Table_0" rowspan="1"
                    colspan="1"
                    aria-label="Name: activate to sort column descending"
                >{{ trans('validation.attributes.username') }}
                </th>
                <th class="sorting" tabindex="0"
                    aria-controls="DataTables_Table_0" rowspan="1"
                    colspan="1" aria-label="Position: activate to sort column ascending"
                >{{ trans('validation.attributes.cities') }}
                </th>
                <th class="sorting" tabindex="0"
                    aria-controls="DataTables_Table_0" rowspan="1" aria-sort="ascending"
                    colspan="1" aria-label="Position: activate to sort column ascending"
                >{{ trans('validation.attributes.ranges') }}
                </th>
                <th class="sorting" tabindex="0"
                    aria-controls="DataTables_Table_0" rowspan="1"
                    colspan="1" aria-label="Position: activate to sort column ascending"
                >{{trans('validation.attributes.limit')}}
                </th>
                <th class="sorting" tabindex="0"
                    aria-controls="DataTables_Table_0" rowspan="1"
                    colspan="1" aria-label="Position: activate to sort column ascending"
                >{{ trans('validation.attributes.status') }}
                </th>
                <th class="sorting" tabindex="0"
                    aria-controls="DataTables_Table_0" rowspan="1"
                    colspan="1" aria-label="Position: activate to sort column ascending"
                >{{trans('validation.attributes.actions')}}
                </th>
             </tr>
            </thead>
            <tbody>
            @foreach($societies as $society)
                <tr role="row" class="odd">
                    <td>{{$society->society_name}}</td>
                    <td class="sorting_1">{{$society->society_city}}</td>
                    <td>
                        @if($society->society_range < 30)
                            <span class="label label-danger">{{$society->society_range}}</span>
                        @else
                            <span class="label label-success">{{$society->society_range}}</span>
                        @endif

                    </td>
                    <td><a href="#">{{$society->society_limit}}</a></td>
                    <td>
                        @if($society->society_status)
                            <span class="label label-success">{{trans('validation.attributes.active')}}</span>
                            @else
                            <span class="label label-danger">{{trans('validation.attributes.inactive')}}</span>
                        @endif
                    </td>
                    <td class="text-center">
                        <ul class="icons-list">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-menu9"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right bg-slate-800">
                                    <li>
                                        <a href="{{route('society_profil.show',['id'=> $society->id])}}">
                                            <i class="fas fa-eye mr-10"></i> {{trans('pages/societies.names.profile')}}</a>
                                    </li>
                                    <li>
                                        <a href="{{route('societies.edit',$society->id)}}">
                                            <i class="far fa-edit mr-10"></i> {{trans('validation.attributes.update')}}</a>
                                    </li>
                                    <li>
                                    <a href="{{route('societies.destroy',$society->id)}}" onclick="event.preventDefault();
                     document.getElementById('{{'society' . $society->id}}').submit();">
                                        <i class="far fa-minus-square mr-10"></i> {{trans('validation.attributes.delete')}}
                                    </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        {{ Form::open(['method'=>'DELETE','url'=>route('societies.destroy',$society->id),'id'=>'society' . $society->id,'style'=>'display:none']) }}
                        <input type="submit">
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <!-- /content area -->
@endsection

