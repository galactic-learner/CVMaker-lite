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
								        <a class="btn btn-primary navbar-btn px-5" href="search-cv.php"> Search CV </a>
								      </li>

								    </ul>
						</div>    
  				</nav>
  	<!-- --------------- ./header & nav --------------- -->


<!-- ---------------------------------- -->	

	<div class="herodiv">
		<h1> CV Maker </h1>
		<p class="text-muted">V 0.53.216 beta</p>
	</div>

<!-- ---------------------------------- -->
	

<!-- form maintenance variable setup -->
	<?php 
		//$required_status = 'required = "required"';
		$required_status = '';
		
	?>
<!-- ./ form maintenance variable setup -->


<!-- ---------------------------------- -->
	<!-- main content area -->
	<div class="container pt-5">
		<div class="row">
			<div class="col-md-12">

				<div class="col-md-4 float-left">
					<h6>Fill your details and choose a style for your CV.</h6>
				</div>

				<!-- start of col-md-8 -->
				<div class="col-md-8 float-right pb-4">
					<!-- Cards (01-09) -->
					
						<div class="accordion" id="accordion01">

							<form role="form" action="router.php" method="POST" enctype="multipart/form-data">

								  <!-- card 01 -->
								  <div class="card">

								    <div class="card-header card-primary text-white" id="heading01">
								      <h2 class="mb-0">
								        <a class="btn collapsed btn-block" data-toggle="collapse" data-target="#collapse01" aria-expanded="false" aria-controls="collapse01"> Personal details </a>
								      </h2>
								    </div>

								    <div id="collapse01" class="collapse" aria-labelledby="heading01" data-parent="#accordion01">

								      <div class="card-body container">
											<!-- fields -->

												<!-- form start -->

													<div class="col-md-6">
												       <input type="hidden" id="custId" name="creation_date" value="<?php echo date('Y-m-d'); ?>" >
												    </div>

												    <!-- this mode field never gets saved to db, only temporarily used for site navigation, by the router page -->
 												    <div class="col-md-6">
												       <input type="hidden" id="sitemode_inpt" name="normal_mode" value="on" >
												    </div>


													<div class="row fields-set-padding-top">
													    <div class="col-md-6">
													      <label class="text-muted labelleftpadding"> Choose an image for your CV * </label>
													      <input <?php echo $required_status; ?> type="file" class="form-control " accept="image/*" id="image_file" name="image_file">
													    </div>
													</div>


													<div class="row fields-set-padding-top">
													    <div class="col">
													      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="First name *" name="f_name">
													    </div>
													    <div class="col">
													      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="Last name *" name="l_name">
													    </div>
													</div>

													<div class="row fields-set-padding-top">
													    <div class="col">
													      <input <?php echo $required_status; ?> type="email" class="form-control" placeholder="Email *" name="email">
													    </div>
													    <div class="col">
													      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="Phone *" name="phone">
													    </div>
													</div>

													<div class="row fields-set-padding-top">
													    <div class="col">
													      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="Address *" name="address">
													    </div>
													    <div class="col">
													      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="Profession / Title *" name="title">
													    </div>
													</div>

													<div class="row fields-set-padding-top">
													    <div class="col">
													      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="Website" name="website">
													    </div>
													    <div class="col">
													      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="LinkedIn" name="linkedin">
													    </div>
													</div>

													<div class="row fields-set-padding-top pb-4">
													    <div class="col">
													      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="Git" name="git">
													    </div>
													    <div class="col">
													      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="Twitter (@username)" name="twitter">
													    </div>
													</div>
														
											<!-- ./fields -->
								      </div>

								    </div>

								  </div>
								  <!-- card 01 -->

								  <!-- card 02 -->
								  <div class="card">
								    <div class="card-header card-primary text-white" id="heading02">
								      <h2 class="mb-0">
								        <a class="btn collapsed btn-block" data-toggle="collapse" data-target="#collapse02" aria-expanded="false" aria-controls="collapse02"> Profile </a>
								      </h2>
								    </div>
								    <div id="collapse02" class="collapse" aria-labelledby="heading02" data-parent="#accordion01">
								      <div class="card-body container">
								    		<!-- fields -->
										    	<div class="row fields-set-padding-top pb-4" >
												    <div class="col">
														<textarea <?php echo $required_status; ?> class="form-control" cols="40" placeholder="Summary (500 characters)" name="summary" rows="4"></textarea>
												    </div>
												</div>
											<!-- ./fields -->
								      </div>
								    </div>
								  </div>
								  <!-- ./card 02 -->

								  <!-- card 03 -->
								  <div class="card">
								    <div class="card-header card-primary text-white" id="heading03">
								      <h2 class="mb-0">
								        <a class="btn collapsed btn-block" data-toggle="collapse" data-target="#collapse03" aria-expanded="false" aria-controls="collapse03"> Work experience </a>
								      </h2>
								    </div>
								    <div id="collapse03" class="collapse" aria-labelledby="heading03" data-parent="#accordion01">
								      <div class="card-body container">
								        	<!-- fields -->

										        <!-- Work Exp 01 -->
												<div>
													<h5 class="text-muted fields-set-padding-top labelleftpadding"> Job details 01 (will appear on top) </h5>
												</div>
											

												<div class="row fields-set-padding-top" >
												    <div class="col">
												      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="Job title" name="j_title[]">
												    </div>
												    <div class="col">
												      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="Employer" name="employer[]">
												    </div>
												</div>

												<div class="row fields-set-padding-top" >
												    <div class="col-md-6">
												      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="City" name="city[]">
												    </div>
												</div>

												<div class="row fields-set-padding-top" >
												        <div class="col-md-6">
												          <label class="calen-label" for="we_s_date" >Start Date</label>
												          <input <?php echo $required_status; ?> type="date" class="form-control" id="we_s_date" name="we_start_date[]">

												        </div>
														
														<div class="col-md-6">
												          <label class="calen-label" for="we_e_date" >End Date</label>
												          <input <?php echo $required_status; ?> type="date" class="form-control" id="we_e_date" name="we_end_date[]">

												        </div>
												</div>

												<div class="row fields-set-padding-top fields-set-padding-bottom pb-4" >
												    <div class="col">
												      <textarea <?php echo $required_status; ?> class="form-control" cols="40" placeholder="Responsibilities (500 characters)" name="responsibilities[]" rows="4"></textarea>
												    </div>
												</div>

												<!-- ./Work Exp 01 -->

												<!-- Work Exp 02 -->
												<div>
													<h5 class="text-muted fields-set-padding-top labelleftpadding"> Job details 02 </h5>
												</div>
											

												<div class="row fields-set-padding-top" >
												    <div class="col">
												      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="Job title" name="j_title[]">
												    </div>
												    <div class="col">
												      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="Employer" name="employer[]">
												    </div>
												</div>

												<div class="row fields-set-padding-top" >
												    <div class="col-md-6">
												      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="City" name="city[]">
												    </div>
												</div>

												<div class="row fields-set-padding-top" >
												        <div class="col-md-6">
												          <label class="calen-label" for="we_s_date" >Start Date</label>
												          <input <?php echo $required_status; ?> type="date" class="form-control" id="we_s_date" name="we_start_date[]">

												        </div>
														
														<div class="col-md-6">
												          <label class="calen-label" for="we_e_date" >End Date</label>
												          <input <?php echo $required_status; ?> type="date" class="form-control" id="we_e_date" name="we_end_date[]">

												        </div>
												</div>

												<div class="row fields-set-padding-top fields-set-padding-bottom pb-4" >
												    <div class="col">
												      <textarea <?php echo $required_status; ?> class="form-control" cols="40" placeholder="Responsibilities (500 characters)" name="responsibilities[]" rows="4"></textarea>
												    </div>
												</div>

												<!-- ./Work Exp 02 -->

											<!-- ./fields -->
								      </div>
								    </div>
								  </div>
								  <!-- ./card 03 -->

								  <!-- card 04 -->
								  <div class="card">
								    <div class="card-header card-primary text-white" id="heading04">
								      <h2 class="mb-0">
								        <a class="btn collapsed btn-block" data-toggle="collapse" data-target="#collapse04" aria-expanded="false" aria-controls="collapse04"> Education and Qualifications </a>
								      </h2>
								    </div>

								    <div id="collapse04" class="collapse" aria-labelledby="heading04" data-parent="#accordion01">
								      <div class="card-body container">
								        	<!-- fields -->

								        		<!-- qualification 01 -->
								        		<div>
													<h5 class="text-muted fields-set-padding-top labelleftpadding"> Qualification 01 </h5>
												</div>

										        <div class="row fields-set-padding-top" >
												    <div class="col">
												      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="School Name" name="school_name[]">
												    </div>
												    <div class="col">
												      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="School location" name="school_location[]">
												    </div>
												</div>

												<div class="row fields-set-padding-top" >
												    <div class="col">
												      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="Degree" name="degree[]">
												    </div>
												    <div class="col">
												      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="Field of Study" name="field_of_study[]">
												    </div>
												</div>
												

												<div class="row fields-set-padding-top pb-4" >
												    <div class="col">
												      <input <?php echo $required_status; ?> type="date" class="form-control" placeholder="Passing Year" name="passing_year[]">
												    </div>
												    <div class="col">
												      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="GPA" name="gpa[]">
												    </div>
												</div>
												<!-- ./qualification 01 -->

												<!-- qualification 02 -->
								        		<div>
													<h5 class="text-muted fields-set-padding-top labelleftpadding"> Qualification 02 </h5>
												</div>

										        <div class="row fields-set-padding-top" >
												    <div class="col">
												      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="School Name" name="school_name[]">
												    </div>
												    <div class="col">
												      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="School location" name="school_location[]">
												    </div>
												</div>

												<div class="row fields-set-padding-top" >
												    <div class="col">
												      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="Degree" name="degree[]">
												    </div>
												    <div class="col">
												      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="Field of Study" name="field_of_study[]">
												    </div>
												</div>
												

												<div class="row fields-set-padding-top pb-4" >
												    <div class="col">
												      <input <?php echo $required_status; ?> type="date" class="form-control" placeholder="Passing Year" name="passing_year[]">
												    </div>
												    <div class="col">
												      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="GPA" name="gpa[]">
												    </div>
												</div>
												<!-- ./qualification 02 -->

												<!-- qualification 03 -->
								        		<div>
													<h5 class="text-muted fields-set-padding-top labelleftpadding"> Qualification 03 </h5>
												</div>

										        <div class="row fields-set-padding-top" >
												    <div class="col">
												      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="School Name" name="school_name[]">
												    </div>
												    <div class="col">
												      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="School location" name="school_location[]">
												    </div>
												</div>

												<div class="row fields-set-padding-top" >
												    <div class="col">
												      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="Degree" name="degree[]">
												    </div>
												    <div class="col">
												      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="Field of Study" name="field_of_study[]">
												    </div>
												</div>
												

												<div class="row fields-set-padding-top pb-4" >
												    <div class="col">
												      <input <?php echo $required_status; ?> type="date" class="form-control" placeholder="Passing Year" name="passing_year[]">
												    </div>
												    <div class="col">
												      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="GPA" name="gpa[]">
												    </div>
												</div>
												<!-- ./qualification 03 -->

											<!-- ./fields -->
								      </div>
								    </div>
								  </div>
								  <!-- ./card 04 -->

								  <!-- card 05 -->
								  <div class="card">
								    <div class="card-header card-primary text-white" id="heading05">
								      <h2 class="mb-0">
								        <a class="btn collapsed btn-block" data-toggle="collapse" data-target="#collapse05" aria-expanded="false" aria-controls="collapse05"> Projects </a>
								      </h2>
								    </div>
								    <div id="collapse05" class="collapse mb-3" aria-labelledby="heading05" data-parent="#accordion01">
								      <div class="card-body container">
								        	<!-- fields -->

								        	<!-- project 01 -->
								        	<div>
												<h5 class="text-muted fields-set-padding-top labelleftpadding"> Project 01 </h5>
											</div>

								        	<div class="row fields-set-padding-top" >
											    <div class="col">
											      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="Project Name" name="proj_name[]">
											    </div>
												
												<div class="col">
											      	<select <?php echo $required_status; ?> class="custom-select form-control" id="prj_typ" name="proj_type[]">
												      <option value="Open Source">Open Source</option>
												      <option value="Proprietary">Proprietary</option>
												      <option value="Personal">Personal</option>

												   	</select>
												</div>
											</div>

											<div class="row fields-set-padding-top" >
											    <div class="col">
											      <textarea <?php echo $required_status; ?> class="form-control" cols="40" rows="3" id="message" placeholder="Project Description (400 characters)" name="proj_desc[]"></textarea>
											    </div>
											</div>

											<!-- ./project 01 -->

											<!-- project 02 -->
								        	<div>
												<h5 class="text-muted fields-set-padding-top labelleftpadding"> Project 02 </h5>
											</div>

								        	<div class="row fields-set-padding-top" >
											    <div class="col">
											      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="Project Name" name="proj_name[]">
											    </div>
												
												<div class="col">
											      	<select <?php echo $required_status; ?> class="custom-select form-control" id="prj_typ" name="proj_type[]">
												      <option value="Open Source">Open Source</option>
												      <option value="Proprietary">Proprietary</option>
												      <option value="Personal">Personal</option>
												   	</select>
												</div>
											</div>

											<div class="row fields-set-padding-top" >
											    <div class="col">
											      <textarea <?php echo $required_status; ?> class="form-control" cols="40" rows="3" id="message" placeholder="Project Description (400 characters)" name="proj_desc[]"></textarea>
											    </div>
											</div>
											<!-- ./project 02 -->

											<!-- project 03 -->
								        	<div>
												<h5 class="text-muted fields-set-padding-top labelleftpadding"> Project 03 </h5>
											</div>

								        	<div class="row fields-set-padding-top" >
											    <div class="col">
											      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="Project Name" name="proj_name[]">
											    </div>
												
												<div class="col">
											      	<select <?php echo $required_status; ?> class="custom-select form-control" id="prj_typ" name="proj_type[]">
												      <option value="Open Source">Open Source</option>
												      <option value="Proprietary">Proprietary</option>
												      <option value="Personal">Personal</option>
												   	</select>
												</div>
											</div>

											<div class="row fields-set-padding-top" >
											    <div class="col">
											      <textarea <?php echo $required_status; ?> class="form-control" cols="40" rows="3" id="message" placeholder="Project Description (400 characters)" name="proj_desc[]"></textarea>
											    </div>
											</div>
											<!-- ./project 03 -->

											<!-- ./fields -->
								      </div>
								    </div>
								  </div>
								  <!-- ./card 05 -->

								  <!-- card 06 -->
								  <div class="card">
								    <div class="card-header card-primary text-white" id="heading06">
								      <h2 class="mb-0">
								        <a class="btn collapsed btn-block" data-toggle="collapse" data-target="#collapse06" aria-expanded="false" aria-controls="collapse06"> Skills </a>
								      </h2>
								    </div>
								    <div id="collapse06" class="collapse mb-3" aria-labelledby="heading06" data-parent="#accordion01">
								      <div class="card-body container">
								        	<!-- fields -->

								        		<!-- skill 01 -->
								        		<div>
													<h5 class="text-muted fields-set-padding-top labelleftpadding"> Skill 01 </h5>
												</div>

												<div class="row fields-set-padding-top" >
												    <div class="col">
												      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="Skill" name="skill[]">
												    </div>

												    <div class="col">
												      	<select <?php echo $required_status; ?> class="custom-select form-control" id="skill_level" name="skill_level[]">
													      <option value="Expert">Expert</option>
													      <option value="Excellent">Excellent</option>
													      <option value="Advanced">Advanced</option>
													      <option value="Intermediate">Intermediate</option>
													      <option value="Beginner">Beginner</option>
													   	</select>
												    </div>
												</div>
												<!-- ./skill 01 -->

												<!-- skill 02 -->
								        		<div>
													<h5 class="text-muted fields-set-padding-top labelleftpadding"> Skill 02 </h5>
												</div>

												<div class="row fields-set-padding-top" >
												    <div class="col">
												      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="Skill" name="skill[]">
												    </div>

												    <div class="col">
												      	<select <?php echo $required_status; ?> class="custom-select form-control" id="skill_level" name="skill_level[]">
													      <option value="Expert">Expert</option>
													      <option value="Excellent">Excellent</option>
													      <option value="Advanced">Advanced</option>
													      <option value="Intermediate">Intermediate</option>
													      <option value="Beginner">Beginner</option>
													   	</select>
												    </div>
												</div>
												<!-- ./skill 02 -->

												<!-- skill 03 -->
								        		<div>
													<h5 class="text-muted fields-set-padding-top labelleftpadding"> Skill 03 </h5>
												</div>

												<div class="row fields-set-padding-top" >
												    <div class="col">
												      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="Skill" name="skill[]">
												    </div>

												    <div class="col">
												      	<select <?php echo $required_status; ?> class="custom-select form-control" id="skill_level" name="skill_level[]">
													      <option value="Expert">Expert</option>
													      <option value="Excellent">Excellent</option>
													      <option value="Advanced">Advanced</option>
													      <option value="Intermediate">Intermediate</option>
													      <option value="Beginner">Beginner</option>
													   	</select>
												    </div>
												</div>
												<!-- ./skill 03 -->

												<!-- skill 04 -->
								        		<div>
													<h5 class="text-muted fields-set-padding-top labelleftpadding"> Skill 04 </h5>
												</div>

												<div class="row fields-set-padding-top" >
												    <div class="col">
												      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="Skill" name="skill[]">
												    </div>

												    <div class="col">
												      	<select <?php echo $required_status; ?> class="custom-select form-control" id="skill_level" name="skill_level[]">
													      <option value="Expert">Expert</option>
													      <option value="Excellent">Excellent</option>
													      <option value="Advanced">Advanced</option>
													      <option value="Intermediate">Intermediate</option>
													      <option value="Beginner">Beginner</option>
													   	</select>
												    </div>
												</div>
												<!-- ./skill 04 -->

												<!-- skill 05 -->
								        		<div>
													<h5 class="text-muted fields-set-padding-top labelleftpadding"> Skill 05 </h5>
												</div>

												<div class="row fields-set-padding-top" >
												    <div class="col">
												      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="Skill" name="skill[]">
												    </div>

												    <div class="col">
												      	<select <?php echo $required_status; ?> class="custom-select form-control" id="skill_level" name="skill_level[]">
													      <option value="Expert">Expert</option>
													      <option value="Excellent">Excellent</option>
													      <option value="Advanced">Advanced</option>
													      <option value="Intermediate">Intermediate</option>
													      <option value="Beginner">Beginner</option>
													   	</select>
												    </div>
												</div>
												<!-- ./skill 05 -->

											<!-- ./fields -->
								      </div>
								    </div>
								  </div>
								  <!-- ./card 06 -->

								  <!-- card 07 -->
								  <div class="card">
								    <div class="card-header card-primary text-white" id="heading07">
								      <h2 class="mb-0">
								        <a class="btn collapsed btn-block" data-toggle="collapse" data-target="#collapse07" aria-expanded="false" aria-controls="collapse07"> Languages </a>
								      </h2>
								    </div>
								    <div id="collapse07" class="collapse mb-3" aria-labelledby="heading07" data-parent="#accordion01">
								      <div class="card-body container">
								        	<!-- fields -->
								        		<!-- language 01 -->
								        		<div>
													<h5 class="text-muted fields-set-padding-top labelleftpadding"> Language 01 </h5>
												</div>

										        <div class="row fields-set-padding-top" >
												    <div class="col">
												      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="Language" name="language[]">
												    </div>
												    <div class="col">
												      	<select <?php echo $required_status; ?> class="custom-select form-control" id="l_skl_lvl" name="l_skill_level[]">
													      <option value="Native">Native</option>
													      <option value="Professional">Professional</option>
													      <option value="Elementary">Elementary</option>
													   	</select>
												    </div>
												</div>
												<!-- ./language 01 -->

												<!-- language 02 -->
								        		<div>
													<h5 class="text-muted fields-set-padding-top labelleftpadding"> Language 02 </h5>
												</div>

										        <div class="row fields-set-padding-top" >
												    <div class="col">
												      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="Language" name="language[]">
												    </div>
												    <div class="col">
												      	<select <?php echo $required_status; ?> class="custom-select form-control" id="l_skl_lvl" name="l_skill_level[]">
													      <option value="Native">Native</option>
													      <option value="Professional">Professional</option>
													      <option value="Elementary">Elementary</option>
													   	</select>
												    </div>
												</div>
												<!-- ./language 02 -->

												<!-- language 03 -->
								        		<div>
													<h5 class="text-muted fields-set-padding-top labelleftpadding"> Language 03 </h5>
												</div>

										        <div class="row fields-set-padding-top" >
												    <div class="col">
												      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="Language" name="language[]">
												    </div>
												    <div class="col">
												      	<select <?php echo $required_status; ?> class="custom-select form-control" id="l_skl_lvl" name="l_skill_level[]">
													      <option value="Native">Native</option>
													      <option value="Professional">Professional</option>
													      <option value="Elementary">Elementary</option>
													   	</select>
												    </div>
												</div>
												<!-- ./language 03 -->


											<!-- ./fields -->
								      </div>
								    </div>
								  </div>
								  <!-- ./card 07 -->

								  <!-- card 08 -->
								  <div class="card">
								    <div class="card-header card-primary text-white" id="heading08">
								      <h2 class="mb-0">
								        <a class="btn collapsed btn-block" data-toggle="collapse" data-target="#collapse08" aria-expanded="false" aria-controls="collapse08"> Interests </a>
								      </h2>
								    </div>
								    <div id="collapse08" class="collapse mb-3" aria-labelledby="heading08" data-parent="#accordion01">
								      <div class="card-body container">
								        	<!-- fields -->
								        		<!-- interest 01 -->
								        		<div>
													<h5 class="text-muted fields-set-padding-top labelleftpadding"> Interest 01 </h5>
												</div>

										        <div class="row fields-set-padding-top" >
												    <div class="col-md-6">
												      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="Interest" name="interest[]">
												    </div>
												</div>
												<!-- ./interest 01 -->

												<!-- interest 02 -->
								        		<div>
													<h5 class="text-muted fields-set-padding-top labelleftpadding"> Interest 02 </h5>
												</div>

										        <div class="row fields-set-padding-top" >
												    <div class="col-md-6">
												      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="Interest" name="interest[]">
												    </div>
												</div>
												<!-- ./interest 02 -->

												<!-- interest 03 -->
								        		<div>
													<h5 class="text-muted fields-set-padding-top labelleftpadding"> Interest 03 </h5>
												</div>

										        <div class="row fields-set-padding-top" >
												    <div class="col-md-6">
												      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="Interest" name="interest[]">
												    </div>
												</div>
												<!-- ./interest 03 -->

											<!-- ./fields -->
								      </div>
								    </div>
								  </div>
								  <!-- ./card 08 -->

								  <!-- card 09 -->
								  <div class="card">
								    <div class="card-header card-primary text-white" id="heading09">
								      <h2 class="mb-0">
								        <a class="btn collapsed btn-block" data-toggle="collapse" data-target="#collapse09" aria-expanded="false" aria-controls="collapse09"> References </a>
								      </h2>
								    </div>
								    <div id="collapse09" class="collapse" aria-labelledby="heading09" data-parent="#accordion01">
								      <div class="card-body container">
								        	<!-- fields -->
								        		<!-- 01 -->
								        		<div>
													<h5 class="text-muted fields-set-padding-top"> Reference 01 </h5>
												</div>

												<div class="row fields-set-padding-top" >
												    <div class="col">
												      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="Name" name="ref_name">
												    </div>
												    <div class="col">
												      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="Designation" name="ref_designation">
												    </div>
												</div>

												<div class="row fields-set-padding-top" >
												    <div class="col">
												      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="Organization" name="ref_organization">
												    </div>
												    <div class="col">
												      <input <?php echo $required_status; ?> type="text" class="form-control" placeholder="Contact" name="ref_contact">
												    </div>
												</div>


												<div class="form-group fields-set-padding-top">
													<textarea class="form-control " cols="40" rows="3" id="refer_note" placeholder="Reference Note (Keep it blank if Name is provided)" name="reference_note"></textarea>
												</div>
												<!-- 01 -->

												<!-- 02 -->
												<!-- <div>
													<h5 class="text-muted fields-set-padding-top"> Reference 02 </h5>
												</div>
												
										        <div class="form-group fields-set-padding-top">
													<textarea class="form-control " cols="40" rows="3" id="refer" placeholder="Reference" name="reference[]"></textarea>
												</div> -->
												<!-- ./02 -->

											<!-- ./fields -->
								      </div>
								    </div>
								  </div>
								  <!-- ./card 09 -->

								  <!-- card 10 -->
								  <br>
								  <div class="card">
								    <div class="card-header card-primary text-white" id="heading10">
								      <h2 class="mb-0">
								        <a class="btn collapsed btn-block" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10"> CV Style </a>
								      </h2>
								    </div>
								    <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#accordion01">
								      <div class="card-body container">
								        	<!-- fields -->

												<div class="container card-body">
													<!-- <form role="form"> -->


														<div class="row fields-set-padding-top" >
														    <div class="col-md-6">
														      <label class="text-muted labelleftpadding"> Choose a style for your CV * </label>
														    </div>
														    <div class="col-md-6">
														      	<select  class="custom-select form-control" id="cv_stl" name="cv_style_name">
															      <option value="basic_style_01">Basic Style 01</option>
															      <option value="light_style_02">Light Style 02 - Cyan</option>
															      <!-- <option value="dark_style_02">Dark Style 02 B</option> -->
															      <option value="elegant_style_03">Elegant Style 03 - Green</option>
															   	</select>
														    </div>
														</div>

															<br>
															<br>
													<!-- </form> -->
												</div>
											<!-- ./fields -->
								      </div>
								    </div>
								  </div>
								  <!-- ./card 10 -->
								  
						</div>
						<!-- ./accordion end -->
						<!-- /.Cards (01-10) -->
					
				</div>
				<!-- ./end of col-md-8 -->
				<br>

		</div>
		<!-- end of col -->
	</div>
	<!-- end of row -->
</div>
<!-- end of container -->
<!-- ---------------------------------- -->


<!-- ---------------------------------- -->
			<!-- form action buttons -->
		    <div class="container">
				<div class="row">
					<div class="col-md-12">
							<hr>

							<button type="reset" value="Reset" class="btn btn-primary float-left">
								Reset
							</button>

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
			<!-- ./ form action buttons -->

<!-- ---------------------------------- -->


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