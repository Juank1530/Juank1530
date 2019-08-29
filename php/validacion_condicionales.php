<style>
            h1{
                text-aling:center;
            }
            table{
                background-color:#FFC;
                padding:5px;
                border:#666 5px solid;
            }
            .no_valido{
                font-size:18px;
                color:#F00;
                font-weight:bold;
            }
            .validado{
                font-size: 18px;
                color: #0C3;
                font-weight: bold;
            }
  </style>

  <?php
    /**comprobar que se haya pulsado el boton de enviar*/
    if(isset($_POST["enviando"])){

        $edad=$_POST["edad_usuario"];

        if($edad<0 || $edad>120){
            echo"la edad ingresada no es correcta";
        }

        else if($edad<=18){
            echo"Eres menor de edad";

        }else if($edad<=40){
            echo"Eres joven";

        }else if($edad<=65){
            echo"Eres maduro";

        }else{
            echo"Cuídate";
        }

    }


  
  ?>