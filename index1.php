<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="div1">

    <h1>Login</h1>
    <form class="login" action="login.php" method="post">
      <label>Registered Email  :</label><input type = "text" name = "email1" id="email1" placeholder="Enter Registered Email Id" /><br><br>
      <label>Password  :</label><input type = "password" name = "password" id="password" placeholder="Password"><br><br>
      <input type = "submit" name="submit1" value = " Login "/><br>
               </form>
    </form>

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

      <tr><td><input type="submit" name="submit" value="submit"></td></tr>
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
      background-image: url("");
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 120%;
    }

    .table1{
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
      margin-top: -25px;
  margin-bottom: 0px;
  margin-right: -10px;
  margin-left: -10px;

    }

  </style>
</html>
