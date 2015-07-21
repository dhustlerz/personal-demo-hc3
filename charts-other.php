<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title>Flexxia  Demo App</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">

            <!-- START PAGE SIDEBAR -->
            <?php include 'includes/sidebar.inc.php' ?>
            <!-- END PAGE SIDEBAR -->

            <!-- PAGE CONTENT -->
            <div class="page-content">

                <!-- START X-NAVIGATION VERTICAL -->
                <?php require 'includes/x-navigation.inc.php' ?>
                <!-- END X-NAVIGATION VERTICAL -->

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Charts</a></li>
                    <li class="active"> Circular Gauge </li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE TITLE -->
                <div class="page-title">
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Circular Gauge </h2>
                </div>
                <!-- END PAGE TITLE -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">

                        <div class="col-md-12">

                            <!-- START SPARKLINE CHARTS -->
                    <!--         <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Sparkline Charts</h3>
                                </div>
                                <div class="block-content">
                                    <table class="table">
                                        <tr>
                                            <td width="100"><strong>Line</strong></td>
                                            <td><span class="sparkline" sparkFillColor="#FFF" sparkLineWidth="2" sparkLineColor="#9FD468" sparkWidth="100" sparkHeight="45" >5,4,3,2,4,5,6,7,8,6,4,5</span></td>
                                            <td>Line charts are the default chart type, but to specify the type explicitly set an option called "type" to "line".</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Bar</strong></td>
                                            <td><span class="sparkline" sparkType="bar" sparkBarColor="#4FC0E8" sparkWidth="100" sparkHeight="45" sparkBarWidth="5">5,4,3,2,4,5,6,7,8,6,4,5</span></td>
                                            <td>Set the "type" option to "bar" to generate bar charts. </td>
                                        </tr>
                                        <tr>
                                            <td width="100"><strong>Discrete</strong></td>
                                            <td><span class="sparkline" sparkType="discrete" sparkLineColor="#F6BB43" sparkWidth="100" sparkHeight="45" >5,4,3,2,4,5,6,7,8,6,4,5</span></td>
                                            <td>Set the "type" option to "discrete" to generate discrete charts.</td>
                                        </tr>
                                        <tr>
                                            <td width="100"><strong>Pie</strong></td>
                                            <td><span class="sparkline" sparkType="pie" sparkWidth="50" sparkHeight="50" >5,4,3,2</span></td>
                                            <td>Set the "type" option to "pie" to generate pie charts.</td>
                                        </tr>
                                    </table>
                                </div>
                            </div> -->
                            <!-- END SPARKLINE CHARTS -->

                            <!-- START KNOB SLIDER -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"> Circular Gauge </h3>
                                </div>
                                <div class="panel-body">

                                    <div class="row">
                                        <div class="col-md-4 text-center">
                                            <h5>Disable display input</h5>
                                            <input class="knob" data-width="150" data-fgColor="#33414E" data-displayInput=false value="35"/>
                                        </div>
                                        <div class="col-md-4 text-center">
                                            <h5>'cursor' mode</h5>
                                            <input class="knob" data-width="150" data-cursor=true data-fgColor="#81C500" value="29"/>
                                        </div>
                                        <div class="col-md-4 text-center">
                                            <h5>Display previous value</h5>
                                            <input class="knob" data-width="150" data-min="-100" data-fgColor="#FD421C" data-displayPrevious=true value="44"/>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 text-center">
                                            <h5>Angle offset</h5>
                                            <input class="knob" data-width="150" data-angleOffset="90" data-linecap="round" data-fgColor="#61C0E6" value="35"/>
                                        </div>
                                        <div class="col-md-4 text-center">
                                            <h5>Angle offset and arc</h5>
                                            <input class="knob" data-width="150" data-angleOffset="270" data-angleArc="180" data-cursor=true data-fgColor="#FEC558" value="29"/>
                                        </div>
                                        <div class="col-md-4 text-center">
                                            <h5>5-digit values, step 1000</h5>
                                            <input class="knob" data-width="150" data-min="-15000" data-displayPrevious=true data-max="15000" data-step="1000" value="-11000" data-fgColor="#81C500"/>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- END KNOB SLIDER -->

                        </div>

                    </div>

                </div>
                <!-- END PAGE CONTENT WRAPPER -->
            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->

    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

        <script type="text/javascript" src="js/plugins/sparkline/jquery.sparkline.min.js"></script>
        <script type="text/javascript" src="js/plugins/knob/jquery.knob.min.js"></script>
        <!-- END THIS PAGE PLUGINS-->

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>

        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
    </body>
</html>






