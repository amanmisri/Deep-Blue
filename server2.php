<?php
session_start();

// initializing variables
$population = "";
$location = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'deepblue');

// REGISTER USER
if (isset($_POST['rate'])) {
  // receive all input values from the form
  $population= mysqli_real_escape_string($db, $_POST['population']);
  $location = mysqli_real_escape_string($db, $_POST['location']);
 

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($population)) { array_push($errors, " population is required"); }
  if (empty($location)) { array_push($errors, "location is required"); }
  

  // Finally, rate if there are no errors in the form
  if (count($errors) == 0) {
  	
  	$query = "INSERT INTO rate (population, location) 
  			  VALUES('$population','$location')";
  	mysqli_query($db, $query);
  	$_SESSION['population'] = $population;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index2.php');
  }
}

// ... 