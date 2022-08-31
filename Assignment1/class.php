<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h2 
        {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Simple interest Calculator</h2>
    <form action="class.php" method="GET">
    <!-- using get is not secure -->
        <label for="">Principle
         <input type="number" name="p"><br></label>
         <label for="">Time <input type="text" name="t"><br></label>
        <label for="">Rate<input type="text" name="r"><br></label>
        <button type="submit">Submit</button>
    </form>
    <pre>
    <?php 
     $message = [];
     if(!empty($_GET)){

        if(!isset($_GET['principle']) || )
        {
            // this function def
            //boolean
            //checking if the value is passed from the input field
            //of principle or not
            echo "Principle is not set!";
        }
        else 
        {
            echo "Principle is not set!";
        }
     $priciple = $_GET['priciple'];
     $rate = $_GET['rate'];
     $time = $_GET['time'];

        
     $result = ($priciple * $rate * $time) /100;
     echo sprintf("Your simple interest is " + $result);
     }
    ?>
    <!-- //foreach
        //push in the error -->
    </pre>
</body>
</html>