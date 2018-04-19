<!DOCTYPE html>
<html lang="en">
<head>
	<title>N_H_A</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  crossorigin="anonymous">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/slidebar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
</head>
<body>
  <div style="height:51px;">
    <nav class="navbar navbar-fixed-top navbar-custom">
      <div class="device-width">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
          <a class="navbar-brand"><img src="images/logo.jpg" alt="placeholder image" style="height:22px ;width:20px"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-left">
            <li><a>N-H-A</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html"><span class="glyphicon glyphicon-log-in"></span>&nbsp; &nbsp;Logout&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <div style="position:fixed; width:15.6%; height:100%; background:#0b1533;">
		<ul class="list-group col-sm-2" style="margin-top:10px;">
			<li class="list-group-item" ><a href="index.html"><i class="glyphicon glyphicon-map-marker" style="color:white;"></i>&nbsp;<span class="text" style="color:white;"> Maps</span></li></a>

			<li class="list-group-item" ><i class="glyphicon glyphicon-bed" style="color:white;"></i>&nbsp;<span class="text" style="color:white;"> Casualty Wise</span></li>
			<li class="list-group-item"  ><i class="glyphicon glyphicon-road" style="color:white;"></i>&nbsp;<span class="text" style="color:white;"> City Wise</span></li>

			<li class="list-group-item"  ><i class="glyphicon glyphicon-calendar" style="color:white;"></i>&nbsp;<span class="text" style="color:white;">  Date Wise</span></li>
		</ul>
	</div>





  <div class="container" id="back" style="position:absolute;left:15.4%;width:84.5%;color:white;">
    <div id="box">
			<h3>My Google Maps Demo</h3>
	    <div id="map" style="height: 400px;width: 100%;"></div>
    </div>
  </div>
	<script>
		function initMap() {
			var uluru = {lat: 33.742, lng: 72.7875};


			var map = new google.maps.Map(document.getElementById('map'), {
				zoom: 18,
				center: uluru
			});
			var marker = new google.maps.Marker({
				position: uluru,
				map: map

			});
		}
	</script>
	<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBaqw22apvdRE0eK_BsxZlUWSA1SpbxdZA&callback=initMap">
	</script>




  <script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>

  <!--===============================================================================================-->
    <!-- <script src="vendor/jquery/jquery-3.2.1.min.js"></script> -->
  <!--===============================================================================================-->
    <!-- <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script> -->

</body>
</html>
