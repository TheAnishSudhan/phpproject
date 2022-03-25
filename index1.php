<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>
  <body>
    <div class="div1">
    <div class="formloginback">
    <div class="formlogin">
    <br><br><h1>Login</h1><br>
    <form class="form-group" action="login.php" method="post">
      <table class="table0">
        <tr>
      <td><label>Registered Email  :</label></td>
      <td><input type = "text" name = "email1" id="email1" placeholder="Enter Registered Email Id" /></td>
    </tr><tr>
      <td><label>Password  :</td>
      <td></label><input type = "password" name = "password" id="password" placeholder="Password"></td>
    </tr><tr>
      <td></td><td><input type = "submit" class="btn btn-primary" name="submit1" value = " Login "/></td>
    </tr>
  </table>
      </form>
      </div>
      </div>

    <h1>Registration Page</h1>

    <form class="register" action="connect.php" method="post">
      <table class="table1">
      <tr>

      <td><label for="user">Name:</label></td>
      <td><input type="text" name="name" id="name" placeholder="Enter Name"></td>
    </tr>
    <tr>
      <td><label for="email">Email:</label></td>
      <td><input type="text" name="email" id="email" placeholder="abc@email.com"></td>
    </tr>
    <tr>
      <td><label for="age">Age:  </label></td>
      <td><input type="number" name="age" id="age" placeholder="Enter Age"></td>
    </tr>
    <tr>
      <td><label for="phone">Phone:</label></td>
      <td><input type="text" name="phone" id="phone" placeholder="9876543210"></td>
    </tr>
    <tr>
      <td><label for="pwd">Password:</label></td>
      <td><input type="password" name="pwd" id="pwd" placeholder="Password"></td>
    </tr>

      <tr><td></td><td><input type="submit" class="btn btn-primary" name="submit" value="submit"></td></tr>
    </table>
    </form>
    </div>
    <div class="div2">

    </div>

  </body>
  <style media="screen">
    body{
      text-decoration-color: white;
      color: white;
      background-color: black;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 120%;
    }

    .table1{
      margin-left: auto;
      margin-right: auto
    }
    .table0{
      margin-left: auto;
      margin-right: auto
    }

    .div1{
      font-family: "Garamond";
      text-align: center;
      height: 1000px;
      background-image: url("https://1.bp.blogspot.com/-1Z4GQUy1Wgk/X1XxM6Ufw3I/AAAAAAAAM5g/Z9Vv35-qdRYU_ObsLSWOG4ZYKngA6HdlwCLcBGAsYHQ/s1920/official%2BBLACK%2Bwallpaper%2Bin%2BHD%2B%25281%2529.jpg");
      position: static;
      background-repeat: no-repeat;
      background-size: 100%;
      margin-top: 0px;
      margin-bottom: 0px;
      margin-right:0px;
      margin-left:0px;

    }

    /* .formloginback{
      filter:blur(5px);
    } */
    .table0{
      backdrop-filter:blur(5px);
    }
    .table1{
      backdrop-filter:blur(5px);
    }

    ::-webkit-scrollbar {
      width: 11px;

    }

    ::-webkit-scrollbar-track {
      background: #2C3E50;

    }

    ::-webkit-scrollbar-thumb {
      background: #E59866;
      border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: #953B27;
    }


  </style>
</html>
