<!-- task 01 TO 08 PHP CODE   -->
 <?php
 $name ="Hasibul";
 $lastName="Islam";
 $food="apple";
 $programming_language="PHP";
 $age=23;
 $city="Dhaka";
 $hobby="nothing";
 $fullName="Hasibul Islam";
 $yearOfBirth=2003;
 $height=6.00;
 $isStudent=TRUE;
 $price1 = 120;
$price2 = 80;
$price3 = 50;
$total=$price1+$price2+$price3;
$average=$total/3;
$age=23;
$country="bangladesh";
$goal="Junior PHP Developer";
// task 07
$counter=0;
$counter=$counter+1;
$counter+=5;
$counter=$counter-2;
 ?>
 <!-- TASK 01 TO 08 HTML CODE  -->
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
  </head>
  <body>
    <!-- task 01 -->
    <p>name:<?php echo $name ;?></p> <br>
    <p>Food:<?php echo $food ;?></p> <br>
    <p>$programming_language:<?php echo $programming_language ;?></p> <br>
    <!-- task 02 -->
    <p>my name is <?php echo $name ?>, i am <?php echo $age ?> , i live in <?php echo 
    $city?> i like <?php echo $hobby ?></p>
    <!-- task 03  -->
    <p>name: <?php echo $fullName ?> <br> birth year <?php echo $yearOfBirth ?> <br> Height is <?php echo $height?> feet <br> is student <?php echo $isStudent ?"yes":"no"?> </p>
    <!-- task 04  -->
    <p>
        total = <?php echo $total ?> <br>
        Average=<?php echo $average?>
    </p>
    <!-- task 05  -->
     <p> full nsme is <?php echo $name ." ".$lastName?></p>
     <!-- task 06  -->
     <p>
<?php
echo "Name: $name <br>";
echo "Age: $age <br>";
echo "Country: $country <br>";
echo "Goal: $goal <br>";
?>
</p>
     <!-- task 07 -->

     <!-- task 08  -->
      <!-- i do it my profile php. -->
  </body>
  </html>