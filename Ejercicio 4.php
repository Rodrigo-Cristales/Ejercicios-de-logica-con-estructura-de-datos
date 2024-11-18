<?php



$filas = 8;

        for($i =1;  $i < $filas; $i++){
            

                for($x = $filas - $i; $x > 0  ;$x--){
                    echo " ";
                }

                for ($j = 1; $j <= (2* $i - 1); $j++){
                    echo "*";
                }
                    echo "\n";
        };






















?>