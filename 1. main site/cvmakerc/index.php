<?php  
  //
  session_start();
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
								        <a class="nav-link" href="#features">Features</a>
								      </li>

								      <li class="nav-item">
								        <a class="nav-link" href="#about">About</a>
								      </li>

								      <li class="nav-item">

								        <a class="btn btn-primary navbar-btn px-5" href="index-form.php"> Try now! </a>
								      </li>

								    </ul>

							</div>

						<!-- </div> -->
  				</nav>

  	<!-- --------------- ./header & nav --------------- -->


	<!-- --------------- div 1 --------------- -->

		<div class="herodiv">

			<h1> CV making </h1>
			<p class="text-muted">Made simple, fluid and fast.</p>
			
		</div>

	<!-- --------------- ./ div 1 --------------- -->

	<!-- --------------- container div --------------- -->

		<div class="container">

			<div class="col-md-12 features pt-5" id="features">
				<h2 class="text-center text-muted">Features</h2>

				<!-- container start -->
				<div class="container pt-5">
					<div class="row d-flex flex-row">
						<div class="col text-center feature-block mr-3">
							<h4>Save Time</h4>
						</div>
						<div class="col text-center feature-block ml-3">
							<h4>Instant Customization</h4>
						</div>
					</div>

					<div class="row d-flex flex-row pt-3">
						<div class="col text-center feature-block mr-3">
							<h4>Easy to Update</h4>
						</div>
						<div class="col text-center feature-block ml-3">
							<h4>Free and Easy to Use</h4>
						</div>
					</div>

					<div class="row d-flex flex-row pt-3">
						<div class="col text-center feature-block mr-3">
							<h4>Peace of Mind</h4>
						</div>
						<div class="col text-center feature-block ml-3">
							<h4>No account needed</h4>
						</div>
					</div>
					
				</div>
				<!-- container end -->

			</div>

			<div class="col-md-12 about pt-5 pb-5" id="about">
				<h2 class="text-center text-muted">About</h2>
				<!-- <p>details here</p> -->
				<div class="container pt-5 pb-5">
					<div class="row">
						<div class="col text-center about-block">
							<h5>If you are looking for a new career or job switch, keeping your CV ready is vital. CV says a lot about yourself, so a well-written CV is important for your future career and to grab the attention of your potential employer. Writing a CV can be an overwhelming, confusing task, but it doesn't have to be. With CVMaker compact it's easy to make a CV online, and choose from multiple formats, whenever you need those, from anywhere on the globe.</h5>
						</div>
						
					</div>
				</div>
			</div>
			
		</div>

	<!-- --------------- ./ container div --------------- -->

	<!-- --------------- cta div --------------- -->

		<div class="py-5 section-ctadiv" id="demo-register">

			<div class="container">

				<div class="row">

					<div class="col-md-8">
						<h1 class="text-white">Try Now</h1>
						<p class="text-white">Start your journey here.</p>
					</div>

					<div class="col-md-4">
						<a href="index-form.php" class="btn btn-primary btn-lg my-3">Start now!</a>
					</div>
				

				</div>

			</div>
			
		</div>

	<!-- --------------- ./ cta div --------------- -->


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


  </body>
</html>