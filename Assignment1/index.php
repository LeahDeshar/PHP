<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1
        {
            text-align: center;
        }
    </style>
</head>
<body>
     <h1> GET and Post</h1>
     <h2>Simple ways</h2>
     <?php
      error_reporting(0);
      //-->By passing zero (0) in error_reporting function, you can remove all errors,
      // warnings, notices, and parse messages. 
      //-->allows developers to use undeclared variables. 
        $x_name = $_GET["x_name"];
        $x_age = $_GET["x_age"];
        echo "So your name is " . $x_name ." and your age is " . $x_age;
     ?>
     <h2>Using Form</h2>
     <form action = "index.php" method = "GET">
         Name: <input type = "text" name = "name" /><br>
         Age: <input type = "text" name = "age" /><br>
         <input type = "submit" />
      </form>
        <?php 
        error_reporting(0); //remove warning
        if( $_GET["name"] || $_GET["age"] ) {
            echo "Welcome ". $_GET['name']. "<br />";
            echo "You are ". $_GET['age']. " years old.";
            
            exit();
        }
    ?>
    <h2>Using link Method</h2>
    <a href="get.php?name=Leah&age=12">Link Test</a>
    <!-- GET method sends the encoded user information to the page request 
    the page and encoded info are separated by the ? char
    -->
</body>
</html>
