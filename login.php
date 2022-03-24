<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  session_start();
  $conn=mysqli_connect('localhost','emil','emilpulickal','website');
  if(!$conn){
    echo "Error".mysqli_error();
  }
  if (isset($_POST['email1'])&&isset($_POST['password'])){
    $email=$_POST['email1'];
    $password=$_POST['password'];


    $sql="SELECT id,name FROM users WHERE EMAIL = '$email' and PASSWORD = '$password'";

    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);
    if(mysqli_num_rows($result) > 0 ){

      $row = mysqli_fetch_assoc($result);
      $currentuser_name = $row["name"];
      $currentuser_id =  $row['id'];

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
         //session_register("myusername");
         $_SESSION['loginuser_name'] = $currentuser_name;
         $_SESSION['loginuser_id'] = $currentuser_id;

         header("location: page1.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
    }
    else{echo "umm";}
  }else{echo "ummmm";}
}


 ?>
