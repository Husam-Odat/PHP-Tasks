
<?php
//===================Arrayss===================
// 1.	** Required ** $colors = array('white', 'green', 'red') 
// Write a PHP script that will display the colors as unordered list : 
// Expected Output:  
// •	green
// •	red
// •	white
echo"<br>";
echo"Task 1 Array ";
$colors = array('white', 'green', 'red');
echo"<ul>";
foreach($colors as $color){
    echo"<li> $color </li>";
}
echo"</ul>";


// 2.	** Required ** $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

// Create a PHP script to displays the capital and country name from the above array $cities. Sort the list by the capital of the country. 
// Expected Output:
// The capital of Netherlands is Amsterdam 
// The capital of Greece is Athens 
// The capital of Germany is Berlin 

echo"<br>";
echo"Task 2 Array ";
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
 "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", 
 "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", 
 "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );

 asort($cities);
 print_r($cities) ;

 foreach($cities as $k => $v){
    echo "key is ".$k. "value is ".$v;
    echo"<br>";
 }


//  3.	**  Required ** $color = array (4 => 'white', 6 => 'green', 11=> 'red'); 

// Write a PHP script to display the first element of the above array. 
// Expected Output:  white

echo"<br>";
echo"Task 3 Arrays ";
echo"<br>";

$color3 = array (4 => 'white', 6 => 'green', 11=> 'red');
ksort($color3);

$keys3 = array_keys($color3); // take keys of array and put it in new arr
echo $keys3[0];

echo"<br>";

echo $color3[$keys3[0]];
echo"<br>";


// 4.	**  Required ** Write a PHP script to sort the following associative array depending on the key value [asc] :  

// Sample Input: 

// $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

// Expected Output:

// c = apple
// b = banana
// d = lemon
// a = orange
echo"<br>";
echo"Task 4 Arrays ";
echo"<br>";
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach ($fruits as $ke => $va)
{
    echo $ke. " = " .$va;
    echo"<br>";
}


// 8.	**  Required ** Write a PHP script to get the shortest/longest string length from an array. 

// Sample Input:

//  $words =  array("abcd","abc","de","hjjj","g","wer")

// Expected Output : 

// The shortest array length is 1. The longest array length is 4.
echo"<br>";
echo"Task 8 Arrays ";
echo"<br>";
$words8 =  array("abcd","abc","de","hjjj","g","wer");
// sort(strlen($words));
// echo $words ;
// $lenarr = array();
// foreach ($words8 as $word8){
//     array_unshift($lenarr ,strlen($word8));
//     echo "<br>";
//    print_r($lenarr);
    
// }
$maxstrr = 0;
$minstrr = 10;

foreach ($words8 as $word8){
    $len = strlen($word8);
    if($maxstrr < $len){
        // $maxstrlen == strlen($word8);
        $maxstrr = $len;
    }
    if($minstrr > $len){
        // $maxstrlen == strlen($word8);
        $minstrr = $len;
    }
    }
    echo "max string length is " .$maxstrr;
    echo "<br>";
    echo "min string length is " .$minstrr;
?>




