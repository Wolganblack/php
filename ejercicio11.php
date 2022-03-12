<?php
function esperfectoelnumero($N)
{
   
    $sum = 0;
       
   
    for ($i = 1; $i < $N; $i++)
    {
        if ($N % $i == 0)
        {
            $sum = $sum + $i;
        }      
    }
      
    
    return $sum == $N;
}
   

$N= $_GET['numero'];
  
if (esperfectoelnumero($N))
    echo "Numero perfecto ";
else
    echo "Numero imperfecto";
?>