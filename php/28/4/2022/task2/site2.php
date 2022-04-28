<?php
$number1 =  $_GET['num1'];
$operator = $_GET['operator'];
$number2 =  $_GET['num2'];

if($operator === "+"){
    echo "The sum = ".$number1+$number2;
}else if($operator === "-"){
    echo "The difference = ".$number1-$number2;
}else if($operator === "*"){
    echo "The Multiply = ".$number1*$number2;
}else if($operator === "/"){
    echo "The Dividing = ".$number1/$number2;
}else if($operator === "%"){
    echo "The mod = ".$number1%$number2;
}