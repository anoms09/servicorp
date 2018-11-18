<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ServiCorp || Home</title>
	<link href="./css/style.css" rel="stylesheet" type="text/css" media="screen"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<?php include("./php/nav.php"); ?>
	<div id = "picture_Slide">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="./image/2.jpg" alt="First slide" width="800px" height="500px">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="./image/3.jpg" alt="Second slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="./image/anomski.jpg" alt="Third slide">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<div id = "content">
		<div id="home_content">
				<div style="text-align:center; margin-top:40px;">
					<a class="textlink" href="#">
					<button type="button" class="btn btn-success">REAL ESTATE</button></a>
				</div>
  		</div>
  		<div id="home_content">
				<div style="text-align:center; margin-top:40px;">
					<a class="textlink" href="#">
					<button type="button" class="btn btn-success">CAR POOLING</button></a>
				</div>
  		</div>
  		<div id="home_content">
				<div style="text-align:center; margin-top:40px;">
					<a class="textlink" href="#">
					<button type="button" class="btn btn-success">LOAN SERVICES</button></a>
				</div>
  		</div>
  		<div id="home_content">
				<div style="text-align:center; margin-top:40px;">
					<a class="textlink" href="#">
					<button type="button" class="btn btn-success">FORUM</button></a>
				</div>
  		</div>
  		<div id="home_content">
				<div style="text-align:center; margin-top:40px;">
					<a class="textlink" href="#">
					<button type="button" class="btn btn-success">MARKETING</button></a>
				</div>
  		</div>
  		<div id="home_content">
				<div style="text-align:center; margin-top:40px;">
					<a class="textlink" href="#">
					<button type="button" class="btn btn-success">JOBS AND PPA</button></a>
				</div>
  		</div>
  		<div id="home_content">
				<div style="text-align:center; margin-top:40px;">
					<a class="textlink" href="#">
					<button type="button" class="btn btn-success">PROFILE AND DM</button></a>
				</div>
  		</div>
  		
  		</div>
	</div>
	<?php include("./php/footer.php"); ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>