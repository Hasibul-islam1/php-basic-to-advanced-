<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_GET["btn"])) {
        $num1=$_GET["num1"];
        $num2=$_GET["num2"];
        $task=$_GET["cal"];

        if ($task=="add") {
            $add=$num1+$num2;
            echo $add ;
        }
        elseif($task=="subtract") {
            $add=$num1-$num2;
            echo $add ;
        }
        elseif($task=="multiply") {
            $add=$num1*$num2;
            echo $add ;
        }
        elseif($task=="divide") {
            $add=$num1/$num2;
            echo $add ;
        }
        else{
            echo "not done";
        }
    }
    ?>
    <form action="" method="get">
        <label for="">Number one </label> <br>
        <input type="text" name="num1" id=""> <br>
        <label for="">Number tow </label> <br>
        <input type="text" name="num2" id=""> <br>
        <select name="cal" id="">
            <option value="add">add</option>
            <option value="subtract">subtract</option>
            <option value="multiply">multiply</option>
            <option value="divide">divide</option>
        </select>
        <input type="submit" value="submit" name="btn">
    </form>

</body>
</html>