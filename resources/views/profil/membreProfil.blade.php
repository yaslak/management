@extends('layouts.layout')
@section('theme-js')
    <script type="text/javascript" src="{{asset('js/app/users/profil.js')}}"></script>
@endsection
@section('content')
    <div class="profile-cover">
        <div class="profile-cover-img" style="background-image: @if(isset($user) and !empty($user->photo_cover)) {{'url(' . asset($user->photo_cover).')'}} @else  {{'url('. asset('images/login_cover.jpg') . ')'}} @endif "></div>
        <div class="media">
            <div class="media-left">
                <a href="#" class="profile-thumb">
                    @if(isset($user) and !empty($user->photo_profil))
                        <img src="{{ asset($user->photo_profil) }}" class="img-circle" title="{{$user->name}}" alt=""/>
                    @else
                        <img src="{{asset('images/profil/profil.png')}}" class="img-circle" title="{{$user->name}}" alt="">
                    @endif
                </a>
            </div>

            <div class="media-body">
                <h1>{{ ucfirst($user->first_name) . ' ' . strtoupper($user->last_name) }}
                    <small class="display-block">UX/UI designer</small>
                </h1>
            </div>

            <div class="media-right media-middle">
                <ul class="list-inline list-inline-condensed no-margin-bottom text-nowrap">
                    <li><a href="#" class="btn btn-default"><i class="icon-user position-left"></i> Profil image</a></li>
                    <li><a href="#" class="btn btn-default"><i class="icon-file-picture position-left"></i> Cover image</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<!-- Content area -->
    <div class="content mt-10">
        <div class="row">
            <div class="col-lg-9">
                <div class="tab-pane fade active in" id="settings">

                    <!-- Profile info -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h6 class="panel-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informations sur le profil</font></font><a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    @if(isset($user->update))
                                    <li><a data-action="update" data-target="#info-form" data-collapse="#info"><i class="icon-add-to-list"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body" id="data-info">
                            <div class="row data" id="info">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="col-xs-12">
                                        <div class="col-xs-6">
                                            <span class="text-semibold">{{ trans('validation.attributes.first_name') }}</span>
                                        </div>
                                        <div class="col-xs-6">
                                            <p class="text-right">{{ ($user->first_name) ? $user->first_name : trans('profil.profil.inconnu') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="col-xs-6">
                                            <span class="text-semibold">{{ trans('validation.attributes.last_name') }}</span>
                                        </div>
                                        <div class="col-xs-6">
                                            <p class="text-right">{{ ($user->last_name) ? $user->last_name : trans('profil.profil.inconnu') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="col-xs-6">
                                            <span class="text-semibold">{{ trans('validation.attributes.birth-date') }}</span>
                                        </div>
                                        <div class="col-xs-6">
                                            <p class="text-right">{{ ($user->dtn) ? Carbon\Carbon::parse($user->dtn)->format('d-m-Y') : trans('profil.profil.inconnu') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="col-xs-6">
                                            <span class="text-semibold">{{ trans('validation.attributes.sex') }}</span>
                                        </div>
                                        <div class="col-xs-6">
                                            <p class="text-right">{{ ($user->sex) ? $user->sex : trans('profil.profil.inconnu') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="col-xs-12">
                                        <div class="col-xs-6">
                                            <span class="text-semibold">{{ trans('validation.attributes.phone') }}</span>
                                        </div>
                                        <div class="col-xs-6">
                                            <p class="text-right">{{ ($user->tel) ? $user->tel : trans('profil.profil.inconnu') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="col-xs-6">
                                            <span class="text-semibold">{{ trans('validation.attributes.address') }}</span>
                                        </div>
                                        <div class="col-xs-6">
                                            <p class="text-right">{{ ($user->address) ? $user->address : trans('profil.profil.inconnu') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="col-xs-6">
                                            <span class="text-semibold">{{ trans('validation.attributes.house_nbr') }}</span>
                                        </div>
                                        <div class="col-xs-6">
                                            <p class="text-right">{{ ($user->house_nbr) ? $user->house_nbr : trans('profil.profil.inconnu') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="col-xs-6">
                                            <span class="text-semibold">{{ trans('validation.attributes.city') }}</span>
                                        </div>
                                        <div class="col-xs-6">
                                            <p class="text-right">{{ ($user->city) ? $user->city : trans('profil.profil.inconnu') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if(isset($user->update))
                            {{ Form::open(['method'=>'put','class'=>'form-horizontal row hidden','id'=>'info-form','url'=>route('profil.info.update',['slug'=>$user->slug])]) }}
                            <div class="col-xs-12 col-sm-6">
                                <div class="col-xs-12">
                                    {{ Form::label('first_name',trans('validation.attributes.first_name') . ' :',['class'=>'text-semibold ml-2']) }}
                                    {{ Form::text('first_name',$user->first_name,['class'=>'form-control','placeholder'=> trans('validation.attributes.first_name')]) }}
                                    @if($errors->has('first_name'))
                                        <div class="error">
                                            {{$errors->first('first_name')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-xs-12">
                                    {{ Form::label('last_name',trans('validation.attributes.last_name') . ' :',['class'=>'text-semibold ml-2']) }}
                                    {{ Form::text('last_name',$user->last_name,['class'=>'form-control','placeholder'=> trans('validation.attributes.last_name')]) }}
                                    @if($errors->has('last_name'))
                                        <div class="error">
                                            {{$errors->first('last_name')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-xs-12">
                                    {{ Form::label('dtn',trans('validation.attributes.birth-date') . ' :',['class'=>'text-semibold ml-2']) }}
                                    {{ Form::date('dtn',$user->dtn,['class'=>'form-control','placeholder'=> trans('validation.attributes.birth-date')]) }}
                                    @if($errors->has('dtn'))
                                        <div class="error">
                                            {{$errors->first('dtn')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-xs-12">
                                    {{ Form::label('sex',trans('validation.attributes.sex') . ' :',['class'=>'text-semibold ml-2']) }}
                                    {{ Form::select('sex',['homme'=>'Homme','femme'=>'Femme'],strtolower($user->sex),['class'=>'form-control','placeholder'=> trans('validation.attributes.sex')]) }}
                                    @if($errors->has('sex'))
                                        <div class="error">
                                            {{$errors->first('sex')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="col-xs-12">
                                    {{ Form::label('tel',trans('validation.attributes.phone') . ' :',['class'=>'text-semibold ml-2']) }}
                                    {{ Form::text('tel',$user->tel,['class'=>'form-control','placeholder'=> trans('validation.attributes.phone')]) }}
                                    @if($errors->has('tel'))
                                        <div class="error">
                                            {{$errors->first('tel')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-xs-12">
                                    {{ Form::label('address',trans('validation.attributes.address') . ' :',['class'=>'text-semibold ml-2']) }}
                                    {{ Form::text('address',$user->address,['class'=>'form-control','placeholder'=> trans('validation.attributes.address')]) }}
                                    @if($errors->has('address'))
                                        <div class="error">
                                            {{$errors->first('address')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-xs-12">
                                    {{ Form::label('house_nbr',trans('validation.attributes.house_nbr') . ' :',['class'=>'text-semibold ml-2']) }}
                                    {{ Form::text('house_nbr',$user->house_nbr,['class'=>'form-control','placeholder'=> trans('validation.attributes.house_nbr')]) }}
                                    @if($errors->has('house_nbr'))
                                        <div class="error">
                                            {{$errors->first('house_nbr')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-xs-12">
                                    {{ Form::label('city',trans('validation.attributes.city') . ' :',['class'=>'text-semibold ml-2']) }}
                                    {{ Form::text('city',$user->city,['class'=>'form-control','placeholder'=> trans('validation.attributes.city')]) }}
                                    @if($errors->has('city'))
                                        <div class="error">
                                            {{$errors->first('city')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xs-12 stepy-navigator mt-5">
                                <button type="submit" class="position-right button-next btn bg-slate-300">update <i class="icon-arrow-right14 position-right"></i></button>
                            </div>
                            {{ Form::close() }}
                            @endif
                        </div>
                    </div>
                    <!-- /profile info -->

                    <!-- Account info -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h6 class="panel-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Account Informations</font></font><a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    @if(isset($user->update))
                                        <li><a data-action="update" data-target="#account-form" data-collapse="#account"><i class="icon-add-to-list"></i></a></li>
                                    @endif</ul>
                            </div>
                        </div>

                        <div class="panel-body" id="data-account">
                            <div class="row data" id="account">
                                <div class="col-xs-12">
                                    <div class="col-xs-12">
                                        <div class="col-xs-6">
                                            <span class="text-semibold">{{ trans('validation.attributes.email') }}</span>
                                        </div>
                                        <div class="col-xs-6">
                                            <p class="text-right">{{ ($user->email) ? $user->email : trans('profil.profil.inconnu') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="col-xs-6">
                                            <span class="text-semibold">{{ trans('validation.attributes.password') }}</span>
                                        </div>
                                        <div class="col-xs-6">
                                            <p class="text-right">**********</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="col-xs-6">
                                            <span class="text-semibold">{{ trans('validation.attributes.username') }}</span>
                                        </div>
                                        <div class="col-xs-6">
                                            <p class="text-right">{{ ($user->name) ? $user->name : trans('profil.profil.inconnu') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if(isset($user->update))
                            {{ Form::open(['method'=>'put','class'=>'form-horizontal row hidden','id'=>'account-form','url',route('profil.info.update',['slug'=>$user->slug])]) }}
                            <div class="form-group" >
                                <div class="col-sm-6">
                                    {{ Form::label('email',trans('validation.attributes.email') . ' :',['class'=>'text-semibold ml-2']) }}
                                    {{ Form::text('email',$user->email,['class'=>'form-control','placeholder'=> trans('validation.attributes.email')]) }}
                                    @if($errors->has('email'))
                                        <div class="error">
                                            {{$errors->first('email')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-sm-6">
                                    {{ Form::label('name',trans('validation.attributes.username') . ' :',['class'=>'text-semibold ml-2']) }}
                                    {{ Form::text('name',$user->name,['class'=>'form-control','placeholder'=> trans('validation.attributes.username')]) }}
                                    @if($errors->has('name'))
                                        <div class="error">
                                            {{$errors->first('name')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    {{ Form::label('password_current',trans('validation.attributes.password') . ' :',['class'=>'text-semibold ml-2']) }}
                                    {{ Form::password('password_current',['class'=>'form-control','placeholder'=> trans('validation.attributes.password')]) }}
                                    @if($errors->has('password_current'))
                                        <div class="error">
                                            {{$errors->first('password_current')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class=" col-sm-6">
                                    {{ Form::label('password',trans('validation.attributes.password') . ' :',['class'=>'text-semibold ml-2']) }}
                                    {{ Form::password('password',['class'=>'form-control','placeholder'=> trans('validation.attributes.password')]) }}
                                    @if($errors->has('password'))
                                        <div class="error">
                                            {{$errors->first('password')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-sm-6">
                                    {{ Form::label('password_confirmation',trans('validation.attributes.password_confirmation') . ' :',['class'=>'text-semibold ml-2']) }}
                                    {{ Form::password('password_confirmation',['class'=>'form-control','placeholder'=> trans('validation.attributes.password_confirmation')]) }}
                                    @if($errors->has('password_confirmation'))
                                        <div class="error">
                                            {{$errors->first('password_confirmation')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="stepy-navigator mt-5">
                                <button type="submit" class="position-right button-next btn bg-slate-300">update <i class="icon-arrow-right14 position-right"></i></button>
                            </div>
                            {{ Form::close() }}
                                @endif
                        </div>
                    </div>
                    <!-- /Account info -->

                </div>
            </div>

            <div class="col-lg-3">

                <!-- Navigation -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">Navigation<a class="heading-elements-toggle"><i class="icon-more"></i></a>
                        </h6>
                        <div class="heading-elements">
                            <a href="#" class="heading-text">See all →</a>
                        </div>
                    </div>

                    <div class="list-group no-border no-padding-top">
                        <a href="#" class="list-group-item"><i class="icon-user"></i> My profile</a>
                        <a href="#" class="list-group-item"><i class="icon-cash3"></i> Balance</a>
                        <a href="#" class="list-group-item"><i class="icon-tree7"></i> Connections <span
                                    class="badge bg-danger pull-right">29</span></a>
                        <a href="#" class="list-group-item"><i class="icon-users"></i> Friends</a>
                        <div class="list-group-divider"></div>
                        <a href="#" class="list-group-item"><i class="icon-calendar3"></i> Events <span
                                    class="badge bg-teal-400 pull-right">48</span></a>
                        <a href="#" class="list-group-item"><i class="icon-cog3"></i> Account settings</a>
                    </div>
                </div>
                <!-- /navigation -->


                <!-- Share your thoughts -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">Share your thoughts<a class="heading-elements-toggle"><i
                                        class="icon-more"></i></a></h6>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">
                        <form action="#">
                            <div class="form-group">
                            <textarea name="enter-message" class="form-control mb-15" rows="3" cols="1"
                                      placeholder="What's on your mind?"></textarea>
                            </div>

                            <div class="row">
                                <div class="col-xs-6">
                                    <ul class="icons-list icons-list-extended mt-10">
                                        <li><a href="#" data-popup="tooltip" title="" data-container="body"
                                               data-original-title="Add photo"><i class="icon-images2"></i></a></li>
                                        <li><a href="#" data-popup="tooltip" title="" data-container="body"
                                               data-original-title="Add video"><i class="icon-film2"></i></a></li>
                                        <li><a href="#" data-popup="tooltip" title="" data-container="body"
                                               data-original-title="Add event"><i class="icon-calendar2"></i></a></li>
                                    </ul>
                                </div>

                                <div class="col-xs-6 text-right">
                                    <button type="button" class="btn btn-primary btn-labeled btn-labeled-right">Share <b><i
                                                    class="icon-circle-right2"></i></b></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /share your thoughts -->


                <!-- Balance chart -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">Balance changes<a class="heading-elements-toggle"><i class="icon-more"></i></a>
                        </h6>
                        <div class="heading-elements">
                        <span class="heading-text"><i class="icon-arrow-down22 text-danger"></i> <span
                                    class="text-semibold">- 29.4%</span></span>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="chart-container">
                            <div class="chart" id="visits" style="height: 300px;"></div>
                        </div>
                    </div>
                </div>
                <!-- /balance chart -->


                <!-- Connections -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">Latest connections<a class="heading-elements-toggle"><i
                                        class="icon-more"></i></a></h6>
                        <div class="heading-elements">
                            <span class="badge badge-success heading-text">+32</span>
                        </div>
                    </div>

                    <ul class="media-list media-list-linked pb-5">
                        <li class="media-header">Office staff</li>

                        <li class="media">
                            <a href="#" class="media-link">
                                <div class="media-left"><img src="assets/images/demo/users/face1.jpg"
                                                             class="img-circle img-md" alt=""></div>
                                <div class="media-body">
                                    <span class="media-heading text-semibold">James Alexander</span>
                                    <span class="media-annotation">UI/UX expert</span>
                                </div>
                                <div class="media-right media-middle">
                                    <span class="status-mark bg-success"></span>
                                </div>
                            </a>
                        </li>

                        <li class="media">
                            <a href="#" class="media-link">
                                <div class="media-left"><img src="assets/images/demo/users/face2.jpg"
                                                             class="img-circle img-md" alt=""></div>
                                <div class="media-body">
                                    <span class="media-heading text-semibold">Jeremy Victorino</span>
                                    <span class="media-annotation">Senior designer</span>
                                </div>
                                <div class="media-right media-middle">
                                    <span class="status-mark bg-danger"></span>
                                </div>
                            </a>
                        </li>

                        <li class="media">
                            <a href="#" class="media-link">
                                <div class="media-left"><img src="assets/images/demo/users/face6.jpg"
                                                             class="img-circle img-md" alt=""></div>
                                <div class="media-body">
                                    <div class="media-heading"><span class="text-semibold">Jordana Mills</span></div>
                                    <span class="text-muted">Sales consultant</span>
                                </div>
                                <div class="media-right media-middle">
                                    <span class="status-mark bg-grey-300"></span>
                                </div>
                            </a>
                        </li>

                        <li class="media">
                            <a href="#" class="media-link">
                                <div class="media-left"><img src="assets/images/demo/users/face9.jpg"
                                                             class="img-circle img-md" alt=""></div>
                                <div class="media-body">
                                    <div class="media-heading"><span class="text-semibold">William Miles</span></div>
                                    <span class="text-muted">SEO expert</span>
                                </div>
                                <div class="media-right media-middle">
                                    <span class="status-mark bg-success"></span>
                                </div>
                            </a>
                        </li>

                        <li class="media-header">Partners</li>

                        <li class="media">
                            <a href="#" class="media-link">
                                <div class="media-left"><img src="assets/images/demo/users/face3.jpg"
                                                             class="img-circle img-md" alt=""></div>
                                <div class="media-body">
                                    <span class="media-heading text-semibold">Margo Baker</span>
                                    <span class="media-annotation">Google</span>
                                </div>
                                <div class="media-right media-middle">
                                    <span class="status-mark bg-success"></span>
                                </div>
                            </a>
                        </li>

                        <li class="media">
                            <a href="#" class="media-link">
                                <div class="media-left"><img src="assets/images/demo/users/face4.jpg"
                                                             class="img-circle img-md" alt=""></div>
                                <div class="media-body">
                                    <span class="media-heading text-semibold">Beatrix Diaz</span>
                                    <span class="media-annotation">Facebook</span>
                                </div>
                                <div class="media-right media-middle">
                                    <span class="status-mark bg-warning-400"></span>
                                </div>
                            </a>
                        </li>

                        <li class="media">
                            <a href="#" class="media-link">
                                <div class="media-left"><img src="assets/images/demo/users/face5.jpg"
                                                             class="img-circle img-md" alt=""></div>
                                <div class="media-body">
                                    <span class="media-heading text-semibold">Richard Vango</span>
                                    <span class="media-annotation">Microsoft</span>
                                </div>
                                <div class="media-right media-middle">
                                    <span class="status-mark bg-grey-300"></span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /connections -->

            </div>
        </div>
    </div>
<!-- /content area -->
@endsection

