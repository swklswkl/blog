<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    @yield('csrf-token')

    <!-- Required Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/reset.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/text.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/fonts/ptsans/stylesheet.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/fluid.css')}}" media="screen" />

    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/mws.style.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/icons/icons.css')}}" media="screen" />

    <!-- Demo and Plugin Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/demo.css')}}" media="screen" />

    <link rel="stylesheet" type="text/css" href="{{asset('admin/plugins/colorpicker/colorpicker.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/plugins/jimgareaselect/css/imgareaselect-default.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/plugins/fullcalendar/fullcalendar.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/plugins/fullcalendar/fullcalendar.print.css')}}" media="print" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/plugins/tipsy/tipsy.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/plugins/sourcerer/Sourcerer-1.2.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/plugins/jgrowl/jquery.jgrowl.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/plugins/spinner/spinner.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/jui/jquery.ui.css')}}" media="screen" />

    <!-- Theme Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/mws.theme.css')}}" media="screen" />

    <!-- JavaScript Plugins -->

    <script type="text/javascript" src="{{asset('admin/js/jquery-1.7.1.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('admin/plugins/jimgareaselect/jquery.imgareaselect.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/plugins/jquery.dualListBox-1.3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/plugins/jgrowl/jquery.jgrowl.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/plugins/jquery.filestyle.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/plugins/jquery.dataTables.js')}}"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{asset('admin/plugins/flot/excanvas.min.js')}}"></script>
    <![endif]-->
    <script type="text/javascript" src="{{asset('admin/plugins/flot/jquery.flot.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/plugins/flot/jquery.flot.pie.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/plugins/flot/jquery.flot.stack.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/plugins/flot/jquery.flot.resize.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/plugins/colorpicker/colorpicker.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/plugins/tipsy/jquery.tipsy.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/plugins/sourcerer/Sourcerer-1.2.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/plugins/jquery.placeholder.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/plugins/jquery.validate.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/plugins/jquery.mousewheel.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/plugins/spinner/ui.spinner.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/js/jquery-ui.js')}}"></script>


    <script type="text/javascript" src="{{asset('admin/js/mws.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/js/demo.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/js/themer.js')}}"></script>

    @yield('script')
    <title>MWS Admin - Dashboard</title>

</head>

<body>

<!-- Themer -->
<div id="mws-themer">
    <div id="mws-themer-hide"></div>
    <div id="mws-themer-content">
        <div class="mws-themer-section">
            <label for="mws-theme-presets">Presets</label> <select id="mws-theme-presets"></select>
        </div>
        <div class="mws-themer-separator"></div>
        <div class="mws-themer-section">
            <ul>
                <li><span>Base Color</span> <div id="mws-base-cp" class="mws-cp-trigger"></div></li>
                <li><span>Text Color</span> <div id="mws-text-cp" class="mws-cp-trigger"></div></li>
                <li><span>Text Glow Color</span> <div id="mws-textglow-cp" class="mws-cp-trigger"></div></li>
            </ul>
        </div>
        <div class="mws-themer-separator"></div>
        <div class="mws-themer-section">
            <ul>
                <li><span>Text Glow Opacity</span> <div id="mws-textglow-op"></div></li>
            </ul>
        </div>
        <div class="mws-themer-separator"></div>
        <div class="mws-themer-section">
            <button class="mws-button red small" id="mws-themer-getcss">Get CSS</button>
        </div>
    </div>
    <div id="mws-themer-css-dialog">
        <div class="mws-form">
            <div class="mws-form-row" style="padding:0;">
                <div class="mws-form-item">
                    <textarea cols="auto" rows="auto" readonly="readonly"></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Themer End -->


<!-- Header Wrapper -->
<div id="mws-header" class="clearfix">

    <!-- Logo Wrapper -->
    <div id="mws-logo-container">
        <div id="mws-logo-wrap">
            <img src="{{asset('admin/images/mws-logo.png')}}" alt="mws admin" />
        </div>
    </div>

    <!-- User Area Wrapper -->
    <div id="mws-user-tools" class="clearfix">

        <!-- User Notifications -->
        <div id="mws-user-notif" class="mws-dropdown-menu">
            <a href="#" class="mws-i-24 i-alert-2 mws-dropdown-trigger">Notifications</a>
            <span class="mws-dropdown-notif">35</span>
            <div class="mws-dropdown-box">
                <div class="mws-dropdown-content">
                    <ul class="mws-notifications">

                        <!-- Notification Content -->
                        <li class="read">
                            <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                <span class="time">
                                        January 21, 2012
                                    </span>
                            </a>
                        </li>
                        <li class="read">
                            <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                <span class="time">
                                        January 21, 2012
                                    </span>
                            </a>
                        </li>
                        <li class="unread">
                            <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                <span class="time">
                                        January 21, 2012
                                    </span>
                            </a>
                        </li>
                        <li class="unread">
                            <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                <span class="time">
                                        January 21, 2012
                                    </span>
                            </a>
                        </li>
                        <!-- End Notification Content -->

                    </ul>
                    <div class="mws-dropdown-viewall">
                        <a href="#">View All Notifications</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- User Messages -->
        <div id="mws-user-message" class="mws-dropdown-menu">
            <a href="#" class="mws-i-24 i-message mws-dropdown-trigger">Messages</a>
            <span class="mws-dropdown-notif">35</span>
            <div class="mws-dropdown-box">
                <div class="mws-dropdown-content">
                    <ul class="mws-messages">

                        <!-- Message Content -->
                        <li class="read">
                            <a href="#">
                                <span class="sender">John Doe</span>
                                <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                <span class="time">
                                        January 21, 2012
                                    </span>
                            </a>
                        </li>
                        <li class="read">
                            <a href="#">
                                <span class="sender">John Doe</span>
                                <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                <span class="time">
                                        January 21, 2012
                                    </span>
                            </a>
                        </li>
                        <li class="unread">
                            <a href="#">
                                <span class="sender">John Doe</span>
                                <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                <span class="time">
                                        January 21, 2012
                                    </span>
                            </a>
                        </li>
                        <li class="unread">
                            <a href="#">
                                <span class="sender">John Doe</span>
                                <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                <span class="time">
                                        January 21, 2012
                                    </span>
                            </a>
                        </li>
                        <!-- End Messages -->

                    </ul>
                    <div class="mws-dropdown-viewall">
                        <a href="#">View All Messages</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- User Functions -->
        <div id="mws-user-info" class="mws-inset">
            <div id="mws-user-photo">
                <img src="{{asset('admin/example/profile.jpg')}}" alt="User Photo" />
            </div>
            <div id="mws-user-functions">
                <div id="mws-username">
                    Hello, John Doe
                </div>
                <ul>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Change Password</a></li>
                    <li><a href="index-2.html">Logout</a></li>
                </ul>
            </div>
        </div>
        <!-- End User Functions -->

    </div>
</div>

<!-- Main Wrapper -->
<div id="mws-wrapper">
    <!-- Necessary markup, do not remove -->
    <div id="mws-sidebar-stitch"></div>
    <div id="mws-sidebar-bg"></div>

    <!-- Sidebar Wrapper -->
    <div id="mws-sidebar">

        <!-- Search Box -->
        <div id="mws-searchbox" class="mws-inset">
            <form action="http://www.malijuwebshop.com/themes/mws-admin/dashboard.html">
                <input type="text" class="mws-search-input" />
                <input type="submit" class="mws-search-submit" />
            </form>
        </div>

        <!-- Main Navigation -->
        <div id="mws-navigation">
            <ul>
                <li>
                    <a href="#" class="mws-i-24 i-list">文章管理</a>
                    <ul>
                        <li><a href="{{url('admin/article/articleList')}}">文章列表</a></li>
                        <li><a href="{{url('admin/article/addarticle')}}">添加文章</a></li>
                    </ul>
                </li>
                <li class="active"><a href="{{url('admin/dashboard')}}" class="mws-i-24 i-home">Dashboard</a></li>
                <li><a href="{{url('admin/charts')}}" class="mws-i-24 i-chart">Charts</a></li>
                <li><a href="{{url('admin/calendar')}}" class="mws-i-24 i-day-calendar">Calendar</a></li>
                <li><a href="{{url('admin/files')}}" class="mws-i-24 i-file-cabinet">File Manager</a></li>
                <li><a href="{{url('admin/table')}}" class="mws-i-24 i-table-1">Table</a></li>
                <li>
                    <a href="#" class="mws-i-24 i-list">Forms</a>
                    <ul>
                        <li><a href="{{url('admin/form_layouts')}}">Layouts</a></li>
                        <li><a href="{{url('admin/form_elements')}}">Elements</a></li>
                    </ul>
                </li>
                <li><a href="{{url('admin/widgets')}}" class="mws-i-24 i-cog">Widgets</a></li>
                <li><a href="{{url('admin/typography')}}" class="mws-i-24 i-text-styling">Typography</a></li>
                <li><a href="{{url('admin/grids')}}" class="mws-i-24 i-blocks-images">Grids &amp; Panels</a></li>
                <li><a href="{{url('admin/gallery')}}" class="mws-i-24 i-polaroids">Gallery</a></li>
                <li><a href="{{url('admin/error')}}" class="mws-i-24 i-alert-2">Error Page</a></li>
                <li>
                    <a href="{{url('admin/icons')}}" class="mws-i-24 i-pacman">
                        Icons <span class="mws-nav-tooltip">2000+</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End Navigation -->

    </div>


    <!-- Container Wrapper -->
    <div id="mws-container" class="clearfix">

    @yield('content')
    <!-- Footer -->
        <div id="mws-footer">
            Copyright &copy; 2014.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a>
        </div>
        <!-- End Footer -->

    </div>
    <!-- End Container Wrapper -->

</div>
<!-- End Main Wrapper -->

<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>