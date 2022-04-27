<?php 
  // qustion number 1
  $colors = array("white","green","red");
      echo "<ul><li>".$colors[1]."</li><li>".$colors[2]."</li><li>".$colors[0]."</li></ul>";
// qustion number 2
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 
foreach($cities as $country => $capital){
    echo "The capital of "." ".$country."  is  ".$capital."<br>";
}
// qustion number 3
$color = array (4 => 'white', 6 => 'green', 11=> 'red'); 
echo $color["4"]."<br>";
// qustion number 4
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

asort($fruits);
foreach($fruits as $key => $value){
    echo $key." = ".$value."<br>";
}
// qustion number 5
$words =  array("abcd","abc","de","hjjj","g","wer");
$smallest = $words[0];
$biggest = $words[0];
for($i = 0;$i < count($words)-1;$i++){
    if(strlen($words[$i]) >= $biggest){
       $biggest = $words[$i];
    }
    if(strlen($words[$i]) <= $smallest){
        $smallest = $words[$i];
    }
}
echo $biggest."<br>";
echo $smallest."<br>";


