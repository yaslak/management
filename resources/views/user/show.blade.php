@extends('layouts.layout')
@section('theme-js')

        <!-- Theme JS files -->
        <script type="text/javascript" src="{{asset('js/core/libraries/jquery_ui/interactions.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/plugins/forms/styling/switchery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/plugins/ui/moment/moment.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/plugins/ui/fullcalendar/fullcalendar.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/plugins/ui/fullcalendar/lang/ar.js')}}"></script>

        <script type="text/javascript" src="{{asset('js/pages/extra_fullcalendar_advanced.js')}}"></script>
        <!-- /theme JS files -->
@stop
@section('content')
    <div class="content-wrapper">

        <!-- Cover area -->
        <div class="profile-cover">
            <div class="profile-cover-img" style="background-image: url({{asset('uploads/images/demo/blog/1.jpg')}})"></div>
            <div class="media">
                <div class="media-left">
                    <a href="#" class="profile-thumb">
                        <img src="{{asset('uploads/images/demo/users/face11.jpg')}}" class="img-circle img-md" alt="">
                    </a>
                </div>

                <div class="media-body">
                    <h1>Hanna Dorman <small class="display-block">UX / UI concepteur</small></h1>
                </div>

                <div class="media-right media-middle">
                    <ul class="list-inline list-inline-condensed no-margin-bottom text-nowrap">
                        <li><a href="#" class="btn btn-default"><i class="icon-file-picture position-left"></i> Image de couverture</a></li>
                        <li><a href="#" class="btn btn-default"><i class="icon-file-stats position-left"></i> Statistiques</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /cover area -->


        <!-- Toolbar -->
        <div class="navbar navbar-default navbar-xs content-group">
            <ul class="nav navbar-nav visible-xs-block">
                <li class="full-width text-center"><a data-toggle="collapse" data-target="#navbar-filter"><i class="icon-menu7"></i></a></li>
            </ul>

            <div class="navbar-collapse collapse" id="navbar-filter">
                <ul class="nav navbar-nav">
                    <li class=""><a href="#activity" data-toggle="tab" aria-expanded="false"><i class="icon-menu7 position-left"></i> Activité</a></li>
                    <li class="active"><a href="#schedule" data-toggle="tab" aria-expanded="true"><i class="icon-calendar3 position-left"></i>Annexe <span class="badge badge-success badge-inline position-right">32</span></a></li>
                    <li class=""><a href="#settings" data-toggle="tab" aria-expanded="false"><i class="icon-cog3 position-left"></i> Paramètres</a></li>
                </ul>

                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="#"><i class="icon-collaboration position-left"></i> copains</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="icon-gear"></i> <span class="visible-xs-inline-block position-right"> Options</span> <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#"><i class="icon-image2"></i> Mise à jour</a></li>
                                <li><a href="#"><i class="icon-clippy"></i> Information sur la mise à jour</a></li>
                                <li><a href="#"><i class="icon-make-group"></i> Gérer les sections</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="icon-three-bars"></i> Journal d'activité</a></li>
                                <li><a href="#"><i class="icon-cog5"></i> Paramètres de profil</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /toolbar -->


        <!-- Content area -->
        <div class="content">

            <!-- User profile -->
            <div class="row">
                <div class="col-lg-9">
                    <div class="tabbable">
                        <div class="tab-content">
                            <div class="tab-pane fade" id="activity">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="content-group" id="external-events">
                                            <h6><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Evénements Draggable</font></font></h6>
                                            <div class="fc-events-container content-group">
                                                <div class="fc-event ui-draggable ui-draggable-handle" data-color="#546E7A" style="background-color: rgb(84, 110, 122); border-color: rgb(84, 110, 122);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sauna et d'autres choses</font></font></div>
                                                <div class="fc-event ui-draggable ui-draggable-handle" data-color="#26A69A" style="background-color: rgb(38, 166, 154); border-color: rgb(38, 166, 154);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">L'heure du déjeuner</font></font></div>
                                                <div class="fc-event ui-draggable ui-draggable-handle" data-color="#546E7A" style="background-color: rgb(84, 110, 122); border-color: rgb(84, 110, 122);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rencontre avec Fred</font></font></div>
                                                <div class="fc-event ui-draggable ui-draggable-handle" data-color="#FF7043" style="background-color: rgb(255, 112, 67); border-color: rgb(255, 112, 67);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Achats</font></font></div>
                                                <div class="fc-event ui-draggable ui-draggable-handle" data-color="#5C6BC0" style="background-color: rgb(92, 107, 192); border-color: rgb(92, 107, 192);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Restaurant</font></font></div>
                                                <div class="fc-event ui-draggable ui-draggable-handle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Basketball</font></font></div>
                                                <div class="fc-event ui-draggable ui-draggable-handle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Routine quotidienne</font></font></div>
                                            </div>

                                            <div class="checkbox checkbox-right checkbox-switchery switchery-xs text-center">
                                                <label>
                                                    <input type="checkbox" class="switch" checked="checked" id="drop-remove" data-switchery="true" style="display: none;"><span class="switchery switchery-default" style="background-color: rgb(100, 189, 99); border-color: rgb(100, 189, 99); box-shadow: rgb(100, 189, 99) 0px 0px 0px 8px inset; transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 14px; transition: background-color 0.4s, left 0.2s; background-color: rgb(255, 255, 255);"></small></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                            Retirer après la goutte
                                                        </font></font></label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-9">
                                        <div class="fullcalendar-external fc fc-unthemed fc-ltr"><div class="fc-toolbar fc-header-toolbar"><div class="fc-left"><div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div><button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">aujourd'hui</font></font></button></div><div class="fc-right"><div class="fc-button-group"><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mois</font></font></button><button type="button" class="fc-agendaWeek-button fc-button fc-state-default"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">la semaine</font></font></button><button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">journée</font></font></button></div></div><div class="fc-center"><h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Novembre 2014</font></font></h2></div><div class="fc-clear"></div></div><div class="fc-view-container" style=""><div class="fc-view fc-month-view fc-basic-view" style=""><table><thead class="fc-head"><tr><td class="fc-head-container fc-widget-header"><div class="fc-row fc-widget-header" style="border-right-width: 1px; margin-right: 16px;"><table><thead><tr><th class="fc-day-header fc-widget-header fc-sun"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Soleil</font></font></span></th><th class="fc-day-header fc-widget-header fc-mon"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lun</font></font></span></th><th class="fc-day-header fc-widget-header fc-tue"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mar</font></font></span></th><th class="fc-day-header fc-widget-header fc-wed"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mer</font></font></span></th><th class="fc-day-header fc-widget-header fc-thu"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jeu</font></font></span></th><th class="fc-day-header fc-widget-header fc-fri"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ven</font></font></span></th><th class="fc-day-header fc-widget-header fc-sat"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sam</font></font></span></th></tr></thead></table></div></td></tr></thead><tbody class="fc-body"><tr><td class="fc-widget-content"><div class="fc-scroller fc-day-grid-container" style="overflow-x: hidden; overflow-y: scroll; height: 507px;"><div class="fc-day-grid fc-unselectable"><div class="fc-row fc-week fc-widget-content"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2014-10-26"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2014-10-27"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2014-10-28"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2014-10-29"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-past" data-date="2014-10-30"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-past" data-date="2014-10-31"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2014-11-01"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2014-10-26"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">26</font></font></span></td><td class="fc-day-top fc-mon fc-other-month fc-past" data-date="2014-10-27"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">27</font></font></span></td><td class="fc-day-top fc-tue fc-other-month fc-past" data-date="2014-10-28"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">28</font></font></span></td><td class="fc-day-top fc-wed fc-other-month fc-past" data-date="2014-10-29"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">29</font></font></span></td><td class="fc-day-top fc-thu fc-other-month fc-past" data-date="2014-10-30"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">30</font></font></span></td><td class="fc-day-top fc-fri fc-other-month fc-past" data-date="2014-10-31"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">31</font></font></span></td><td class="fc-day-top fc-sat fc-past" data-date="2014-11-01"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable" style="background-color:#EF5350;border-color:#EF5350"><div class="fc-content"> <span class="fc-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Événement d'une journée</font></font></span></div><div class="fc-resizer fc-end-resizer"></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2014-11-02"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2014-11-03"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2014-11-04"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2014-11-05"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2014-11-06"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2014-11-07"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2014-11-08"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2014-11-02"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span></td><td class="fc-day-top fc-mon fc-past" data-date="2014-11-03"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></span></td><td class="fc-day-top fc-tue fc-past" data-date="2014-11-04"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></span></td><td class="fc-day-top fc-wed fc-past" data-date="2014-11-05"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></span></td><td class="fc-day-top fc-thu fc-past" data-date="2014-11-06"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></span></td><td class="fc-day-top fc-fri fc-past" data-date="2014-11-07"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></span></td><td class="fc-day-top fc-sat fc-past" data-date="2014-11-08"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8</font></font></span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td class="fc-event-container" colspan="2"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-not-end fc-draggable" style="background-color:#26A69A;border-color:#26A69A"><div class="fc-content"> <span class="fc-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Longévité</font></font></span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2014-11-09"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2014-11-10"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2014-11-11"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2014-11-12"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2014-11-13"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2014-11-14"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2014-11-15"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2014-11-09"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9</font></font></span></td><td class="fc-day-top fc-mon fc-past" data-date="2014-11-10"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">dix</font></font></span></td><td class="fc-day-top fc-tue fc-past" data-date="2014-11-11"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">11</font></font></span></td><td class="fc-day-top fc-wed fc-past" data-date="2014-11-12"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12</font></font></span></td><td class="fc-day-top fc-thu fc-past" data-date="2014-11-13"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13</font></font></span></td><td class="fc-day-top fc-fri fc-past" data-date="2014-11-14"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14</font></font></span></td><td class="fc-day-top fc-sat fc-past" data-date="2014-11-15"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15</font></font></span></td></tr></thead><tbody><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-not-start fc-end fc-draggable fc-resizable" style="background-color:#26A69A;border-color:#26A69A"><div class="fc-content"> <span class="fc-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Longévité</font></font></span></div><div class="fc-resizer fc-end-resizer"></div></a></td><td rowspan="6"></td><td rowspan="6"></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#546E7A;border-color:#546E7A"><div class="fc-content"><span class="fc-time"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6a </font></font></span> <span class="fc-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Conférence</font></font></span></div></a></td><td class="fc-event-container" rowspan="6"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#546E7A;border-color:#546E7A"><div class="fc-content"><span class="fc-time"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7a </font></font></span> <span class="fc-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fête d'anniversaire</font></font></span></div></a></td><td rowspan="6"></td><td rowspan="6"></td></tr><tr><td class="fc-event-container" rowspan="5"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#26A69A;border-color:#26A69A"><div class="fc-content"><span class="fc-time"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4p </font></font></span> <span class="fc-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">répétition d'événement</font></font></span></div></a></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#546E7A;border-color:#546E7A"><div class="fc-content"><span class="fc-time"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10h30 </font></font></span> <span class="fc-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Réunion</font></font></span></div></a></td></tr><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#546E7A;border-color:#546E7A"><div class="fc-content"><span class="fc-time"><font style="vertical-align: inherit;"></font></span> <font style="vertical-align: inherit;"><span class="fc-title"><font style="vertical-align: inherit;">Déjeuner </font></span><span class="fc-time"><font style="vertical-align: inherit;">12p</font></span></font><span class="fc-title"><font style="vertical-align: inherit;"></font></span></div></a></td></tr><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#546E7A;border-color:#546E7A"><div class="fc-content"><span class="fc-time"><font style="vertical-align: inherit;"></font></span> <font style="vertical-align: inherit;"><span class="fc-title"><font style="vertical-align: inherit;">Réunion </font></span><span class="fc-time"><font style="vertical-align: inherit;">2h30</font></span></font><span class="fc-title"><font style="vertical-align: inherit;"></font></span></div></a></td></tr><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#546E7A;border-color:#546E7A"><div class="fc-content"><span class="fc-time"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5: 30p </font></font></span> <span class="fc-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Happy Hour</font></font></span></div></a></td></tr><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#546E7A;border-color:#546E7A"><div class="fc-content"><span class="fc-time"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8p </font></font></span> <span class="fc-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dîner</font></font></span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2014-11-16"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2014-11-17"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2014-11-18"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2014-11-19"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2014-11-20"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2014-11-21"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2014-11-22"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2014-11-16"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">16</font></font></span></td><td class="fc-day-top fc-mon fc-past" data-date="2014-11-17"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17</font></font></span></td><td class="fc-day-top fc-tue fc-past" data-date="2014-11-18"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">18</font></font></span></td><td class="fc-day-top fc-wed fc-past" data-date="2014-11-19"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">19</font></font></span></td><td class="fc-day-top fc-thu fc-past" data-date="2014-11-20"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20</font></font></span></td><td class="fc-day-top fc-fri fc-past" data-date="2014-11-21"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">21</font></font></span></td><td class="fc-day-top fc-sat fc-past" data-date="2014-11-22"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22</font></font></span></td></tr></thead><tbody><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#5C6BC0;border-color:#5C6BC0"><div class="fc-content"><span class="fc-time"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4p </font></font></span> <span class="fc-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">répétition d'événement</font></font></span></div></a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2014-11-23"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2014-11-24"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2014-11-25"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2014-11-26"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2014-11-27"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2014-11-28"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2014-11-29"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2014-11-23"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">23</font></font></span></td><td class="fc-day-top fc-mon fc-past" data-date="2014-11-24"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">24</font></font></span></td><td class="fc-day-top fc-tue fc-past" data-date="2014-11-25"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">25</font></font></span></td><td class="fc-day-top fc-wed fc-past" data-date="2014-11-26"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">26</font></font></span></td><td class="fc-day-top fc-thu fc-past" data-date="2014-11-27"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">27</font></font></span></td><td class="fc-day-top fc-fri fc-past" data-date="2014-11-28"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">28</font></font></span></td><td class="fc-day-top fc-sat fc-past" data-date="2014-11-29"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">29</font></font></span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable" href="http://google.com/" style="background-color:#FF7043;border-color:#FF7043"><div class="fc-content"> <span class="fc-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cliquez pour Google</font></font></span></div><div class="fc-resizer fc-end-resizer"></div></a></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2014-11-30"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2014-12-01"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2014-12-02"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2014-12-03"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-past" data-date="2014-12-04"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-past" data-date="2014-12-05"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-past" data-date="2014-12-06"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2014-11-30"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">30</font></font></span></td><td class="fc-day-top fc-mon fc-other-month fc-past" data-date="2014-12-01"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span></td><td class="fc-day-top fc-tue fc-other-month fc-past" data-date="2014-12-02"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span></td><td class="fc-day-top fc-wed fc-other-month fc-past" data-date="2014-12-03"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></span></td><td class="fc-day-top fc-thu fc-other-month fc-past" data-date="2014-12-04"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></span></td><td class="fc-day-top fc-fri fc-other-month fc-past" data-date="2014-12-05"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></span></td><td class="fc-day-top fc-sat fc-other-month fc-past" data-date="2014-12-06"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade active in" id="schedule">

                                <!-- Available hours -->
                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h6 class="panel-title">Heures disponibles<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
                                        <div class="heading-elements">
                                            <ul class="icons-list">
                                                <li><a data-action="collapse"></a></li>
                                                <li><a data-action="reload"></a></li>
                                                <li><a data-action="close"></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <div class="chart-container">
                                            <div class="chart has-fixed-height" id="plans"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /available hours -->


                                <!-- Calendar -->
                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h6 class="panel-title">Mon emploi du temps<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
                                        <div class="heading-elements">
                                            <ul class="icons-list">
                                                <li><a data-action="collapse"></a></li>
                                                <li><a data-action="reload"></a></li>
                                                <li><a data-action="close"></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <div class="schedule"></div>
                                    </div>
                                </div>
                                <!-- /calendar -->

                            </div>

                            <div class="tab-pane fade" id="settings">

                                <!-- Profile info -->
                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h6 class="panel-title">Informations sur le profil<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
                                        <div class="heading-elements">
                                            <ul class="icons-list">
                                                <li><a data-action="collapse"></a></li>
                                                <li><a data-action="reload"></a></li>
                                                <li><a data-action="close"></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <form action="#">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Nom d'utilisateur</label>
                                                        <input type="text" value="Eugene" class="form-control">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Nom complet</label>
                                                        <input type="text" value="Kopyov" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Adresse 1</label>
                                                        <input type="text" value="Ring street 12" class="form-control">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Adresse Ligne 2</label>
                                                        <input type="text" value="building D, flat #67" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Ville</label>
                                                        <input type="text" value="Munich" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Etat / Province</label>
                                                        <input type="text" value="Bayern" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>code postal</label>
                                                        <input type="text" value="1031" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Email</label>
                                                        <input type="text" readonly="readonly" value="eugene@kopyov.com" class="form-control">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Votre pays</label>
                                                        <select class="select">
                                                            <option value="germany" selected="selected">Allemagne</option>
                                                            <option value="france">France</option>
                                                            <option value="spain">Espagne</option>
                                                            <option value="netherlands">Pays-Bas</option>
                                                            <option value="other">...</option>
                                                            <option value="uk">Royaume-Uni</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Téléphone #</label>
                                                        <input type="text" value="+99-99-9999-9999" class="form-control">
                                                        <span class="help-block">+ 99-99-9999-9999</span>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label class="display-block">Télécharger l'image du profil</label>
                                                        <input type="file" class="file-styled">
                                                        <span class="help-block">Formats acceptés: gif, png, jpg. Taille maximale du fichier 2Mb</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-right">
                                                <button type="submit" class="btn btn-primary">sauvegarder <i class="icon-arrow-right14 position-right"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- /profile info -->


                                <!-- Account settings -->
                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h6 class="panel-title">Paramètres du compte<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
                                        <div class="heading-elements">
                                            <ul class="icons-list">
                                                <li><a data-action="collapse"></a></li>
                                                <li><a data-action="reload"></a></li>
                                                <li><a data-action="close"></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <form action="#">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Nom d'utilisateur</label>
                                                        <input type="text" value="Kopyov" readonly="readonly" class="form-control">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label>Mot de passe actuel</label>
                                                        <input type="password" value="password" readonly="readonly" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Nouveau mot de passe</label>
                                                        <input type="password" placeholder="Enter new password" class="form-control">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label>Répéter le mot de passe</label>
                                                        <input type="password" placeholder="Repeat new password" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>La visibilité du profil</label>

                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="visibility" class="styled" checked="checked">
                                                                        Visible par tout le monde
                                                                    </label>
                                                        </div>

                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="visibility" class="styled">
                                                                        Visible uniquement par des amis
                                                                    </label>
                                                        </div>

                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="visibility" class="styled">
                                                                        Visible uniquement par mes connexions
                                                                    </label>
                                                        </div>

                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="visibility" class="styled">
                                                                        Visible uniquement par mes collègues
                                                                    </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label>Notifications</label>

                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="styled" checked="checked">
                                                                        Notification d'expiration du mot de
                                                                    </label>
                                                        </div>

                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="styled" checked="checked">
                                                                        Nouvelle notification de message
                                                                    </label>
                                                        </div>

                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="styled" checked="checked">
                                                                        Nouvelle notification de tâche
                                                                    </label>
                                                        </div>

                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="styled">
                                                                        Nouvelle notification de demande de contact
                                                                    </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-right">
                                                <button type="submit" class="btn btn-primary">sauvegarder <i class="icon-arrow-right14 position-right"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- /account settings -->

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">

                    <div class="thumbnail no-padding">
                        <div class="thumb">
                            <img src="{{asset('images/demo/users/face4.jpg')}}" alt="">
                            <div class="caption-overflow">
										<span>
											<a href="{{asset('images/demo/users/face4.jpg')}}" class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i class="icon-plus2"></i></a>
											<a href="#" class="btn bg-success-400 btn-icon btn-xs"><i class="icon-link"></i></a>
										</span>
                            </div>
                        </div>

                        <div class="caption text-center">
                            <a href="#" class="text-default"><h6 class="text-semibold no-margin"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Barbara Walden  </font></font><small class="display-block"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">spécialiste du référencement</font></font></small></h6></a>
                            <ul class="icons-list mt-15">
                                <li><a href="#" data-popup="tooltip" title="" data-container="body" data-original-title="Google Drive"><i class="icon-google-drive"></i></a></li>
                                <li><a href="#" data-popup="tooltip" title="" data-container="body" data-original-title="Twitter"><i class="icon-twitter"></i></a></li>
                                <li><a href="#" data-popup="tooltip" title="" data-container="body" data-original-title="Github"><i class="icon-github"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Connections -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h6 class="panel-title">Dernières connexions<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
                            <div class="heading-elements">
                                <span class="badge badge-success heading-text">+32</span>
                            </div>
                        </div>

                        <ul class="media-list media-list-linked pb-5">
                            <li class="media-header">Le personnel de bureau</li>

                            <li class="media">
                                <a href="#" class="media-link">
                                    <div class="media-left"><img src="assets/images/demo/users/face1.jpg" class="img-circle img-md" alt=""></div>
                                    <div class="media-body">
                                        <span class="media-heading text-semibold">James Alexander </span>
                                        <span class="media-annotation">UI / UX expert</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <span class="status-mark bg-success"></span>
                                    </div>
                                </a>
                            </li>

                            <li class="media">
                                <a href="#" class="media-link">
                                    <div class="media-left"><img src="assets/images/demo/users/face2.jpg" class="img-circle img-md" alt=""></div>
                                    <div class="media-body">
                                        <span class="media-heading text-semibold">Jeremy Victorino </span>
                                        <span class="media-annotation">Concepteur principal</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <span class="status-mark bg-danger"></span>
                                    </div>
                                </a>
                            </li>

                            <li class="media">
                                <a href="#" class="media-link">
                                    <div class="media-left"><img src="assets/images/demo/users/face6.jpg" class="img-circle img-md" alt=""></div>
                                    <div class="media-body">
                                        <div class="media-heading"><span class="text-semibold">Jordana Mills</span></div>
                                        <span class="text-muted">Conseiller des ventes</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <span class="status-mark bg-grey-300"></span>
                                    </div>
                                </a>
                            </li>

                            <li class="media">
                                <a href="#" class="media-link">
                                    <div class="media-left"><img src="assets/images/demo/users/face9.jpg" class="img-circle img-md" alt=""></div>
                                    <div class="media-body">
                                        <div class="media-heading"><span class="text-semibold">William Miles</span></div>
                                        <span class="text-muted">Expert SEO</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <span class="status-mark bg-success"></span>
                                    </div>
                                </a>
                            </li>

                            <li class="media-header">Les partenaires</li>

                            <li class="media">
                                <a href="#" class="media-link">
                                    <div class="media-left"><img src="assets/images/demo/users/face3.jpg" class="img-circle img-md" alt=""></div>
                                    <div class="media-body">
                                        <span class="media-heading text-semibold">Margo Baker </span>
                                        <span class="media-annotation">Google</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <span class="status-mark bg-success"></span>
                                    </div>
                                </a>
                            </li>

                            <li class="media">
                                <a href="#" class="media-link">
                                    <div class="media-left"><img src="assets/images/demo/users/face4.jpg" class="img-circle img-md" alt=""></div>
                                    <div class="media-body">
                                        <span class="media-heading text-semibold">Beatrix Diaz </span>
                                        <span class="media-annotation">Facebook</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <span class="status-mark bg-warning-400"></span>
                                    </div>
                                </a>
                            </li>

                            <li class="media">
                                <a href="#" class="media-link">
                                    <div class="media-left"><img src="assets/images/demo/users/face5.jpg" class="img-circle img-md" alt=""></div>
                                    <div class="media-body">
                                        <span class="media-heading text-semibold">Richard Vango </span>
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


                    <!-- Balance chart -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h6 class="panel-title">Les changements d'équilibre<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
                            <div class="heading-elements">
                                <span class="heading-text"><i class="icon-arrow-down22 text-danger"></i> <span class="text-semibold">- 29,4%</span></span>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="chart-container">
                                <div class="chart" id="visits" style="height: 300px;"></div>
                            </div>
                        </div>
                    </div>
                    <!-- /balance chart -->






                </div>
            </div>
            <!-- /user profile -->


            <!-- Footer -->
            <div class="footer text-muted">
                        © 2015. <a href="#">Kit d'application Web sans </a><a href="http://themeforest.net/user/Kopyov" target="_blank">limites</a> par <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
            </div>
            <!-- /footer -->

        </div>
        <!-- /content area -->
        <!-- External events -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">External events</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
                <p class="content-group">Add extended dragging functionality with <code>droppable</code> option. Data can be attached to the element in order to specify its duration when dropped. A Duration-ish value can be provided. This can either be done via jQuery or via an <code>data-duration</code> attribute. Please note: since droppable option operates with jQuery UI draggables, you must download the appropriate jQuery UI files and initialize a draggable element.</p>

                <div class="row">
                    <div class="col-md-3">
                        <div class="content-group" id="external-events">
                            <h6>Draggable Events</h6>
                            <div class="fc-events-container content-group">
                                <div class="fc-event" data-color="#546E7A">Sauna and stuff</div>
                                <div class="fc-event" data-color="#26A69A">Lunch time</div>
                                <div class="fc-event" data-color="#546E7A">Meeting with Fred</div>
                                <div class="fc-event" data-color="#FF7043">Shopping</div>
                                <div class="fc-event" data-color="#5C6BC0">Restaurant</div>
                                <div class="fc-event">Basketball</div>
                                <div class="fc-event">Daily routine</div>
                            </div>

                            <div class="checkbox checkbox-right checkbox-switchery switchery-xs text-center">
                                <label>
                                    <input type="checkbox" class="switch" checked="checked" id="drop-remove">
                                    Remove after drop
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="fullcalendar-external"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /external events -->

    </div>
@stop