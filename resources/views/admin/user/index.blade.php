@extends('layouts.layout')
@section('theme-js')
    <script type="text/javascript" src="{{asset('js/plugins/tables/datatables/datatables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/pages/datatables_data_sources.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins/tables/datatables/datatables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins/forms/selects/select2.min.js')}}"></script>
@stop
@section('content')
    <!-- Content area -->
    <div class="content-group border-top-lg border-top-slate-300">
        <div class="page-header page-header-default page-header-lg"
             style="border-left: 1px solid #ddd; border-right: 1px solid #ddd;">
            <div class="page-header-content">
                <div class="page-title">
                    <a href="{{route('home')}}"><h4><i class="icon-arrow-left52 position-left"></i> <span
                                    class="text-semibold">Accueil</span></h4>
                    </a>
                </div>
            </div>
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}"><i class="icon-home2 position-left ml-5"></i> Accueil</a></li>

                <li class="active">List Users</li>
            </ul>
        </div>
    </div>
    <div class="content mt-10">
        <table class="table datatable-html dataTable no-footer"
               id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
            <thead>
            <tr role="row">
                <th class="sorting" tabindex="0"
                    aria-controls="DataTables_Table_0" rowspan="1"
                    colspan="1" aria-label="Position: activate to sort column ascending"
                >logo
                </th>
                <th class="sorting_asc" tabindex="0"
                    aria-controls="DataTables_Table_0" rowspan="1"
                    colspan="1"
                    aria-label="Name: activate to sort column descending"
                >nom et prénom
                </th>
                <th class="sorting" tabindex="0"
                    aria-controls="DataTables_Table_0" rowspan="1" aria-sort="ascending"
                    colspan="1" aria-label="Position: activate to sort column ascending"
                >Society
                </th>
                <th class="sorting" tabindex="0"
                    aria-controls="DataTables_Table_0" rowspan="1"
                    colspan="1" aria-label="Position: activate to sort column ascending"
                >post
                </th>
                <th class="sorting" tabindex="0"
                    aria-controls="DataTables_Table_0" rowspan="1"
                    colspan="1" aria-label="Position: activate to sort column ascending"
                >Action
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr role="row" class="odd">
                    <td><img src="{{asset($user->photo_profil)}}" class="img-sm" alt="logo"></td>
                    <td>{{$user->first_name.$user->last_name}}</td>
                    @if($user->society_id === null)
                    <td class="sorting_1">inconnu</td>
                    @else
                        <td class="sorting_1">{{$user->society_name}}</td>
                        @endif
                    @if($user->post_id === null)
                    <td class="sorting_1">inconnu</td>
                    @else
                        <td><a href="#">{{$user->post_limit}}</a></td>
                        @endif

                    <td class="text-center">
                        <ul class="icons-list">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-menu9"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right bg-slate-800">
                                    <li>
                                        <a href="{{route('societies.destroy',$user->id)}}" onclick="event.preventDefault();
                                                document.getElementById('{{'society' . $user->id}}').submit();">
                                            <i class="far fa-minus-square mr-10"></i> {{trans('validation.attributes.delete')}}
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        {{ Form::open(['method'=>'DELETE','url'=>route('users.destroy',$user->id),'id'=>'society' . $user->id,'style'=>'display:none']) }}
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

