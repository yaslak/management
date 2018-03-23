@extends('layouts.layout')
@section('theme-js')@stop
@section('content')
    <!-- Content area -->
    <div class="content-group border-top-lg border-top-slate-300">
        <div class="page-header page-header-default page-header-lg" style="border-left: 1px solid #ddd; border-right: 1px solid #ddd;">
            <div class="page-header-content">
                <div class="page-title">
                    <a href="{{route('societies.index')}}"><h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">create Society</span></h4></a>
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
        {{ Form::open(['method'=>'PUT','url'=>route('societies.update',$societies->id),'class'=>'form-horizontal','enctype'=>"multipart/form-data"]) }}
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Create Society</h5>
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <fieldset>
                            <legend class="text-semibold"><i class="far fa-building position-left"></i> Détails Society</legend>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Society Name:</label>
                                <div class="col-lg-9">
                                    <input type="text" name="name" value="{{ (old('name')) ? old('name') : $societies->society_name }}" class="form-control" placeholder="Society Name" required autofocus>
                                    @if($errors->has('name'))
                                        <span class="text-danger">{{$errors->first('name')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Tel:</label>
                                <div class="col-lg-9">
                                    <input type="tel" name="tel" value="{{ (old('tel')) ? old('tel') : $societies->society_tel }}" class="form-control" placeholder="Tel" required>
                                    @if($errors->has('tel'))
                                        <span class="text-danger">{{$errors->first('tel')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">speaker:</label>
                                <div class="col-lg-9">
                                    <input type="text" name="speaker" value="{{ (old('speaker')) ? old('speaker') : $societies->society_speaker }}" class="form-control" placeholder="speaker">
                                    @if($errors->has('speaker'))
                                        <span class="text-danger">{{$errors->first('speaker')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Address:</label>
                                <div class="col-lg-9">
                                    <input type="text" name="address" value="{{ (old('address')) ? old('address') : $societies->society_address }}" class="form-control" placeholder="Address">
                                    @if($errors->has('address'))
                                        <span class="text-danger">{{$errors->first('address')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">build number :</label>
                                <div class="col-lg-9">
                                    <input type="text" name="build" value="{{ (old('build')) ? old('build') : $societies->society_build }}" class="form-control" placeholder="build number">
                                    @if($errors->has('build'))
                                        <span class="text-danger">{{$errors->first('build')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">code postal :</label>
                                <div class="col-lg-9">
                                    <input type="text" name="zip" value="{{ (old('zip')) ? old('zip') : $societies->society_zip }}" class="form-control" placeholder="code postal">
                                    @if($errors->has('zip'))
                                        <span class="text-danger">{{$errors->first('zip')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">City :</label>
                                <div class="col-lg-9">
                                    <input type="text" name="city" value="{{ (old('city')) ? old('city') : $societies->society_city }}" class="form-control" placeholder="City">
                                    @if($errors->has('city'))
                                        <span class="text-danger">{{$errors->first('city')}}</span>
                                    @endif
                                </div>
                            </div>
                        </fieldset>
                    </div>

                    <div class="col-md-6">
                        <fieldset>
                            <legend class="text-semibold"><i class="fas fa-puzzle-piece position-left"></i>Techniques :</legend>


                            <div class="form-group">
                                <label class="col-lg-3 control-label">domain</label>
                                <div class="col-lg-9">
                                    <input type="text" name="domain" value="{{ (old('domain')) ? old('domain') : $societies->society_domain }}" placeholder="domain" class="form-control">
                                    @if($errors->has('domain'))
                                        <span class="text-danger">{{$errors->first('domain')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Licence</label>
                                <div class="col-lg-9">
                                    <input type="text" name="licence" value="{{ (old('licence')) ? old('licence') : $societies->society_licence }}" placeholder="licence" class="form-control">
                                    @if($errors->has('licence'))
                                        <span class="text-danger">{{$errors->first('licence')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">email</label>
                                <div class="col-lg-9">
                                    <input type="email" name="email" value="{{ (old('email')) ? old('email') : $societies->society_email }}" placeholder="email" class="form-control">
                                    @if($errors->has('email'))
                                        <span class="text-danger">{{$errors->first('email')}}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">turnover</label>
                                <div class="col-lg-9">
                                    <input type="text" name="turnover" value="{{ (old('turnover')) ? old('turnover') : $societies->society_turnover }}" placeholder="turnover" class="form-control">
                                    @if($errors->has('turnover'))
                                        <span class="text-danger">{{$errors->first('turnover')}}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Limit</label>
                                <div class="col-lg-9">
                                    <input type="date" name="limit" value="{{ (old('limit')) ? old('limit') : \gmdate('Y-m-d', strtotime("+ 1 month")) }}" class="form-control">
                                    @if($errors->has('limit'))
                                        <span class="text-danger">{{$errors->first('limit')}}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Range:</label>
                                <div class="col-lg-9">
                                    <input type="tel" name="range" value="{{ (old('range')) ? old('range') : $societies->society_range }}" placeholder="range" class="form-control">
                                    @if($errors->has('range'))
                                        <span class="text-danger">{{$errors->first('range')}}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label">logo</label>
                                <div class="col-lg-9">
                                    <input type="file" name="logo" value="{{ old('logo') }}" placeholder="Logo" class="form-control">
                                    @if($errors->has('logo'))
                                        <span class="text-danger">{{$errors->first('logo')}}</span>
                                    @endif
                                </div>
                            </div>

                        </fieldset>
                    </div>
                </div>

                <div class="text-right">
                    <button type="submit" class="btn btn-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Soumettre le formulaire </font></font><i class="icon-arrow-right14 position-right"></i></button>
                </div>
            </div>
        </div>
        {{Form::close()}}


    </div>
    <!-- /content area -->
@endsection