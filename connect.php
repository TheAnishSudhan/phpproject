<?php
  session_start();
  if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['submit'])){
    $conn=mysqli_connect('localhost','emil','emilpulickal','website');
    if(!$conn){
      echo "Error".mysqli_error();
    }
    if (isset($_POST['name'])&&isset($_POST['age'])&&isset($_POST['phone'])&&isset($_POST['email'])&&isset($_POST['pwd'])){
      $name=$_POST['name'];
      $age=$_POST['age'];
      $phone=$_POST['phone'];
      $email=$_POST['email'];
      $password=$_POST['pwd'];


      $sql="SELECT id FROM users WHERE email = '$email'";
      $result = mysqli_query($conn,$sql);
      $count = mysqli_num_rows($result);

      if($count==0){

      echo $name.$age.$phone.$email.$password;

      $sql= "INSERT INTO users (name,age,phone,email,password) VALUES ('$name','$age','$phone','$email','$password')";

      if (mysqli_query($conn, $sql)) {
		      echo "Account created successfully !";
          $sql="SELECT id,name FROM users WHERE EMAIL = '$email' and PASSWORD = '$password'";
          $result = mysqli_query($conn,$sql);
          $row = mysqli_fetch_assoc($result);
          $currentuser_name = $row["name"];
          $currentuser_id =  $row["id"];

          $_SESSION['loginuser_name'] = $currentuser_name;
          $_SESSION['loginuser_id'] = $currentuser_id;
          header("location: page1.php");
	       } else {
		         echo "Error: " . $sql . "" . mysqli_error($conn);
           }
    }
    else{echo("Email already exists. Please Login with your credentials.");}
  }
}


 ?>
