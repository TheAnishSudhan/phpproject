<?php
session_start();
  if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['submit'])){
    $conn=mysqli_connect('localhost','emil','emilpulickal','website');
    if(!$conn){
      echo "Error".mysqli_error();
    }
    if (isset($_POST['company'])&&isset($_POST['model'])&&isset($_POST['yearofmake'])&&isset($_POST['mileage'])){
      $company=$_POST['company'];
      $model=$_POST['model'];
      $yearofmake=$_POST['yearofmake'];
      $mileage=$_POST['mileage'];
      $userid=$_SESSION['loginuser_id'];
      $username=$_SESSION['loginuser_name'];


      $sql= "INSERT INTO cars (userid,company,model,yearofmake,mileage) VALUES ('$userid','$company','$model','$yearofmake','$mileage')";

      if (mysqli_query($conn, $sql)) {
		      echo "Application for selling generated successfully !";
          header("location: sellingsuccess.php");
	       } else {
		         echo "Error: " . $sql . "" . mysqli_error($conn);
           }
    }
    else{echo("Error. Please fill all details and try again");}

}


 ?>
