<!-- START PAGE CONTAINER -->
        <div  class="page-container">

            <?php

             // START PAGE SIDEBAR
             include 'sidebar.inc.php' ;
             // END PAGE SIDEBAR -->

             //PAGE CONTENT -->
            echo'<div class="page-content">';
            if ( isset($_GET['s']) && $_GET['s'] == 'acceredited') {
                   include 'content-diabetes-accredited.inc.php';
            }
            elseif (isset($_GET['s']) && $_GET['s'] == 'non-acceredited') {
                include 'content-diabetes-non-accredited.inc.php';
            }
            else {
                     include 'content-diabetes.inc.php';
                }
            echo '</div>';
               // include 'includes/content-diabetes.inc.php';
             // END PAGE CONTENT -->
            ?>



        </div>
        <!-- END PAGE CONTAINER -->

        <!--
        *The message box is moved to in sidebar.inc.php so as to make a call from each page
        -->
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
        <!-- MAP PLUGINS-->
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
        <script type="text/javascript" src="js/demo_maps.js"></script>
        <!-- END MAP PLUGINS-->

        <!-- END MORRIS CHART PLUGINS-->
        <script type="text/javascript" src="js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="js/plugins/morris/morris.min.js"></script>
        <script type="text/javascript" src="js/demo_charts_morris.js"></script>

        <!-- END MORRIS CHART PLUGINS-->
        <!-- END KNOB CHART PLUGINS-->
        <script type="text/javascript" src="js/plugins/sparkline/jquery.sparkline.min.js"></script>
        <script type="text/javascript" src="js/plugins/knob/jquery.knob.min.js"></script>
        <!-- END KNOB CHART PLUGINS-->

        <!-- START DATATABLES PLUGINS-->
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
        <!-- END DATATABLES PLUGINS-->
        <script>
        // window.onresize = function(event)
        //     {
        //         document.location.reload(true);
        //     }

        // function resize() {
        //   console.log('working');
        // }

        // d3.select(window).on('resize', resize);
        // jQuery(window).resize( function() {
        //     console.log('working');
        //     //location.reload();
        //       // var win = jQuery(this); //this = window
        //       // if (win.height() >= 820) { /* ... */ }
        //       // if (win.width() >= 1280) { /* ... */ }
        //       //jQuery('#refresh').load(document.URL +  '#refresh');
        // });
        // window.onresize = function(event)
        //     {

        //            jQuery('.refresh').each(function(){
        //               jQuery(this).load(this.href);
        //            })

        //         //alert('working');
        //         //jQuery('.refresh').hide();
        //         //document.location.reload(true);
        //         //jQuery('#page-content').load(document.URL +  '#page-content');
        //         // jQuery.ajaxSetup(
        //         //     {
        //         //         cache: false,
        //         //         // beforeSend: function() {
        //         //         //     jQuery('#content').hide();
        //         //         //     jQuery('#loading').show();
        //         //         // },
        //         //         // complete: function() {
        //         //         //     jQuery('#loading').hide();
        //         //         //     jQuery('#content').show();
        //         //         // },
        //         //         success: function() {
        //         //             jQuery('.refresh').hide();
        //         //             //jQuery('.refresh').show();
        //         //         }
        //         //     });
        //     }
        </script>


        <script type="text/javascript" src="js/markerclusterplus.js"></script>
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        <script type="text/javascript" src="js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="js/plugins/daterangepicker/daterangepicker.js"></script>
          <script type="text/javascript" src="js/plugins/markerclustererplus.js"></script>
          <script type="text/javascript" src="js/plugins/jquery-animateNumber.js"></script>
          <script type="text/javascript" src="js/plugins/gauge.js"></script>
          <script type="text/javascript" src="js/demo_gauge.js"></script>


        <!-- END THIS PAGE PLUGINS-->

        <!-- Start Google Chart PLUGINS-->
         <script type="text/javascript" src="https://www.google.com/jsapi"></script>
         <script type="text/javascript" src="js/demo_charts_google.js"></script>
         <!-- END Google Chart PLUGINS-->

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>


        <script type="text/javascript" src="js/demo_dashboard.js"></script>
        <!--<script type="text/javascript" src="js/custom-charts.js"></script>-->
        <!-- END TEMPLATE -->
         <!-- START D3V3-->
        <script type="text/javascript" src="js/plugins/nvd3/lib/d3.v3.js"></script>
        <script type="text/javascript" src="js/plugins/nvd3/nv.d3.min.js"></script>
        <script type="text/javascript" src="js/demo_charts_nvd3.js"></script>
        <!-- END D3V3-->
    <!-- END SCRIPTS -->
