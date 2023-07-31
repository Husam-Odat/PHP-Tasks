<?php
// 1.	Create a script using a for loop to add all the integers between 0 and 30 and display the total. **  Required **

// Expected Output:  total as a number
echo "task1 loops";
echo "<br>";
$summ = 0;
for($i=0 ; $i<=30 ;$i++){
    $summ += $i;
}
echo "the total sum of numbers from 0 to 30 is  ". $summ;
echo "<br>";



// 4.	Create a script to generate the following pattern, using the nested for loop. **  Required **

// Expected Output:

// 1 0 0 0 0 
// 0 2 0 0 0 
// 0 0 3 0 0 
// 0 0 0 4 0 
// 0 0 0 0 5

echo "task2 loops";
echo "<br>";

for($j=1 ; $j<=5 ;$j++){
    echo "<br>";
    
    for($k=1 ; $k<=5 ;$k++){
        
        
        if ($j == $k){
            echo $j." ";
        }
        else{
            echo 0 ." ";
        }
        
    }
    
}
echo "<br>";

// 5.	Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number. **  Required **

// Sample Input: 5
// Expected Output: 120
echo "task3 loops";
echo "<br>";

$factorial = 1;
for($l=1 ; $l<=5 ;$l++){
    $factorial *= $l;
}
echo "The factorial of 5 number is".$factorial;
echo "<br>";


// 6.	Write a program to calculate and print the Fibonacci sequence using a for loop.
// Fibonacci is a series of numbers where a number is the sum of previous two numbers. Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and so on. 

// Expected Output: 0, 1, 1, 2, 3, 5, 8, 13, 21, … **  Required **

echo "task6 loops";
echo "<br>";
$Fibonacci= array(0 ,1 ,1);
echo ($Fibonacci[0]);
echo " , ";
echo ($Fibonacci[1]);
echo " , ";
echo ($Fibonacci[2]);
echo " , ";


for ($z=3 ; $z<=30 ; $z++){
    
    $Fibonacci[$z] = $Fibonacci[$z-1]+ $Fibonacci[$z-2];
    echo ($Fibonacci[$z]);
    echo " , ";
} 


// 9.	Write a PHP program to generate and display the first n lines of a Floyd triangle **  Required **


// Sample output:
// 1
// 2 3
// 4 5 6
// 7 8 9 10
// 11 12 13 14 15

// echo "<br";
// $n = 1;
// for ($x=1 ; $x<=15 ; $x++){
//     echo $x ;
    
//     if ($x == $n){
//         echo "<br";
//         $n++;
//     }
    

// }
echo "task9 loops";
echo "<br>";

$num = 1;

for ($x = 1; $x <= 5; $x++) {
    for ($c = 1; $c <= $x; $c++) {
        echo $num . " ";
        $num++;
    }
    echo "<br>";
}


?>
