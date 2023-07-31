<?php
$year = 2013;
if ($year % 4 == 0)
{
    
}
else {
    echo "This year is not a leap year";
}

// 7.	Write PHP script to find the largest number between the three integers
echo "<br>";
$maxnum = [1,5,9];
$max = 0;
foreach ($maxnum as $num){
    if( $num > $max ){
        $max = $num;
    }

}
echo $max ;


// -----------------------------------------------------
// 8.	Write PHP script to calculate the monthly electricity bill according to these rules
$totalBill = 0;
$units = 500;    
    
    if ($units <= 50) {
        $totalBill = $units * 2.50;
    } else {
        $totalBill += 50 * 2.50;
        $units -= 50;
        
        
        if ($units <= 100) {
            $totalBill += $units * 5.00;
        } else {
            $totalBill += 100 * 5.00;
            $units -= 100;
            
            
            if ($units <= 100) {
                $totalBill += $units * 6.20;
            } else {
                $totalBill += 100 * 6.20;
                $units -= 100;
                
                
                $totalBill += $units * 7.50;
            }
        }
    }
    echo "<br>";
    echo $totalBill;


    // 9.	Write php script to check if a person is eligible to vote, minimum age required for voting is 18.

    // Sample Input: 15
    // Sample Output: ‘is no eligible to vote’
    echo "<br>";
    $age = 15;
    if ($age > 18 ){
        echo "is eligible to vote";
        }
        else{
            echo "is no eligible to vote";

        }
    
        echo "<br>";

        // 10.	Write php script  to check whether a number is positive, negative or zero

        //     Sample Input: -60
        //     Sample Output: ‘Negative’

        echo "<br>";
        $num = -60;
        if ($num > 0 ){
            echo "positive";
            }
            else{
                echo "Negative";
    
            }
        
            echo "<br>";

            // 11.	Write php script to make a calculator, the calculator should contain the four main operations 

            // e.	Addition
            // f.	Subtraction
            // g.	Multiplication
            // h.	Division
            echo "<br>";
            echo 5+5 ;
            echo "<br>";
            echo 5-5;
            echo "<br>";
            echo 5*5;
            echo "<br>";
            echo 5/5;

        
            echo "<br>";

            
// 12.	Write a PHP to find the grade for the student, after calculating the average of his score in all the subject 

// Sample Inputs: [60,86,95,63,55,74,79,62,50]
// Sample Output: ‘D’
$summm = 0;
$avrig=0;
$avrarr= [60,86,95,63,55,74,79,62,50];
foreach($avrarr as $vaal){
    $summm += $vaal;

}
$avrig = $summm / count($avrarr);

echo "Avarage  " ;
echo $avrig;

echo "<br>";

if ($avrig <60){
    echo "F"; 
}
elseif ($avrig <70){
    echo "D"; 
}
elseif ($avrig <80){
    echo "C"; 
}
elseif ($avrig <90){
    echo "B"; 
}
else{
    echo "A"; 
}
?>