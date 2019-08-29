<?php

    class compra_vehiculos{

        private $precio_base;

        //esta es una variable estatica y no pertenece a ningùn objeto de esta clase
        //lo comparte pero no tienen copia de èl.
        private static $ayuda=0;

        //constructor de la clase 

        function compra_vehiculos($gama){

            if ($gama=="urbano"){

                $this->precio_base=10000;

            }elseif ($gama=="compacto") {
                
                $this->precio_base=20000;

            }elseif ($gama=="berlina") {

                $this->precio_base=30000;
            }
        } //Fin del constructor

        //Métodos de la clase

        function climatizador(){

            $this->precio_base+=2000;
        }

        function navegador_gps(){

            $this->precio_base+=2500;
        }

        function tapiceria_cuero($color){

            if ($color=="blanco") {

                $this->precio_base+=3000;
            } elseif ($color=="beige") {

                $this->precio_base+=3500;
            } else {

                $this->precio_base+=5000;
            }
            
        }

        function precio_final(){

            //Para poder acceder a la variable estatica se requiere usar self::
            $valor_final=$this->precio_base-self::$ayuda;

            return $valor_final;
        }

        static function descuento(){

            if(date("m-d-y")>"02-03-19"){

                //self:: es la única forma de acceder a la variable estatica privada $ayuda
                //y si no llamo a la función el código principal nunca va a descontar nada 
                self::$ayuda=4500;

            }
        }
    }
?>