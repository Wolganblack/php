<?php 

        echo "El numero debe comprender entre 1 y 100" . "<br>";
       $numero= $_GET['numero'];
       if($numero>=1 && $numero <=100)
       {
        for($i=1; $i<=100 ;$i++)
        {
           if (($i % $numero) == 0)
            {
                echo "Los multipos de: " .$numero . "  este es su resultado :" .$i  ."<br>"; 
               }
        }
        }
        else
                {
                    echo "EL numero que usted pidio es difirente de lo estipulado";
                }
