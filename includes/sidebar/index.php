
 <!-- META SECTION -->
        <title>Flexxia  Demo App</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        <!-- CSS INCLUDE -->
        <link rel="stylesheet" type="text/css" id="theme" href="css/style.css"/>
        <style>

        .nvd3.nv-pie .nv-slice text {
          fill: #fff !important;
        }
        </style>
<!-- EOF CSS INCLUDE -->
<?php
$sidebar_output = '';
$sidebar_output.='<div  class="page-container">';
$sidebar_output.='<div class="page-sidebar bg-1865a9">';

    /**
     * START X-NAVIGATION
     */
    $sidebar_output.='<ul class="x-navigation page-navigation-top-fixed">';

     $sidebar_output.='<li class="xn-logo">';

            $sidebar_output.='<a href="overview.php">Flexxia</a>';
            $sidebar_output.='<a href="#" class="x-navigation-control"></a>';
            $sidebar_output.='<a href="#" class="reportrange x-navigation-datepicker"></a>';
        $sidebar_output.='</li>';


        /**
         * START USER PROFILE
         */
        $sidebar_output.='<li class="xn-profile">';

        /*
         * The comments in xn-profile block are intensional please do not remove them
         */
            // $sidebar_output.='<a href="#" class="profile-mini">';
            //     $sidebar_output.='<img  src="assets/images/users/user0.png" alt="Chris "/>';
            // $sidebar_output.='</a>';
            $sidebar_output.='<div class= "profile">';
                // $sidebar_output.='<div class="profile-image">';
                //     $sidebar_output.='<img style="width: 60px;" src="assets/images/users/user0.png" alt="Chris Dodd"/>';
                // $sidebar_output.='</div>';
                $sidebar_output.='<div class="profile-data">';
                    $sidebar_output.='<div class="profile-data-name"><span>username</span><a href="#" class="mb-control padding-left-12 color-fff" data-box="#mb-signout"><span class="fa fa-gear"></span></a></div>';
                    //$sidebar_output.='<div class="profile-data-title">Administrator</div>';
                $sidebar_output.='</div>';
                // $sidebar_output.='<div class="profile-controls">';
                //     $sidebar_output.='<a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>';
                //     $sidebar_output.='<a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>';
                // $sidebar_output.='</div>';
            $sidebar_output.='</div>';
        $sidebar_output.='</li>';
        /**
         * END USER PROFILE
         */

        //$sidebar_output.='<li class="xn-title">Navigation</li>';
        $sidebar_output.='<li class="menu">';
            $sidebar_output.='<a href="overview.php"><span class="fa fa-desktop"></span><span class="xn-text">Overview</span></a>';
        $sidebar_output.='</li>';
        $sidebar_output.='<li class="">';
            $sidebar_output.='<li class="menu">';
                $sidebar_output.='<a href="needs-assessment.php"><span class="fa fa-user-md"></span><span class="xn-text">Needs Assessment</span></a>';

            $sidebar_output.='</li>';
            $sidebar_output.='<li class="menu xn-openable">';
            $sidebar_output.='<a href="#"><span class="fa  fa-file-text-o"></span><span class="xn-text">Program Evaluation</span></a>';$sidebar_output.='<ul>';

                                $sidebar_output.='<li class="xn-openable">';
                                $sidebar_output.='<a href="#">Diabetes</a>';
                                  $sidebar_output.='<ul>';
                                    $sidebar_output.='<li class="menu"><a href="#">All Programs</a></li>';
                                    $sidebar_output.='<li class="menu"><a href="#">Accredited</a></li>';
                                    $sidebar_output.='<li class="menu"><a href="#">Non Accredited</a></li>';
                                  $sidebar_output.='</ul>';
                                $sidebar_output.='</li>';

                                $sidebar_output.='<li class="xn-openable">';
                                $sidebar_output.='<a href="#">Cardiovascular</a>';
                                  $sidebar_output.='<ul>';
                                    $sidebar_output.='<li class="menu"><a href="#">All Programs</a></li>';
                                    $sidebar_output.='<li class="menu"><a href="#">Accredited</a></li>';
                                    $sidebar_output.='<li class="menu"><a href="#">Non Accredited</a></li>';
                                  $sidebar_output.='</ul>';
                                $sidebar_output.='</li>';

                                $sidebar_output.='<li class="xn-openable">';
                                $sidebar_output.='<a href="#">Oncology</a>';
                                  $sidebar_output.='<ul>';
                                    $sidebar_output.='<li class="menu"><a href="#">All Programs</a></li>';
                                    $sidebar_output.='<li class="menu"><a href="#">Accredited</a></li>';
                                    $sidebar_output.='<li class="menu"><a href="#">Non Accredited</a></li>';
                                  $sidebar_output.='</ul>';
                                $sidebar_output.='</li>';

                            $sidebar_output.='</ul>';
            $sidebar_output.='</li>';
        $sidebar_output.='</li>';

        $sidebar_output.='<li class="xn-openable">';
            $sidebar_output.='<a href="#"><span class="fa fa-bar-chart-o"></span><span class="xn-text">Display Options</span></a>';
            $sidebar_output.='<ul>';

        $sidebar_output.='<li class="xn-openable">';
            $sidebar_output.='<a href="#"><span class="fa fa-table"></span><span class="xn-text">Tables</span></a>';
            $sidebar_output.='<ul>';

                $sidebar_output.='<li><a href="table-basic.php"><span class="fa fa-align-justify"></span>Basic</a></li>';
                $sidebar_output.='<li><a href="table-datatables.php"><span class="fa fa-sort-alpha-desc"></span> Data Tables</a></li>';

            $sidebar_output.='</ul>';
        $sidebar_output.='</li>';
        $sidebar_output.='<li class="xn-openable">';
            $sidebar_output.='<a href="#"><span class="fa fa-bar-chart-o"></span><span class="xn-text">Charts</span></a>';
            $sidebar_output.='<ul>';
                $sidebar_output.='<li><a href="line-charts.php"><span class="xn-text">Line Charts</span></a></li>';
                $sidebar_output.='<li><a href="bar-charts.php"><span class="xn-text">Bar Charts</span></a></li>';
                $sidebar_output.='<li><a href="pie-donut-charts.php"><span class="xn-text">Pie/Donut Charts</span></a></li>';
                $sidebar_output.='<li><a href="charts-other.php"><span class="xn-text">Circular Gauges</span></a></li>';
            $sidebar_output.='</ul>';
        $sidebar_output.='</li>';
        $sidebar_output.='<li>';
            $sidebar_output.='<a href="maps.php"><span class="fa fa-map-marker"></span><span class="xn-text">Maps</span></a>';
        $sidebar_output.='</li>';

    $sidebar_output.='</ul>';


            $sidebar_output.='</ul>';

    /**
     * END X-NAVIGATION
     */
  $sidebar_output.='</div>';
$sidebar_output.='</div>';
printf($sidebar_output);


?>



    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        <!-- END PLUGINS -->







        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type="text/javascript" src="js/plugins/daterangepicker/daterangepicker.js"></script>


        <!-- END THIS PAGE PLUGINS-->




        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>
        <!-- END TEMPLATE -->

    <!-- END SCRIPTS -->



