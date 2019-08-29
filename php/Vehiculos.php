<?php

class Coche {
    //Declararción de atributos
    //Private determina que la propiedad solo se puede acceder desde la misma clase
    //Protected determina que la propiedad es accesible desde la misma clase y las que heredan
    protected $ruedas;
    protected $color;
    Var $motor;

     //Construtor de la clase da un estado inicial al objeto 
     function Coche(){

        $this->ruedas=4;
        $this->color="";
        $this->motor=1600;
    }

    //Métodos de los objetos

    function arrancar(){

        echo"Estoy arrancando<br>";
    }

    function girar(){

        echo"Estoy girando<br>";
    }

    function frenar(){

        echo"Estoy frenando<br>";   
    }

    function set_color($color_coche, $nombre_coche){

        $this->color=$color_coche;
        echo "El color del " . $nombre_coche . " es " . $this->color . "<br>";
    }

    //Mètodo Setter sirve para modificar las propiedades de los objetos
    //Mètodo getter sirve para ver las propiedades de los objetos
    function get_ruedas(){

        return $this->ruedas;
    }

    function get_motor(){

        return $this->motor;
    }


    
}

//-----------------------------------------------
//Herencia
class Camion extends Coche {
  

    //Construtor de la clase da un estado inicial al objeto 
    function Camion(){

        $this->ruedas=8;
        $this->color="";
        $this->motor=2600;
    }
//  Sobre escritura de mètodos
    function set_color($color_camion, $nombre_camion){

        $this->color=$color_camion;
        echo "El color del " . $nombre_camion . " es " . $this->color . "<br>";
    }

    //Uso de parent para no sobrescribir todo el mètodo
    function arrancar(){

        //Parent ejecuta todo lo que està en el mètodo arrancar de la clase coche
        parent:: arrancar();
        echo "Camión arrancado<br>";
    }

    
    
    

   

    
}

//*****Ejemplos de Instancias y metodos */

 //Instanciación de objetos de la clase Coche
           /* $renault = new Coche();
            $seat = new Coche();
            $mazda = new Coche();

            //Mostrar las propiedades y los métodos de la clase coche
            $mazda->girar();
            echo $mazda->ruedas;

            echo "<h2>Este es otro ejemplo</h2>";

            $renault->establece_color("Rojo","Renault");

            $seat->establece_color("Azul", "Seat");*/
             








