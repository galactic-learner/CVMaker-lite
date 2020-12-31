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

    <title>CV Maker compact - cv style 03 </title>

    <meta name="description" content="CV Maker App">
    <meta name="author" content="CV Maker">

    <!-- css dependencies -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css"> -->

    <!-- fa -->
    <script src="js/fa/all.min.js"></script>
    <link href="css/fa/all.min.css" rel="stylesheet">

    <!-- custom css -->
    <link href="css/output-style3.css" rel="stylesheet">    

    <!-- <script src="js/navbar-ontop.js"></script>
  	<script src="js/animate-in.js"></script> -->
    

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


  <!-- cv style page specific adjustments -->
    <?php  
      // presentation based adjustments --

        // Work-Exp new year vars preparation
        // year adjustments
        
        if ( $_SESSION['cv_data_array_rerender']['we_end_year'][0] == date('Y') ) {
          //
          $_SESSION['cv_data_array_rerender']['we_end_year'][0] = "Present";
          
        } elseif ($_SESSION['cv_data_array_rerender']['we_end_year'][1] == date('Y')) {
          //
          $_SESSION['cv_data_array_rerender']['we_end_year'][1] = "Present";
        }

      // ./presentation based adjustments --
    ?>
  <!-- cv style page specific adjustments -->


  <!-- back btn & print -->
  <div class="container d-flex flex-row pt-5" id="navigation-btns-div">
    <div class="pr-2">
      <a class="btn btn-primary btn-large" href="index.php"> Go to Form </a>
    </div>

    <div>
      <form> 
          <input class="btn btn-primary btn-large float-right" type="button" value="Print" 
                 onclick="window.print()" /> 
        </form> 
    </div>

  </div>
  <!-- ./back btn& print -->


    <!-- temporary -->
    <?php
      //
      // echo "<pre>";
      // print_r($_SESSION['cv_data_array_rerender']['f_name']);
      // echo "<pre>";
      // exit();
    ?>
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

              <!-- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- -->
              <!-- start of article -->
              <div class="article">

                  <!-- container start -->
                  <div class="container">

                      <!-- personal-info-div -->
                      <div class="col-md-12 personal-info-div d-flex flex-row">

                        <div class="col-md-9 name-title-div">
                          <h2 class="cv-name text-uppercase"> <strong><?php echo $_SESSION['cv_data_array_rerender']['f_name']." ".$_SESSION['cv_data_array_rerender']['l_name']; ?></strong> </h2>
                          <div class="cv-tagline">
                            <?php echo $_SESSION['cv_data_array_rerender']['title']; ?>
                          </div>
                        </div>

                        <div class="col-md-3 contact-details-div">
                            <ul>
                              <li class="mb-2"> <a class="cv-link" href=""> <i class="fas fa-phone-square fa-fw fa-lg mr-2 "></i> <?php echo $_SESSION['cv_data_array_rerender']['phone']; ?> </a> </li>
                              <li class="mb-2"> <a class="cv-link" href=""> <i class="fas fa-envelope-square fa-fw fa-lg mr-2"></i> <?php echo $_SESSION['cv_data_array_rerender']['email']; ?> </a> </li>
                              <li class="mb-2"> <a class="cv-link" href=""> <i class="fas fa-globe fa-fw fa-lg mr-2"></i> <?php echo $_SESSION['cv_data_array_rerender']['website']; ?> </a> </li>
                              <li class="mb-2"> <a class="cv-link" href=""> <i class="fas fa-map-marker-alt fa-fw fa-lg mr-2"></i> <?php echo $_SESSION['cv_data_array_rerender']['address']; ?> </a> </li>
                            </ul>
                        </div>
                      </div><!-- ./ personal-info-div -->
                      
                      <hr>

                      <!-- image-summary-div -->
                      <div class="image-summary-div d-flex flex-row align-items-center">
                        <div class="col-md-3 image-div">
                          <!-- <img class="cv-image" src="img/image.jpg" alt="CV image" width="120px"> -->
                          <img class="cv-image" src="<?php echo $_SESSION['cv_data_array_rerender']['image_file'];?>" alt="CV image" width="120px">
                        </div>
                        <div class="col-md-9 summary-div">
                          <p> <?php echo $_SESSION['cv_data_array_rerender']['summary']; ?> </p>
                        </div>
                      </div><!-- ./ image-summary-div -->

                      <hr>

                      <!-- cv-body-div -->

                      <!-- ---- ---- ---- ---- ---- ---- ---- ---- -->
                      <div class="cv-body d-flex flex-row mt-5">

                        <!-- ---- ---- ---- ---- ---- ---- -->
                        <!-- cv-main-div start -->
                        <div class="col-md-8 cv-main-div">

                          <!-- work-experience-div start -->
                          <div class="work-experience-section-div">
                            <h3 class="text-uppercase cv-section-heading"> Work Experiences </h3>
                            
                            <!-- section-item-01 -->
                            <div class="section-item mt-4">
                              <div class="flex-container">
                                <h4 class="item-title"> <?php echo $_SESSION['cv_data_array_rerender']['j_title'][0]; ?> </h4>
                                <div class="item-meta text-right text-muted">
                                  <p> <?php echo $_SESSION['cv_data_array_rerender']['employer'][0]." | ".$_SESSION['cv_data_array_rerender']['we_start_year'][0]." - ".$_SESSION['cv_data_array_rerender']['we_end_year'][0]; ?> </p>
                                </div>
                              </div>
                              <div class="item-content">
                                <p> <?php echo $_SESSION['cv_data_array_rerender']['responsibilities'][0]; ?> </p>
                              </div>
                            </div>
                            <!-- ./ section-item-01 -->

                            <!-- section-item-02 -->
                            <div class="section-item">
                              <div class="flex-container">
                                <h4 class="item-title"> <?php echo $_SESSION['cv_data_array_rerender']['j_title'][1]; ?> </h4>
                                <div class="item-meta text-right text-muted">
                                  <p> <?php echo $_SESSION['cv_data_array_rerender']['employer'][1]." | ".$_SESSION['cv_data_array_rerender']['we_start_year'][1]." - ".$_SESSION['cv_data_array_rerender']['we_end_year'][1]; ?> </p>
                                </div>
                              </div>
                              <div class="item-content">
                                <p> <?php echo $_SESSION['cv_data_array_rerender']['responsibilities'][1]; ?> </p>
                              </div>
                            </div>
                            <!-- ./ section-item-02 -->

                          </div><!-- ./ work-experience-div end -->

                          <!-- projects-div start -->
                          <div class="projects-section-div mt-4">
                            <h3 class="text-uppercase cv-section-heading"> Projects </h3>
                            
                            <!-- section-item-01 -->
                            <div class="section-item mt-4">
                              <div class="flex-container">
                                <h4 class="item-title"> <?php echo $_SESSION['cv_data_array_rerender']['proj_name'][0]; ?> </h4>
                                <div class="item-meta text-right text-muted">
                                  <p> <?php echo $_SESSION['cv_data_array_rerender']['proj_type'][0]; ?> </p>
                                </div>
                              </div>
                              <div class="item-content">
                                <p> <?php echo $_SESSION['cv_data_array_rerender']['proj_desc'][0]; ?> </p>
                              </div>
                            </div>
                            <!-- ./ section-item-01 -->

                            <!-- section-item-02 -->
                            <div class="section-item mt-4">
                              <div class="flex-container">
                                <h4 class="item-title"> <?php echo $_SESSION['cv_data_array_rerender']['proj_name'][1]; ?> </h4>
                                <div class="item-meta text-right text-muted">
                                  <p> <?php echo $_SESSION['cv_data_array_rerender']['proj_type'][1]; ?> </p>
                                </div>
                              </div>
                              <div class="item-content">
                                <p> <?php echo $_SESSION['cv_data_array_rerender']['proj_desc'][1]; ?> </p>
                              </div>
                            </div>
                            <!-- ./ section-item-02 -->

                            <!-- section-item-03 -->
                            <div class="section-item mt-4">
                              <div class="flex-container">
                                <h4 class="item-title"> <?php echo $_SESSION['cv_data_array_rerender']['proj_name'][2]; ?> </h4>
                                <div class="item-meta text-right text-muted">
                                  <p> <?php echo $_SESSION['cv_data_array_rerender']['proj_type'][2]; ?> </p>
                                </div>
                              </div>
                              <div class="item-content">
                                <p> <?php echo $_SESSION['cv_data_array_rerender']['proj_desc'][2]; ?> </p>
                              </div>
                            </div>
                            <!-- ./ section-item-03 -->

                          </div><!-- projects-div end -->


                        </div><!-- ./ cv-main-div end -->
                        <!-- ---- ---- ---- ---- ---- ---- -->

                        <!-- ---- ---- ---- ---- ---- ---- -->
                        <!-- cv-aside-div start -->
                        <div class="col-md-4 cv-aside-div float-right">

                          <!-- skill-div start -->
                          <div class="skill-div">
                            <h3 class="text-uppercase cv-section-heading"> Skills </h3>
                            
                            <!-- section-item-01-02 -->
                            <!-- technical-skill-div start -->
                            <div class="section-item mt-4">
                              <h4 class="item-title">Technical</h4>
                                <ul class="list-unstyled item-content">
                                  <li><?php echo $_SESSION['cv_data_array_rerender']['skill'][0]; ?></li>
                                  <li><?php echo $_SESSION['cv_data_array_rerender']['skill'][1]; ?></li>
                                  <li><?php echo $_SESSION['cv_data_array_rerender']['skill'][2]; ?></li>
                                  <li><?php echo $_SESSION['cv_data_array_rerender']['skill'][3]; ?></li>
                                  <li><?php echo $_SESSION['cv_data_array_rerender']['skill'][4]; ?></li>
                                </ul>
                            </div><!-- ./ technical-skill-div end -->

                            <!-- professional-skill-div start -->
                            <!-- <div class="section-item mt-4">
                              <h4 class="item-title">Professional</h4>
                                <ul class="list-unstyled item-content">
                                  <li>Effective communication</li>
                                  <li>Team player</li>
                                  <li>Strong problem solver</li>
                                  <li>Good time management</li>
                                </ul>
                            </div> -->
                            <!-- ./ professional-skill-div end -->
                            <!-- ./ section-item-01-02 -->

                            <!-- <div class="technical-skill-div">
                            </div>
                            <div class="professional-skill-div">
                            </div> -->
                            
                          </div><!-- ./ skill-div end -->


                          <!-- education-div start -->
                          <div class="education-div mt-4">
                            <h3 class="text-uppercase cv-section-heading"> Education </h3>
                            
                              <!-- section-item-01-02-->
                              <ul class="list-unstyled cv-education-list mt-4">
                                <li class="">
                                  <div class="cv-degree font-weight-bold"> <?php echo $_SESSION['cv_data_array_rerender']['degree'][0]; ?> </div>
                                  <div class="cv-degree-org text-muted"> <?php echo $_SESSION['cv_data_array_rerender']['school_name'][0].", ".$_SESSION['cv_data_array_rerender']['school_location'][0]; ?> </div>
                                  <div class="cv-degree-time text-muted"> <?php echo $_SESSION['cv_data_array_rerender']['passing_year'][0]; ?> </div>
                                </li>
                                <li class="pt-3">
                                  <div class="cv-degree font-weight-bold"> <?php echo $_SESSION['cv_data_array_rerender']['degree'][1]; ?> </div>
                                  <div class="cv-degree-org text-muted"> <?php echo $_SESSION['cv_data_array_rerender']['school_name'][1].", ".$_SESSION['cv_data_array_rerender']['school_location'][0]; ?> </div>
                                  <div class="cv-degree-time text-muted"> <?php echo $_SESSION['cv_data_array_rerender']['passing_year'][1]; ?> </div>
                                </li>
                              </ul>
                              <!-- ./ section-item-01-02 -->
                          </div><!-- ./ education-div end -->


                          <!-- awards-div start -->
                          <div class="d-none awards-div">
                            
                          </div><!-- ./ awards-div end -->


                          <!-- languages-div start -->
                          <div class="languages-div mt-4">
                            <h3 class="text-uppercase cv-section-heading"> Languages </h3>
                              <ul class="list-unstyled cv-language-list mt-3">
                                <li class="text-muted mb-2"> <?php echo $_SESSION['cv_data_array_rerender']['language'][0]." "."(".$_SESSION['cv_data_array_rerender']['l_skill_level'][0].")"; ?> </li>
                                <li class="text-muted"> <?php echo $_SESSION['cv_data_array_rerender']['language'][1]." "."(".$_SESSION['cv_data_array_rerender']['l_skill_level'][1].")"; ?> </li>
                              </ul>
                          </div><!-- ./ languages-div end -->

                          <!-- interests-div start -->
                          <div class="interests-div mt-4">
                            <h3 class="text-uppercase cv-section-heading"> Interests </h3>
                              <ul class="list-unstyled cv-interest-list mt-3">
                                <li class="text-muted mb-2"><?php echo $_SESSION['cv_data_array_rerender']['interest'][0]; ?></li>
                                <li class="text-muted mb-2"><?php echo $_SESSION['cv_data_array_rerender']['interest'][1]; ?></li>
                                <li class="text-muted mb-2"><?php echo $_SESSION['cv_data_array_rerender']['interest'][2]; ?></li>
                                <!-- <li class="text-muted mb-2">Climbing</li> -->
                              </ul>
                          </div><!-- ./ interests-div end -->

                        </div><!-- ./ cv-aside-div end -->
                        <!-- ---- ---- ---- ---- ---- ---- -->

                      </div><!-- ./ cv-body-div -->
                      <!-- ---- ---- ---- ---- ---- ---- ---- ---- -->
                      
                      <hr>

                      <!-- ---- ---- ---- ---- (social-icons) ---- ---- ---- ---- -->
                        <div class="cv-footer text-center">
                          <ul class="cv-social-links text-muted">
                            <li class="list-inline-item mb-lg-0 mr-3"> <a class="cv-link" href=""> <i class="fab fa-github-square mr-2"></i> <?php echo $_SESSION['cv_data_array_rerender']['linkedin']; ?> </a> </li>
                            <li class="list-inline-item mb-lg-0 mr-3"> <a class="cv-link" href=""> <i class="fab fa-linkedin mr-2"></i> <?php echo $_SESSION['cv_data_array_rerender']['git']; ?> </a> </li>
                            <li class="list-inline-item mb-lg-0 mr-3"> <a class="cv-link" href=""> <i class="fab fa-twitter-square mr-2"></i> <?php echo $_SESSION['cv_data_array_rerender']['twitter']; ?> </a> </li>
                          </ul>
                        </div>
                      <!-- ---- ---- ---- ---- (./ social-icons) ---- ---- ---- ---- -->

                  </div><!-- ./ container end -->

              </div> <!-- ./ end of article -->
              <!-- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- -->

            
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