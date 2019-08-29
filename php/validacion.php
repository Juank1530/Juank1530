<style>
	h1{
		text-align:center;
	}
	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}
</style>

<?php


        /* The method (Isset) is predetermined and it checks if the user pressed the button send.
        *When you use ($ POST) get the value of each variable
        */
    if (isset($_POST["enviando"]) ) {

        $usuario=$_POST["nombre_usuario"];
        $edad=$_POST["edad_usuario"];

        if ($usuario=="Juank" && $edad>=18) {

            echo "<p class=\"validado\">Puedes entrar</p>";

        } else {

            echo "<p class=\"no_validado\" >No puedes entrar</p>";
            
        }
    } 
    



?>