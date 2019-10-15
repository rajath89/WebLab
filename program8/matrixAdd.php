<!DOCTYPE html>  
<html>  
<body>  
<?php  
//Initialize matrix a  
$a = array(  
            array(1, 0, 1),  
            array(4, 5, 6),  
            array(1, 2, 3)  
          );  
   
//Initialize matrix b  
$b = array(  
              array(1, 1, 1),  
             array(2, 3, 1),  
             array(1, 5, 1)  
           );  
echo"<h2>Matrix</h2>";
for($row=0;$row<3;$row++) {

for($col=0;$col<3;$col++){
echo " ".$a[$row][$col];

}
echo"<br>";
}
echo"<h2>Matrix</h2>";
for($row=0;$row<3;$row++) {

for($col=0;$col<3;$col++){
echo " ".$b[$row][$col];

}
echo"<br>";
}
   
//Calculates number of rows and columns present in given matrix  
$rows = count($a);  
$cols = count($a[0]);  
   
//Array sum will hold the result and initialize it with 0  
$sum = array_fill(0, $cols, array_fill(0, $rows, 0));  
   
//Performs addition of matrices a and b. Store the result in matrix sum  
for($i = 0; $i < $rows; $i++){  
    for($j = 0; $j < $cols; $j++){  
        $sum[$i][$j] = $a[$i][$j] + $b[$i][$j];  
    }  
}  
   
echo"<h2> resultant Matrix</h2>";
for($i = 0; $i < $rows; $i++){  
    for($j = 0; $j < $cols; $j++){  
       print($sum[$i][$j] . " ");  
    }  
    echo("<br>");  
}    
?>  
</body>  
</html>  
