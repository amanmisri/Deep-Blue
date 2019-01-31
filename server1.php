<?php
session_start();
error_reporting('0');

//echo 'asdasdasd';die;

// initializing variables
$place = $_POST['place'];

$errors = array(); 

// connect to the database
$conn = new mysqli('localhost', 'saj_saj', 'saj123', 'saj_deepblue');
if ($conn->connect_error){
  die("fail".$conn->connect_error);
}





// DETERMINE LOCATION
if (isset($_POST['place'])) {
  // receive all input values from the form
  $place_to_check = mysqli_real_escape_string($link, $_POST['place']);

  // form validation: ensure that the all details are correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($place_to_check)) { array_push($errors, "place"); }
  
    // Finally, determine location if there are no errors in the form
   if (count($errors) == 0) {
  	$query1 = "INSERT INTO attributes ('place') 
  			  VALUES('place')";
  	mysqli_query($link, $query1);
	$_SESSION['population'] = $population;
  	$_SESSION['success'] = "You have enterd the attributes";
  	header('location: index1.php');
	
  // print data 
  if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
} 


  	
  }
}
$sql = "SELECT * FROM attributes where male < 350 AND female > 100 and place ='$place' and water_availability <>'low'and electricity_availability <>'low'" ;

$result = $conn->query($sql);


// if ($result->num_rows > 0) 
// {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
        
//         echo $row['id'] ." ".$row['place'];

//        
//         
        
//     }
// } else {
//     echo "0 results";
// }

//$link->close();
//...
?>
<!DOCTYPE html>
<html>
<head>
  <title>Deep Blue project</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
    <h2>result</h2>
  </div>  

    <div class="input-group">
      
  <?php
  if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        //echo $row['id'] ." ".$row['place'];
      ?>
      <center>
      <style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
        <table id="customers">
  
   <tr>
    <th>Area ID</th>
    <th>Place</th>
    <th>Sector id</th>
    <th>male</th>
    <th>female</th>
    <th>Disbaled</th>
    <th>water availability</th>
     <th>electricity availability</th>
  </tr>
  

        <tr>
       <td><?php echo  $row['id'] ; ?></td>
      
        

          <td><?php
        echo $row['place'];
        ?></td>

          <br>
        <td>  <?php
          
          echo $row['secid'];
        ?></td>
        <td> <?php
          
          echo $row['male'];
        ?></td>
        <td> <?php
          
          echo $row['female'];
        ?></td>
         <td> <?php
          
          echo $row['disabled'];
        ?></td>
           <br>
         <td> <?php
          
          echo $row['water_availability'];
        ?></td>
        <td> <?php
          
          echo $row['electricity_availability'];
        ?></td>
       

      </tr>    
        
       
       </center>
        <?php
        
    }
} else {
  ?>
    <center> 
    <h1><?php echo "Not found" ; ?></h1>
	</center>
<?php } ?>
    
      
    </div>
  <div class="input-group">
      
    </div>
   </form>
</body>
</html>