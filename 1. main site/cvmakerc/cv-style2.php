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

    <title>CV Maker compact - cv style 02 </title>

    <meta name="description" content="CV Maker App">
    <meta name="author" content="CV Maker">

    <!-- font dependencies -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- css dependencies -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css"> -->

    <!-- fa -->
    <script src="js/fa/all.min.js"></script>
    <link href="css/fa/all.min.css" rel="stylesheet">

    <!-- custom css -->
    <link href="css/output-style2.css" rel="stylesheet">   

  </head>
  <body>


	<!-- main body section -->
		
		<!-- header & nav -->

		<!-- ./ header & nav -->



    <!-- // ---------- --- ---------- // -->

    <?php

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
                <div class="article d-flex flex-row">

                  <!-- main-wrapper start -->
                  <div class="main-wrapper">

                      <!-- summary-section start -->
                      <div class="summary-section section">
                        <h5 class="section-title text-uppercase"> <span class="icon-holder fa fa-user"></span> Career Profile</h5>
                        <div class="summary">
                          <p> <?php echo $_SESSION['cv_data_array']['summary']; ?> </p>
                        </div>
                      </div><!-- ./ summary-section end -->
                        
                      <!-- experiences-section start -->
                      <div class="experiences-section">
                        <h5 class="section-title"> <span class="icon-holder fa fa-briefcase"></span> Experiences</h5>

                        <div class="item">
                          <div class="meta">
                            <div class="upper-row flex-container">
                              <h6 class="job-title"> <?php echo $_SESSION['cv_data_array']['j_title'][0]; ?> </h6>
                              <div class="job-time"> <?php echo $_SESSION['cv_data_array']['we_start_year'][0]." - ".$_SESSION['cv_data_array']['we_end_year'][0]; ?> </div>
                            </div>
                            <div class="company-location"> <?php echo $_SESSION['cv_data_array']['employer'][0].", ".$_SESSION['cv_data_array']['city'][0]; ?> </div>
                          </div>
                          <div class="details">
                            <p> <?php echo $_SESSION['cv_data_array']['responsibilities'][0]; ?> </p>
                          </div>
                        </div>
                        
                        <div class="item">
                          <div class="meta">
                            <div class="upper-row flex-container">
                              <h6 class="job-title"> <?php echo $_SESSION['cv_data_array']['j_title'][1]; ?> </h6>
                              <div class="job-time"> <?php echo $_SESSION['cv_data_array']['we_start_year'][1]." - ".$_SESSION['cv_data_array']['we_end_year'][1]; ?> </div>
                            </div>
                            <div class="company-location"> <?php echo $_SESSION['cv_data_array']['employer'][1].", ".$_SESSION['cv_data_array']['city'][1]; ?> </div>
                          </div>
                          <div class="details">
                            <p> <?php echo $_SESSION['cv_data_array']['responsibilities'][1]; ?> </p>
                          </div>
                        </div>
                      </div><!-- ./ experiences-section end -->
                      
                      <!-- projects-section start -->
                      <div class="projects-section section">
                        <h5 class="section-title"> <span class="icon-holder fa fa-archive"></span> Projects</h5>

                        <div class="item">
                          <span class="project-title"> <a href="#"> <?php echo $_SESSION['cv_data_array']['proj_name'][0]; ?> </a> </span> - 
                          <span class="project-tagline"> <?php echo $_SESSION['cv_data_array']['proj_desc'][0]; ?>  </span>
                        </div>

                        <div class="item">
                          <span class="project-title"> <a href="#"> <?php echo $_SESSION['cv_data_array']['proj_name'][1]; ?> </a> </span> - 
                          <span class="project-tagline"> <?php echo $_SESSION['cv_data_array']['proj_desc'][1]; ?>  </span>
                        </div>

                        <div class="item">
                          <span class="project-title"> <a href="#"> <?php echo $_SESSION['cv_data_array']['proj_name'][2]; ?> </a> </span> - 
                          <span class="project-tagline"> <?php echo $_SESSION['cv_data_array']['proj_desc'][2]; ?>  </span>
                        </div>
                        
                      </div><!-- ./ projects-section end -->
                      
                      <!-- skills-section start -->
                      <div class="skills-section section">
                        <h5 class="section-title"> <span class="icon-holder fa fa-rocket"></span> Skills & Proficiency</h5>
                        
                        <div class="skillset">
                          <div class="item flex-container">
                            <div class="level-title"> <?php echo $_SESSION['cv_data_array']['skill'][0]; ?> </div>
                            <div class="skill-level"> <?php echo $_SESSION['cv_data_array']['skill_level'][0]; ?> </div>
                          </div>
                          <div class="item flex-container">
                            <div class="level-title"> <?php echo $_SESSION['cv_data_array']['skill'][1]; ?> </div>
                            <div class="skill-level"> <?php echo $_SESSION['cv_data_array']['skill_level'][1]; ?> </div>
                          </div>
                          <div class="item flex-container">
                            <div class="level-title"> <?php echo $_SESSION['cv_data_array']['skill'][2]; ?> </div>
                            <div class="skill-level"> <?php echo $_SESSION['cv_data_array']['skill_level'][2]; ?> </div>
                          </div>
                          <div class="item flex-container">
                            <div class="level-title"> <?php echo $_SESSION['cv_data_array']['skill'][3]; ?> </div>
                            <div class="skill-level"> <?php echo $_SESSION['cv_data_array']['skill_level'][3]; ?> </div>
                          </div>
                          <div class="item flex-container">
                            <div class="level-title"> <?php echo $_SESSION['cv_data_array']['skill'][4]; ?> </div>
                            <div class="skill-level"> <?php echo $_SESSION['cv_data_array']['skill_level'][4]; ?> </div>
                          </div>

                        </div>
                      </div><!-- ./ skills-section end -->
                      

                  </div>
                  <!-- ./ main-wrapper end -->


                  <!-- sidebar-wrapper start -->
                  <div class="sidebar-wrapper">

                      <!-- profile-container start -->
                      <div class="profile-container">
                        <img src="<?php echo $_SESSION['cv_data_array']['image_file'];?>" alt="Profile image" class="profile" width="150px">
                        <h1 class="name"> <?php echo $_SESSION['cv_data_array']['f_name']." ".$_SESSION['cv_data_array']['l_name']; ?> </h1>
                        <h3 class="tagline"> <?php echo $_SESSION['cv_data_array']['title']; ?> </h3>
                        
                      </div><!-- ./ profile-container end -->
                      
            
                      <!-- contact-container start -->
                      <div class="contact-container container-block">
                        <ul class="list-unstyled contact-list">
                          <li class="email"> <span class="fa fa-envelope"></span> <a class="pl-2" href="<?php echo $_SESSION['cv_data_array']['email']; ?>"> <?php echo $_SESSION['cv_data_array']['email']; ?> </a> </li>
                          <li class="phone"> <span class="fa fa-phone"></span> <a class="pl-2" href="tel:<?php echo $_SESSION['cv_data_array']['phone']; ?>"> <?php echo $_SESSION['cv_data_array']['phone']; ?> </a> </li>
                          <li class="website"> <span class="fa fa-globe"></span> <a class="pl-2" href="<?php echo $_SESSION['cv_data_array']['website']; ?>" target="_blank"> <?php echo $_SESSION['cv_data_array']['website']; ?> </a> </li>
                          <li class="linkedin"> <span class="fab fa-linkedin"></span> <a class="pl-2" href="<?php echo $_SESSION['cv_data_array']['linkedin']; ?>" target="_blank"> <?php echo $_SESSION['cv_data_array']['linkedin']; ?> </a> </li>
                          <li class="github"> <span class="fab fa-github"></span> <a class="pl-2" href="<?php echo $_SESSION['cv_data_array']['git']; ?>" target="_blank"> <?php echo $_SESSION['cv_data_array']['git']; ?> </a> </li>
                          <li class="twitter"> <span class="fab fa-twitter"></span> <a class="pl-2" href="<?php echo "www.twitter.com/".$_SESSION['cv_data_array']['twitter']; ?>" target="_blank"> <?php echo $_SESSION['cv_data_array']['twitter']; ?> </a> </li>
                        </ul>
                      </div><!-- ./ contact-container end -->
                      

                      <!-- education-container start -->
                      <div class="education-container container-block">
                        <h2 class="container-block-title"> <strong> Education </strong> </h2>

                        <div class="item">
                          <h4 class="degree"> <strong> <?php echo $_SESSION['cv_data_array']['degree'][0]; ?> </strong> </h4>
                          <h5 class="meta"> <?php echo $_SESSION['cv_data_array']['school_name'][0].", ".$_SESSION['cv_data_array']['school_location'][0]; ?> </h5>
                          <div class="time"> <?php echo $_SESSION['cv_data_array']['passing_year'][0]; ?> </div>
                        </div>

                        <div class="item">
                          <h4 class="degree"> <strong> <?php echo $_SESSION['cv_data_array']['degree'][1]; ?> </strong> </h4>
                          <h5 class="meta"> <?php echo $_SESSION['cv_data_array']['school_name'][1].", ".$_SESSION['cv_data_array']['school_location'][0]; ?> </h5>
                          <div class="time"> <?php echo $_SESSION['cv_data_array']['passing_year'][1]; ?> </div>
                        </div>
                      </div><!-- ./ education-container end -->
                      

                      <!-- languages-container start -->
                      <div class="languages-container container-block">
                        <h2 class="container-block-title"> <strong>Languages</strong> </h2>
                        
                        <ul class="list-unstyled languages-list">
                          <li> <strong><?php echo $_SESSION['cv_data_array']['language'][0]; ?></strong> <span class="language-level"> <?php echo "(".$_SESSION['cv_data_array']['language'][0].")"; ?> </span> </li>
                          <li> <strong><?php echo $_SESSION['cv_data_array']['language'][1]; ?></strong> <span class="language-level"> <?php echo "(".$_SESSION['cv_data_array']['language'][1].")"; ?> </span> </li>
                          <li> <strong><?php echo $_SESSION['cv_data_array']['language'][2]; ?></strong> <span class="language-level"> <?php echo "(".$_SESSION['cv_data_array']['language'][2].")"; ?> </span> </li>
                        </ul>
                      </div><!-- ./ languages-container end -->
                      

                      <!-- interests-container start -->
                      <div class="interests-container container-block">
                        <h2 class="container-block-title"> <strong>Interests</strong> </h2>
                        
                        <ul class="list-unstyled interests-list">
                          <li> <strong><?php echo $_SESSION['cv_data_array']['interest'][0]; ?></strong> </li>
                          <li> <strong><?php echo $_SESSION['cv_data_array']['interest'][1]; ?></strong> </li>
                          <li> <strong><?php echo $_SESSION['cv_data_array']['interest'][2]; ?></strong> </li>
                        </ul>
                      </div><!-- ./ interests-container end -->

                  </div>
                  <!-- ./ sidebar-wrapper end -->                  

                </div><!-- ./ end of article -->
              </div><!-- ./ end of wrapper -->
              <!-- ---- ---- ---- ---- ---- ./ wrapper ---- ---- ---- ---- ---- -->

            
          </div><!-- ./ col end -->
        </div><!-- ./ row end -->
      </div><!-- ./ container end-->


		<!-- ./ main content section -->

	  <!-- ./ main body section -->


    </div>
    <!-- ---- ---- ---- ---- ./ printable-section ---- ---- ---- ---- -->


	<!-- footer -->
	<!-- ./ footer -->


	  <!-- scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/scripts.js"></script>
    <!-- <script src="js/smooth-scroll.js"></script> -->

  </body>
</html>