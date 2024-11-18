<?php


        $array = [2,3,4,5,5,1,4,5,2,2];
            
        $SumaDeNumerosPares = 0;

            //For para contar los numeros pares que tenga el array

            for($i = 0; $i < count($array); $i++){
                    if($array [$i] % 2 === 0 ){
                        $SumaDeNumerosPares += $array [$i];
                    }   
            }
            print_r("La suma de los numeros pares es : $SumaDeNumerosPares");
?>