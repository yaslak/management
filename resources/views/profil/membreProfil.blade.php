<?php
/*

<div id="user-agent">
    <span id="title-page" class="hidden">{{ $user->name }}</span>
    <span id="url-current">/membre/profil</span>
</div>
<!-- Cover area -->
<div class="profile-cover">
    <div class="profile-cover-img" style="background-image: url('{{asset('images/login_cover.jpg')}}')"></div>
    <div class="media">
        <div class="media-left">
            <a href="#" class="profile-thumb">
                @if(isset($output) and !empty($output->photo_profil))
                    <img src="{{ asset($output->photo_profil) }}" class="img-circle" title="{{$user->name}}" alt=""/>
                @else
                    <img src="{{asset('images/profil/profil.png')}}" class="img-circle" title="{{$user->name}}" alt="">
                @endif
            </a>
        </div>

        <div class="media-body">
            <h1>{{ ucfirst($output->first_name) . ' ' . strtoupper($output->last_name) }}
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
<!-- /cover area -->
<div class="content mt-10">
    <div class="row">
        <div class="col-lg-9">
            <div class="tab-pane fade active in" id="settings">

                <!-- Profile info -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">
                            Profile information
                            <a class="heading-elements-toggle">
                            </a>
                        </h6>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="col-xs-12">
                                    <div class="col-xs-6">
                                        <span class="text-semibold">{{ trans('validation.attributes.name') }}</span>
                                    </div>
                                    <div class="col-xs-6">
                                        <form class="heading-form hidden" action="#">
                                            <div class="form-group">
                                                <label class="checkbox-inline checkbox-switchery checkbox-right switchery-xs">
                                                    <input type="checkbox" class="switchery" checked="checked">
                                                    Enable editable:
                                                </label>
                                            </div>
                                        </form>

                                        <!-- Editable inputs -->
                                        <br><br><br><br><br><br><br><br><br><br><br><br>
                                        <a href="#" id="text-field-help" data-type="text" data-inputclass="form-control" data-pk="1" data-title="Help block">With help block</a>

                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="col-xs-6">
                                        <span class="text-semibold">{{ trans('validation.attributes.last_name') }}</span>
                                    </div>
                                    <div class="col-xs-6">
                                        <p class="text-right">{{ ($output->last_name) ? $output->last_name : trans('profil.profil.inconnu') }}</p>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="col-xs-6">
                                        <span class="text-semibold">{{ trans('validation.attributes.birth-date') }}</span>
                                    </div>
                                    <div class="col-xs-6">
                                        <p class="text-right">{{ ($output->dtn) ? Carbon\Carbon::parse($output->dtn)->format('d-m-Y') : trans('profil.profil.inconnu') }}</p>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="col-xs-6">
                                        <span class="text-semibold">{{ trans('validation.attributes.sex') }}</span>
                                    </div>
                                    <div class="col-xs-6">
                                        <p class="text-right">{{ ($output->sex) ? $output->sex : trans('profil.profil.inconnu') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="col-xs-12">
                                    <div class="col-xs-6">
                                        <span class="text-semibold">{{ trans('validation.attributes.phone') }}</span>
                                    </div>
                                    <div class="col-xs-6">
                                        <p class="text-right">{{ ($output->tel) ? $output->tel : trans('profil.profil.inconnu') }}</p>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="col-xs-6">
                                        <span class="text-semibold">{{ trans('validation.attributes.address') }}</span>
                                    </div>
                                    <div class="col-xs-6">
                                        <p class="text-right">{{ ($output->adress) ? $output->address : trans('profil.profil.inconnu') }}</p>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="col-xs-6">
                                        <span class="text-semibold">{{ trans('validation.attributes.house_nbr') }}</span>
                                    </div>
                                    <div class="col-xs-6">
                                        <p class="text-right">{{ ($output->house_nbr) ? $output->house_nbr : trans('profil.profil.inconnu') }}</p>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="col-xs-6">
                                        <span class="text-semibold">{{ trans('validation.attributes.city') }}</span>
                                    </div>
                                    <div class="col-xs-6">
                                        <p class="text-right">{{ ($output->city) ? $output->city : trans('profil.profil.inconnu') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /profile info -->

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

<!-- scripts pages -->
*/
?>


<div id="user-agent">
    <span id="title-page" class="hidden">{{ $user->name }}</span>
    <span id="url-current">/membre/profil</span>
</div>
<!-- Content area -->
<div class="content">

    <!-- Editable inputs -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Editable inputs</h5>
            <div class="heading-elements">
                <form class="heading-form" action="#">
                    <div class="form-group">
                        <label class="checkbox-inline checkbox-switchery checkbox-right switchery-xs">
                            <input type="checkbox" class="switchery" checked="checked">
                            Enable editable:
                        </label>
                    </div>
                </form>
            </div>
        </div>

        <div class="panel-body">
            X-editable - library, that allows you to create editable elements on your page. It can be used with any engine (bootstrap, jquery-ui, jquery only) and includes both popup and inline modes. By default, x-editable supports 13 input types, such as checkboxes, text fields, textareas, selects, dates etc. Also this library supports <code>Select2</code> and <code>Typeahead</code> integrations by default and some other examples with custom components built in.
        </div>

        <div class="table-responsive">
            <table class="table table-lg">
                <tr>
                    <th colspan="3" class="active">Basic examples</th>
                </tr>
                <tr>
                    <td style="width: 20%;">Simple text field</td>
                    <td><a href="#" id="text-field" data-type="text" data-inputclass="form-control" data-pk="1" data-title="Simple text field">Simple text field</a></td>
                    <td>Basic example with <code>data-type="text"</code> text input</td>
                </tr>
                <tr>
                    <td>Text field with help block</td>
                    <td><a href="#" id="text-field-help" data-type="text" data-inputclass="form-control" data-pk="1" data-title="Help block">With help block</a></td>
                    <td>Display helper text below the input field</td>
                </tr>
                <tr>
                    <td>Empty text field</td>
                    <td><a href="#" id="empty-field" data-type="text" data-inputclass="form-control" data-pk="1" data-title="Empty text field"></a></td>
                    <td>Open popover with empty value text field</td>
                </tr>
                <tr>
                    <td>Required text field</td>
                    <td><a href="#" id="empty-field-validate" data-type="text" data-inputclass="form-control" data-pk="1" data-title="Required text field"></a></td>
                    <td>Example of empty <span class="text-semibold">required</span> text field</td>
                </tr>
                <tr>
                    <td>Input group with addon</td>
                    <td><a href="#" id="input-group-addon" data-type="text" data-inputclass="form-control" data-pk="1" data-title="Input group addon">Eugene</a></td>
                    <td>Basic input group example with text or icon addon</td>
                </tr>
                <tr>
                    <td>Input group with button</td>
                    <td><a href="#" id="input-group-button" data-type="text" data-inputclass="form-control" data-pk="1" data-title="Input group button">Eugene</a></td>
                    <td>Display input group with button addon</td>
                </tr>
                <tr>
                    <td>Input group with dropdown</td>
                    <td><a href="#" id="input-group-dropdown" data-type="text" data-inputclass="form-control" data-pk="1" data-title="Input group button">Eugene</a></td>
                    <td>Display input group with button dropdown. Supports all possible button and dropdown variations</td>
                </tr>
                <tr>
                    <td>Default textarea</td>
                    <td><a href="#" id="textarea" data-type="textarea" data-pk="1" data-inputclass="form-control" data-placeholder="Your comments here..." data-title="Enter comments">Awesome user!</a></td>
                    <td>Display basic textarea with <code>data-type="textarea"</code></td>
                </tr>
                <tr>
                    <td>Elastic textarea</td>
                    <td><a href="#" id="textarea-elastic" data-type="textarea" data-pk="1" data-inputclass="form-control" data-placeholder="Your comments here..." data-title="Enter comments">Awesome user!</a></td>
                    <td>Elastic textarea integration example</td>
                </tr>
                <tr>
                    <td>Button color options</td>
                    <td><a href="#" id="button-variation" data-type="text" data-inputclass="form-control" data-pk="1" data-title="Button variation">Eugene</a></td>
                    <td>Choose different button colors and sizes</td>
                </tr>
                <tr>
                    <td>Autotext option</td>
                    <td>Group: <a href="#" id="editable-autotext" data-type="select" data-pk="1" data-inputclass="form-control" data-value="3" data-source="/groups" data-title="Select status"></a></td>
                    <td>Originally element is empty, but text is rendered when editable applied</td>
                </tr>
                <tr>
                    <td>Icon options</td>
                    <td><a href="#" id="icon-variation" data-type="text" data-inputclass="form-control" data-pk="1" data-title="Icon variation">Eugene</a></td>
                    <td>Change default icons for buttons</td>
                </tr>
                <tr>
                    <td>Several fields</td>
                    <td><a href="#" id="multiple-fields" data-type="address" data-pk="1" data-inputclass="form-control" data-title="Please, fill address"></a></td>
                    <td>Multiple fields example with <code>data-type="address"</code></td>
                </tr>

                <tr class="border-double">
                    <th colspan="3" class="active">Checkers and switchers</th>
                </tr>
                <tr>
                    <td>Unstyled single checkbox</td>
                    <td><a href="#" id="single-unstyled-checkbox" data-type="checklist" data-pk="1" data-title="Simple unstyled checkbox"></a></td>
                    <td>Display editable popup with single unstyled checkbox</td>
                </tr>
                <tr>
                    <td>Unstyled checklist</td>
                    <td><a href="#" id="unstyled-checklist" data-type="checklist" data-pk="1" data-value="2,3" data-title="Select fruits"></a></td>
                    <td>Display editable popup with list of checkboxes</td>
                </tr>
                <tr>
                    <td>Styled single checkbox</td>
                    <td><a href="#" id="single-styled-checkbox" data-type="checklist" data-inputclass="form-control" data-pk="1" data-title="Simple unstyled checkbox"></a></td>
                    <td>Display editable popup with single checkbox, styled with <code>Uniform</code> plugin</td>
                </tr>
                <tr>
                    <td>Styled checklist</td>
                    <td><a href="#" id="styled-checklist" data-type="checklist" data-pk="1" data-value="2,3" data-title="Select fruits"></a></td>
                    <td>Display popup with list of styled checkboxes</td>
                </tr>
                <tr>
                    <td>Checklist as unordered list</td>
                    <td>
                        <a href="#" id="checkbox-unordered-list" data-type="checklist" data-pk="1" data-title="Select fruits">[edit]</a>
                        <div id="list"></div>
                    </td>
                    <td>Displaying checked checkboxes as unordered list</td>
                </tr>
                <tr>
                    <td>Single Switchery toggle</td>
                    <td><a href="#" id="switchery-checkbox" data-type="checklist" data-pk="1" data-title="Select fruits"></a></td>
                    <td>Display single Switchery toggle instead of checkbox</td>
                </tr>
                <tr>
                    <td>Multiple Switchery toggle</td>
                    <td><a href="#" id="switchery-checklist" data-type="checklist" data-pk="1" data-value="2,3" data-title="Select fruits"></a></td>
                    <td>Display multiple Switchery toggles as a checklist</td>
                </tr>

                <tr class="border-double">
                    <th colspan="3" class="active">Basic selects</th>
                </tr>
                <tr>
                    <td>Basic select</td>
                    <td><a href="#" id="select-default" data-type="select" data-inputclass="form-control" data-pk="1" data-value="" data-title="Select default"></a></td>
                    <td>Basic unstyled select box, initialized with <code>data-type="select"</code>. Options can be defined via javascript <code>$().editable({...})</code> or via <code>data-*</code> html attributes.</td>
                </tr>
                <tr>
                    <td>Select with remote source</td>
                    <td><a href="#" id="select-default-remote" data-type="select" data-inputclass="form-control" data-pk="1" data-value="5" data-title="Select group">Admin</a></td>
                    <td>Display popup with select box, that loads data from remote source</td>
                </tr>
                <tr>
                    <td>Select with loading error</td>
                    <td><a href="#" id="select-default-error" data-type="select" data-inputclass="form-control" data-pk="1" data-value="0" data-title="Select status">Active</a></td>
                    <td>Display error message while loading select options</td>
                </tr>
                <tr>
                    <td>Dependent select lists</td>
                    <td>
                        <ul class="list list-unstyled">
                            <li>Default list: <a href="#" id="default-list" data-type="select" data-inputclass="form-control" data-pk="1" data-title="Select status"></a></li>
                            <li>Dependent list: <a href="#" id="dependent-list" data-type="select" data-inputclass="form-control" data-pk="1" data-title="Select status"></a></li>
                        </ul>
                    </td>
                    <td>Dependent selects - can't select 2nd select if 1st is empty</td>
                </tr>
                <tr>
                    <td>Date field</td>
                    <td><a href="#" id="date" data-type="combodate" data-pk="1" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D - MMM - YYYY" data-title="Select Date of birth"></a></td>
                    <td>Date select boxes in <code>YYYY-MM-DD</code> format</td>
                </tr>
                <tr>
                    <td>Datetime field</td>
                    <td><a href="#" id="datetime" data-type="combodate" data-pk="1" data-template="D MMM YYYY  HH:mm" data-format="YYYY-MM-DD HH:mm" data-viewformat="MMM D, YYYY, HH:mm" data-title="Setup event date and time"></a></td>
                    <td>Date and time select boxes in <code>YYYY-MM-DD HH:mm</code> format</td>
                </tr>

                <tr class="border-double">
                    <th colspan="3" class="active">Select2 selects</th>
                </tr>
                <tr>
                    <td>Single Select2 select</td>
                    <td><a href="#" id="select2-single" data-type="select2" data-pk="1" data-value="BS" data-title="Select country"></a></td>
                    <td>Example usage of a single Select2 select box</td>
                </tr>
                <tr>
                    <td>Multiple Select2 selects</td>
                    <td><a href="#" id="select2-multiple" data-type="select2" data-pk="1" data-title="Enter tags"></a></td>
                    <td>Example usage of multiple Select2 select box. This example doesn't have selected tags by default and displays a placeholder instead</td>
                </tr>
                <tr>
                    <td>Select2 remote source</td>
                    <td><a href="#" id="select2-single-remote" data-type="select2" data-pk="1" data-value="BS" data-title="Select country"></a></td>
                    <td>Loading remote source into Select2 select</td>
                </tr>

                <tr class="border-double">
                    <th colspan="3" class="active">Advanced usage</th>
                </tr>
                <tr>
                    <td>Disabled clear option</td>
                    <td><a href="#" id="disabled-clear" data-type="text" data-inputclass="form-control" data-pk="1" data-title="Simple text field">Disabled clearing</a></td>
                    <td>Clear input field functionality can be enabled or disabled via <code>clear: true/false</code> option</td>
                </tr>
                <tr>
                    <td>Typeahead implementation</td>
                    <td><a href="#" id="editable-typeahead" data-type="text" data-inputclass="form-control" data-pk="1" data-title="Start typing State.."></a></td>
                    <td>Example of implemented Twitter Typeahead suggestion engine</td>
                </tr>
                <tr>
                    <td>Render server response</td>
                    <td><a href="#" id="editable-render-response" data-type="text" data-inputclass="form-control" data-pk="1" data-title="Render server response into element">Awesome</a></td>
                    <td>Render server response into element</td>
                </tr>
                <tr>
                    <td>Process JSON response</td>
                    <td><a href="#" id="editable-json-response" data-type="text" data-inputclass="form-control" data-pk="1" data-title="Process JSON response">Awesome</a></td>
                    <td>Process JSON response. Try to submit empty field</td>
                </tr>
                <tr>
                    <td>Date picker</td>
                    <td><a href="#" id="datepicker" data-type="date" data-viewformat="dd.mm.yyyy" data-pk="1" data-title="When you want vacation to start?">25.02.2013</a></td>
                    <td>Example with integrated Bootstrap Datepicker plugin</td>
                </tr>
                <tr>
                    <td>PUT method submit</td>
                    <td><a href="#" id="editable-put-submit" data-type="text" data-inputclass="form-control" data-pk="1" data-title="Submit via PUT method">Awesome</a></td>
                    <td>Submit editable form via PUT method</td>
                </tr>

                <tr class="border-double">
                    <th colspan="3" class="active">Additional components</th>
                </tr>
                <tr>
                    <td>Input mask</td>
                    <td><a href="#" id="input-mask" data-type="text" data-inputclass="form-control" data-pk="1" data-title="Input mask"></a></td>
                    <td>Display editable popup with input mask attached to the text field</td>
                </tr>
                <tr>
                    <td>Input formatter</td>
                    <td><a href="#" id="input-formatter" data-type="text" data-inputclass="form-control" data-pk="1" data-title="Input formatter"></a></td>
                    <td>Display editable popup with specified text field format</td>
                </tr>
                <tr>
                    <td>Basic Touchspin implementation</td>
                    <td><a href="#" id="input-touchspin-basic" data-type="text" data-inputclass="form-control" data-pk="1" data-value="5.00" data-title="Touchspin implementation"></a></td>
                    <td>Basic example with integrated Touchspin spinner</td>
                </tr>
                <tr>
                    <td>Advanced Touchspin implementation</td>
                    <td><a href="#" id="input-touchspin-advanced" data-type="text" data-inputclass="form-control" data-pk="1" data-value="5.00" data-title="Touchspin implementation"></a></td>
                    <td>More complex example of a Touchspin spinner integrated to the editable field</td>
                </tr>
                <tr>
                    <td>Tagsinput with text</td>
                    <td><a href="#" id="input-tags-text" data-type="text" data-value="Amsterdam,Washington,Sydney" data-pk="1" data-title="Empty text field"></a></td>
                    <td>Tagsinput plugin example. Display values as text</td>
                </tr>
                <tr>
                    <td>Tagsinput with labels</td>
                    <td><a href="#" id="input-tags-labels" class="no-border-bottom" data-type="text" data-value="Amsterdam,Washington,Sydney" data-pk="1" data-title="Empty text field"></a></td>
                    <td>Tagsinput plugin example. Display values as labels</td>
                </tr>

                <tr class="border-double">
                    <th colspan="3" class="active">HTML5 input types</th>
                </tr>
                <tr>
                    <td>Password input type</td>
                    <td><a href="#" id="type-password" data-type="password" data-inputclass="form-control" data-pk="1" data-title="Password">Password</a></td>
                    <td>A single-line text field whose value is obscured. Use the maxlength attribute to specify the maximum length of the value that can be entered</td>
                </tr>
                <tr>
                    <td>Email input type</td>
                    <td><a href="#" id="type-email" data-type="email" data-inputclass="form-control" data-pk="1" data-title="Email">Email</a></td>
                    <td>A field for editing an e-mail address. The input value is validated to contain either the empty string or a single valid e-mail address before submitting</td>
                </tr>
                <tr>
                    <td>URL input type</td>
                    <td><a href="#" id="type-url" data-type="url" data-inputclass="form-control" data-pk="1" data-title="URL">URL</a></td>
                    <td>A field for editing a URL. Line-breaks and leading or trailing whitespace are automatically removed from the input value</td>
                </tr>
                <tr>
                    <td>Tel input type</td>
                    <td><a href="#" id="type-tel" data-type="tel" data-inputclass="form-control" data-pk="1" data-title="Tel">Phone #</a></td>
                    <td>A control for entering a telephone number; line-breaks are automatically removed from the input value, but no other syntax is enforced</td>
                </tr>
                <tr>
                    <td>Number input type</td>
                    <td><a href="#" id="type-number" data-type="number" data-inputclass="form-control" data-pk="1" data-title="Number">Number</a></td>
                    <td>A control for entering a floating point number</td>
                </tr>
                <tr>
                    <td>Range input type</td>
                    <td><a href="#" id="type-range" data-type="range" data-inputclass="form-control" data-pk="1" data-title="Range">Range</a></td>
                    <td>A control for entering a number whose exact value is not important</td>
                </tr>
                <tr>
                    <td>Time input type</td>
                    <td><a href="#" id="type-time" data-type="time" data-inputclass="form-control" data-pk="1" data-title="Time">Time</a></td>
                    <td>A control for entering a time value with no time zone.</td>
                </tr>
            </table>
        </div>
    </div>
    <!-- /editable inputs -->

</div>
<!-- /content area -->
<div id="scripts">
    {{ asset('js/core/libraries/jasny_bootstrap.min.js')}},
    {{ asset('js/plugins/forms/editable/editable.min.js')}},
    {{ asset('js/plugins/extensions/mockjax.min.js')}},
    {{ asset('js/plugins/forms/editable/address.js')}},
    {{ asset('js/plugins/ui/moment/moment.min.js')}},
    {{ asset('js/plugins/forms/styling/switchery.min.js')}},
    {{ asset('js/plugins/forms/styling/uniform.min.js')}},
    {{ asset('js/plugins/forms/selects/select2.min.js')}},
    {{ asset('js/plugins/forms/inputs/autosize.min.js')}},
    {{ asset('js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js')}},
    {{ asset('js/plugins/forms/tags/tagsinput.min.js')}},
    {{ asset('js/plugins/forms/inputs/touchspin.min.js')}},
    {{ asset('js/pages/form_editable.js')}},
    {{ asset('js/plugins/forms/inputs/formatter.min.js')}},
</div>
