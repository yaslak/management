<!-- Main navbar -->
<div class="navbar navbar-inverse">
    @guest
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{asset('images/logo_demo.png')}}" alt="">
            </a>

            <ul class="nav navbar-nav visible-xs-block">
                <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            </ul>
        </div>
        <div class="navbar-collapse collapse" id="navbar-mobile">

            <p class="navbar-text"><span class="label bg-danger">{{trans('validation.attributes.offline')}}</span></p>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown language-switch">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        @if(app()->getLocale() == 'ar')
                        <img src="{{asset('images/flags/ar.png')}}" class="position-left" alt="">
                        العربية
                        @else
                            <img src="{{asset('images/flags/fr.png')}}" class="position-left" alt="">
                            Français
                        @endif
                            <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" id="lang-switcher">
                        @if(app()->getLocale() == 'ar')
                        <li>
                            <a href="#" data-lang="fr">
                                <img src="{{asset('images/flags/fr.png')}}" alt=""> Français
                            </a>
                        </li>
                        @else
                        <li>
                            <a href="#" data-lang="ar" class="text-right">
                                <img src="{{asset('images/flags/ar.png')}}" alt="">
                                العربية</a>
                        </li>
                            @endif
                    </ul>
                </li>

                <li class="dropdown dropdown-user">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fas fa-user-plus"></i>
                        <span>{{trans('validation.attributes.user')}}</span>
                        <i class="caret"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <a href="{{route('login')}}">
                                <i class="fas fa-user mr-4 text-primary"></i> Login
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{route('register')}}"><i class="fas fa-user-plus mr-4 text-warning"></i> Register</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        @else
            <div class="navbar-header">
                <a class="navbar-brand" data-navigation="true" data-title="Accueil" href="{{route('home')}}">
                    <img src="{{asset('images/logo_light.png')}}" alt="">
                </a>
                <ul class="nav navbar-nav visible-xs-block">
                    <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
                    <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
                </ul>
            </div>
            <div class="navbar-collapse collapse" id="navbar-mobile">
                <ul class="nav navbar-nav">
                    <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-git-compare"></i>
                            <span class="visible-xs-inline-block position-right">Stock</span>
                            <span class="badge bg-warning-400">9</span>
                        </a>

                        <div class="dropdown-menu dropdown-content">
                            <div class="dropdown-content-heading">
                                Stock
                                <ul class="icons-list">
                                    <li><a href="#"><i class="icon-sync"></i></a></li>
                                </ul>
                            </div>

                            <ul class="media-list dropdown-content-body width-350">
                                <li class="media">
                                    <div class="media-left">
                                        <a href="#"
                                           class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i
                                                    class="icon-git-pull-request"></i></a>
                                    </div>

                                    <div class="media-body">
                                        Drop the IE <a href="#">specific hacks</a> for temporal inputs
                                        <div class="media-annotation">4 minutes ago</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <a href="#"
                                           class="btn border-warning text-warning btn-flat btn-rounded btn-icon btn-sm"><i
                                                    class="icon-git-commit"></i></a>
                                    </div>

                                    <div class="media-body">
                                        Add full font overrides for popovers and tooltips
                                        <div class="media-annotation">36 minutes ago</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <a href="#"
                                           class="btn border-info text-info btn-flat btn-rounded btn-icon btn-sm"><i
                                                    class="icon-git-branch"></i></a>
                                    </div>

                                    <div class="media-body">
                                        <a href="#">Chris Arney</a> created a new <span
                                                class="text-semibold">Design</span>
                                        branch
                                        <div class="media-annotation">2 hours ago</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <a href="#"
                                           class="btn border-success text-success btn-flat btn-rounded btn-icon btn-sm"><i
                                                    class="icon-git-merge"></i></a>
                                    </div>

                                    <div class="media-body">
                                        <a href="#">Eugene Kopyov</a> merged <span class="text-semibold">Master</span>
                                        and <span
                                                class="text-semibold">Dev</span> branches
                                        <div class="media-annotation">Dec 18, 18:36</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <a href="#"
                                           class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i
                                                    class="icon-git-pull-request"></i></a>
                                    </div>

                                    <div class="media-body">
                                        Have Carousel ignore keyboard events
                                        <div class="media-annotation">Dec 12, 05:46</div>
                                    </div>
                                </li>
                            </ul>

                            <div class="dropdown-content-footer">
                                <a href="#" data-popup="tooltip" title="All activity"><i
                                            class="icon-menu display-block"></i></a>
                            </div>
                        </div>
                    </li>
                </ul>

                <p class="navbar-text"><span class="label bg-success">{{trans('validation.attributes.online')}}</span></p>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown language-switch">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            @if(app()->getLocale() == 'ar')
                                <img src="{{asset('images/flags/ar.png')}}" class="position-left" alt="">
                                العربية
                            @else
                                <img src="{{asset('images/flags/fr.png')}}" class="position-left" alt="">
                                Français
                            @endif
                            <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" id="lang-switcher">
                            @if(app()->getLocale() == 'ar')
                                <li>
                                    <a href="#" data-lang="fr">
                                        <img src="{{asset('images/flags/fr.png')}}" alt=""> Français
                                    </a>
                                </li>
                            @else
                                <li>
                                    <a href="#" data-lang="ar">
                                        <img src="{{asset('images/flags/ar.png')}}" alt="">
                            العربية</a>
                                </li>
                            @endif
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-bubbles4"></i>
                            <span class="visible-xs-inline-block position-right">Messages</span>
                            <span class="badge bg-warning-400">2</span>
                        </a>

                        <div class="dropdown-menu dropdown-content width-350">
                            <div class="dropdown-content-heading">
                                Messages
                                <ul class="icons-list">
                                    <li><a href="#"><i class="icon-compose"></i></a></li>
                                </ul>
                            </div>

                            <ul class="media-list dropdown-content-body">
                                <li class="media">
                                    <div class="media-left">
                                        <img src="assets/images/demo/users/face10.jpg" class="img-circle img-sm" alt="">
                                        <span class="badge bg-danger-400 media-badge">5</span>
                                    </div>

                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="text-semibold">James Alexander</span>
                                            <span class="media-annotation pull-right">04:58</span>
                                        </a>

                                        <span class="text-muted">who knows, maybe that would be the best thing for me...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <img src="assets/images/demo/users/face3.jpg" class="img-circle img-sm" alt="">
                                        <span class="badge bg-danger-400 media-badge">4</span>
                                    </div>

                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="text-semibold">Margo Baker</span>
                                            <span class="media-annotation pull-right">12:16</span>
                                        </a>

                                        <span class="text-muted">That was something he was unable to do because...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left"><img src="assets/images/demo/users/face24.jpg"
                                                                 class="img-circle img-sm" alt=""></div>
                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="text-semibold">Jeremy Victorino</span>
                                            <span class="media-annotation pull-right">22:48</span>
                                        </a>

                                        <span class="text-muted">But that would be extremely strained and suspicious...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left"><img src="assets/images/demo/users/face4.jpg"
                                                                 class="img-circle img-sm" alt=""></div>
                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="text-semibold">Beatrix Diaz</span>
                                            <span class="media-annotation pull-right">Tue</span>
                                        </a>

                                        <span class="text-muted">What a strenuous career it is that I've chosen...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left"><img src="assets/images/demo/users/face25.jpg"
                                                                 class="img-circle img-sm" alt=""></div>
                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="text-semibold">Richard Vango</span>
                                            <span class="media-annotation pull-right">Mon</span>
                                        </a>

                                        <span class="text-muted">Other travelling salesmen live a life of luxury...</span>
                                    </div>
                                </li>
                            </ul>

                            <div class="dropdown-content-footer">
                                <a href="#" data-popup="tooltip" title="All messages"><i
                                            class="icon-menu display-block"></i></a>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown dropdown-user">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            @if(isset($user) and !empty($user->photo_profil))
                            <img src="{{ asset($user->photo_profil) }}" alt=""/>
                                @else
                                <img src="{{asset('images/profil/profil.png')}}" alt=""/>
                            @endif
                            <span>
                                @if(isset($user)) {{$user->name}} @endif
                            </span>
                            <i class="caret"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a href="{{route('profil.show',['slug'=>$user->slug])}}" data-navigation="true" data-title="@if(isset($user)) {{$user->name}} @else 'Profil' @endif">
                                    <i class="icon-user-plus"></i> My profile
                                </a>
                            </li>
                            <li><a href="#"><i class="icon-coins"></i> My balance</a></li>
                            <li><a href="#"><span class="badge bg-teal-400 pull-right">58</span> <i
                                            class="icon-comment-discussion"></i> Messages</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    <i class="icon-switch2"></i> Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            @endguest

            <form id="language"  method="POST"
                  style="display: none;">
                {{ csrf_field() }}
            </form>
</div>
<!-- /main navbar -->