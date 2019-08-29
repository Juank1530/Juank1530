<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Condicionales</title>
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
    </head>
        <body>
            <h1>USANDO CONDICIONALES</h1>
                <Form action="validacion_condicionales.php" method="post" name="datos_usuario" id="datos_usuario">
                    <table width="15%" aling="Center">
                        <tr>
                            <td>Nombre:</td>
                            <td><label for="nombre_usuario"></label>
                            <input type="text" name="nombre_usuario" id="nombre_usuario"></td>   
                        </tr>
                        <tr>
                            <td>Edad:</td>
                            <td><label for="edad_usuario"></label>
                            <input type="text" name="edad_usuario" id="edad_usuario"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2" aling="Center"><input type="submit" name="enviando"id="enviando" value="enviar"></td>
                        </tr>
                    </table>
                </Form>
        </body>
        
</html>
