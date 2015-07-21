<?php
require_once 'includes/functions-html.php';
require_once 'sample-tables.inc.php' ;

$output = '';

   /**
     * START X-NAVIGATION VERTICAL 1
     *
     */

     $output = top_navigation();
    /**
     * START X-NAVIGATION VERTICAL 2
     *
     */

    /**
     * START BREADCRUMB
     */
    $output.='<ul class="breadcrumb">';
      $output.='<li><a href="#">Home</a></li>';
      $output.='<li class="active">Dashboard</li>';
    $output.='</ul>';
/**
 * END BREADCRUMB
 */

/**
 * PAGE CONTENT WRAPPER
 */
$output.='<div class="page-content-wrap ">';

    /**
     * START  Widgets 1
     */

     require_once 'includes/functions-html.php';
     $Ques_sent = array (
      'value' => 1475 ,
      'label' => 'Questionairres Sent',
      );
     $Response_rate = array (
      'value' => 275 ,
      'label' => 'Responses',
      );
     $Responses = array (
      'value' => 18.6 ,
      'label' => 'Response Rate',
      );

     $widget1 = widget1( $Ques_sent,  $Response_rate , $Responses);
     $output.= $widget1;

    /**
     * END  Widgets 1
     */

        /**
     * START .Widgets 2
     */
      //Not required here in this template

    /**
     * END Widgets 2
     */

    $output.='<div class="row margin-top-24" >';

        $output.='<div id="refresh" class=" col-md-6 " style="">';
          /**
           * START REGULAR PIE CHART
           */
          $output.='<div class="panel ">';
          $output.='<div class=" panel-header">Business Unit Performance </div>';
              $output.='<div class="panel-body bg-ffffff" style="height: 300px;">';
                  $output.='<div class="" id="chart-5" style="height: 300px;"><svg></svg></div>';
              $output.='</div>';
          $output.='</div>';
          /**
           * END REGULAR PIE CHART
           */
        $output.='</div>';

        $output.='<div class="col-md-6 " style="">';
            /**
             * START REGULAR PIE CHART
             */
            $output.='<div class="panel ">';
            $output.='<div class=" panel-header">Meeting Activity YTD </div>';
                $output.='<div class="panel-body bg-ffffff padding-0">';
                    $output.='<div class="" id="morris-line-example" style="height: 300px;"><svg></svg></div>';
                $output.='</div>';
            $output.='</div>';
            /**
             * END REGULAR PIE CHART
             */
        $output.='</div>';


    $output.='</div>';

    $output.='<div class="row margin-top-24">';
          $output.='<div class="col-md-4 ">';
            /**
             * START PIE CHART
             */
            $output.='<div class="panel ">';
            $output.='<div class=" panel-header">Accredited Program Breakdown</div>';
                $output.='<div class="panel-body">';
                    $output.='<div id="chart-9" style="height: 300px;"><svg></svg></div>';
                $output.='</div>';
            $output.='</div>';
            /**
             * END PIE CHART
             */
        $output.='</div>';

        $output.='<div class="col-md-4 ">';
           /**
             * START REGULAR PIE CHART
             */
            $output.='<div class="panel ">';
            $output.='<div class=" panel-header">Non-Accredited Program Breakdown </div>';
                $output.='<div class="panel-body bg-ffffff" ">';
                    $output.='<div class="" id="chart-10" style="height: 300px;"><svg></svg></div>';
                $output.='</div>';
            $output.='</div>';
            /**
             * END REGULAR PIE CHART
             */
        $output.='</div>';

        $output.='<div class="col-md-4" >';
            /**
             * START REGULAR PIE CHART
             */
            $output.='<div class="panel">';
            $output.='<div class=" panel-header">Target Audience Participation</div>';
                $output.='<div class="panel-body bg-ffffff padding-0">';
                    $output.='<div class="text-center padding-top-80  font-size-14"  style="height: 330px;">';
                    $output.='<div><canvas id="dashboard-gauge"></canvas></div>';
                    $output.='<div class="color-2DAAE1 font-size-18 font-bold"><span id="dashboard-gauge-font"></span></div>';
                    //$output.='<input class="knob" data-width="200" data-thickness=".3" data-angleOffset="270" data-angleArc="180" data-fgColor="#0173B2" value="90"/>';
                    $output.='</div>';

                $output.='</div>';
            $output.='</div>';
            /**
             * END REGULAR PIE CHART
             */
        $output.='</div>';
    $output.='</div>';

    /*-------------------------------------------------------------------------------------------------------------*/
    $output.='<div class="row margin-top-24" >';

        $output.='<div class="col-md-6 " style="">';
          /**
           * START REGULAR PIE CHART
           */
          $output.='<div class="panel ">';
          $output.='<div class=" panel-header">Behavior change </div>';
            $output.='<div class="panel-body bg-ffffff" style="height: 350px;">';
              $output.='<div class="text-center font-size-14 font-family-open-sans">Define the Potential impact of new approaches to patient care, as proposed by the latest clinical trials </div>';
              $output.='<div class="padding-top-30" id="chart-5pt2" style="height: 300px;"><svg></svg></div>';
            $output.='</div>';
          $output.='</div>';
          /**
           * END REGULAR PIE CHART
           */
        $output.='</div>';

       $output.='<div class="col-md-6 " style="">';
          /**
           * START REGULAR PIE CHART
           */
          $output.='<div class="panel ">';
          $output.='<div class=" panel-header">Behavior change </div>';
            $output.='<div class="panel-body bg-ffffff" style="height: 350px;">';
              $output.='<div class="text-center font-size-14 font-family-open-sans">Summarize the key trial outcomes presented at ASH 2014</div>';
              $output.='<div class="padding-top-30" id="chart-5pt3" style="height: 300px;"><svg></svg></div>';
            $output.='</div>';
          $output.='</div>';
          /**
           * END REGULAR PIE CHART
           */
        $output.='</div>';


    $output.='</div>';
    /*---------------------------------------------------------------------------------------------------------------*/


    /*-------------------------------------------------------------------------------------------------------------*/
    $output.='<div class="row margin-top-24" >';

        $output.='<div class="col-md-6 " style="">';
          /**
           * START REGULAR PIE CHART
           */
          $output.='<div class="panel ">';
          $output.='<div class=" panel-header">Educational Event by Province </div>';
            $output.='<div class="panel-body bg-ffffff" style="height: 300px;">';
                $output.='<div class="" id="chart-5pt4" style="height: 300px;"><svg></svg></div>';
            $output.='</div>';
          $output.='</div>';
          /**
           * END REGULAR PIE CHART
           */
        $output.='</div>';

        $output.='<div class="col-md-6 " style="">';
            /**
             * START REGULAR PIE CHART
             */
            $output.='<div class="panel ">';
            $output.='<div class=" panel-header">Business Unit Provincial Exposure</div>';
                $output.='<div class="panel-body bg-ffffff padding-0">';
                    $output.='<div id="google-stacked-chart" style=" height: 300px;"></div>';
                $output.='</div>';
            $output.='</div>';
            /**
             * END REGULAR PIE CHART
             */
        $output.='</div>';


    $output.='</div>';
    /*---------------------------------------------------------------------------------------------------------------*/
    $output.='<div class="row">';
         /**
          * START GOOGLE WORLD MAP
          */
        $output.='<div class="col-md-12">';
            $output.='<div class="panel panel-default">';
            $output.='<div class=" panel-header">Regional Meeting Detail</div>';
                $output.='<div class="panel-body panel-body-map">';
                    $output.='<div id="google_world_map_canada" style="height: 300px;"></div>';
                $output.='</div>';
            $output.='</div>';
        $output.='</div>';
    $output.='</div>';
    /**
     * END GOOGLE WORLD MAP
     */

      $output.='<div class="row margin-top-24">';

        $output.='<div class="col-md-6">';
            $output.='<div class="panel panel-default ">';
              /**
               * START DEFAULT DATATABLE
               */
              $output.= program_table();
              /**
               * END DEFAULT DATATABLE
               */
            $output.='</div>';
        $output.='</div>';

        $output.='<div class="col-md-6">';
            $output.='<div class="panel panel-default ">';
              /**
               * START DEFAULT DATATABLE
               */
              $output.= speaker_table();
              /**
               * END DEFAULT DATATABLE
               */
            $output.='</div>';
        $output.='</div>';

      $output.='</div>';
$output.='</div>';
/**
 * END PAGE CONTENT WRAPPER
 */
 print($output);


?>
