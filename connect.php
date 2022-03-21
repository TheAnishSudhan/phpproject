<?php
  if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['submit'])){
    $conn=mysqli_connect('localhost','emil','emilpulickal','test');
    if(!$conn){
      echo "Error".mysqli_error();
    }
    if (isset($_POST['name'])&&isset($_POST['age'])&&isset($_POST['phone'])&&isset($_POST['email'])){
      $name=$_POST['name'];
      $age=$_POST['age'];
      $phone=$_POST['phone'];
      $email=$_POST['email'];
      echo $name.$age.$phone.$email;

      $sql= "INSERT INTO users (name,age,phone,email) VALUES ('$name','$age','$phone','$email')";

      if (mysqli_query($conn, $sql)) {
		      echo "New record created successfully !";
	       } else {
		         echo "Error: " . $sql . "" . mysqli_error($conn);

    }
  }
}


 ?>
