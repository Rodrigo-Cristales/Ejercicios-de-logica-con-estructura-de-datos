
<?php



            function Frecuencia($cadena){

                $frecuencia = array();
                $cadena = strtolower($cadena);
                
                for($i = 0; $i < strlen($cadena); $i++){
                    $caracter = $cadena[$i];


                        if(!array_key_exists($caracter,$frecuencia)){
                            $frecuencia[$caracter] = 0;
                        }

                        $frecuencia [$caracter]++;
                }
                return $frecuencia;
            }


            $cadena = "Holaplaneta";
            $resul = Frecuencia($cadena);

                foreach($resul as $caracter => $cantidad){
                    echo "El caracter '$caracter' aparece $cantidad  veces \n";
                }












?>