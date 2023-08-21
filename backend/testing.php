<?php


//Assign a date as a string
$dateVal = "2022-09-30";

//Print assigned date value
echo "The assigned date is ", $dateVal, "<BR/>";
$a = date('Y-m-d', strtotime($dateVal. ' + 15 days'));
//Print the date after adding 15 days
echo "The date after 15 days is $a ";


?>