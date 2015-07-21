<?php
function program_table() {
  $output='';
  $output.='<div class="panel-body padding-0">';
      $output.='<table class="table ">';
         $output.='<thead><tr><th>Name</th><th>Events</th><th>Evaluations</th><th>Rating</th> </tr></thead>';
          $output.='<tbody>';
           $output.='<tr><td>The A1C Test and Diabetes</td><td>18</td><td>140</td><td>+16</td> </tr>';
           $output.='<tr><td>Blood Glucose and Diabetes</td><td>16</td><td>62</td><td>+18</td> </tr>';
           $output.='<tr><td>Exercise-Induced Asthma</td><td>12</td><td>11</td><td>+15</td> </tr>';
           $output.='<tr><td>Asthma and COPD: Differences and Similarities</td><td>10</td><td>20</td><td>+6</td> </tr>';
           $output.='<tr><td>Gastroparesis and Diabetes</td><td>9</td><td>13</td><td>+19</td> </tr>';
           $output.='<tr><td>Prevent Diabetes Problems Series</a></td><td>8</td><td>+23</td><td>3.95</td> </tr>';
           $output.='<tr><td>Risk Factors for Type 2 Diabetes</td><td>8</td><td>7</td><td>+36</td> </tr>';
           $output.='<tr><td>How to Use a Metered Dose Inhaler</td><td>7</td><td>18</td><td>+24</td> </tr>';
           $output.='<tr><td>Risk Factors for Osteoporosis and Fractures in Men</td><td>7</td><td>7</td><td>+15</td> </tr>';
           $output.='<tr><td>Understanding and Managing Pain</td><td>6</td><td>67</td><td>+26</td> </tr>';
          $output.='</tbody>';
      $output.='</table>';
  $output.='</div>';
  return $output ;
}

function speaker_table() {
    $output='';
    $output.='<div class="panel-body padding-0">';
      $output.='<table class="table ">';
         $output.='<thead><tr><th>Name</th><th>Events</th><th>Evaluations</th><th>Rating</th> </tr></thead>';
          $output.='<tbody>';
           $output.='<tr><td>Tyisha Mutter</td><td>18</td><td>140</td><td>4.71</td> </tr>';
           $output.='<tr><td>Oliver Vito</td><td>16</td><td>62</td><td>4.72</td> </tr>';
           $output.='<tr><td>Marketta Deland</td><td>12</td><td>11</td><td>4.82</td> </tr>';
           $output.='<tr><td>Dorthy Facio</td><td>10</td><td>20</td><td>4.65</td> </tr>';
           $output.='<tr><td>Roscoe Spidle</td><td>9</td><td>13</td><td>4.92</td> </tr>';
           $output.='<tr><td>Kimberli Bustamante</a></td><td>8</td><td>21</td><td>3.95</td> </tr>';
           $output.='<tr><td>Breanne Ugalde</td><td>8</td><td>7</td><td>4.86</td> </tr>';
           $output.='<tr><td>Leonor Beagle</td><td>7</td><td>18</td><td>4.61</td> </tr>';
           $output.='<tr><td>Gerda Mcdonell</td><td>7</td><td>7</td><td>5.00</td> </tr>';
           $output.='<tr><td>Chance Ferro</td><td>6</td><td>67</td><td>4.72</td> </tr>';
          $output.='</tbody>';
      $output.='</table>';
  $output.='</div>';
  return $output;
}

function educational_gaps(){
  $output='';
    $output.='<div class="panel-body padding-0">';
      $output.='<table class="table ">';
         $output.='<thead><tr><th>New Learning Opportunities</th><th>Responses</th><th>Average Rating</th> </tr></thead>';
          $output.='<tbody>';
            $output.='<tr><td>Optimal and safe drug combinations</td><td>225</td><td>4.75</td> </tr>';
            $output.='<tr><td>Combination of glucose lowering agent and insulin </td><td>215</td><td>4.72</td> </tr>';
            $output.='<tr><td>New agents for the treatment of diabetes</td><td>200</td><td>4.39</td> </tr>';
            $output.='<tr><td>Role of various diabetes th therapy options</td><td>185</td><td>4.33</td> </tr>';
            $output.='<tr><td>Individualized regimen of insulin therapy</td><td>160</td><td>4.30</td> </tr>';
            $output.='<tr><td>Efficient adjustment of insulin therapy</td><td>150</td><td>4.30</td> </tr>';
            $output.='<tr><td>Initialize insulin therapy according to patient profile</td><td>145</td><td>4.25</td> </tr>';
            $output.='<tr><td>Recommendation of the 2013 CDA guidelines</td><td>125</td><td>4.21</td> </tr>';
            $output.='<tr><td>Prevention/Management of diabetes complications</td><td>115</td><td>4.18</td> </tr>';
            $output.='<tr><td>Optimizing drug therapy compliance </td><td>110</td><td>4.13</td> </tr>';
            $output.='<tr><td>Management of complex diabetic patient</td><td>108</td><td>4.10</td> </tr>';
            $output.='<tr><td>Diabetes Management in the elderly</td><td>105</td><td>4.09</td> </tr>';
            $output.='<tr><td>Impact of nutrition on blood sugar control</td><td>95</td><td>4.06</td> </tr>';
            $output.='<tr><td>Therapeutic adjustments according to crab counting</td><td>75</td><td>4.03</td> </tr>';

          $output.='</tbody>';
      $output.='</table>';
  $output.='</div>';
  return $output;

}

?>
