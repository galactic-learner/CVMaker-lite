<?php  

 	//
	// (cvmaker-compact config file. don't change without knowing what you are doing. study for academic purpose is permitted.)
	//
	// ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ 
	//
	//	Copyright (2020) - OC - (288534) (acacdmml@gmail.com)
	//
	// ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ ____ 


	//
	ini_set('display_errors', 0);


	// db info
	$server = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'cvmakerc';

	// conn to db
	$con = mysqli_connect( $server, $dbuser, $dbpass, $dbname ) or die ( "Database is not connected." );

	if (!$con) {
		//
		echo " Sorry, the database is not connected! ";
		exit;
	} else {
		//
		//echo "Database is connected!";
	}


	// //
	// echo "<pre>";
	// print_r($con);
	// print_r($sql);
	// echo "<pre>";


	// functions 


    // new function(s)
    //
    //


	// ---- found used ----

	// function 01
	// function check_rows_by_email ( $con, $email ) {

	// // sql query statement
	// $sql = " SELECT * FROM users WHERE email= '$email' ";

	// // mysqli query
	// $query = mysqli_query( $con, $sql );

	// // rows container
	// $rows = mysqli_num_rows( $query );

	// // return
	// return $rows;

	// function 02
	// parameterized function - save_cv
    function save_cv_to_db ( $parameters ) {

	 	// make $con global
	 	global $con;

	 	// check if $user_data is an array
		if( is_array( $parameters ) ) {
			$parameters = $parameters;
		} else {
			return FALSE;
		}

	 	// get array length
	 	$array_length = sizeof($parameters);

	 	// init
	 	$i=1;

	 	// Organize the values in two strings
	    foreach ($parameters as $id => $value) {

	    	// feed $fields str
	        $fields = $fields . $id;
	        if ($i<$array_length) {
	        	$fields=$fields.",";
	        };

	        // feed $values str
	        $values = $values . "'" . $value . "'"; 
	        if ($i<$array_length) {
	        	$values=$values.",";
	        };

	        $i=$i+1;
	    }

	    //
	 	// echo "<pre>";
		// print_r($values);
		// //var_dump($fields);
		// echo "<pre>";
		// exit;
	    


	 	// insert data
		$sql = "INSERT INTO cvs ( $fields ) VALUES ( $values )";
	    //$sql = "INSERT INTO cvs ( name, user_id, pass, email, phone ) VALUES ( '$name', 'user_id', '$pass', '$email', '$phone' )";


		if ( mysqli_query( $con, $sql ) ) {
			//
			//echo "Data inserted successfully.";
			// echo '
			// 	<div class="container col-md-12">
	  //               <br>
	  //               <div class="alert alert-success">
	  //                   <i class="fa fa-check"></i>
	  //                       CV saved successfully.
	  //               </div>
	                          
	  //           </div> ';

		} else {
			//
			//echo "Database error.";
			echo '
				<div class="col-md-12">
	                <div class="alert alert-warning">
	                    <i class="fa fa-check"></i>
	                        Database error.
	                </div>
	                          
	            </div> ';
		}

		// $id = mysqli_last_insert_id($con);

 	}

	// function 03
	// function to cleanup db table's unnecessary removable cv entries
 	function cleanup_db_table($con) {

 		// // make $con global
	 	// global $con;

 		// cleanup where sr_temp = "1"
 		$sql = " DELETE FROM cvs WHERE sr_temp='1' ";

 		// mysqli query
		$query = mysqli_query( $con, $sql );

		// return
		return $query;
 	}

	// function 04
 	function check_if_cv_exists_in_db ( $con, $down_cv_ID) {

	// sql query statement
	$sql = " SELECT * FROM cvs WHERE cv_id='$down_cv_ID' ";

	// mysqli query
	$query = mysqli_query( $con, $sql );

	// rows container
	$rows =  mysqli_num_rows ($query);
	//$rows =  $query->num_rows ;

	// return
	return $rows;

 	}

	// function 05
 	function get_cv_data ( $con, $down_cv_ID ) {

 	//
 	//global $con;

	// sql query statement
	$sql = " SELECT * FROM cvs WHERE cv_id='$down_cv_ID' ";

	// mysqli query
	$query = mysqli_query( $con, $sql );

	//var_dump($query->num_rows);

	// rows container
	$assoc_array =  mysqli_fetch_assoc ($query);
	//$rows =  $query->num_rows ;

	// return
	return $assoc_array;

 	}

	// function 06
 	function set_cv_as_parmanent ( $con, $cv_id ) {

 		//
 		var_dump($cv_id);

	// sql query statement
	//$sql = "UPDATE cvs SET 'is_permanent'=1 WHERE cv_id='$cv_id'";
	$sql = "UPDATE cvs SET is_parmanent = '1' WHERE cv_id = 'cv-44624'";

	//$sql = " UPDATE cvs SET is_permanent=1 WHERE cv_id='$cv_id' ";
	//$sql = " UPDATE cvs SET cv_style_name='1' WHERE cv_id='$cv_id' ";
	// $sql = " SELECT * FROM cvs WHERE cv_id='cv-44624' ";

	// mysqli query
	$query = mysqli_query($con, $sql);

	// rows container
	//$assoc_array =  mysqli_fetch_assoc ($query);
	//$rows =  $query->num_rows ;

	//
	// echo "<pre>";
	// print_r($assoc_array);
	// echo "</pre>";
	// exit;

	// return
	return $query;

 	}


	// function 07



	// function 08

	// function 09
	// function 10


 
	// ---- found used ----


    


    // new function(s)
    //
    //



    // end of config

?>