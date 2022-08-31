<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="$_GET">
        Name: <input type="text" name="f_name" placeholder="First Name">
        <input type="text" name="n_name" placeholder="Last Name"><br>
        Class: <input type="number" name="f_name" placeholder="Your Class"><br>
         <button type="submit">Submit</button>
    </form>

    <?php 
    if(!empty($_GET))
    {
        var_dump($_GET['Name']);
        echo "Your name is " + $_GET['name'];

    }
    else 
    {
        echo "Done";
    }
     ?>
</body>
</html>