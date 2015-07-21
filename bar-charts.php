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
                    <li class="active">Bar Charts</li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE TITLE -->
                <div class="page-title">
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Bar Charts</h2>
                </div>
                <!-- END PAGE TITLE -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">



                    <div class="row">
                        <div class="col-md-6">

                            <!-- START STACKED AREA CHART -->
                             <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Bar Chart</h3>
                                </div>
                                <div class="panel-body">
                                    <div id="morris-bar-example" style="height: 300px;"></div>
                                </div>
                            </div>
                            <!-- END STACKED AREA CHART -->

                        </div>
                        <div class="col-md-6">

                            <!-- START DISCRETE CHART -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Discrete Bar Chart</h3>
                                </div>
                                <div class="panel-body">
                                    <div id="chart-4" style="height: 300px;"><svg></svg></div>
                                </div>
                            </div>
                            <!-- END DISCRETE CHART -->

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">

                            <!-- START STACKED CHART -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Horizontal Multi-Bar Chart</h3>
                                </div>
                                <div class="panel-body">
                                    <div id="chart-5" style="height: 300px;"><svg></svg></div>
                                </div>
                            </div>
                            <!-- END STACKED CHART -->

                        </div>
                        <div class="col-md-6">

                            <!-- START DISCRETE CHART -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Line Plus Bar Chart</h3>
                                </div>
                                <div class="panel-body">
                                    <div id="chart-6" style="height: 300px;"><svg></svg></div>
                                </div>
                            </div>
                            <!-- END DISCRETE CHART -->

                        </div>
                    </div>





                </div>
                <!-- PAGE CONTENT WRAPPER -->
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

        <!-- START nvd3 charts Plugin -->
        <script type="text/javascript" src="js/plugins/nvd3/lib/d3.v3.js"></script>
        <script type="text/javascript" src="js/plugins/nvd3/nv.d3.min.js"></script>
        <script type="text/javascript" src="js/demo_charts_nvd3.js"></script>
        <!-- END nvd3 charts plugin -->

        <!-- START Morris charts Plugin -->
        <script type="text/javascript" src="js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="js/plugins/morris/morris.min.js"></script>
        <script type="text/javascript" src="js/demo_charts_morris.js"></script>
        <!-- END Morris charts plugin -->

        <!-- END THIS PAGE PLUGINS-->

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>

        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>


        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
    </body>
</html>






