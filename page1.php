<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Website</title>
  <link rel="icon"
    href="https://us.123rf.com/450wm/wellgod/wellgod2006/wellgod200600102/149713537-sport-supercar-front-view-line-art.jpg?ver=6"
    type="image/png">
  <link href=" https://us.123rf.com/450wm/wellgod/wellgod2006/wellgod200600102/149713537-sport-supercar-front-view-line-art.jpg?ver=6 " rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <header>

    <a href="index1.php" style="position:absolute;"><img src=" https://us.123rf.com/450wm/wellgod/wellgod2006/wellgod200600102/149713537-sport-supercar-front-view-line-art.jpg?ver=6 "
        alt="welp" width=82px style="margin-top:-10px;"></a>
    <h1 id="heading">VroomVroom</h1>
    <hr>
    <?php
    session_start();
    echo "<p style='color:blue;'>
      Welcome ".$_SESSION['loginuser_name'].".<br> </p>"?>
    <hr>
    <div id="navigation">
      <div class="nav"><a href="buy.html">
          <button type="button" class="btn btn-outline-light">Buy</button>
        </a></div>
      <div class="nav"><a href="sell.html">
          <button type="button" class="btn btn-outline-light">Sell</button>
        </a></div>
      <div class="nav"><a href="latest.html">
          <button type="button" class="btn btn-outline-light">Latest Info</button>
        </a></div>
      <span class="nav1"><a href="index1.php">
        <button type="button" class="btn btn-outline-light" style="text-align:right;">Register</button>
      </span>
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
    max-width: 800px;
    width: 75%;

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
    animation-duration: 3s;
    animation-iteration-count : infinite;
  }
  @keyframes moveToRight {
          0% {
            transform: translateX(0px);
          }
          100% {
            transform: translateX(630px);
          }
        }
</style>

</html>
