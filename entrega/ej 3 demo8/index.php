<?php
    
    $cuenta=0;
    for($i = 0; $i <= 9; $i++)
    {
        for($j = 0; $j <= 10; $j++)
        {
            if($i==0 && $j>0)
            {
                echo $cuenta;
                $cuenta++;
                echo "<td>";
            }
            if($j == 0 && $i > 0)
                 echo"$i";                 
            if($j > 0 && $i > 0 && $j < 10)
                echo $i * $j;
            echo "<td>";
        }
       echo"<br>"; //horizontal
    }
     echo "<td></td>";
?>