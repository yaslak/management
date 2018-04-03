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
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Accueil</span> - Tableau de bord</h4>
                <a class="heading-elements-toggle"><i class="icon-more"></i></a><a class="heading-elements-toggle"><i class="icon-more"></i></a></div>

            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistiques</span></a>
                    <a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Factures</span></a>
                    <a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Programme</span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line"><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
            <ul class="breadcrumb">
                <li><a href="index.html"><i class="icon-home2 position-left"></i> Accueil</a></li>
                <li class="active">Tableau de bord</li>
            </ul>

            <ul class="breadcrumb-elements">
                <li><a href="#"><i class="icon-comment-discussion position-left"></i> Soutien</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="icon-gear position-left"></i>
                                Paramètres
                            <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#"><i class="icon-user-lock"></i> Sécurité du compte</a></li>
                        <li><a href="#"><i class="icon-statistics"></i> Analytique</a></li>
                        <li><a href="#"><i class="icon-accessibility"></i> Accessibilité</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="icon-gear"></i> Tous les paramètres</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- Content area -->
    <div class="content mt-10">
        <div class="row">
            <div class="col-lg-8">
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">
                            Campagnes de marketing<a class="heading-elements-toggle"><i class="icon-more"></i></a>
                        </h6>
                        <div class="heading-elements">
                            <span class="label bg-success heading-text">28 actifs</span>
                            <ul class="icons-list">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#"><i class="icon-sync"></i> Update data</a></li>
                                        <li><a href="#"><i class="icon-list-unordered"></i> Detailed log</a></li>
                                        <li><a href="#"><i class="icon-pie5"></i> Statistics</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="icon-cross3"></i> Clear list</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-lg text-nowrap">
                            <tbody>
                            <tr>
                                <td class="col-md-5">
                                    <div class="media-left">
                                        <div id="campaigns-donut"><svg width="42" height="42"><g transform="translate(21,21)"><g class="d3-arc" style="stroke: rgb(255, 255, 255); cursor: pointer;"><path d="M1.1634144591899855e-15,19A19,19 0 0,1 -14.050144241469582,12.790365389381929L-7.025072120734791,6.3951826946909645A9.5,9.5 0 0,0 5.817072295949927e-16,9.5Z" style="fill: rgb(102, 187, 106);"></path></g><g class="d3-arc" style="stroke: rgb(255, 255, 255); cursor: pointer;"><path style="fill: rgb(149, 117, 205);" d="M-14.050144241469582,12.790365389381929A19,19 0 0,1 0.6493373977393208,-18.988900993577726L0.3246686988696604,-9.494450496788863A9.5,9.5 0 0,0 -7.025072120734791,6.3951826946909645Z"></path></g><g class="d3-arc" style="stroke: rgb(255, 255, 255); cursor: pointer;"><path style="fill: rgb(255, 112, 67);" d="M0.6493373977393208,-18.988900993577726A19,19 0 0,1 5.817072295949928e-15,19L2.908536147974964e-15,9.5A9.5,9.5 0 0,0 0.3246686988696604,-9.494450496788863Z"></path></g></g></svg></div>
                                    </div>

                                    <div class="media-left">
                                        <h5 class="text-semibold no-margin">38 289 <small class="text-success text-size-base"><i class="icon-arrow-up12"></i> (+ 16,2%)</small></h5>
                                        <ul class="list-inline list-inline-condensed no-margin">
                                            <li>
                                                <span class="status-mark border-success"></span>
                                            </li>
                                            <li>
                                                <span class="text-muted">12 mai, 12h30</span>
                                            </li>
                                        </ul>
                                    </div>
                                </td>

                                <td class="col-md-5">
                                    <div class="media-left">
                                        <div id="campaign-status-pie"><svg width="42" height="42"><g transform="translate(21,21)"><g class="d3-arc" style="stroke: rgb(255, 255, 255); cursor: pointer;"><path d="M1.1634144591899855e-15,19A19,19 0 0,1 -10.035763324841723,-16.133302652828462L-5.017881662420861,-8.066651326414231A9.5,9.5 0 0,0 5.817072295949927e-16,9.5Z" style="fill: rgb(41, 182, 246);"></path></g><g class="d3-arc" style="stroke: rgb(255, 255, 255); cursor: pointer;"><path style="fill: rgb(239, 83, 80);" d="M-10.035763324841723,-16.133302652828462A19,19 0 0,1 17.35205039879773,-7.739919053684189L8.676025199398865,-3.8699595268420945A9.5,9.5 0 0,0 -5.017881662420861,-8.066651326414231Z"></path></g><g class="d3-arc" style="stroke: rgb(255, 255, 255); cursor: pointer;"><path style="fill: rgb(129, 199, 132);" d="M17.35205039879773,-7.739919053684189A19,19 0 0,1 14.540850859600345,12.229622082421841L7.270425429800173,6.1148110412109205A9.5,9.5 0 0,0 8.676025199398865,-3.8699595268420945Z"></path></g><g class="d3-arc" style="stroke: rgb(255, 255, 255); cursor: pointer;"><path style="fill: rgb(153, 153, 153);" d="M14.540850859600345,12.229622082421841A19,19 0 0,1 5.817072295949928e-15,19L2.908536147974964e-15,9.5A9.5,9.5 0 0,0 7.270425429800173,6.1148110412109205Z"></path></g></g></svg></div>
                                    </div>

                                    <div class="media-left">
                                        <h5 class="text-semibold no-margin">2 458 <small class="text-danger text-size-base"><i class="icon-arrow-down12"></i> (- 4,9%)</small></h5>
                                        <ul class="list-inline list-inline-condensed no-margin">
                                            <li>
                                                <span class="status-mark border-danger"></span>
                                            </li>
                                            <li>
                                                <span class="text-muted">4 juin, 4h00</span>
                                            </li>
                                        </ul>
                                    </div>
                                </td>

                                <td class="text-right col-md-2">
                                    <a href="#" class="btn bg-indigo-300"><i class="icon-statistics position-left"></i> Voir le rapport</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th>Campagne</th>
                                    <th class="col-md-2">Tel</th>
                                    <th class="col-md-2">Speaker</th>
                                    <th class="col-md-2">Statut</th>
                                    <th class="text-center"><i class="icon-arrow-down12"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr class="active border-double">
                                <td colspan="5">privé</td>
                            </tr>
                            @foreach($pivots as $pivot)
                                <tr role="row" class="odd">
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#"><img src="assets/images/brands/bing.png" class="img-circle img-xs" alt=""></a>
                                        </div>
                                        <div class="media-left">
                                            <div class=""><a href="#" class="text-default text-semibold">{{$pivot->pivot_deal_name}}</a></div>
                                            <div class="text-muted text-size-small">
                                                <span class="status-mark border-success position-left"></span>
                                                {{$pivot->pivot_deal_domain}}
                                            </div>
                                        </div>
                                    </td>
                                    <td>0657834565</td>
                                    <td><span class="label bg-success-400">{{$pivot->pivot_deal_speaker}}</span></td>
                                    <td><span class="text-danger"><i class="icon-stats-decline2 position-left"></i> - 5,78%</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropup">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>
                                                    <li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>
                                                    <li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-gear"></i> Settings</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach

                            <tr class="active border-double">
                                <td colspan="4">Hier</td>
                                <td colspan="1">plus</td>
                            </tr>

                            @foreach($clients as $client)
                                <tr role="row" class="odd">
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#"><img src="assets/images/brands/bing.png" class="img-circle img-xs" alt=""></a>
                                        </div>
                                        <div class="media-left">
                                            <div class=""><a href="#" class="text-default text-semibold">{{$pivot->pivot_deal_name}}</a></div>
                                            <div class="text-muted text-size-small">
                                                <span class="status-mark border-success position-left"></span>
                                                {{$pivot->pivot_deal_domain}}
                                            </div>
                                        </div>
                                    </td>
                                    <td>0657834565</td>
                                    <td><span class="label bg-success-400">{{$pivot->pivot_deal_speaker}}</span></td>
                                    <td><span class="text-danger"><i class="icon-stats-decline2 position-left"></i> - 5,78%</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropup">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>
                                                    <li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>
                                                    <li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-gear"></i> Settings</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /content area -->
@endsection