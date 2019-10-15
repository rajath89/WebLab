<?php 
 
$allTheStates = "Mississippi Alabama Texas Massachusetts Kansas"; 
$statesArray = []; 
$states1 = explode(' ', $allTheStates); 
$i = 0; 
//states that ends in xas 
foreach ($states1 as $state) { 
if (preg_match('/xas$/', ($state))) { 
$statesArray[$i] = ($state); 
$i = $i + 1; 
print "\nThe States that ends in x as:" . $state; 
echo"<br/>";
} 
} 

//states that begins with k and ends in s 
foreach ($states1 as $state) { 
if (preg_match('/^k.*s$/i', ($state))) { 
$statesArray[$i] = ($state); 
$i = $i + 1; 
echo "\nThe states that begins with k and ends in s:" . $state; 
echo"<br/>";
} 
} 

//states that begins with M and ends in s 
foreach($states1 as $state) { 
if (preg_match('/^M.*s$/', ($state))) { 
$statesArray[$i] = ($state); 
$i = $i + 1; 
echo "\nThe states that begins with M and ends in s:" . $state;
echo"<br/>"; 
} 
} 

//states that ends in a 
foreach($states1 as $state) { 
if (preg_match('/a$/', ($state))) { 
$statesArray[$i] = ($state); 
$i = $i + 1; 
echo "\nThe states that ends in a:" . $state; 
echo"<br/>";
} 
}

foreach ($statesArray as $element => $value) { 
print( "<br>" . $value . " is the element " . $element); 
} 
?> 
 
 
