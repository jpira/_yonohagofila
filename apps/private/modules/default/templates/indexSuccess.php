<div id="loading"><img src="img/ajax-loader.gif"></div>
        <div id="responsive_part">
            <div class="logo"> <a href="index.html"><span>Start</span><span class="icon"></span></a> </div>
            <ul class="nav responsive">
                <li>
                    <button class="btn responsive_menu icon_item" data-toggle="collapse" data-target=".overview"> <i class="icon-reorder"></i> </button>
                </li>
            </ul>
        </div>
        <!-- Responsive part -->

        <div id="sidebar" class="">
            <div class="scrollbar">
                <div class="track">
                    <div class="thumb">
                        <div class="end"></div>
                    </div>
                </div>
            </div>
            <div class="viewport ">
                <div class="overview collapse">
                    <div class="search row-fluid container">
                        <h2>Search</h2>
                        <form class="form-search">
                            <div class="input-append">
                                <input type="text" class=" search-query" placeholder="">
                                <button class="btn_search color_4">Search</button>
                            </div>
                        </form>
                    </div>
                    <ul id="sidebar_menu" class="navbar nav nav-list container full">
                        <li class="accordion-group active color_4"> <a class="dashboard " href="index.html"><img src="img/menu_icons/dashboard.png"><span>Dashboard</span></a> </li>
                        <li class="accordion-group color_7"> <a class="accordion-toggle widgets collapsed " data-toggle="collapse" data-parent="#sidebar_menu" href="#collapse1"> <img src="img/menu_icons/forms.png"><span>Form Elements</span></a>
                            <ul id="collapse1" class="accordion-body collapse">
                                <li><a href="forms_general.html">General</a></li>
                                <li><a href="forms_wizard.html">Wizards</a></li>
                                <li><a href="forms_validation.html">Validation</a></li>
                                <li><a href="forms_editor.html">Editor</a></li>
                            </ul>
                        </li>
                        <li class="accordion-group color_3"> <a class="accordion-toggle widgets collapsed" data-toggle="collapse" data-parent="#sidebar_menu" href="#collapse2"> <img src="img/menu_icons/widgets.png"><span>UI Widgets</span></a>
                            <ul id="collapse2" class="accordion-body collapse">
                                <li><a href="ui_buttons.html">Buttons</a></li>
                                <li><a href="ui_dialogs.html">Dialogs</a></li>
                                <li><a href="ui_icons.html">Icons</a></li>
                                <li><a href="ui_tabs.html">Tabs</a></li>
                                <li><a href="ui_accordion.html">Accordion</a></li>
                            </ul>
                        </li>
                        <li class="color_13"> <a class="widgets" href="calendar2.html"> <img src="img/menu_icons/calendar.png"><span>Calendar</span></a> </li>
                        <li class="color_10"> <a class="widgets"data-parent="#sidebar_menu" href="maps.html"> <img src="img/menu_icons/maps.png"><span>Maps</span></a> </li>
                        <li class="accordion-group color_12"> <a class="accordion-toggle widgets collapsed" data-toggle="collapse" data-parent="#sidebar_menu" href="#collapse3"> <img src="img/menu_icons/tables.png"><span>Tables</span></a>
                            <ul id="collapse3" class="accordion-body collapse">
                                <li><a href="tables_static.html">Static</a></li>
                                <li><a href="tables_dynamic.html">Dynamics</a></li>
                            </ul>
                        </li>
                        <li class="accordion-group color_19"> <a class="accordion-toggle widgets collapsed" data-toggle="collapse" data-parent="#sidebar_menu" href="#collapse4"> <img src="img/menu_icons/statistics.png"><span>Charts</span></a>
                            <ul id="collapse4" class="accordion-body collapse">
                                <li><a href="statistics.html">Statistics Elements</a></li>
                                <li><a href="charts.html">Charts</a></li>
                            </ul>
                        </li>
                        <li class="color_24"> <a class="widgets"data-parent="#sidebar_menu" href="grid.html"> <img src="img/menu_icons/grid.png"><span>Grid</span></a> </li>
                        <li class="color_8"> <a class="widgets"data-parent="#sidebar_menu" href="media.html"> <img src="img/menu_icons/gallery.png"><span>Media</span></a> </li>
                        <li class="color_4"> <a class="widgets"data-parent="#sidebar_menu" href="file_explorer.html"> <img src="img/menu_icons/explorer.png"><span>File Explorer</span> <!--  --></a> </li>
                        <li class="accordion-group color_25"> <a class="accordion-toggle widgets collapsed" data-toggle="collapse" data-parent="#sidebar_menu" href="#collapse5"> <img src="img/menu_icons/others.png"><span>Specific Pages</span></a>
                            <ul id="collapse5" class="accordion-body collapse">
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="search.html">Search</a></li>
                                <li><a href="index2.html">Login</a></li>
                                <li><a href="404.html">404 Error</a></li>
                                <li ><a href="blog.html">Blog</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="menu_states row-fluid container ">
                        <h2 class="pull-left">Menu Settings</h2>
                        <div class="options pull-right">
                            <button id="menu_state_1" class="color_4" rel="tooltip" data-state ="sidebar_icons" data-placement="top" data-original-title="Icon Menu">1</button>
                            <button id="menu_state_2" class="color_4 active" rel="tooltip" data-state ="sidebar_default" data-placement="top" data-original-title="Fixed Menu">2</button>
                            <button id="menu_state_3" class="color_4" rel="tooltip" data-placement="top" data-state ="sidebar_hover" data-original-title="Floating on Hover Menu">3</button>
                        </div>
                    </div>
                    <!-- End sidebar_box --> 

                </div>
            </div>
        </div>
        <div id="main">
            <div class="container">
                <div class="header row-fluid">
                    <div class="logo"> <a href="index.html"><span>Start</span><span class="icon"></span></a> </div>
                    <div class="top_right">
                        <ul class="nav nav_menu">
                            <li class="dropdown"> <a class="dropdown-toggle administrator" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="/page.html">
                                    <div class="title"><span class="name">George</span><span class="subtitle">Future Buyer</span></div>
                                    <span class="icon"><img src="img/thumbnail_george.jpg"></span></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                    <li><a href="profile.html"><i class=" icon-user"></i> My Profile</a></li>
                                    <li><a href="forms_general.html"><i class=" icon-cog"></i>Settings</a></li>
                                    <li><a href="index2.html"><i class=" icon-unlock"></i>Log Out</a></li>
                                    <li><a href="search.html"><i class=" icon-flag"></i>Help</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- End top-right --> 
                </div>
                <div id="main_container">
                    <div class="row-fluid">
                        <div class="span6 ">
                            <div class="box color_3 title_big height_big paint_hover">
                                <div class="title">
                                    <div class="row-fluid">
                                        <div class="span12">
                                            <h4> </i><span>Campaigns</span> </h4>
                                        </div>
                                        <!-- End .span12 --> 
                                    </div>
                                    <!-- End .row-fluid --> 

                                </div>
                                <!-- End .title -->
                                <div class="content"  style="padding-top:35px;">
                                    <div id="placeholder" style="width:100%;height:240px;"> </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .box .span6-->
                        <div class="span6">
                            <div class="row-fluid fluid">
                                <div class="span6">
                                    <div class=" box color_2 height_medium paint_hover">
                                        <div class="content numbers">
                                            <h3 class="value">219.103</h3>
                                            <div class="description mb5">Audience Reach</div>
                                            <h1 class="value">3.28<span class="percent">%</span></h1>
                                            <div class="description">Average CTR</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End .span6 -->
                                <div class="span6">
                                    <div class="box color_25 height_medium paint_hover">
                                        <div class="content numbers">
                                            <h3 class="value">7.147</h3>
                                            <div class="description mb5">Total Clicks</div>
                                            <h1 class="value">718.862</h1>
                                            <div class="description">Total Impressions</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End .span6 --> 
                            </div>
                            <!-- End .row-fluid -->
                            <div class="row-fluid fluid">
                                <div class="span6">
                                    <div class=" box  height_medium title_big paint_hover">
                                        <div class="title">
                                            <div class="row-fluid">
                                                <div class="span12">
                                                    <h5> </i><span>Fundraisers</span> </h5>
                                                </div>
                                                <!-- End .span12 --> 
                                            </div>
                                            <!-- End .row-fluid --> 
                                        </div>
                                        <!-- End .title -->
                                        <div class="content" style="padding-top:28px;">
                                            <div id="placeholder2" style="width:100%;height:85px;"></div>
                                            <div class="row-fluid description">
                                                <div class="pull-left">LAST 30 DAYS</div>
                                                <div class="pull-right">TODAY</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End .span6 -->
                                <div class="span6">
                                    <div class=" box color_26 height_medium paint_hover">
                                        <div class="content icon big_icon"> <a href="#" ><img align="center" src="img/general/contacts_icon.png" /></a>
                                            <div class="description">CONTACTS</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End .span6 --> 
                            </div>
                            <!-- End .row-fluid --> 

                        </div>
                        <!-- End.span6--> 
                    </div>
                    <!-- End .row-fluid -->

                    <div class="row-fluid">
                        <div class="span8">
                            <div class="box height_big paint">
                                <div class="title">
                                    <h4> <span>Distribution by Country</span> </h4>
                                </div>
                                <!-- End .title -->
                                <div class="content full">
                                    <table id="datatable_example" class="responsive table table-hover full">
                                        <thead>
                                            <tr>
                                                <th class="jv no_sort"> No </th>
                                                <th class="ue"> Browser </th>
                                                <th class="ms no_sort "> Visits </th>
                                                <th class="Yy to_hide_phone"> % Visits </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> 1 </td>
                                                <td> United States </td>
                                                <td class="ms"> 161.083 </td>
                                                <td class="to_hide_phone"> 45,73% <span class="bar1 no_ie">3,4,10,5,3,6,3</span></td>
                                            </tr>
                                            <tr>
                                                <td> 2 </td>
                                                <td> Canada </td>
                                                <td class="ms"> 93.966 </td>
                                                <td class="to_hide_phone"> 26,67% <span class="bar2 no_ie">1, 4, 6, 7,4, 2,4</span></td>
                                            </tr>
                                            <tr>
                                                <td> 3 </td>
                                                <td> Argentina </td>
                                                <td class="ms"> 69.640 </td>
                                                <td class="to_hide_phone"> 19,77% <span class="bar2 no_ie">1, 2, 2, 7,4, 2,2</span></td>
                                            </tr>
                                            <tr>
                                                <td> 4 </td>
                                                <td> Romania </td>
                                                <td class="ms"> 24.421 </td>
                                                <td class="to_hide_phone"> 6,93% &nbsp; <span class="bar2 no_ie">3, 5, 6, 9,10, 9,8</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- End .content -->
                                <div class="description">Some explanation text here <i class="gicon-info-sign icon-white"></i></div>
                            </div>

                            <!-- End .box --> 
                        </div>
                        <!-- End .span8 -->

                        <div class="span4">
                            <div class="box height_big paint">
                                <div class="title">
                                    <h4> <span>Top Users</span> </h4>
                                </div>
                                <!-- End .title -->

                                <ul class="users unstyled content">
                                    <li>
                                        <div class="info row-fluid"><span class="number pull-left text_color_0">1</span>
                                            <h2 class="pull-left">George</h2>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="progress small" style="width: 60%;"></div>
                                            <div class="value">12k Reach</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info row-fluid"><span class="number pull-left text_color_0">2</span>
                                            <h2 class="pull-left">John</h2>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="progress small" style="width: 40%;"></div>
                                            <div class="value">8.3k Reach</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info row-fluid"><span class="number pull-left text_color_0">3</span>
                                            <h2 class="pull-left">Michael</h2>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="progress small" style="width: 25%;"></div>
                                            <div class="value">6.7k Reach</div>
                                        </div>
                                    </li>
                                </ul>
                                <!-- End .content -->
                                <div class="description">Some explanation text here <i class="gicon-info-sign icon-white"></i> </div>
                            </div>
                            <!-- End .box --> 
                        </div>
                        <!-- End .span4 --> 
                    </div>
                    <!-- End .row-fluid -->

                    <div class="row-fluid">
                        <div class="row-fluid box color_2 title_medium height_medium2 bar_stats paint_hover ">
                            <div class="title hidden-phone">
                                <h5><span>Envato</span></h5>
                            </div>
                            <!-- End .title -->
                            <div class="content row-fluid fluid numbers">
                                <div class="span3 stats hidden-phone">
                                    <div id="placeholder3" style="width:100%;height:65px;margin-top:7px"></div>
                                </div>
                                <div class="span2 average_ctr">
                                    <h1 class="value">0.72<span class="percent">%</span></h1>
                                    <div class="description mt15" >AVERAGE CTR</div>
                                </div>
                                <div class="span3 shown_left">
                                    <div class="row-fluid fluid">
                                        <div class="span6">
                                            <div class="description">SHOWN</div>
                                            <h2 class="value">3.240</h2>
                                            <div class="progress small">
                                                <div class="bar white" style="width: 100%;"></div>
                                            </div>
                                            <div class="description" >IMPRESSIONS STATS</div>
                                        </div>
                                        <div class="span6 full">
                                            <div class="description text_color_dark">LEFT</div>
                                            <h2 class="value text_color_dark">16.760</h2>
                                            <div class="progress small">
                                                <div class="bar " style="width: 0%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="span3 total_days">
                                    <div class="row-fluid">
                                        <div class="span6 total_clicks">
                                            <h1 class="value">103</h1>
                                            <div class="description mt15" >TOTAL CLICKS</div>
                                        </div>
                                        <div class="span6 days_left">
                                            <h1 class="value text_color_dark">28</h1>
                                            <div class="description mt15" >DAYS LEFT</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="span1 stick top right result height_medium2"> <img src="img/arrows_up.png">
                                    <div class="description mt15" >Good</div>
                                </div>
                            </div>
                            <!-- End .row-fluid --> 
                            <!-- End .content --> 
                        </div>
                        <!-- End .box --> 

                    </div>
                    <!-- End .row-fluid -->

                    <div class="row-fluid">
                        <div class="row-fluid box color_27 title_medium height_medium2 bar_stats paint_hover">
                            <div class="title hidden-phone">
                                <h5><span>Facebook</span></h5>
                            </div>
                            <!-- End .title -->
                            <div class="content row-fluid fluid numbers">
                                <div class="span3 stats hidden-phone">
                                    <div id="placeholder4" style="width:100%;height:65px;margin-top:7px"></div>
                                </div>
                                <div class="span2 average_ctr">
                                    <h1 class="value">1.37<span class="percent">%</span></h1>
                                    <div class="description mt15" >AVERAGE CTR</div>
                                </div>
                                <div class="span3 shown_left">
                                    <div class="row-fluid fluid">
                                        <div class="span6">
                                            <div class="description">SHOWN</div>
                                            <h2 class="value">1.220</h2>
                                            <div class="progress small"  >
                                                <div class="bar white " style="width: 100%;"></div>
                                            </div>
                                            <div class="description" >IMPRESSIONS STATS</div>
                                        </div>
                                        <div class="span6 full">
                                            <div class="description text_color_dark">LEFT</div>
                                            <h2 class="value text_color_dark">12.420</h2>
                                            <div class="progress small">
                                                <div class="bar" style="width: 0%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="span3 total_days">
                                    <div class="row-fluid">
                                        <div class="span6 total_clicks">
                                            <h1 class="value">67</h1>
                                            <div class="description mt15" >TOTAL CLICKS</div>
                                        </div>
                                        <div class="span6 days_left">
                                            <h1 class="value text_color_dark">30</h1>
                                            <div class="description mt15" >DAYS LEFT</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="span1 stick top right result height_medium2"> <img src="img/arrows_down.png">
                                    <div class="description mt15" > &nbsp;&nbsp;Bad</div>
                                </div>
                            </div>
                            <!-- End .row-fluid --> 
                            <!-- End .content --> 
                        </div>
                        <!-- End .box --> 

                    </div>
                    <!-- End .row-fluid -->

                    <div class="row-fluid">
                        <div class="span6">
                            <div class="box gradient color_25 height_xbig paint_hover1">
                                <div class="title row-fluid">
                                    <h4 class="pull-left"><span>Task List</span></h4>
                                    <div class="btn-toolbar pull-right ">
                                        <div class="btn-group"> <a class="btn">Add New +</a> <a class="btn change_color_outside"><i class="paint_bucket"></i></a> </div>
                                    </div>
                                </div>
                                <!-- End .title -->
                                <div class="content row-fluid">
                                    <div id="todoapp" class="row-fluid">
                                        <div class="todos">
                                            <ul data-bind="foreach: tasks, visible: tasks().length > 0" id="todo-list" class="unstyled">
                                                <li>
                                                    <div class="todo" data-bind="css: { editing: isEditing }, event: { dblclick: startEdit }">
                                                        <div class="display" data-bind="css: { done: isDone }">
                                                            <input type="checkbox" class="check" data-bind="checked: isDone" />
                                                            <div class="todo-text" data-bind="html: title"></div>
                                                            <a href="#" class="todo-destroy" data-bind="click: $parent.removeTask">&times;</a> </div>
                                                        <div class="edit">
                                                            <form data-bind="submit: updateTask" class="full">
                                                                <input data-bind="value: title" class="row-fluid"/>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="credits" class="description"> *Double-click to edit tasks. Enter to finish. </div>
                                </div>
                                <!-- End .content -->
                                <div class="description"> You have <b data-bind="text: incompleteTasks().length">&nbsp;</b> incomplete task(s) <span data-bind="visible: incompleteTasks().length == 0">- its beer time!</span> <a class="pull-right" data-bind="visible: completeTasks().length &gt; 0, click: removeCompleted" href="#" id="clear-completed">Clear Completed Tasks </a> </div>
                            </div>
                            <!-- End .box --> 
                        </div>
                        <!-- End .span6 -->
                        <div class="span6">
                            <div class="box color_2 ">
                                <div class="title row-fluid">
                                    <h4 class="pull-left"><span>Messages</span></h4>
                                    <div class="btn-toolbar pull-right ">
                                        <div class="btn-group"> <a class="btn">View All</a> <a class="btn change_color_outside"><i class="paint_bucket"></i></a> </div>
                                    </div>
                                </div>
                                <!-- End .title -->
                                <div class="content row-fluid">
                                    <ul class="messages_layout">



                                        <li class="from_user left"> <a href="#" class="avatar"><img src="img/message_avatar2.png"/></a>
                                            <div class="message_wrap"> <span class="arrow"></span>
                                                <div class="info"> <a class="name" href="#">Celeste Holm</a> <span class="author"><a href="#">@celeste</a></span></div>
                                                <div class="text"> All I want is to be a monkey of moderate intelligence who wears a suit… that's why I'm transferring to business school! I had more, but you go ahead.  Dissect its brain! </div>
                                                <div class="footer">
                                                    <span class="time">1 hour ago</span>
                                                    <div class="actions pull-right hidden-phone">
                                                        <ul class="pull-right">
                                                            <li><a href="#"><i class=" gicon-share-alt icon-white"></i>Reply</a></li>
                                                            <li><a href="#"><i class=" gicon-share icon-white"></i>Share</a></li>
                                                            <li><a href="#"><i class=" gicon-star icon-white"></i>Favorite</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="by_myself right"> <a href="#" class="avatar"><img src="img/message_avatar4.png"/></a>
                                            <div class="message_wrap"> <span class="arrow"></span>
                                                <div class="info"> <a class="name" href="#">Bender (myself)</a> <span class="author"><a href="#">@bender</a></span></div>
                                                <div class="text"> Man, I'm sore all over.  I feel like I just went ten rounds with mighty Thor. File not found. </div>
                                                <div class="footer">
                                                    <span class="time">4 hours ago</span>
                                                    <div class="actions pull-right hidden-phone">
                                                        <ul class="pull-right">
                                                            <li><a href="#"><i class=" gicon-share-alt icon-white"></i>Reply</a></li>
                                                            <li><a href="#"><i class=" gicon-share icon-white"></i>Share</a></li>
                                                            <li><a href="#"><i class=" gicon-star icon-white"></i>Favorite</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="from_user left"> <a href="#" class="avatar"><img src="img/message_avatar2.png"/></a>
                                            <div class="message_wrap"> <span class="arrow"></span>
                                                <div class="info"> <a class="name" href="#">Celeste Holm</a> <span class="author"><a href="#">@celeste</a></span></div>
                                                <div class="text"> And I'd do it again! And perhaps a third time! But that would be it. Are you crazy? </div>
                                                <div class="footer">
                                                    <span class="time">1 hour ago</span>
                                                    <div class="actions pull-right hidden-phone">
                                                        <ul class="pull-right">
                                                            <li><a href="#"><i class=" gicon-share-alt icon-white"></i>Reply</a></li>
                                                            <li><a href="#"><i class=" gicon-share icon-white"></i>Share</a></li>
                                                            <li><a href="#"><i class=" gicon-star icon-white"></i>Favorite</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End .content --> 
                            </div>
                            <!-- End .box --> 
                        </div>
                        <!-- End .span6 --> 

                    </div>
                    <!-- End .row-fluid --> 
                </div>
                <!-- End #container --> 
            </div>
            <div id="footer">
                <p> &copy; Start - Admin Template 2012 </p>
                <span class="company_logo"><a href="http://www.pixelgrade.com"></a></span> </div>
        </div>
        <div class="background_changer dropdown">
            <div class="dropdown" id="colors_pallete"> <a data-toggle="dropdown" data-target="drop4" class="change_color"></a>
                <ul  class="dropdown-menu pull-left" role="menu" aria-labelledby="drop4">
                    <li><a data-color="color_0" class="color_0" tabindex="-1">1</a></li>
                    <li><a data-color="color_1" class="color_1" tabindex="-1">1</a></li>
                    <li><a data-color="color_2" class="color_2" tabindex="-1">2</a></li>
                    <li><a data-color="color_3" class="color_3" tabindex="-1">3</a></li>
                    <li><a data-color="color_4" class="color_4" tabindex="-1">4</a></li>
                    <li><a data-color="color_5" class="color_5" tabindex="-1">5</a></li>
                    <li><a data-color="color_6" class="color_6" tabindex="-1">6</a></li>
                    <li><a data-color="color_7" class="color_7" tabindex="-1">7</a></li>
                    <li><a data-color="color_8" class="color_8" tabindex="-1">8</a></li>
                    <li><a data-color="color_9" class="color_9" tabindex="-1">9</a></li>
                    <li><a data-color="color_10" class="color_10" tabindex="-1">10</a></li>
                    <li><a data-color="color_11" class="color_11" tabindex="-1">10</a></li>
                    <li><a data-color="color_12" class="color_12" tabindex="-1">12</a></li>
                    <li><a data-color="color_13" class="color_13" tabindex="-1">13</a></li>
                    <li><a data-color="color_14" class="color_14" tabindex="-1">14</a></li>
                    <li><a data-color="color_15" class="color_15" tabindex="-1">15</a></li>
                    <li><a data-color="color_16" class="color_16" tabindex="-1">16</a></li>
                    <li><a data-color="color_17" class="color_17" tabindex="-1">17</a></li>
                    <li><a data-color="color_18" class="color_18" tabindex="-1">18</a></li>
                    <li><a data-color="color_19" class="color_19" tabindex="-1">19</a></li>
                    <li><a data-color="color_20" class="color_20" tabindex="-1">20</a></li>
                    <li><a data-color="color_21" class="color_21" tabindex="-1">21</a></li>
                    <li><a data-color="color_22" class="color_22" tabindex="-1">22</a></li>
                    <li><a data-color="color_23" class="color_23" tabindex="-1">23</a></li>
                    <li><a data-color="color_24" class="color_24" tabindex="-1">24</a></li>
                    <li><a data-color="color_25" class="color_25" tabindex="-1">25</a></li>
                </ul>
            </div>
        </div>
        <!-- End .background_changer -->
