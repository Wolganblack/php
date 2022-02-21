<?php

$i=1;
$x=30;

for($i=1;$i<=$x;$i++)
{
       
$num=pow($i,2);

if (($num % 2) == 0) {
   
    echo $num. " Es un número par". "\n";
    
} else {
    
    echo $num. " Es un número impar" ."\n";
    


}
}

?>