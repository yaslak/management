@auth
    <!-- Main sidebar -->
    <div class="sidebar sidebar-main">
        <div class="sidebar-content">
            <!-- User menu -->
            <div class="sidebar-user">
                <div class="category-content">
                    <div class="media">
                        <a href="#" class="media-left">
                            @if(isset($user) and !empty($user->photo_profil))
                                <img src="{{ asset($user->photo_profil) }}" class="img-circle img-lg" alt=""/>
                            @else
                                <img src="{{asset('images/profil/profil.png')}}" class="img-circle img-lg" alt=""/>
                            @endif
                        </a>
                        <div class="media-body">
                            <span class="media-heading text-semibold">{{$user->name}}</span>
                            <div class="text-size-mini text-muted">
                                <i class="icon-pin text-size-small"></i>&nbsp{{ ucfirst($user->city) }}
                            </div>
                        </div>

                        <div class="media-right media-middle">
                            <ul class="icons-list">
                                <li>
                                    <a href="{{route('setting.index')}}"><i class="icon-cog3"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /user menu -->


            <!-- Main navigation -->
            <div class="sidebar-category sidebar-category-visible">
                <div class="category-content no-padding">
                    <ul class="navigation navigation-main navigation-accordion">

                        <!-- Main -->
                        <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i>
                        </li>
                        <li><a href="{{route('home')}}"><i class="icon-home4 text-warning-700"></i> <span>Dashboard</span></a></li>
                        <li><a href="{{route('agenda.index')}}"><i class="icon-calendar text-warning-700"></i> <span>Calendrier</span></a></li>
                        <li><a href="{{route('statistic.index')}}"><i class="icon-stats-growth text-warning-700"></i> <span>Statistiques</span></a></li>
                        <li><a href="{{route('provider.index')}}"><i class="icon-people text-warning-700"></i> <span>Fournisseurs</span></a></li>
                        <li><a href="{{route('client.index')}}"><i class="icon-spotlight2 text-warning-700"></i> <span>Clients</span></a></li>
                        <li><a href="{{route('store.index')}}"><i class="icon-versions text-warning-700"></i> <span>Stock</span></a></li>
                        <li>
                            <a href="#"><i class="icon-stack2 text-warning-700"></i> <span>Opération</span></a>
                            <ul>
                                <li><a href="{{route('buy.index')}}">Achats</a></li>
                                <li><a href="{{route('sale.index')}}">Vente</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('accounting.index')}}"><i class="icon-stack-check text-warning-700"></i> <span>Comptabilité</span></a></li>
                        <li><a href="#"><i class="icon-coins text-warning-700"></i> <span>Boutique</span></a></li>
                        <li><a href="#"><i class="icon-comment-discussion text-warning-700"></i> <span>Communication</span></a></li>
                        <!-- /main -->

                    </ul>
                </div>
            </div>
            <!-- /main navigation -->

        </div>
    </div>
    <!-- /main sidebar -->
@endauth