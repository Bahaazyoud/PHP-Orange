<?php 
// qustion number 1

function primeCheck($number){
    if($number == 1){
        return 0; 
    }
    for($i = 2 ;$i <= $number/2;$i++){
        if($number % $i == 0){
            return 0;
        }
    }
        return 1;
}
$number = 3;
$number = 31;
$flag = primeCheck($number);
if($flag == 1){
    echo $number." is a Prime Number <br>";
}else{
    echo $number." is Not a Prime Number <br>";
}

// qustion number 2

function reverse($string){
    $reverse = strrev($string); 
    echo $reverse . "<br>";
}
reverse("remove");
// qustion number 3
function checklower($string){
    if(ctype_lower($string)){
        echo "Your string is ok <br>";
    }
    else{
        echo "Your string is not ok <br>";
    }
}
$string = "baAaa";
checklower($string);

// qustion number 4

function swap($x,$y){
    $z = $x;
    $x = $y;
    $y = $z;
    echo "x = ".$x." y = ".$y."<br>";
}
swap(12,10);
// qustion number 5

// same the previous question (Q4)


// qustion number 6
function armstrongNumber($number){
    $str = (string)$number;
    $col = 0;
    $length = strlen($str);
    for ($index = 0; $index < $length; $index++) {
        $col += (int)$str[$index]*(int)$str[$index]*(int)$str[$index];
    }
    if ($col === $number){
        echo $number." is Armstrong Number  <br>";
    }
    else{
        echo $number." is not Armstrong Number  <br>";
    }
}
armstrongNumber(407);



// qustion number 7
function palindrome($string){
    $lowerCase = strtolower($string);
    $reverse = strrev($lowerCase);
     if($lowerCase === $reverse){
        echo "Yes its palindrome <br>";
     }
     else{
         echo "No its not palindrome <br>";
     }
}
palindrome("aka");
palindrome("bahaa");
// qustion number 8
function removeArray($array){
    print_r(array_unique($array));
}
$a = array(1,2,3,4,3,3,5,4,5);
removeArray($a);