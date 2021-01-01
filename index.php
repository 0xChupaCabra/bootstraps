<html>
<head>
<script src="jquery-3.5.1.js"></script>
<link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
<link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-exp.min.css">
<link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-icons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
</head>
<body id="main">
<header class="navbar bg-gray">
  <section class="navbar-section">
   <b> <a href="#" class="navbar-brand mr-2" style="position:relative; left:20px;">BS-King</a></b>
    <a href="#listing" class="btn btn-link" style="position:relative; left:20px;">Listing</a>

  </section>
   <section class="navbar-center">
    <!-- centered logo or brand -->
<img src="logo.png" class="animate__animated animate__fadeIn animate__slower">
  </section>
  <section class="navbar-section">
    <div class="input-group input-inline">
      <input class="form-input" id="filter" type="text" placeholder="filter" style="position:relative; right:20px;">

    </div>
  </section>
</header><br><br><br>
<div class="text-center">All blockchain bootstraps are updated every 24 hours. Archives are available for Windows (ZIP) and Linux (TAR.GZ). peers.dat file is included. </div><br><br>
<div class="modal animate__animated animate__fadeIn animate__slower" id="listing">
  <a href="#main" class="modal-overlay" aria-label="Close"></a>
  <div class="modal-container">
    <div class="modal-header">
      <a href="#close" class="btn btn-clear float-right" aria-label="Close"></a>
      <div class="modal-title h5">How to list your blockchain</div>
    </div>
    <div class="modal-body">
      <div class="content">
        Hosting cost is 50usd per year. Blockchain bootstraps are updated on a daily basis. <br> Please contact us at <b>bootstrapking@protonmail.com</b> including github link, a png logo with transparent background. <br> We accept BTC, LTC and ETH as payment methods.
      </div>
    </div>
    <div class="modal-footer">
      <a class="btn btn-link" href="#main">Close</a>
    </div>
  </div>
</div>
<?php
$dir = "coins/";

// Sort in ascending order - this is default
$a = array_slice(scandir($dir), 2);

// Sort in descending order
//$b = scandir($dir,1);
//print_r($dir);
//print_r($a);
//print_r($b);
?>

<div class="container">
  <div class="columns">

<?php

$count = 0;
foreach($a as $item) {
echo  '<div class="column col-3" id="'.$item.'" style="position:relative; top:20px;"> <p style="display: none;">'.$item.'</p>
<div class="card" id="ops" style="border-radius: 15px; box-shadow:5px 5px 10px 0px rgba(0,0,0,0.43);">
<div class="card-image"><center>
<img src="coins/'.$item.'/'.$item.'.png" class="img-responsive" width="100" height="100"> </center></div>
<div class="card-header">
<div class="card-title h5" id="results"><center>'. strtoupper($item) .'</center></div>
<div class="card-subtitle text-gray"></div>
</div>
<div class="card-body">

</div>
<div class="card-footer" id="a"><center>
<a href="https://bs-king.org/coins/'.$item.'/'.$item.'.tar.gz" id="b">
<button class="btn btn-primary" id="c">Download TAR</button></a><br><br>
 <a href="https://bs-king.org/coins/'.$item.'/'.$item.'.zip" id="d">
<button class="btn btn-primary" id="e">Download ZIP</button></a>
 </center> </div>
</div>

</div>';
$count++;
$count2 = $count / 4;
if (is_int($count2) == TRUE) {
echo '<br>';
}
}

?>

</div></div>
</body>
</html>
<script>
$( document ).ready(function() {
$(function () {
        $("#filter").keyup(function (e) {
            const val = e.target.value;
            $('div.column').each(function (ind, ele) {
                if (ele.id.includes(val)) {
                    $(ele).fadeIn("show");
                } else {
                    $(ele).fadeOut("slow");
                }
            });
        });
    });
});

</script>
<script type="text/javascript">
    var adfly_id = 23767777;
    var popunder_frequency_delay = 120;
    var adfly_google_compliant = false;
</script>
<script src="https://cdn.adf.ly/js/display.js"></script>
