<?php  
  //
  //session_start();
  require_once ('config.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CV Maker compact</title>

    <meta name="description" content="CV Maker App">
    <meta name="author" content="CV Maker">

    <!-- css dependencies -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css"> -->
	<!-- <link href="css/fa/font-awesome.min.css" rel="stylesheet"> -->

    <!-- fa -->
	<script src="js/fa/all.min.js"></script>
    <link href="css/fa/all.min.css" rel="stylesheet">

	<!-- custom css -->
    <link href="css/style.css" rel="stylesheet">
    
    <!-- js dependencies -->
    <script src="js/navbar-ontop.js"></script>
  	<script src="js/animate-in.js"></script>


  </head>
  <body>

    <!-- --------------- header & nav --------------- -->
  				<!-- sticky-top fixed-top -->
  				<nav class="navbar navbar-expand-md navbar-dark bg-dark">

							<div class="navbar-header">
								<a class="navbar-brand" href="index.php"> CVMaker </a>
		  						<span class="navbar-text"> <i class="text-muted">compact</i> </span>

		  							<!-- navbar-nav -->
			  						<ul class="nav nav-pills">

								      <li class="nav-item active">
								      	 <!-- active -->
								        <a class="nav-link" href="index.php">Home</a>
								      </li>

								      <li class="nav-item">
								        <a class="nav-link" href="index.php#features">Features</a>
								      </li>

								      <li class="nav-item">
								        <a class="nav-link" href="index.php#about">About</a>
								      </li>

								      <li class="nav-item">
								        <a class="btn btn-primary navbar-btn px-5" href="index-form.php"> Try now! </a>
								      </li>

								    </ul>

							</div>

						<!-- </div> -->
  				</nav>

  	<!-- --------------- ./header & nav --------------- -->

	<div class="herodiv">
		<h1> CV Maker </h1>
		<p class="text-muted">V 0.53.216 beta</p>
	</div>

<!-- ---------------------------------- -->



<!-- ---------------------------------- -->
    <div class="container">
	<div class="row">
		<div class="col-md-12">

			<!-- Card 10 -->
			<form role="form" action="router.php" method="POST">

				<div class="row fields-set-padding-top" >
				    <div class="col-md-6">
				      <label class="text-muted labelleftpadding"> Enter a valid CV-ID to search your CV * </label>
				    </div>
				</div>

				<div class="row fields-set-padding-top" >
				    <div class="col">
				      <input  type="text" class="form-control" placeholder="CV-ID" name="down_cv_ID">
				    </div>
				</div>

			<!-- /.Card 10 -->


				<hr>
				<button type="submit" class="btn btn-primary float-right" name="submit">
					Submit
				</button>

				<br>
				<br>

				<!-- ./form end -->
				</form>
				<hr>
		</div>
	</div>
</div>

	


<!-- ---------------------------------- -->

	<!-- footer -->
	<div class="py-5 bg-dark">
		<div class="container">
		  <div class="row">

		    <div class="col-md-4">
		      <p class="footer-brand-lead">CVMaker <i class="text-muted">compact</i></p>

		      <p class="text-muted">Create nice looking CVs in minutes.</p>

		    </div>

		    <div class="col-md-5">
		      <p class="footer-contact-lead"> Contact </p>

		      <!-- <p class="text-muted"> acacdmml@gmail.com </p> -->
		      <p class="text-muted"> <i class="fa fa-envelope"></i><a class="pl-2" href="mailto: acacdmml@gmail.com"> cvmc@gmail.com </a> </p>

		    </div>

			    <div class="col-3 flex-container">
				    <div class="align-self-center my-3">
				      <!-- <a href="https://www.facebook.com" target="blank"><i class="fa fa-fw fa-facebook fa-3x text-white"></i></a> -->
				      <a href="https://www.linkedin.com" target="blank"><i class="fab fa-fw fa-linkedin fa-2x text-white"></i></a>
				    </div>
				    <div class="align-self-center my-3">
				      <a href="https://twitter.com" target="blank"><i class="fab fa-fw fa-twitter fa-2x text-white"></i></a>
				    </div>
				    <div class="align-self-center my-3">
				      <a href="https://www.github.com" target="blank"><i class="fab fa-fw fa-git fa-2x text-white"></i></a>
				    </div>
			    </div>
		  </div>

		  <div class="row">
		    <div class="col-12 my-3 text-center">
		      <p class="text-muted pt-5">Copyright © 2020 <a href="#">(OC)</a>. All Rights Reserved.</p>
		    </div>
		  </div>

		</div>
	</div>
	<!-- ./ footer -->
<!-- ---------------------------------- -->
	
	
	<!-- scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/smooth-scroll.js"></script>

  </body>
</html>