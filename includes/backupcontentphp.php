<?php
$output = '';
$output.='<div class="page-content">';
    $output.='<!-- START X-NAVIGATION VERTICAL -->';
    require 'x-navigation.inc.php';
    $output.='<!-- END X-NAVIGATION VERTICAL -->';

    $output.='<!-- START BREADCRUMB -->';
    $output.='<ul class="breadcrumb">';
        $output.='<li><a href="#">Home</a></li>';
        $output.='<li class="active">Dashboard</li>';
    $output.='</ul>';
    $output.='<!-- END BREADCRUMB -->';

    $output.='<!-- PAGE CONTENT WRAPPER -->';
    $output.='<div class="page-content-wrap ">';

        $output.='<!-- START WIDGETS -->';
        $output.='<div class="row">';
            $output.='<!-- START Total Meetings-->';
            $output.='<div class="col-md-3 text-center">';
                $output.='<div class="dashpage-square-number-wrapper bg-ffffff">';
                    $output.='<div class="dashpage-square-number-top padding-top-10 border-1-e7e7e7">';
                        $output.='<div class="h6 padding-top-6">Total Meetings</div>';
                        $output.='<div class="h3 line-height-1-5">417</div>';
                    $output.='</div><div class="row margin-0">';
                    $output.='<div class="dashpage-square-number-left col-xs-6 bg-a3bad9 color-002840 padding-0 height-52">';
                        $output.='<div class="margin-top-6 margin-bottom-6">387</div>';
                        $output.='<div class="font-size-10">Accredited</div>';
                    $output.='</div>';
                    $output.='<div class="dashpage-square-number-right col-xs-6 bg-005180 color-fff padding-0 height-52">';
                        $output.='<div class="margin-top-6 margin-bottom-6">30</div>';
                        $output.='<div class="font-size-10 text-center">Non Accred</div>';
                    $output.='</div>';
                $output.='</div>';
            $output.='</div>';
            $output.='<!-- END Total Meetings -->';
            $output.='</div>';
            $output.='<div class="col-md-3 text-center">';

                $putput='<!-- START WIDGET MESSAGES -->';

                    $putput='<div class="dashpage-square-number-wrapper  bg-ffffff">';
                        $putput='<div class="dashpage-square-number-top padding-top-10 border-1-e7e7e7">';
                            $putput='<div class="h6 padding-top-6">Evaluations Received</div>';
                            $putput='<div class="h3 line-height-1-5">2169</div>';
                        $putput='</div><div class="row margin-0">';
                        $putput='<div class="dashpage-square-number-left col-xs-6 bg-a3bad9 color-002840 padding-0 height-52">';
                            $putput='<div class="margin-top-6 margin-bottom-6">1937</div>';
                            $putput='<div class="font-size-10">Accredited</div>';
                        $putput='</div>';
                        $putput='<div class="dashpage-square-number-right col-xs-6 bg-005180 color-fff padding-0 height-52">';
                            $putput='<div class="margin-top-6 margin-bottom-6">232</div>';
                            $putput='<div class="font-size-10 text-center">Non Accred</div>';
                        $putput='</div>';
                    $putput='</div>';
            $putput='</div>';

                $output.='<!-- END WIDGET MESSAGES -->';

            $output.='</div>';
            $output.='<div class="col-md-3 text-center" >';

                $output.='<!-- START WIDGET REGISTRED -->';
                $output.='<div class="dashpage-square-number-wrapper  bg-ffffff">';
                        $output.='<div class="dashpage-square-number-top padding-top-10 border-1-e7e7e7">';
                            $output.='<div class="h6 padding-top-6">Avg. Program NTS</div>';
                            $output.='<div class="h3 line-height-1-5">+14</div>';
                        $output.='</div><div class="row margin-0">';
                        $output.='<div class="dashpage-square-number-left col-xs-6 bg-a3bad9 color-002840 padding-0 height-52">';
                            $output.='<div class="margin-top-6 margin-bottom-6">+16</div>';
                            $output.='<div class="font-size-10">Accredited</div>';
                        $output.='</div>';
                        $output.='<div class="dashpage-square-number-right col-xs-6 bg-005180 color-fff padding-0 height-52">';
                            $output.='<div class="margin-top-6 margin-bottom-6">-5</div>';
                            $output.='<div class="font-size-10 text-center">Non Accred</div>';
                        $output.='</div>';
                    $output.='</div>';
                $output.='</div>';
                $output.='<!-- END WIDGET REGISTRED -->';

            $output.='</div>';
            $output.='<div class="col-md-3 text-center">';

                $output.='<!-- START WIDGET CLOCK -->';
                 $output.='<div class="dashpage-square-number-wrapper  bg-ffffff">';
                        $output.='<div class="dashpage-square-number-top padding-top-10 border-1-e7e7e7">';
                            $output.='<div class="h6 padding-top-6">Avg. Speaker Rating</div>';
                            $output.='<div class="h3 line-height-1-5">4.64</div>';
                        $output.='</div><div class="row margin-0">';
                        $output.='<div class="dashpage-square-number-left col-xs-6 bg-a3bad9 color-002840 padding-0 height-52">';
                            $output.='<div class="margin-top-6 margin-bottom-6">4.66</div>';
                            $output.='<div class="font-size-10">Accredited</div>';
                        $output.='</div>';
                        $output.='<div class="dashpage-square-number-right col-xs-6 bg-005180 color-fff padding-0 height-52">';
                            $output.='<div class="margin-top-6 margin-bottom-6">4.50</div>';
                            $output.='<div class="font-size-10 text-center">Non Accred</div>';
                        $output.='</div>';
                    $output.='</div>';
                $output.='</div>';


                $output.='<!-- END WIDGET CLOCK -->';

            $output.='</div>';

        $output.='</div>';
        $output.='<!-- END WIDGETS -->';

        $output.='<div class="row margin-top-24" >';
            $output.='<div class="col-md-6">';
                $output.='<!-- START STACKED CHART -->';
                $output.='<div class="panel panel-default">';
                    $output.='<div class="panel-body">';
                        $output.='<div id="morris-bar-example" style="height: 300px;"></div>';
                    $output.='</div>';
                $output.='</div>';
                $output.='<!-- END STACKED CHART -->';
            $output.='</div>';

             $output.='<div class="col-md-6">';
                $output.='<!-- START REGULAR PIE CHART -->';
                $output.='<div class="panel panel-default">';
                    $output.='<div class="panel-body">';
                        $output.='<div id="" style="height: 300px;"><svg></svg></div>';
                    $output.='</div>';
                $output.='</div>';
                $output.='<!-- END REGULAR PIE CHART -->';
            $output.='</div>';


        $output.='</div>';

        $output.='<div class="row">';
              $output.='<div class="col-md-6">';
                $output.='<!-- START STACKED CHART -->';
                $output.='<div class="panel panel-default">';
                    $output.='<div class="panel-body">';
                        $output.='<div id="" style="height: 300px;"><svg></svg></div>';
                    $output.='</div>';
                $output.='</div>';
                $output.='!-- END STACKED CHART -->';
            $output.='</div>';
              $output.='<div class="col-md-6">';
                $output.='<!-- START STACKED CHART -->';
                $output.='<div class="panel panel-default">';
                    $output.='<div class="panel-body">';
                        $output.='<div id="" style="height: 300px;"><svg></svg></div>';
                    $output.='</div>';
                $output.='</div>';
                $output.='<!-- END STACKED CHART -->';
            $output.='</div>';
        $output.='</div>';

        $output.='<div class="row">';
             $output.='<!-- START GOOGLE WORLD MAP -->';
            $output.='<div class="col-md-12">';
                $output.='<div class="panel panel-default">';
                    $output.='<div class="panel-body panel-body-map">';
                        $output.='<div id="google_ptm_map" style="height: 300px;"></div>';
                    $output.='</div>';
                $output.='</div>';
            $output.='</div>';
        $output.='</div>';
        $output.='<!-- END GOOGLE WORLD MAP -->';

          $output.='<div class="row">';
              $output.='<div class="col-md-6">';
                $output.='<div class="panel panel-default ">';
                  $output.='<!-- START DEFAULT DATATABLE -->';
                  require 'simpletable.inc.php' ;
                  $output.='<!-- END DEFAULT DATATABLE -->';
                $output.='</div>';
            $output.='</div>';
              $output.='<div class="col-md-6">';
                $output.='<!-- START DatatTables-->';
                $output.='<div class="panel panel-default ">';
                  $output.='<!-- START DEFAULT DATATABLE -->';
                   require 'simpletable.inc.php';
                  $output.='<!-- END DEFAULT DATATABLE -->';
                $output.='</div>';
                $output.='<!-- END DatatTables -->';
            $output.='</div>';
        $output.='</div>';
    $output.='</div>';
    $output.='<!-- END PAGE CONTENT WRAPPER -->';
$output.='</div>';

printf($output);
?>
