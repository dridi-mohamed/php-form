<!DOCTYPE html>
<html lang="en">

<head>
    <title>Novocall Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>




    <?php
    // define variables and set to empty values
    $nameErr = $emailErr = $passErr = "";
    $name = $email = $pass = "";
    
    // err name
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
          $nameErr = "plase add you name";
        } else {
          $name = test_input($_POST["name"]);
        }
        
        if (empty($_POST["email"])) {
          $emailErr = "Email is required";
        } else {
          $email = test_input($_POST["email"]);
        }

        if (empty($_POST["pass"])) {
            $passErr = "plase add your pass";
          } else {
            $pass = test_input($_POST["pass"]);
          }
    
    }
    
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    ?>

    



    <div class="container">
        <h2>Welcame in Novocall Sing Page</h2>

       
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  


        
            <div class="form-group">
                <label for="email">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name">
                <span class="error"> <?php echo $nameErr;?></span>
  <br><br>
            </div>


            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass">
                <span class="error"> <?php echo $passErr;?></span>
            </div>


            <div class="form-group">
                <label for="pwd">Email:</label>
                <input type="email" class="form-control" id="mail" placeholder="Enter your Mail" name="email">
                <span class="error"> <?php echo $emailErr;?></span>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" name="remember"> Remember me</label>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
</form>
</form>
    
    <?php
    echo "<h2>Test Forme:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $pass;
    echo "<br>";
  
    echo "<br>";
  
    ?>
    </div>

</body>

</html>
