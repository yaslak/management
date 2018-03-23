@extends('layouts.layout')
@section('theme-js')@stop
@section('content')
    <!-- Content area -->
    <div class="content-group border-top-lg border-top-slate-300">
        <div class="page-header page-header-default page-header-lg" style="border-left: 1px solid #ddd; border-right: 1px solid #ddd;">
            <div class="page-header-content">
                <div class="page-title">
                    <a href="{{route('societies.index')}}"><h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">{{trans('pages/societies.admin.societies.index.create')}}</span></h4></a>
                </div>
            </div>
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}"><i class="icon-home2 position-left ml-5"></i>
                <li><a href="{{route('societies.index')}}">Société</a></li>
                <li class="active">Create Society</li>

            </ul>
        </div>
    </div>

    <div class="content mt-10">
        <div class="panel panel-flat col-md-6">
            <div class="panel-heading">
                <h5 class="panel-title">infos</h5>
            </div>
            <div class="panel-body">
                <fieldset>
                    <legend class="text-semibold"><i class="far fa-building position-left"></i> Détails Society</legend>
                    <div class="row">
                        <p class="col-xs-6">name :</p>
                        <p class="col-xs-6">{{$society->society_name}}</p>
                    </div>
                    <div class="row">
                        <p class="col-xs-6">domain :</p>
                        <p class="col-xs-6">{{$society->society_domain}}</p>
                    </div>
                    <div class="row">
                        <p class="col-xs-6">licence :</p>
                        <p class="col-xs-6">{{$society->society_licence}}</p>
                    </div>
                    <div class="row">
                        <p class="col-xs-6">turnover :</p>
                        <p class="col-xs-6">{{$society->society_turnover}}</p>
                    </div>
                </fieldset>
                <fieldset>
                    <legend class="text-semibold"><i class="far fa-building position-left"></i> Contact</legend>
                    <div class="row">
                        <p class="col-xs-6">Tel :</p>
                        <p class="col-xs-6">{{$society->society_tel}}</p>
                    </div>
                    <div class="row">
                        <p class="col-xs-6">speaker :</p>
                        <p class="col-xs-6">{{$society->society_speaker}}</p>
                    </div>
                    <div class="row">
                        <p class="col-xs-6">address :</p>
                        <p class="col-xs-6">{{$society->society_address}}</p>
                    </div>
                    <div class="row">
                        <p class="col-xs-6">turnover :</p>
                        <p class="col-xs-6">{{$society->society_turnover}}</p>
                    </div>
                </fieldset>
            </div>
        </div>


    </div>
    <!-- /content area -->
@endsection