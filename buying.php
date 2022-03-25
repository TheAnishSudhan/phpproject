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
    $listingid[$a]=$row["listingid"];
    $userid[$a]=$row["userid"];
    $a++;
  }
}
for ($i=0; $i <=5 ; $i++) {
  $sql="SELECT name,email,phone from users where id='$userid[$i]'";
  $result = mysqli_query($conn,$sql);
  //$count = mysqli_num_rows($result);
  if(mysqli_num_rows($result) > 0 ){
    $row = mysqli_fetch_assoc($result);
    $name[$i] = $row["name"];
    $email[$i]=$row["email"];
    $phone[$i] = $row["phone"];
}}


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<title>Buy Cars</title>

	<style>

	.container{
		width: 100%;
		padding: 20px;
		margin: 100px auto;
		display: flex;
		flex-direction: row;
		justify-content: center;
	}
.container .box{
  position:relative;
  width: 100%;
  overflow: hidden;
  transition: 0.5s;
}
.box:hover{
  transform: scale(1.3);
  z-index: 2;

  @import url('')
}

.container .box .imgBx{
  position:absolute;
  width: 100%;
  top:0;
  Left:0;
}

.container .box .imgBx img{
  position:absolute;
  width: 100%;
  top:0;
  Left:0;
  object-fit:cover;

}

.container .box imgBx: before{
  content: '';
  position: absolute;
  top0;
  Left:0;
  width: 100%;
  background: linear-gradient(180deg,#f00,#000 );
  mix-blend-mode: multiply;
  opacity: 0;
  transition: 0.5s;
}




	.box{
		width: 250px;
		margin: 0 10px;
		box-shadow: 0 0 20px 2px rgba(0, 0, 0, .1);
		transition: 1s;

	}
	.box img{
		display: block;
		width:100%;
		border-radius: 5px;
	}

  .container .box .img{
    position: absolute;
    top:0;
    Left:0;
    width: 100%;
  }
  .container .box .img img{
    position: absolute;
    top:0;
    Left:0;
    width: 100%;
object-fit:cover;
  }
  .container box img: before{
    content: '';
    position: absolute;
    top0;
    Left:0;
    width: 100%;
    background: linear-gradient(180deg,#eecda3,#ef629f  )
  }
	</style>
</head>
<body>
  <header>
    <?php
    if(isset($_SESSION['loginuser_name'])){
      echo "<h3 style='color:black;'>
        Welcome ".$_SESSION['loginuser_name']."<br> </h3>";}
      else{echo "<h3 style='color:black;'>Please login/register</h3>";}
    ?>
  </header>
  <div class="container">
    <div class="box">
      <div class="imgBx">
        <img src="https://imgd.aeplcdn.com/1056x594/n/cw/ec/47141/new-ghost-exterior-right-front-three-quarter-2.jpeg?q=75&wm=1"><br>
      </div>
      <div class="content">
        <div>
          <br><br><br><br><br><br><br><br><br><br>
          <h2><?php echo $company[4]."<br>".$model[4] ?></h2>
          <?php echo"<p>Company: ".$company[4]."<br>
                        Model: ".$model[4]."<br>
                        Year of make: ".$yearofmake[4]."<br>
                        Mileage: ".$mileage[4]."<br>
                        Name: ".$name[4]."<br>
                        Email: ".$email[4]."<br>
                        Phone: ".$phone[4]."</p>"
                        ?>

        </div>
      </div>
    </div>
    <div class="box">
      <img src="https://imgd.aeplcdn.com/1056x594/n/cw/ec/26924/maserati-levante-right-front-three-quarter5.jpeg?q=75&wm=1"><br>
      <div class="content">

        <h2><?php echo $company[3]."<br>".$model[3] ?></h2>
        <?php echo"<p>Company: ".$company[3]."<br>
                      Model: ".$model[3]."<br>
                      Year of make: ".$yearofmake[3]."<br>
                      Mileage: ".$mileage[3]."<br>
                      Name: ".$name[3]."<br>
                      Email: ".$email[3]."<br>
                      Phone: ".$phone[3]."</p>"
                      ?>

      </div>

    </div>
    <div class="box">
      <img src="https://imgd.aeplcdn.com/1056x594/cw/ec/30181/RollsRoyce-Phantom-VIII-Exterior-124069.jpg?wm=1&q=75"><br>
      <div class="content">
        <h2><?php echo $company[5]."<br>".$model[5] ?></h2>
        <?php echo"<p>Company: ".$company[5]."<br>
                      Model: ".$model[5]."<br>
                      Year of make: ".$yearofmake[5]."<br>
                      Mileage: ".$mileage[5]."<br>
                      Name: ".$name[5]."<br>
                      Email: ".$email[5]."<br>
                      Phone: ".$phone[5]."</p>"
                      ?>

      </div>
    </div>

  </div>



  <div class="container">
		<div class="box">
			<img src="https://imgd.aeplcdn.com/1056x594/n/cw/ec/49376/f8-tributo-exterior-right-front-three-quarter-11.jpeg?q=75&wm=1"><br>
      <div class="content">
        <div>
          <h2><?php echo $company[0]."<br>".$model[0] ?></h2>
          <?php echo"<p>Company: ".$company[0]."<br>
                        Model: ".$model[0]."<br>
                        Year of make: ".$yearofmake[0]."<br>
                        Mileage: ".$mileage[0]."<br>
                        Name: ".$name[0]."<br>
                        Email: ".$email[0]."<br>
                        Phone: ".$phone[0]."</p>"
                        ?>
        </div>
      </div>
		</div>
		<div class="box">
			<img src="https://imgd.aeplcdn.com/1056x594/cw/ec/36258/Ferrari-Portofino-Exterior-137289.jpg?wm=1&q=75"><br>
      <div class="content">
        <h2><?php echo $company[1]."<br>".$model[1] ?></h2>
        <?php echo"<p>Company: ".$company[1]."<br>
                      Model: ".$model[1]."<br>
                      Year of make: ".$yearofmake[1]."<br>
                      Mileage: ".$mileage[1]."<br>
                      Name: ".$name[1]."<br>
                      Email: ".$email[1]."<br>
                      Phone: ".$phone[1]."</p>"
                      ?>
      </div>
		</div>
		<div class="box">
			<img src="https://imgd.aeplcdn.com/1056x594/cw/ec/19429/Maserati-Quattroporte-Right-Front-Three-Quarter-149974.jpg?wm=1&q=75"><br>
      <div class="content">
        <h2><?php echo $company[2]."<br>".$model[2] ?></h2>
        <?php echo"<p>Company: ".$company[2]."<br>
                      Model: ".$model[2]."<br>
                      Year of make: ".$yearofmake[2]."<br>
                      Mileage: ".$mileage[2]."<br>
                      Name: ".$name[2]."<br>
                      Email: ".$email[2]."<br>
                      Phone: ".$phone[2]."</p>"
                      ?>

      </div>
		</div>

	</div>
</body>
</html>
