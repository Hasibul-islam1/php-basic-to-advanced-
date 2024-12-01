<?php
// <!-- task 1 -->
$name="Hasibul islam";
$age=24;
echo "Name:$name<br>";
echo "Age:$age<br>";
if($age>=18){
    echo "you are ready to vote";
}
else{
    echo "you are not ready to vote";
}
// task 2
for ($i=1; $i <=50; $i++) { 
   if ($i%3==0 && $i%5==0) {
       echo "FizzBuzz <br>";
    }
    elseif($i%3==0){
        echo "Buzz <br>";
    }
    elseif($i%5==0){
       echo "Fizz <br>";
   }
   else{
    echo $i."<br>";
   }
}
// task 03
function reverseWords(){
    $value="hasibul";
    for($i=strlen($value)-1; $i>=0; $i--){ 
       echo $value[$i]."<br>";
    }
}
reverseWords();
// task 04
$id=array(1,2,3,4,5,6,7,8,9,10);
$sum=0;
for ($z=1; $z<count($id); $z++) { 
  if ($id[$z]%2==0) {

    $sum+=$id[$z]*$id[$z];
  }
}

echo $sum;

// prime number
function findPrimesInRange($start, $end) {
    $primes = [];
    for ($number = $start; $number <= $end; $number++) {
        if (isPrime($number)) {
            $primes[] = $number;
        }
    }
    return $primes;
}

function isPrime($number) {
    if ($number <= 1) return false;
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) return false;
    }
    return true;
}

// Example usage
$primes = findPrimesInRange(1, 100);
echo "Prime numbers between 1 and 100: " . implode(", ", $primes);

// task 06

function calculateDiscount($amount){
    if ($amount>500) {
        $discount=$amount*0.20;
        $price=$amount-$discount;
        echo "price is $price";
       
    }
    elseif($amount>=100 && $amount<=500){
        $discount=$amount*0.10;
        $price=$amount-$discount;
        echo "price is $price";
    }
    else{
        echo "price is $amount";
    }
}
calculateDiscount(600);
?>
