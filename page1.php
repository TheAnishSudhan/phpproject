<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Website</title>
  <link rel="icon"
    href="https://us.123rf.com/450wm/wellgod/wellgod2006/wellgod200600102/149713537-sport-supercar-front-view-line-art.jpg?ver=6"
    type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
  <header>

    <a href="index1.php" style="position:absolute;"><img src=" https://us.123rf.com/450wm/wellgod/wellgod2006/wellgod200600102/149713537-sport-supercar-front-view-line-art.jpg?ver=6 "
        alt="welp" width=82px style="margin-top:0px;"></a>
    <h1 id="heading">VroomVroom</h1>
    <hr>
    <?php
    session_start();
    if(isset($_SESSION['loginuser_name'])){
    echo "<p style='color:blue;'>
      Welcome ".$_SESSION['loginuser_name'].".<br> </p>";}
      else{echo "<p style='color:blue;'>Please login/register</p>";}?>
    <hr>
    <div id="navigation">
      <div class="nav"><a href="buying.php">
          <button type="button" class="btn btn-outline-light">Buy</button>
        </a></div>
      <div class="nav"><a href="selling.php">
          <button type="button" class="btn btn-outline-light">Sell</button>
        </a></div>
      <div class="nav"><a href="latest.html">
          <button type="button" class="btn btn-outline-light">Latest Info</button>
        </a></div>
      <div align="right" class="nav1"><a href="index1.php">
        <button type="button" class="btn btn-outline-light" style="text-align:right;">Register</button>
      </div>
    </div>

    <hr>
  </header>
  <div class="ltr">
    <img class="img1" src="https://www.freeiconspng.com/uploads/audi-q3-car-png-orange-side-view-10.png" alt="white car" width="200px">
  </div>

  <br><br><br><br><br>

</body>

<style media="screen">




  body {
    margin-left: 50px;
    margin-right: 50px;
    margin-top: 10px;
    margin-bottom: 200px;
    background-image: url("https://wallpaperaccess.com/full/2492629.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100%;

  }

  /* #navigation {
    white-space: nowrap;
    overflow-x: auto;

  } */



  .nav {
    display: inline-block;
    padding-left: : 10px;
    padding-right: 10px;
    border-color: white;
  }

  .nav1{

    text-align: right;

  }

  h1 {
    color: purple;
    font-size: 30px;
    text-align: center;
    font-family: cursive;
    padding-top: 10px;
  }

  h3 {
    color: black;
    font-size: 20px;
    font-family: cursive;
  }

  p {
    color: black;
    font-size: 18px;
    font-family: cursive;
  }

  #img1 {
    position: dynamic;
    max-width: 100%;
    width: 100%;

  }

  #center {
    text-align: center;
  }

  ::-webkit-scrollbar {
    width: 11px;

  }

  ::-webkit-scrollbar-track {
    background: black;
  }

  ::-webkit-scrollbar-thumb {
    background: violet;
    border-radius: 10px;
  }

  ::-webkit-scrollbar-thumb:hover {
    background: purple;
  }

  .img1 {
   max-width: 100%;
   max-height: 100%;
   position:absolute;
   bottom: 0px;
  }
  .ltr {
   height: 100px;
   width: 600px;
   position: absolute;
   bottom:0px;
  }
  .ltr:hover{
    animation-name: moveToRight;
    animation-duration: 4s;
    animation-iteration-count : infinite;
  }
  @keyframes moveToRight {
          0% {
            transform: translateX(0px);
          }
          100% {
            transform: translateX(1000px);
          }
        }
</style>

</html>
