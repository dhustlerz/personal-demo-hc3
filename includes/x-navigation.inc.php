
<?php
    $xnavigation_output = '';
    $xnavigation_output.='<ul class="x-navigation x-navigation-horizontal x-navigation-panel ">';
      $xnavigation_output.='<!-- TOGGLE NAVIGATION -->';
      $xnavigation_output.='<li class="xn-icon-button">';
          $xnavigation_output.='<a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>';
      $xnavigation_output.='</li>';
      $xnavigation_output.='<!-- END TOGGLE NAVIGATION -->';

      $xnavigation_output.='<!-- END SEARCH -->';

      $xnavigation_output.='<!-- SIGN OUT -->';
      // $xnavigation_output.='<li class="xn-icon-button pull-right">';
      //     $xnavigation_output.='<a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>';
      // $xnavigation_output.='</li>';
      $xnavigation_output.='<!-- END SIGN OUT -->';

      $xnavigation_output.='</li>';
      $xnavigation_output.='<!-- SEARCH -->';
       $xnavigation_output.='<li class="xn-search">';
          $xnavigation_output.='<form role="form">';
              $xnavigation_output.='<input type="text" name="search" placeholder="Search..."/>';
          $xnavigation_output.='</form>';
      $xnavigation_output.='</li>';
    $xnavigation_output.='</ul>';
      /**
       * START X-NAVIGATION VERTICAL 2
       *
       */
    $xnavigation_output.='<div class="bg-F5F5F5">';
    $xnavigation_output.='<ul class=" x-navigation x-navigation-horizontal x-navigation-panel" style="background-color:#F5F5F5">';
      $xnavigation_output.='<!-- TOGGLE NAVIGATION -->';

      $xnavigation_output.='<!-- END TOGGLE NAVIGATION -->';
      $xnavigation_output.='<li >';
       $xnavigation_output.='<span class="color-002840 font-family-inherit padding-left-40 font-size-20 line-height-2-5 ">KPI Reporting DashBoard</span>';
      $xnavigation_output.='</li>';
      $xnavigation_output.='<!-- END SEARCH -->';


          $xnavigation_output.='<li class=" pull-right ">';
              $xnavigation_output.='<div id="reportrange" class="reportrange border-radius-6 margin-right-6 color-fff bg-005180 padding-px-5 margin-top-10  ">';
              $xnavigation_output.='<span></span><b class="caret"></b>';
          $xnavigation_output.='</div>';
      $xnavigation_output.='</li>';

    $xnavigation_output.='</ul>';
    $xnavigation_output.='</div>';
        $xnavigation_output.='</ul>';

  printf($xnavigation_output);
?>
