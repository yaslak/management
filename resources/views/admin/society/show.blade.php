@extends('layouts.layout')
@section('theme-js')
@stop
@section('content')
    <!-- Content area -->
    <div class="content-group border-top-lg border-top-slate-300">
        <div class="page-header page-header-default page-header-lg" style="border-left: 1px solid #ddd; border-right: 1px solid #ddd;">
            <div class="page-header-content">
                <div class="page-title">
                    <a href="{{route('society_profil.index')}}"><h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">List</span></h4></a>
                </div>
                <div class="heading-elements">
                    <div class="btn-group heading-btn">
                        <a href="{{route('society_profil.create')}}">
                            <i class="fas fa-plus fa-2x text-purple"></i>
                        </a>
                    </div>
                </div>
            </div>
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}"><i class="icon-home2 position-left ml-5"></i> Accueil</a></li>
                <li><a href="{{route('admin.index')}}">Administration</a></li>
                <li><a href="{{route('society_profil.index')}}">societies List</a></li>
                <li class="active">{{$societies->name}}</li>
            </ul>
        </div>
    </div>
    <div class="content mt-10">
        <div class="row">
            <div class="col-md-8">
                <!-- info -->
                <div class="col-md-6">
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h6 class="panel-title">Info</h6>
                            <div class="heading-elements">
                                <i class="far fa-building"></i>
                            </div>
                        </div>
                        <ul class="media-list media-list-linked pb-5">

                            <li class="media">
                                <a href="#" class="media-link">
                                    <div class="col-xs-6">
                                        <span>name :</span>
                                    </div>
                                    <div class="col-xs-6">
                                       <span>{{ $societies->name }}</span>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="#" class="media-link">
                                    <div class="col-xs-6">
                                        <span>Tel :</span>
                                    </div>
                                    <div class="col-xs-6">
                                       <span>{{ $societies->tel }}</span>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="#" class="media-link">
                                    <div class="col-xs-6">
                                        <span>speaker :</span>
                                    </div>
                                    <div class="col-xs-6">
                                       <span>{{ $societies->speaker }}</span>
                                    </div>
                                </a>
                            </li>
                            <li class="media ">
                                <a href="#" class="media-link">
                                    <div class="col-xs-6">
                                        <span>address :</span>
                                    </div>
                                    <div class="col-xs-6">
                                       <span>{{ $societies->address .', N°'. $societies->build  }}</span>
                                    </div>
                                </a>
                            </li>
                            <li class="media ">
                                <a href="#" class="media-link">
                                    <div class="col-xs-6">
                                        <span>Zip :</span>
                                    </div>
                                    <div class="col-xs-6">
                                       <span>{{ $societies->zip }}</span>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="#" class="media-link">
                                    <div class="col-xs-6">
                                        <span>City :</span>
                                    </div>
                                    <div class="col-xs-6">
                                       <span>{{ $societies->city }}</span>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- technique -->
                <div class="col-md-6">
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h6 class="panel-title">Techniques :</h6>
                            <div class="heading-elements">
                                <i class="fas fa-puzzle-piece"></i>
                            </div>
                        </div>
                        <ul class="media-list media-list-linked pb-5">
                            <li class="media">
                                <a href="#" class="media-link">
                                    <div class="col-xs-6">
                                        <span>email :</span>
                                    </div>
                                    <div class="col-xs-6">
                                       <span>{{ $societies->email }}</span>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="#" class="media-link">
                                    <div class="col-xs-6">
                                        <span>Domaine :</span>
                                    </div>
                                    <div class="col-xs-6">
                                       <span>{{ $societies->domain }}</span>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="#" class="media-link">
                                    <div class="col-xs-6">
                                        <span>licence :</span>
                                    </div>
                                    <div class="col-xs-6">
                                       <span>{{ $societies->licence }}</span>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="#" class="media-link">
                                    <div class="col-xs-6">
                                        <span>limit :</span>
                                    </div>
                                    <div class="col-xs-6">
                                       <span>{{ $societies->limit }}</span>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="#" class="media-link">
                                    <div class="col-xs-6">
                                        <span>Range :</span>
                                    </div>
                                    <div class="col-xs-6">
                                       <span>{{ $societies->range }}</span>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="#" class="media-link">
                                    <div class="col-xs-6">
                                        <span>turnover :</span>
                                    </div>
                                    <div class="col-xs-6">
                                       <span>{{ $societies->turnover }}</span>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- posts -->
            <div class="col-md-4">
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">
                            employees
                            <a class="heading-elements-toggle"><i class="icon-more"></i></a>
                        </h6>
                        <div class="heading-elements">
                            <span class="badge badge-success heading-text">6</span>
                        </div>
                    </div>
                    <ul class="media-list media-list-linked pb-5">
                        <li class="media-header">PDG : </li>
                        @foreach($posts as $post)
                            @if($post->pivot->pdg)
                                <li class="media">
                                    <a href="#" class="media-link">
                                        <div class="media-left">
                                            <img src="{{asset($post->photo_profil)}}" class="img-circle img-md" alt=""></div>
                                        <div class="media-body">
                                            <span class="media-heading text-semibold">{{$post->first_name .' '. $post->last_name}}</span>
                                            <span class="media-annotation">{{$post->name}}</span>
                                        </div>
                                    </a>
                                </li>
                            @endif
                        @endforeach

                        <li class="media-header">Manager : </li>

                        <li class="media">
                            <a href="#" class="media-link">
                                <div class="media-left"><img src="assets/images/demo/users/face3.jpg" class="img-circle img-md" alt=""></div>
                                <div class="media-body">
                                    <span class="media-heading text-semibold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Margo Baker </font></font></span>
                                    <span class="media-annotation"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Google</font></font></span>
                                </div>
                                <div class="media-right media-middle">
                                    <span class="status-mark bg-success"></span>
                                </div>
                            </a>
                        </li>

                        <li class="media-header">Comptable : </li>

                        <li class="media">
                            <a href="#" class="media-link">
                                <div class="media-left"><img src="assets/images/demo/users/face3.jpg" class="img-circle img-md" alt=""></div>
                                <div class="media-body">
                                    <span class="media-heading text-semibold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Margo Baker </font></font></span>
                                    <span class="media-annotation"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Google</font></font></span>
                                </div>
                                <div class="media-right media-middle">
                                    <span class="status-mark bg-success"></span>
                                </div>
                            </a>
                        </li>

                        <li class="media-header">Commercial : </li>

                        <li class="media">
                            <a href="#" class="media-link">
                                <div class="media-left"><img src="assets/images/demo/users/face3.jpg" class="img-circle img-md" alt=""></div>
                                <div class="media-body">
                                    <span class="media-heading text-semibold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Margo Baker </font></font></span>
                                    <span class="media-annotation"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Google</font></font></span>
                                </div>
                                <div class="media-right media-middle">
                                    <span class="status-mark bg-success"></span>
                                </div>
                            </a>
                        </li>

                        <li class="media-header">delivery man : </li>

                        <li class="media">
                            <a href="#" class="media-link">
                                <div class="media-left"><img src="assets/images/demo/users/face3.jpg" class="img-circle img-md" alt=""></div>
                                <div class="media-body">
                                    <span class="media-heading text-semibold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Margo Baker </font></font></span>
                                    <span class="media-annotation"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Google</font></font></span>
                                </div>
                                <div class="media-right media-middle">
                                    <span class="status-mark bg-success"></span>
                                </div>
                            </a>
                        </li>

                        <li class="media-header">storekeeper : </li>

                        <li class="media">
                            <a href="#" class="media-link">
                                <div class="media-left"><img src="assets/images/demo/users/face3.jpg" class="img-circle img-md" alt=""></div>
                                <div class="media-body">
                                    <span class="media-heading text-semibold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Margo Baker </font></font></span>
                                    <span class="media-annotation"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Google</font></font></span>
                                </div>
                                <div class="media-right media-middle">
                                    <span class="status-mark bg-success"></span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /content area -->
@endsection

