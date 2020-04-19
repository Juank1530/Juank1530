<?php
require 'views/header.php';
?>

<div class="contenedor">
    <div class="post">
        <article>
            <h2 class="titulo">BI Care 24 Manager Clinic</h2>
            <p class="fecha"><?php echo date("F j, Y, g:i a"); ?></p>
            <div class="thumb">
                <a href="#">
                    <img src="<?php echo RUTA; ?>/imagenes/1.png" alt="">
                </a>
            </div>
            <div>
                <p class="article">Esta página contiene diferentes informes, extraidos de la Base de Datos del Manager Clinic. Tales como:</p>
                <lu class="lista">
                    <li>Informe de citas con hoar de registro <a href="http://192.168.10.192:3000/embed/dashboard/eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJwYXJhbXMiOnt9LCJyZXNvdXJjZSI6eyJkYXNoYm9hcmQiOjQ4fX0.TogbORVtikV3RMqGiEkPBG4G9eeP8zNvmv099ute-UE?filtro_de_fecha=past30days~#theme=night&bordered&titled">ver informe...</a>
                    </li>
                    <li>Informe de citas con asistencia <a href="#">ver informe...</a></li>
                    <li>Informe detallado de ventas Y servicios <a href="http://192.168.10.192:3000/embed/dashboard/eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJwYXJhbXMiOnt9LCJyZXNvdXJjZSI6eyJkYXNoYm9hcmQiOjQ5fSwiZXhwIjoxNTg3MTEyNTYyLjB9.GovYlBtpsaVWQkcq0WECt78pWahjESo0EtxPHQNZTxM?filtro_de_fecha=past30days~#theme=night&bordered&titled">ver informe...</a></li>
                    <li>Informe general, últimos 60 días <a href="http://192.168.10.192:3000/embed/dashboard/eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJwYXJhbXMiOnt9LCJyZXNvdXJjZSI6eyJkYXNoYm9hcmQiOjgxfX0.9nurgQxt7P2AiDA5SvnQ7CKWb_oZuDqCl6QtBdpuHhE#theme=night&bordered=true&titled=true">ver informe...</a></li>
                    <li>Informe general, completo <a href="#">ver informe...</a></li>
                </lu>
            </div>
        </article>
    </div>

</div>






<?php require 'views/footer.php' ?>