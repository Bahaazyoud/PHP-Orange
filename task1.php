<?php 

// qustion number 1

$year = 2005;
$T = -15;
$x = 6 ;
$y = 6 ; 
function qustion1(){
    global $y , $x , $T , $year ;  
if($year % 4 == 0 ){
    echo "<h1> leap year </h1> <br>";
}
else 
{
echo "<h1> it is not a leap year </h1> <br>";
}
}
// qustion number 2
function qustion2(){
global $y , $x , $T , $year ; 
if($T < 20 ){
    echo "<h1>The season is Winter</h1> <br>";
}
else 
{
echo "<h1>The season is summer</h1> <br>";
}
}

// qustion number 3
function qustion3(){
    global $y , $x , $T , $year ; 
    $sum = $x + $y;
if($x == $y ){
    $sum = $sum * 3 ;
    echo "<h1> the sum of $y and $x = $sum </h1>";
}
else 
{
    echo "<h1> the sum of $y and $x = $sum </h1>";
}
}
// qustion number 4
function qustion4(){
    global $y , $x , $T , $year ; 
$x = -10 ;
$y = 14 ;
if($x + $y == 30 ){
    $sum = $x + $y ; 
    echo "<br> <h1> the sum is $sum </h1> <br>";
}
else{
    echo "<br><h1>false</h1><br>";
}
}
// qustion number 5

function qustion5(){
    global $y , $x , $T , $year ; 
if($x%3 == 0){
    echo "<br><h1>the given positive number is a multiple of 3</h1><br>";
}
else{
echo "<br><h1>false</h1><br>";
}
}

// qustion number 6

function qustion6(){
    global $y , $x , $T , $year ; 
if($x >=20 && $x <= 50 )
{
    echo "<h1> the number between 20 and 50  </h1> <br> ";
}
else{
    echo "<h1> false </h1> <br>";
}
}

// qustion number 7

function qustion7(){
    global $y , $x , $T , $year ; 
$z = 8 ;
$max = $x;
if( $max < $z ){
    $max = $z ;
}
if( $max < $y ){
    $max = $y ;
}
echo "<h1> the max number of $x , $y , $z is : $max";
}
// qustion number 8

function calacelectrec($unit){
    global $y , $x , $T , $year ; 
    if($unit <= 50){
        return $unit * 2.50 ;
    }
    else
    if($unit <= 150){
        return $unit * 5.00 ; 
    }
    else
    if($unit <= 250){
        return $unit * 6.20 ; 
    }
    else
    if($unit > 250){
        return $unit * 7.50 ;
    }
}
function qustion8(){
    global $y , $x , $T , $year ; 
echo " <h1> you have to pay : ". calacelectrec(100) . " </h1> <br> "; 
}
// qustion number 9

$age = 18 ;
function qustion9(){
    global $age;
if($age >= 18 ){
    echo "<h1> you can voite ;-) </h1> <br> ";
}
else{
    echo "<h1>sorry :-(  you can not voite </h1> <br> ";
}
}

// qustion number 10
function qustion10(){
    global $y , $x , $T , $year ; 
    if($x < 0 ){
        echo  "<h1> is negateiv </h1> <br> ";
    }
    else{
        echo  "<h1> is positiv </h1> <br> ";
    }
}

// qustion number 11

function qustion11(){

$op = "-";
$x =  15 ; 
$y =  12 ;
$sum = 0 ;
switch($op){
    case "+":{
        $sum = $x + $y ;
        echo "<h1> $x + $y = $sum </h1> <br>";
        break;
    }
    case "-":{
        $sum = $x - $y ;
        echo "<h1> $x - $y = $sum </h1> <br>";
        break;
    }
    case "*":{
        $sum = $x * $y ;
        echo "<h1> $x * $y = $sum </h1> <br>";
        break;
    }
    case "/":{
        $sum = $x / $y ;
        echo "<h1> $x / $y = $sum </h1> <br>";
        break;
    }
    default : {
        echo "wrong operoter please try agin later <br>";
 break;
   }

} 
}

// qustion number 12

function qustion12(){
 $grade = 51 ;
 echo "<h1>";
    switch((int)( $grade/10 ) ){
        case 0:
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:{
           echo "F";
           break;
       }
        case 7:{
           echo "D";
           break;
       }
        case 8:{
           echo "C";
           break;
       }
        case 9:{
           echo "B";
           break;
       }
        case 10:{
           echo "A";
           break;
       } 
   default:{
       echo "undfined value ";
       break;
   }
   }
   echo "</h1> <br> ";
}
qustion1();
qustion2();
qustion3();
qustion4();
qustion5();
qustion6();
qustion7();
qustion8();
qustion9();
qustion10();
qustion11();
qustion12();