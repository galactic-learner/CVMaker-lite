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




		<!-- // ---------- notice ---------- // -->

		<?php
			//
			// (cvmaker-compact router file. don't change without knowing what you are doing. study for academic purpose is permitted.)
			//
			// ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ 
			//
			//	Copyright (2020) - OC - (288534) (acacdmml@gmail.com)
			//
			// ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ 
		?>

		<!-- // ---------- ./ notice ---------- // -->




<!-- // ---------- optional (job 1) ---------- // -->

		<!-- cleanup db table -->
			
		<!-- cleanup db table -->


		<!-- chkup -->
			<?php
				//
				// echo "<pre>";
				// print_r($_POST);
				// echo "<pre>";
			?>
		<!-- chkup -->

<!-- // ---------- optional ---------- // -->



	<!-- // job 2 case -->

	<!-- // ---------- get submitted values (normal mode) and redirect to selected output page ---------- // -->

		<!-- // -->

		<?php

			//
			// echo "<pre>";
			// print_r($_FILES['image_file']);
			// echo "<pre>";
			// //exit();


			// image uploader	

			// exec if directed from input page
			if ( isset($_FILES['image_file']) ) {
				//
			 	// 

				//
				$target_dir = "img/uploads/";
				$target_file = $target_dir . basename($_FILES["image_file"]["name"]);
				$uploadOk = 1;
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

				// Check if image file is an actual image or fake image
				if(isset($_POST["submit"])) {
				  $check = getimagesize($_FILES["image_file"]["tmp_name"]);
				  if($check !== false) {
				    //echo "File is an image - " . $check["mime"] . ".";
				    $uploadOk = 1;
				  } else {
				    echo "File is not an image.";
				    $uploadOk = 0;
				  }
				}

				// Check if file already exists
				if (file_exists($target_file)) {
				  echo "Sorry, file already exists.";
				  $uploadOk = 0;
				}

				// Check file size
				if ($_FILES["image_file"]["size"] > 500000) {
				  echo "Sorry, your file is too large.";
				  $uploadOk = 0;
				}

				// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
				  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				  $uploadOk = 0;
				}

				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
				  echo " Sorry, your file was not uploaded.";
				// if everything is ok, try to upload file
				} else {
				  if (move_uploaded_file($_FILES["image_file"]["tmp_name"], $target_file)) {
				    //echo "The file ". basename( $_FILES["image_file"]["name"]). " has been uploaded.";
				  } else {
				    echo "Sorry, there was an error uploading your file.";
				  }
				}

				//echo " to echo - ".$target_file;
				
			}

			// ./image uploader


			//
			// receive post vars, prepare an array with those, and save it to db with a cv id

				// post var holder vars

				// prepare additional vars before preparing an array to save to the db
				$rand_value = rand(1, 100000);
				//$cv_id_down_name 		= "cv-".$l_name.$cv_style_name.$rand_value;
				$cv_id 		= "cv-".$rand_value;

				// prepare cv download file name
				//$cv_download_file_name = "cv-".$l_name."-".$cv_style_name."-".$rand_value;


				// additional details (user_id>cv_id)
				//$cv_id = htmlentities($_POST['cv_id']);
				$cv_id = $cv_id;
				$cv_style_name = htmlentities($_POST['cv_style_name']);
				$creation_date = htmlentities($_POST['creation_date']); //date("Y-m-d")
				// safely removable temp (sr_temp)
				$sr_temp = 1;
				// cv persistence (1 or 0)
				$is_parmanent = 0;

				// Personal details 
				//$image_path = $_POST['image_path'];
				$f_name = htmlentities($_POST['f_name']);
				$l_name = htmlentities($_POST['l_name']);
				$title = htmlentities($_POST['title']);

				$email = htmlentities($_POST['email']);
				$phone = htmlentities($_POST['phone']);
				$address = htmlentities($_POST['address']);
				$website = htmlentities($_POST['website']);
				$linkedin = htmlentities($_POST['linkedin']);
				$git = htmlentities($_POST['git']);
				$twitter = htmlentities($_POST['twitter']);

				//$image_file = htmlentities($_FILES['image_file']['name']);
				$image_file = $target_file;

				// Profile 
				$summary = htmlentities($_POST['summary']);

				// Work experience 
				// ommit htmlentities(), for arrays it causes error 
				$j_title = $_POST['j_title'];
				$j_title_json = json_encode($j_title);
				// decode for later use
				//$j_title_array = decode_json($j_title, true);


				$employer = $_POST['employer'];
				$employer_json = json_encode($employer);
				

				$city = $_POST['city'];
				$city_json = json_encode($city);

				$we_start_date = $_POST['we_start_date'];
				$we_start_date_json = json_encode($we_start_date);

				$we_end_date = $_POST['we_end_date'];
				$we_end_date_json = json_encode($we_end_date);


				// prepare only year values
				//
				$we_start_year_base = $_POST['we_start_date'];			

				// we start years set adjustments
				$we_start_year_array[0] = date('Y', strtotime($we_start_year_base[0]));
				$we_start_year_array[1] = date('Y', strtotime($we_start_year_base[1]));

				$we_start_year_json = json_encode($we_start_year_array);

				//
				$we_end_year_base = $_POST['we_end_date'];

				// we end years set adjustments
				$we_end_year_array[0] = date('Y', strtotime($we_end_year_base[0]));
				$we_end_year_array[1] = date('Y', strtotime($we_end_year_base[1]));

				$we_end_year_json = json_encode($we_end_year_array);

				// ./prepare only year values


				$responsibilities = $_POST['responsibilities'];
				$responsibilities_json = json_encode($responsibilities);

				// Projects 
				// echo "<pre>";
				// var_dump($_POST);
				// echo "</pre>";

				$proj_name = $_POST['proj_name'];
				$proj_name_json = json_encode($proj_name);
				$proj_type = $_POST['proj_type'];
				$proj_type_json = json_encode($proj_type);
				$proj_desc = $_POST['proj_desc'];
				$proj_desc_json = json_encode($proj_desc);

				//echo "<pre>";
				// var_dump($proj_name);
				// echo "<br>";
				// var_dump($proj_desc);
				//echo "<pre>";

				// Education and Qualifications 
				$school_name = $_POST['school_name'];
				$school_name_json = json_encode($school_name);
				$school_location = $_POST['school_location'];
				$school_location_json = json_encode($school_location);
				$degree = $_POST['degree'];
				$degree_json = json_encode($degree);
				$field_of_study = $_POST['field_of_study'];
				$field_of_study_json = json_encode($field_of_study);


				// keep only year values
				$passing_year = $_POST['passing_year'];

				// education year adjustments
				$passing_year_only_y_array[0] = date('Y', strtotime($passing_year[0]));
				$passing_year_only_y_array[1] = date('Y', strtotime($passing_year[1]));
				$passing_year_only_y_array[2] = date('Y', strtotime($passing_year[2]));

				$passing_year_json = json_encode($passing_year_only_y_array);

				$gpa = $_POST['gpa'];
				$gpa_json = json_encode($gpa);
				

				// Skills 
				$skill = $_POST['skill'];
				$skill_json = json_encode($skill);
				$skill_level = $_POST['skill_level'];
				$skill_level_json = json_encode($skill_level);

				// Languages 
				$language = $_POST['language'];
				$language_json = json_encode($language);
				$l_skill_level = $_POST['l_skill_level'];
				$l_skill_level_json = json_encode($l_skill_level);

				// Interests 
				$interest = $_POST['interest'];
				$interest_json = json_encode($interest);

				// Reference 

				// $reference = $_POST['reference'];
				// $reference_json = json_encode($reference);

				$ref_name = htmlentities($_POST['ref_name']);
				$ref_designation = htmlentities($_POST['ref_designation']);
				$ref_organization = htmlentities($_POST['ref_organization']);
				$ref_contact = htmlentities($_POST['ref_contact']);
				$reference_note = htmlentities($_POST['reference_note']);

				//echo $we_end_year_a;
				//var_dump($we_end_year_b);

				// chekup
		        // echo "<pre>";
		        // var_dump($school_name_json);
		        // print_r($reference);
		        // echo "</pre>";

				// prepare usable array to save to db
				$user_data = array(

		          //
		          'cv_id'			=> $cv_id,
		          'cv_style_name'  	=> $cv_style_name,
		          'creation_date'  	=> $creation_date,
		          'sr_temp'        	=> $sr_temp,
		          'is_parmanent'    => $is_parmanent,		          

				  'f_name'          => $f_name,
		          'l_name'          => $l_name,
		          'title'      	    => $title,
		          'email'           => $email,
		          'phone'      	    => $phone,
		          'address'  	    => $address,
		          'website'         => $website,
		          'linkedin'        => $linkedin,
		          'git'       	    => $git,
		          'twitter'       	=> $twitter,

		          //'image_path'      => $image_path,
		          'image_file'      => $image_file,

		          'summary'         => $summary,

		          'j_title'    			=> $j_title_json,
		          'employer'   			=> $employer_json,
		          'city'       			=> $city_json,
		          'we_start_date'  		=> $we_start_date_json,
		          'we_end_date'     	=> $we_end_date_json,
		          'we_start_year'  		=> $we_start_year_json,
		          'we_end_year'     	=> $we_end_year_json,

		          'responsibilities'    => $responsibilities_json,

		          'proj_name'      => $proj_name_json,
		          'proj_type'      => $proj_type_json,
		          'proj_desc'      => $proj_desc_json,

		          'school_name'  		=> $school_name_json,
		          'school_location'     => $school_location_json,
		          'degree'    			=> $degree_json, 
		          'field_of_study'  	=> $field_of_study_json,
		          'passing_year'     	=> $passing_year_json,
		          'gpa'    				=> $gpa_json,

		          'skill' 		=> $skill_json,
		          'skill_level' => $skill_level_json,

		          'language' 		=> $language_json,
		          'l_skill_level' 	=> $l_skill_level_json,

		          'interest' 	=> $interest_json,

		          // 'reference' 	=> $reference_json

		          'ref_name' 			=> $ref_name,
		          'ref_designation' 	=> $ref_designation,
		          'ref_organization' 	=> $ref_organization,
		          'ref_contact' 		=> $ref_contact,
		          'reference_note' 		=> $reference_note

		          // end of array

		        );

		        // // chekup
		        // echo "<pre>";
		        // print_r($user_data);
		        // echo "</pre>";

				// 
				$parameters = $user_data;

				// save to db
			    if ( isset($_POST['f_name']) && isset($_POST['l_name']) && isset($_POST['title']) ) {
			      // commit write
			      //create_data ($con, $name, $name, $pass, $email, $phone);
			      save_cv_to_db ($parameters);

				}

				//
				// upload cv data array to session
				$_SESSION['normal_mode'] = "on"; // not used yet
				//$_SESSION['cv_data_array'] = $user_data;

				// otf_u_uda (on_the_fly_usable_user_data_array) preparation
				$on_the_fly_usable_user_data_array = array(
		          //
		          'cv_id'			=> $cv_id,
		          'cv_style_name'  	=> $cv_style_name,
		          'creation_date'  	=> $creation_date,
		          'sr_temp'        	=> $sr_temp,
		          'is_parmanent'    => $is_parmanent,

				  'f_name'          => $f_name,
		          'l_name'          => $l_name,
		          'title'      	    => $title,
		          'email'           => $email,
		          'phone'      	    => $phone,
		          'address'  	    => $address,
		          'website'         => $website,
		          'linkedin'        => $linkedin,
		          'git'       	    => $git,
		          'twitter'       	=> $twitter,
		          //'image_path'      => $image_path,
		          'image_file'      => $image_file,

		          'summary'         => $summary,

		          'j_title'    			=> $j_title,
		          'employer'   			=> $employer,
		          'city'       			=> $city,
		          'we_start_date'  		=> $we_start_date,
		          'we_end_date'     	=> $we_end_date,
		          'we_start_year'  		=> $we_start_year_array,
		          'we_end_year'     	=> $we_end_year_array,

		          'responsibilities'    => $responsibilities,

		          'proj_name'      => $proj_name,
		          'proj_type'      => $proj_type,
		          'proj_desc'      => $proj_desc,

		          'school_name'  		=> $school_name,
		          'school_location'     => $school_location,
		          'degree'    			=> $degree, 
		          'field_of_study'  	=> $field_of_study,
		          'passing_year'     	=> $passing_year_only_y_array,
		          'gpa'    				=> $gpa,

		          'skill' 		=> $skill,
		          'skill_level' => $skill_level,

		          'language' 		=> $language,
		          'l_skill_level' 	=> $l_skill_level,

		          'interest' 	=> $interest,

		          // 'reference' 	=> $reference

		          'ref_name' 			=> $ref_name,
		          'ref_designation' 	=> $ref_designation,
		          'ref_organization' 	=> $ref_organization,
		          'ref_contact' 		=> $ref_contact,
		          'reference_note' 		=> $reference_note

		          // end of array

		        );


				// upload that usable_user_data_array to session
				$_SESSION['cv_data_array'] = $on_the_fly_usable_user_data_array;


				// // //
				// echo "<pre>";
				// print_r($_SESSION['cv_data_array']);
				// echo "</pre>";
				// exit;


				// // dump
				// echo "<pre>";
				// print_r($_SESSION['cv_data_array']['j_title']['0']);
				// echo "</pre>";
				// exit;




				// redirect to chosen output page (from index page)


				// optional - can be skipped later //
				// let's adapt with some time frame, for a while


			    // ____ ____
	            //
	            // highly beta specific section
	            //
	            //  ____ ____


	            // It's beta, right? Let's try some year-work
	            // Let's like the year 2020 so much
	            $year_that_we_like_so_much = 2020;
	            $liked_year = $year_that_we_like_so_much;

	            $current_year = date('Y');

	            // var_dump($current_year);
	            // exit;




	            if ($current_year == $liked_year) {
	              // 2020 case

	              // continue as usual


	            	// redirect to chosen output page (from index page)

					if ($cv_style_name == "basic_style_01") {
						//
						header('Location: cv-style1.php');
						// exit();

					} elseif ($cv_style_name == "light_style_02") {
						//
						header('Location: cv-style2.php');
						// exit();
					} elseif ($cv_style_name == "dark_style_02") {
						//
						header('Location: cv-style2b.php');
						// exit();
					} elseif ($cv_style_name == "elegant_style_03") {
						//
						header('Location: cv-style3.php');
						// exit();
					}

					// ./ redirect to chosen output page (from index page)


				} elseif ($current_year > $liked_year) {
		              // else case
		              echo "Sorry, the site can not continue. Error code : 0xC_st_BV";
		              // married with the yr 2020! :) .
		              exit;
            	}


		        // ____ ____
		        //
		        // /. end of highly beta specific section
		        //
		        //  ____ ____


		?>

	<!-- // ---------- get submitted values and redirect to selected output page ---------- // -->



	<!-- // job 3 case -->



	<!-- // ---------- get down-cv-ID, run db query, upload down-array to session, redirect to selected out page ---------- // -->
		<?php
			//


			// execute only if to-download-cv-id provided, by the search-cv page
			if (isset($_POST['down_cv_ID'])) {
				//
				// get down-cv-ID
				$down_cv_ID = $_POST['down_cv_ID'];

				//
				$cv_count = check_if_cv_exists_in_db($con, $down_cv_ID);


				//
				if ($cv_count == 1) {
					// get cv data
					$down_cv_data_array = get_cv_data($con, $down_cv_ID);

					// upload that array to session
					// upload $down_cv_data_array to session for later use
			        $_SESSION['rerender_mode'] = "on"; // not used yet



			        //
					// from db data, convert cv_json_data to php_array data

					// previous vars will not require processing
					
					// start from json data start field - $down_cv_data_array['j_title'] = $j_title;
					$j_title = json_decode($down_cv_data_array['j_title']);
					$employer = json_decode($down_cv_data_array['employer']);
			        $city = json_decode($down_cv_data_array['city']);

			        
			        $we_start_date = json_decode($down_cv_data_array['we_start_date']);
			        $we_end_date = json_decode($down_cv_data_array['we_end_date']);
			        $we_start_year = json_decode($down_cv_data_array['we_start_year']);
			        $we_end_year = json_decode($down_cv_data_array['we_end_year']);

			        $responsibilities = json_decode($down_cv_data_array['responsibilities']);

			        $proj_name = json_decode($down_cv_data_array['proj_name']);
			        $proj_type = json_decode($down_cv_data_array['proj_type']);
			        $proj_desc = json_decode($down_cv_data_array['proj_desc']);

			        $school_name = json_decode($down_cv_data_array['school_name']);
			        $school_location = json_decode($down_cv_data_array['school_location']);
			        $degree = json_decode($down_cv_data_array['degree']);
			        $field_of_study = json_decode($down_cv_data_array['field_of_study']);
			        $passing_year = json_decode($down_cv_data_array['passing_year']);
			        $gpa = json_decode($down_cv_data_array['gpa']);

			        $skill = json_decode($down_cv_data_array['skill']);
			        $skill_level = json_decode($down_cv_data_array['skill_level']);

			        $language = json_decode($down_cv_data_array['language']);
			        $l_skill_level = json_decode($down_cv_data_array['l_skill_level']);

			        $interest = json_decode($down_cv_data_array['interest']);

			        // $reference = json_decode($down_cv_data_array['reference']);

			        // replace json data of $down_cv_data_array with corresponding php_array data
			        $down_cv_data_array['j_title'] = $j_title;
			        $down_cv_data_array['employer'] = $employer;
			        $down_cv_data_array['city'] = $city;
			        $down_cv_data_array['we_start_date'] = $we_start_date;
			        $down_cv_data_array['we_end_date'] = $we_end_date;
			        $down_cv_data_array['we_start_year'] = $we_start_year;
			        $down_cv_data_array['we_end_year'] = $we_end_year;

			        $down_cv_data_array['responsibilities'] = $responsibilities;

			        $down_cv_data_array['proj_name'] = $proj_name;
			        $down_cv_data_array['proj_type'] = $proj_type;
			        $down_cv_data_array['proj_desc'] = $proj_desc;

			        $down_cv_data_array['school_name'] = $school_name;
			        $down_cv_data_array['school_location'] = $school_location;
			        $down_cv_data_array['degree'] = $degree;
			        $down_cv_data_array['field_of_study'] = $field_of_study;
			        $down_cv_data_array['passing_year'] = $passing_year;
			        $down_cv_data_array['gpa'] = $gpa;

			        $down_cv_data_array['skill'] = $skill;
			        $down_cv_data_array['skill_level'] = $skill_level;

			        $down_cv_data_array['language'] = $language;
			        $down_cv_data_array['l_skill_level'] = $l_skill_level;

			        $down_cv_data_array['interest'] = $interest;

			        // $down_cv_data_array['reference'] = $reference;

			        // remaining variables will not require to be replaced by new a php array, prepared by json_decode function


					// dump
					// print_r($j_title);
					// exit();


			        // upload prepared $down_cv_data_array array to session, with php arrays in palce of json data
			        $_SESSION['cv_data_array_rerender'] = $down_cv_data_array;

			        // get saved cv style name
			        $cv_style_name = $down_cv_data_array['cv_style_name'];

			        // // dump
			        // echo "<pre>";
			        // print_r($_SESSION['cv_data_array_rerender']);
			        // echo "</pre>";
			        // exit;


			        // redirect accordingly from download/search cv page




					// optional - can be skipped later //
					// let's adapt with some time frame, for a while


				    // ____ ____
		            //
		            // highly beta specific section
		            //
		            //  ____ ____


		            // It's beta, right? Let's try some year-work
		            // Let's like the year 2020 so much
		            $year_that_we_like_so_much = 2020;
		            $liked_year = $year_that_we_like_so_much;

		            $current_year = date('Y');

		            // var_dump($current_year);
		            // exit;


		            if ($current_year == $liked_year) {
		              // 2020 case

		              // continue as usual


		            	// redirect accordingly from download cv page
		            	
				        if ($cv_style_name == "basic_style_01") {
						//
						header('Location: cv-style1-re.php');
						// exit();

						} elseif ($cv_style_name == "light_style_02") {
							//
							header('Location: cv-style2-re.php');
							// exit();
						} elseif ($cv_style_name == "dark_style_02") {
							//
							header('Location: cv-style2b-re.php');
							// exit();
						} elseif ($cv_style_name == "elegant_style_03") {
							//
							header('Location: cv-style3-re.php');
							// exit();
						}

						// ./ redirect accordingly from download cv page




					} elseif ($current_year > $liked_year) {
			              // else case
			              echo "Sorry, the site can not continue. Error code : 0xC_st_BV";
			              // married with the yr 2020! :) .
			              exit;
            		}

			        // ____ ____
			        //
			        // /. end of highly beta specific section
			        //
			        //  ____ ____




				} elseif ($cv_count == 0) {
					//
					echo "<br>";
					echo "Incorrect CV ID. No such CV in the Database.";
				} elseif ($cv_count > 1) {
					//
					echo "<br>";
					echo "DB error. Multiple CV.";
				}
			}


		?>


	<!-- // ---------- get cv-ID, run db query, upload down-array to session, redirect to selected out page ---------- // -->


	<!-- // job 4 case -->

	<!-- optional save cv feature -->

		<?php 
			//
			

		?>
	<!-- optional save cv feature -->

	<!-- // ./job 4 case -->




	<!-- empty div -->
		<div class="pt-5">
			
		</div>
	<!-- empty div -->


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