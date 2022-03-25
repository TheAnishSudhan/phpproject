<?php
session_start();
$conn=mysqli_connect('localhost','emil','emilpulickal','website');
if(!$conn){
  echo "Error".mysqli_error();
}
$a=0;
for ($i=8; $i <=13 ; $i++) {
  $sql="SELECT userid,company,model,yearofmake,mileage,listingid from cars where listingid='$i'";
  $result = mysqli_query($conn,$sql);
  $count = mysqli_num_rows($result);
  if(mysqli_num_rows($result) > 0 ){
    $row = mysqli_fetch_assoc($result);
    $company[$a] = $row["company"];
    $model[$a]=$row["model"];
    $yearofmake[$a] = $row["yearofmake"];
    $mileage[$a]=$row["mileage"];
    $a++;
    echo "GG";
  }
}

 ?>
