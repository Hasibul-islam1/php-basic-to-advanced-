<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_GET["name"]) && isset($_GET["age"])){
        $name=$_GET["name"];
        $age=$_GET["age"];
        echo "my name is $name <br>";
        echo "$age year old";
    }
    else{
        echo "no data received";
    }

    ?>
   
    <form action="" method="get">
        <label for="">name:</label> <br>
        <input type="text" name="name" id=""> <br>
        <label for="">age:</label> <br>
        <input type="text" name="age" id=""> <br>
        <input type="submit" value="submit">
    </form>
</body>
</html>