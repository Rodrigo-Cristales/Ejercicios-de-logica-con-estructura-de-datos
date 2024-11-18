<?php

    $array = [1,2,3,4,5,6,7,8,9,10];

    $numeroInvertidos = [];

        for($i = count($array) - 1; $i >= 0; $i--){
            $numeroInvertidos [] = $array[$i];
        }

            echo "Lista de numeros original: " . implode(",", $array). "\n";

            echo "Lista de numeros invertidos: " . implode(",", $numeroInvertidos) . "\n";
?>