<?php
function widget1( $ques_sent, $responses, $response_rate) {
 $output = '';
  // $ques_sent = 1475 ;
  // $responses = 275 ;
  // $response_rate = 18.6 ;

  $output.='<div class="row">';
          /**
           * START Total Meetings
           */
          $output.='<div class="col-md-4 ">';
             /*--------------------------------------------------------------------------------------*/
              $output.='<div class="dashpage-square-number-wrapper">';
                  $output.='<div class="dashpage-square-number-top">';
                    $output.='<div class="row bg-ffffff">';

                      $output.='<div class="col-md-6 col-xs-6 " style="">';
                      /*--------------------------------------------------------------------------------------*/
                        $output.='<div class=" padding-top-10 float-right"><img src="img/icons/cald-icon.png" alt="Mountain View" style="height:50px">';
                        $output.='</div>';
                      /*--------------------------------------------------------------------------------------*/
                      $output.='</div>';

                      $output.='<div class="col-md-6">';
                      /*--------------------------------------------------------------------------------------*/
                        $output.='<div class="dashpage-square-number-top padding-top-10 padding-bottom-10">';
                          $output.='<div class="animate-number h3 line-height-1-5">'.$ques_sent['value'].'</div>';
                          $output.='<div class="h6 padding-top-6">'.$ques_sent['label'].'</div>';
                        $output.='</div>';
                      /*--------------------------------------------------------------------------------------*/
                    $output.='</div>';
                  $output.='</div>';
              $output.='</div>';
             /*--------------------------------------------------------------------------------------*/

          $output.='</div>';
          /**
           * END Total Meetings
           */
          $output.='</div>';
          $output.='<div class="col-md-4 ">';

          /*--------------------------------------------------------------------------------------*/
            $output.='<div class="dashpage-square-number-wrapper">';
                $output.='<div class="dashpage-square-number-top">';
                  $output.='<div class="row bg-ffffff">';

                    $output.='<div class="col-md-6 col-xs-6 " style="">';
                    /*--------------------------------------------------------------------------------------*/
                      $output.='<div class=" padding-top-10 float-right"><img src="img/icons/linegraph-icon.png" alt="Mountain View" style="height:50px">';
                      $output.='</div>';
                    /*--------------------------------------------------------------------------------------*/
                    $output.='</div>';

                    $output.='<div class="col-md-6">';
                    /*--------------------------------------------------------------------------------------*/
                      $output.='<div class="dashpage-square-number-top padding-top-10 padding-bottom-10">';
                        $output.='<div class="animate-number-1 h3 line-height-1-5">'.$responses['value'].'</div>';
                        $output.='<div class="h6 padding-top-6">'.$responses['label'].'</div>';
                      $output.='</div>';
                    /*--------------------------------------------------------------------------------------*/
                  $output.='</div>';
                $output.='</div>';
            $output.='</div>';
           /*--------------------------------------------------------------------------------------*/


          $output.='</div>';

          $output.='</div>';
          $output.='<div class="col-md-4" >';
                       /*--------------------------------------------------------------------------------------*/
              $output.='<div class="dashpage-square-number-wrapper">';
                  $output.='<div class="dashpage-square-number-top">';
                    $output.='<div class="row bg-ffffff">';

                      $output.='<div class="col-md-6 col-xs-6 " style="">';
                      /*--------------------------------------------------------------------------------------*/
                        $output.='<div class=" padding-top-10 float-right"><img src="img/icons/user-icon.png" alt="Mountain View" style="height:50px">';
                        $output.='</div>';
                      /*--------------------------------------------------------------------------------------*/
                      $output.='</div>';

                      $output.='<div class="col-md-6">';
                      /*--------------------------------------------------------------------------------------*/
                        $output.='<div class="dashpage-square-number-top padding-top-10 padding-bottom-10">';
                          $output.='<div class="animate-number-2 h3 line-height-1-5">'.$response_rate['value'].'%</div>';
                          $output.='<div class="h6 padding-top-6">'.$response_rate['label'].'</div>';
                        $output.='</div>';
                      /*--------------------------------------------------------------------------------------*/
                    $output.='</div>';
                  $output.='</div>';
              $output.='</div>';
             /*--------------------------------------------------------------------------------------*/

          $output.='</div>';


          $output.='</div>';

      $output.='</div>';

      return $output ;
}


function widget2( $avgSpeakerRating, $avgProgramRating, $CustomerSatisfaction ) {
  $output='';
  $output.='<div class="row">';

      $output.='<div class="col-md-4 ">';
        $output.='<div class="row  bg-0D79CF margin-top-12">';

          $output.='<div class=" col-md-12 padding-top-12">';
            $output.='<div class="col-md-1 col-xs-1 "><span class="font-size-18 color-fff col-centered">'.$avgSpeakerRating['value'].'</span></div>';

              $output.='<div class=" col-md-11 col-xs-11">';
                $output.='<div class="dashpage-square-number-left height-26 ">';
                  $output.='<div class="xe-progress ">';
                  $output.='<span class="xe-progress-fill" data-fill-from="0" data-fill-to="56" data-fill-unit="" data-fill-property="width" data-fill-duration="2" data-fill-easing="true" style="width:45%;"></span>';
                  $output.='<span class="xe-progress-fill" data-fill-from="0" data-fill-to="56"></span>';
                $output.='</div>';
              $output.='</div>';

            $output.='</div>';
          $output.='</div>';

          $output.='<div class="col-md-12">';
            $output.='<div class="padding-left-10 font-size-16 color-fff margin-bottom-8">'.$avgSpeakerRating['label'].'</div>';
          $output.='</div>';

        $output.='</div>';
      $output.='</div>';
      /*-------------------------------------------------------------------------------------*/
       $output.='<div class="col-md-4 ">';
        $output.='<div class="row  bg-1194C8 margin-top-12">';

          $output.='<div class=" col-md-12 padding-top-12">';
            $output.='<div class="col-md-1 col-xs-1 "><span class="font-size-18 color-fff col-centered">'.$avgProgramRating['value'].'</span></div>';

              $output.='<div class=" col-md-11 col-xs-11">';
                $output.='<div class="dashpage-square-number-left height-26 ">';
                  $output.='<div class="xe-progress ">';
                  $output.='<span class="xe-progress-fill" data-fill-from="0" data-fill-to="56" data-fill-unit="" data-fill-property="width" data-fill-duration="2" data-fill-easing="true" style="width:50%;"></span>';
                  $output.='<span class="xe-progress-fill" data-fill-from="0" data-fill-to="56"></span>';
                $output.='</div>';
              $output.='</div>';

            $output.='</div>';
          $output.='</div>';

          $output.='<div class="col-md-12">';
            $output.='<div class="padding-left-10 font-size-16 color-fff margin-bottom-8">'.$avgProgramRating['label'].'</div>';
          $output.='</div>';

        $output.='</div>';
      $output.='</div>';
      /*-------------------------------------------------------------------------------------*/
       $output.='<div class="col-md-4 ">';
        $output.='<div class="row  bg-0173B2 margin-top-12">';

          $output.='<div class=" col-md-12 padding-top-12">';
            $output.='<div class="col-md-1 col-xs-1 "><span class="font-size-18 color-fff col-centered">'.$CustomerSatisfaction['value'].'%</span></div>';

              $output.='<div class=" col-md-11 col-xs-11">';
                $output.='<div class="dashpage-square-number-left height-26 ">';
                  $output.='<div class="xe-progress ">';
                  $output.='<span class="xe-progress-fill" data-fill-from="0" data-fill-to="56" data-fill-unit="" data-fill-property="width" data-fill-duration="2" data-fill-easing="true" style="width:88.3%;"></span>';
                  $output.='<span class="xe-progress-fill" data-fill-from="0" data-fill-to="56"></span>';
                $output.='</div>';
              $output.='</div>';

            $output.='</div>';
          $output.='</div>';

          $output.='<div class="col-md-12">';
            $output.='<div class="padding-left-10 font-size-16 color-fff margin-bottom-8">'.$CustomerSatisfaction['label'].'</div>';
          $output.='</div>';

        $output.='</div>';
      $output.='</div>';
      /*-------------------------------------------------------------------------------------*/

    $output.='</div>';
    return $output;
}



/*
 * This fuction defines the navigation bar on the top of each page
 */

function top_navigation() {
    /**
     * START X-NAVIGATION VERTICAL 1
     *
     */
    $output="";
    $output.='<ul class="x-navigation x-navigation-horizontal x-navigation-panel ">';
      $output.='<!-- TOGGLE NAVIGATION -->';
      $output.='<li class="xn-icon-button">';
          $output.='<a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>';
      $output.='</li>';
      $output.='<!-- END TOGGLE NAVIGATION -->';

      $output.='<!-- END SEARCH -->';

      $output.='<!-- SIGN OUT -->';
      // $output.='<li class="xn-icon-button pull-right">';
      //     $output.='<a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>';
      // $output.='</li>';
      $output.='<!-- END SIGN OUT -->';

      $output.='</li>';
      $output.='<!-- SEARCH -->';
       $output.='<li class="xn-search ">';
          $output.='<form role="form">';
              $output.='<input type="text"  name="search" />';
          $output.='</form>';
      $output.='</li>';
    $output.='</ul>';

    /**
     * START X-NAVIGATION VERTICAL 2
     *
     */
    $output.='<div class="bg-F5F5F5">';
      $output.='<ul class=" x-navigation x-navigation-horizontal x-navigation-panel" style="background-color:#F5F5F5">';
        $output.='<!-- TOGGLE NAVIGATION -->';

        $output.='<!-- END TOGGLE NAVIGATION -->';
        $output.='<li >';
         $output.='<span class="color-002840 font-family-inherit padding-left-40 font-size-20 line-height-2-5 ">KPI Reporting DashBoard</span>';
        $output.='</li>';
        $output.='<!-- END SEARCH -->';


            $output.='<li class=" pull-right ">';
                $output.='<div id="reportrange" class="reportrange border-radius-6 margin-right-6 color-fff bg-005180 padding-px-5 margin-top-10  ">';
                $output.='<span></span><b class="caret"></b>';
            $output.='</div>';
        $output.='</li>';

      $output.='</ul>';
    $output.='</div>';

    /*--------------------------------------------------------------------------------------------------------------------------------------*/
    return $output;
}
    ?>
