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

    <title>CV Maker compact - cv style 01 </title>

    <meta name="description" content="CV Maker App">
    <meta name="author" content="CV Maker">

    <!-- bs & custom stuff -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="css/style.css" rel="stylesheet"> -->
    <link href="css/output-style1.css" rel="stylesheet">
    
    <!-- fa -->
    <link href="css\fa\css\all.min.css" rel="stylesheet">

  </head>
  <body>

	<!-- main body section -->
		
		<!-- header & nav -->

		<!-- ./ header & nav -->



    <!-- // ---------- --- ---------- // -->

    <?php
      //
      // (cvmaker-compact style-01 file. study for academic purpose is permitted.)
      // ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ 
      //
      //  Copyright (2020) - OC - (288534) (acacdmml@gmail.com)
      //
      // ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ 
    ?>

    <!-- // ---------- --- ---------- // -->


  <!-- optional cv_id confirmation section -->
    <div class="container mt-5" id="alert-div">
    <div class="row">
      <div class="col-md-12 cv-alert-div">
        <div class="text-center pt-3 pb-3">
          <i class="fa fa-check"></i>
          CV is rendered as <span class="alert-cv-id"> <?php echo $_SESSION['cv_data_array']['cv_id']; ?> </span> (Auto saved).      
        </div>
      </div>
    </div>
  </div>
  <!-- optional cv_id confirmation section -->


  <!-- cv style page specific adjustments -->
    <?php  
      // presentation based adjustments --

        // Work-Exp new year vars preparation
        // year adjustments
        
        if ( $_SESSION['cv_data_array']['we_end_year'][0] == date('Y') ) {
          //
          $_SESSION['cv_data_array']['we_end_year'][0] = "Present";
          
        } elseif ($_SESSION['cv_data_array']['we_end_year'][1] == date('Y')) {
          //
          $_SESSION['cv_data_array']['we_end_year'][1] = "Present";
        }

      // ./presentation based adjustments --
    ?>
  <!-- cv style page specific adjustments -->


  <!-- back btn & print -->
  <div class="container d-flex flex-row pt-5" id="navigation-btns-div">
    <div class="pr-2">
      <a class="btn btn-primary btn-large" href="index-form.php"> Go to Form </a>
    </div>

    <div>
      <form> 
          <input class="btn btn-primary btn-large float-right" type="button" value="Print" 
                 onclick="window.print()" /> 
        </form> 
    </div>

  </div>
  <!-- ./back btn & print -->


    <!-- temporary -->

    <!-- ./temporary -->


    <!-- ---- ---- ---- ---- printable-section ---- ---- ---- ---- -->
    <div class="" id="printable-section">

	  <!-- main content section -->
      <!-- container start -->
      <div class="container">
        <!-- row start -->
        <div  class="row">
          <!-- col start -->
          <div class="col-md-12">

              <!-- ---- ---- ---- ---- ---- wrapper ---- ---- ---- ---- ---- -->
              <!-- start of wrapper -->
              <div class="wrapper">
                <!-- start of article -->
                <div class="article">

                  	<!-- main-wrapper start -->
                  	<div class="main-wrapper">
                  		
                  		<div class="cv-heading">
                  			<h3 class="text-center"> <strong>Curriculam Vitae</strong> </h3>
                  		</div>
						<hr>

						<div class="name-image-card-section">
							<div class="flex-container">
								<div class="name-contact-div">

									<h3 class="name-contact-name"><?php echo $_SESSION['cv_data_array']['f_name']; ?> <strong ><?php echo $_SESSION['cv_data_array']['l_name']; ?></strong> </h3>
									<h5 class="name-contact-title"><?php echo $_SESSION['cv_data_array']['title']; ?></h5>

									<ul class="list-unstyled">
										<li class="phone"><i class="fas fa-phone"></i><a class="pl-2" href="tel:<?php echo $_SESSION['cv_data_array']['phone']; ?>"> <?php echo $_SESSION['cv_data_array']['phone']; ?> </a></li>
					                    <li class="email"><i class="fas fa-envelope"></i><a class="pl-2" href="mailto: <?php echo $_SESSION['cv_data_array']['email']; ?>"> <?php echo $_SESSION['cv_data_array']['email']; ?> </a></li>
					                    <li class="location"><i class="fas fa-map-marker"></i><a class="pl-2" href=""> <?php echo $_SESSION['cv_data_array']['address']; ?> </a></li>
					                    <li class="website"><i class="fas fa-globe"></i><a class="pl-2" href="#" target="_blank"> <?php echo $_SESSION['cv_data_array']['website']; ?> </a></li>
					                    <li class="linkedin"><i class="fab fa-linkedin-in"></i><a class="pl-2" href="#" target="_blank"> <?php echo $_SESSION['cv_data_array']['linkedin']; ?> </a></li>
					                    <li class="github"><i class="fab fa-github"></i><a class="pl-2" href="#" target="_blank"> <?php echo $_SESSION['cv_data_array']['git']; ?> </a></li>
				                	</ul>

								</div>

								<div class="image-div">
									<img class="float-right sect-pdng" src="<?php echo $_SESSION['cv_data_array']['image_file'];?> " alt="Profile Image" width="200">
								</div>
							</div>
						</div>

						<div class="section objective-section">
							<div class="section-heading">
								<h4> <strong> Objective </strong> </h4>
							</div>
							<hr>
							<div class="summary">
								<p> <?php echo $_SESSION['cv_data_array']['summary']; ?> </p>
							</div>
						</div>
						

						<div class="section work-experience-section">
							<h4 class=""> <strong> Work & Experience </strong> </h4>
							<hr>

							<div class="experience-div">
								<div class="upper-row flex-container">
									<div class="div-left">
										<h5> <?php echo "• ".$_SESSION['cv_data_array']['j_title']['0']; ?> </h5>
									</div>
									<div class="div-right">
										<h6 class="text-muted float-right"> <?php echo $_SESSION['cv_data_array']['we_start_year'][0]." - ".$_SESSION['cv_data_array']['we_end_year'][0]; ?> </h6>
									</div>
								</div>
								<div class="lower-row">
									<h6 class="text-muted"> <?php echo $_SESSION['cv_data_array']['employer'][0].", ".$_SESSION['cv_data_array']['city'][0]; ?> </h6>
								</div>
								<div class="details">
									<p> <?php echo $_SESSION['cv_data_array']['responsibilities'][0]; ?> </p>
								</div>
							</div>

							<div class="experience-div">
								<div class="upper-row flex-container">
									<div class="div-left">
										<h5> <?php echo "• ".$_SESSION['cv_data_array']['j_title']['0']; ?> </h5>
									</div>
									<div class="div-right">
										<h6 class="text-muted float-right"> <?php echo $_SESSION['cv_data_array']['we_start_year'][0]." - ".$_SESSION['cv_data_array']['we_end_year'][0]; ?> </h6>
									</div>
								</div>
								<div class="lower-row">
									<h6 class="text-muted"> <?php echo $_SESSION['cv_data_array']['employer'][0].", ".$_SESSION['cv_data_array']['city'][0]; ?> </h6>
								</div>
								<div class="details">
									<p> <?php echo $_SESSION['cv_data_array']['responsibilities'][0]; ?> </p>
								</div>
							</div>
						</div>


						<div class="section projects-section">
							<h4 class="sect-pdng"> <strong> Projects </strong> </h4>
							<hr>

							<div class="flex-column-projects">
								<div class="flex-container-row">
									<div class="project-title-div">
										<h6 class="project-title"> <?php echo $_SESSION['cv_data_array']['proj_name'][0]; ?> </h6>
									</div>
									<div class="project-description-div">
										<p class="project-description"> <?php echo $_SESSION['cv_data_array']['proj_desc'][0]; ?> </p>
									</div>
								</div>
								<div class="flex-container-row">
									<div class="project-title-div">
										<h6 class="project-title"> <?php echo $_SESSION['cv_data_array']['proj_name'][1]; ?> </h6>
									</div>
									<div class="project-description-div">
										<p class="project-description"> <?php echo $_SESSION['cv_data_array']['proj_desc'][1]; ?> </p>
									</div>
								</div>
								<div class="flex-container-row">
									<div class="project-title-div">
										<h6 class="project-title"> <?php echo $_SESSION['cv_data_array']['proj_name'][2]; ?> </h6>
									</div>
									<div class="project-description-div">
										<p class="project-description"> <?php echo $_SESSION['cv_data_array']['proj_desc'][2]; ?> </p>
									</div>
								</div>
							</div>
						</div>

						<div class="section skills-section">
							<h4 class="skills-heading"> <strong> Skills </strong> </h4>
							<hr>

							<div class="skills-div">
								<ul class="skills-ul">
									<li class="skills-li"> <?php echo $_SESSION['cv_data_array']['skill'][0]." (".$_SESSION['cv_data_array']['skill_level'][0].")"; ?> </li>
									<li class="skills-li"> <?php echo $_SESSION['cv_data_array']['skill'][1]." (".$_SESSION['cv_data_array']['skill_level'][1].")"; ?> </li>
									<li class="skills-li"> <?php echo $_SESSION['cv_data_array']['skill'][2]." (".$_SESSION['cv_data_array']['skill_level'][2].")"; ?> </li>
									<li class="skills-li"> <?php echo $_SESSION['cv_data_array']['skill'][3]." (".$_SESSION['cv_data_array']['skill_level'][3].")"; ?> </li>
									<li class="skills-li"> <?php echo $_SESSION['cv_data_array']['skill'][4]." (".$_SESSION['cv_data_array']['skill_level'][4].")"; ?> </li>
								</ul>
							</div>
						</div>


						<div class="section education-section">
							<h4 class="education-heading"> <strong> Education </strong> </h4>
							<hr>

							
							<div class="flex-column-education">

								<div class="flex-container-row-striped">
									<div class="education-title-div">
										<h6 class="education-title"> <?php echo $_SESSION['cv_data_array']['degree'][0]; ?> </h6>
									</div>
									<div class="education-school-location-div">
										<p class="education-school-location"> <?php echo $_SESSION['cv_data_array']['school_name'][0].", ".$_SESSION['cv_data_array']['school_location'][0]; ?> </p>
									</div>
									<div class="education-year-div">
										<p class="education-year"> <?php echo $_SESSION['cv_data_array']['passing_year'][0]; ?> </p>
									</div>
									<div class="education-gpa-div">
										<p class="education-gpa"> <?php echo $_SESSION['cv_data_array']['gpa'][0]; ?> </p>
									</div>
								</div>

								<div class="flex-container-row">
									<div class="education-title-div">
										<h6 class="education-title"> <?php echo $_SESSION['cv_data_array']['degree'][1]; ?> </h6>
									</div>
									<div class="education-school-location-div">
										<p class="education-school-location"> <?php echo $_SESSION['cv_data_array']['school_name'][1].", ".$_SESSION['cv_data_array']['school_location'][1]; ?> </p>
									</div>
									<div class="education-year-div">
										<p class="education-year"> <?php echo $_SESSION['cv_data_array']['passing_year'][1]; ?> </p>
									</div>
									<div class="education-gpa-div">
										<p class="education-gpa"> <?php echo $_SESSION['cv_data_array']['gpa'][1]; ?> </p>
									</div>
								</div>

								<div class="flex-container-row-striped">
									<div class="education-title-div">
										<h6 class="education-title"> <?php echo $_SESSION['cv_data_array']['degree'][2]; ?> </h6>
									</div>
									<div class="education-school-location-div">
										<p class="education-school-location"> <?php echo $_SESSION['cv_data_array']['school_name'][2].", ".$_SESSION['cv_data_array']['school_location'][2]; ?> </p>
									</div>
									<div class="education-year-div">
										<p class="education-year"> <?php echo $_SESSION['cv_data_array']['passing_year'][2]; ?> </p>
									</div>
									<div class="education-gpa-div">
										<p class="education-gpa"> <?php echo $_SESSION['cv_data_array']['gpa'][2]; ?> </p>
									</div>
								</div>
							</div>
						</div>

						<div class="section languages-section">

								<h4 class="languages-heading"> <strong>Languages</strong> </h4>
								<hr>

								<div class="languages-div">
									<ul class="languages-ul">
										<li class="languages-li"><?php echo $_SESSION['cv_data_array']['language'][0]." (".$_SESSION['cv_data_array']['l_skill_level'][0].")"; ?></li>
										<li class="languages-li"><?php echo $_SESSION['cv_data_array']['language'][1]." (".$_SESSION['cv_data_array']['l_skill_level'][1].")"; ?></li>
										<li class="languages-li"><?php echo $_SESSION['cv_data_array']['language'][2]." (".$_SESSION['cv_data_array']['l_skill_level'][2].")"; ?></li>
									</ul>
								</div>
						</div>


						<div class="section interests-section">
							<h4 class="interests-heading"> <strong> Interests </strong> </h4>
							<hr>
							
							<div class="interests-div">
								<ul class="interests-ul">
									<li class="interests-li"> <?php echo $_SESSION['cv_data_array']['interest'][0]; ?> </li>
									<li class="interests-li"> <?php echo $_SESSION['cv_data_array']['interest'][1]; ?> </li>
									<li class="interests-li"> <?php echo $_SESSION['cv_data_array']['interest'][2]; ?> </li>
								</ul>
							</div>
						</div>

						<div class="section references-section pb-5">
							<h4 class="section-heading"> References </h4>
							<hr>
							
							<div class="flex-container-row">
								<div class="references-div">

									<!-- <p class="note"> <?php //echo $_SESSION['cv_data_array']['reference'][0]; ?> </p> -->
									<p class="reference-note"> <?php echo $_SESSION['cv_data_array']['reference_note']; ?> </p>

									<ul class="ref-ul">
										<li class="ref-name"> <?php echo $_SESSION['cv_data_array']['ref_name']; ?> </li>
										<li class="ref-designation"> <?php echo $_SESSION['cv_data_array']['ref_designation']; ?> </li>
										<li class="ref-organization"> <?php echo $_SESSION['cv_data_array']['ref_organization']; ?> </li>
										<li class="ref-contact"> <?php echo $_SESSION['cv_data_array']['ref_contact']; ?> </li>
									</ul>

								</div>
								<!-- <div class="references-div">

									<p class="note"> None </p>
									<ul>
										<li class="name"></li>
										<li class="designation"></li>
										<li class="contact"></li>
									</ul>

								</div> -->
							</div>
						</div>

					</div><!-- ./ main-wrapper end -->

               </div><!-- ./ end of article -->
              </div><!-- ./ end of wrapper -->
              <!-- ---- ---- ---- ---- ---- ./ wrapper ---- ---- ---- ---- ---- -->

            
          </div><!-- ./ col end -->
        </div><!-- ./ row end -->
      </div><!-- ./ container end-->

                  
	</div><!-- printable-div end -->
	


	<!-- footer (if any) -->
	<!-- footer (if any) -->


	<!-- other scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>

  </body>

</html>