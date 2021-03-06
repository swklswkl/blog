<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Required Stylesheets -->
    <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/fonts/ptsans/stylesheet.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/fluid.css" media="screen" />

    <link rel="stylesheet" type="text/css" href="css/mws.style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/icons/icons.css" media="screen" />

    <!-- Demo and Plugin Stylesheets -->
    <link rel="stylesheet" type="text/css" href="css/demo.css" media="screen" />

    <link rel="stylesheet" type="text/css" href="plugins/colorpicker/colorpicker.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="plugins/jimgareaselect/css/imgareaselect-default.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="plugins/fullcalendar/fullcalendar.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="plugins/fullcalendar/fullcalendar.print.css" media="print" />
    <link rel="stylesheet" type="text/css" href="plugins/tipsy/tipsy.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="plugins/sourcerer/Sourcerer-1.2.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="plugins/jgrowl/jquery.jgrowl.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="plugins/spinner/spinner.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/jui/jquery.ui.css" media="screen" />

    <!-- Theme Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/mws.theme.css" media="screen" />

    <!-- JavaScript Plugins -->

    <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>

    <script type="text/javascript" src="plugins/jimgareaselect/jquery.imgareaselect.min.js"></script>
    <script type="text/javascript" src="plugins/jquery.dualListBox-1.3.min.js"></script>
    <script type="text/javascript" src="plugins/jgrowl/jquery.jgrowl.js"></script>
    <script type="text/javascript" src="plugins/jquery.filestyle.js"></script>
    <script type="text/javascript" src="plugins/fullcalendar/fullcalendar.min.js"></script>
    <script type="text/javascript" src="plugins/jquery.dataTables.js"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="plugins/flot/excanvas.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="plugins/flot/jquery.flot.min.js"></script>
    <script type="text/javascript" src="plugins/flot/jquery.flot.pie.min.js"></script>
    <script type="text/javascript" src="plugins/flot/jquery.flot.stack.min.js"></script>
    <script type="text/javascript" src="plugins/flot/jquery.flot.resize.min.js"></script>
    <script type="text/javascript" src="plugins/colorpicker/colorpicker.js"></script>
    <script type="text/javascript" src="plugins/tipsy/jquery.tipsy.js"></script>
    <script type="text/javascript" src="plugins/sourcerer/Sourcerer-1.2.js"></script>
    <script type="text/javascript" src="plugins/jquery.placeholder.js"></script>
    <script type="text/javascript" src="plugins/jquery.validate.js"></script>
    <script type="text/javascript" src="plugins/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="plugins/spinner/ui.spinner.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>

    <script type="text/javascript" src="js/mws.js"></script>
    <script type="text/javascript" src="js/demo.js"></script>
    <script type="text/javascript" src="js/themer.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("div#mws-login .mws-login-back").mouseover(function(event) {
                $(this).find("a").animate({'left':0})
            }).mouseout(function(event) {
                $(this).find("a").animate({'left':70})
            });
        });
    </script>

    <title>MWS Admin - Login Page</title>

</head>

<body>

<div id="mws-login">
    <h1>Login</h1>
    <div class="mws-login-lock"><img src="css/icons/24/locked-2.png" alt="" /></div>
    <div id="mws-login-form">
        <form class="mws-form" action="dashboard.html" method="post">
            <div class="mws-form-row">
                <div class="mws-form-item large">
                    <input type="text" class="mws-login-username mws-textinput" placeholder="username" />
                </div>
            </div>
            <div class="mws-form-row">
                <div class="mws-form-item large">
                    <input type="password" class="mws-login-password mws-textinput" placeholder="password" />
                </div>
            </div>
            <div class="mws-form-row">
                <input type="submit" value="Login" class="mws-button green mws-login-button" />
            </div>
        </form>
    </div>
</div>

<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>
