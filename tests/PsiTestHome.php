<?php

$page_ho = $argv[1];
$u_negocio = $argv[2];
$strategy_DE = 'desktop';
$strategy_MO = 'mobile';
$home = 'Home';
$fecha = date('Y-m-d');
$id = '';

$url_de_ho = 'https://www.googleapis.com/pagespeedonline/v5/runPagespeed?url=' . $page_ho . '&key=AIzaSyDIMjNInZ0Lw4no0JJzSPjQNZ2lFtrU_u0&strategy='.$strategy_DE;
$json_de_ho = file_get_contents ($url_de_ho);
$data_de_ho = json_decode($json_de_ho,true);

$url_mo_ho = 'https://www.googleapis.com/pagespeedonline/v5/runPagespeed?url=' . $page_ho . '&key=AIzaSyDIMjNInZ0Lw4no0JJzSPjQNZ2lFtrU_u0&strategy='.$strategy_MO;
$json_mo_ho = file_get_contents ($url_mo_ho);
$data_mo_ho = json_decode($json_mo_ho,true);

//Get data from jsons 

//Getting Birst Byte from Home page on mobile and desktop 
$ttbf_de_ho = number_format(($data_de_ho["lighthouseResult"]["audits"]["time-to-first-byte"]["numericValue"]/1000),2);
$ttbfdv_de_ho = $data_de_ho["lighthouseResult"]["audits"]["time-to-first-byte"]["displayValue"];

$ttbf_mo_ho = number_format(($data_mo_ho["lighthouseResult"]["audits"]["time-to-first-byte"]["numericValue"]/1000),2);
$ttbfdv_mo_ho = $data_mo_ho["lighthouseResult"]["audits"]["time-to-first-byte"]["displayValue"];

//Getting Perfromance from Home page on mobile and desktop
$perfor_de_ho = ($data_de_ho["lighthouseResult"]["categories"]["performance"]["score"]*100);
$perfor_mo_ho = ($data_mo_ho["lighthouseResult"]["categories"]["performance"]["score"]*100);

//Getting First Contentful Paint from Home page on mobile and desktop
$fcfp_de_ho = number_format(($data_de_ho["lighthouseResult"]["audits"]["first-contentful-paint"]["numericValue"]/1000),1);
$fcfpdv_de_ho = $data_de_ho["lighthouseResult"]["audits"]["first-contentful-paint"]["displayValue"];

$fcfp_mo_ho = number_format(($data_mo_ho["lighthouseResult"]["audits"]["first-contentful-paint"]["numericValue"]/1000),1);
$fcfpdv_mo_ho = $data_mo_ho["lighthouseResult"]["audits"]["first-contentful-paint"]["displayValue"];

//Getting First Meaningful Paint from Home page on mobile and desktop
$fmfp_de_ho = number_format(($data_de_ho["lighthouseResult"]["audits"]["first-meaningful-paint"]["numericValue"]/1000),1);
$fmfpdv_de_ho = $data_de_ho["lighthouseResult"]["audits"]["first-meaningful-paint"]["displayValue"];

$fmfp_mo_ho = number_format(($data_mo_ho["lighthouseResult"]["audits"]["first-meaningful-paint"]["numericValue"]/1000),1);
$fmfpdv_mo_ho = $data_mo_ho["lighthouseResult"]["audits"]["first-meaningful-paint"]["displayValue"];

//Getting Time to Interactive from Home page on mobile and desktop
$tti_de_ho = number_format(($data_de_ho["lighthouseResult"]["audits"]["interactive"]["numericValue"]/1000),1);
$ttidv_de_ho = $data_de_ho["lighthouseResult"]["audits"]["interactive"]["displayValue"];

$tti_mo_ho = number_format(($data_mo_ho["lighthouseResult"]["audits"]["interactive"]["numericValue"]/1000),1);
$ttidv_mo_ho = $data_mo_ho["lighthouseResult"]["audits"]["interactive"]["displayValue"];

//Showing Results

echo $page_ho . '<br>';

echo "<pre>";
echo '<br>' . 'TTFB Desktop ';
print_r($ttbf_de_ho);
echo '<br>' . 'TTFBDV ';
print_r($ttbfdv_de_ho);
echo '<br>' . 'TTFB Mobile ';
print_r($ttbf_mo_ho);
echo '<br>' . 'TTFBDV ';
print_r($ttbfdv_mo_ho);

echo '<br>' . 'performance Desktop ';
print_r($perfor_de_ho);
echo '<br>' . 'performance Mobile ';
print_r($perfor_mo_ho);

echo '<br>' . 'first-contentful-paint Desktop ';
print_r($fcfp_de_ho);
echo '<br>' . 'first-contentful-paintDV ';
print_r($fcfpdv_de_ho);
echo '<br>' . 'first-contentful-paint Mobile ';
print_r($fcfp_mo_ho);
echo '<br>' . 'first-contentful-paintDV ';
print_r($fcfpdv_mo_ho);

echo '<br>' . 'first-meaningful-paint Desktop ';
print_r($fmfp_de_ho);
echo '<br>' . 'first-meaningful-paintDV ';
print_r($fmfpdv_de_ho);
echo '<br>' . 'first-meaningful-paint Mobile ';
print_r($fmfp_mo_ho);
echo '<br>' . 'first-meaningful-paintDV ';
print_r($fmfpdv_mo_ho);

echo '<br>' . 'time-to-interactive Desktop';
print_r($tti_de_ho);
echo '<br>' . 'time-to-interactiveDV ';
print_r($ttidv_de_ho);
echo '<br>' . 'time-to-interactive Mobile ';
print_r($tti_mo_ho);
echo '<br>' . 'time-to-interactiveDV ';
print_r($ttidv_mo_ho);

echo "</pre>";

/*
//Calling file to conect with DDBB
require_once('conectionps.php');


//Checking Json's values
if ($ttbf_de_ho >= 9000 or $ttbf_de_ho == 0 or
    $ttbf_de_ca >= 9000 or $ttbf_de_ca == 0 or
    $ttbf_de_pr >= 9000 or $ttbf_de_pr == 0 or
    $ttbf_mo_ho >= 9000 or $ttbf_mo_ho == 0 or
    $ttbf_mo_ca >= 9000 or $ttbf_mo_ca == 0 or
    $ttbf_mo_pr >= 9000 or $ttbf_mo_pr == 0) {
        
        echo 'El valor de Json no es valido y por lo tanto no se registra nada en la BBDD';

}else{

    //Conecting with DDBB

    $conetion=mysqli_connect($db_host,$db_usuario,$db_password); 

if (mysqli_connect_errno()) {
    
    echo 'Fallo al conectar con la base de BBDD';
    exit();
}

mysqli_select_db($conetion, $db_nombre) or die ("No se encuentra la BBDD");
mysqli_set_charset($conetion, "utf8");

//Insert Data in DDBB Home page
$query_ho = "INSERT INTO api_fb (
    id,
    unida_de_negocio,
    fecha,
    pagina,
    primer_render_contenido_ord,
    primer_render_significativo_ord,
    tiempo_interactiva_ord,
    firstByte_ord,
    primer_render_contenido_mov,
    primer_render_significativo_mov,
    tiempo_interactiva_mov,
    firstByte_mov)
    VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
$resulset_ho=mysqli_prepare($conetion,$query_ho);

$ok_ho=mysqli_stmt_bind_param($resulset_ho,"isssdddddddd", $id, $u_negocio, $fecha, $home, $fcfp_de_ho, $fmfp_de_ho, $tti_de_ho, $ttbf_de_ho, $fcfp_mo_ho, $fmfp_mo_ho, $tti_mo_ho, $ttbf_mo_ho);

$ok_ho=mysqli_stmt_execute($resulset_ho);

if ($ok_ho==false) {
    echo 'Error al agregar resgistro a la BBDD <br>';
    mysqli_stmt_close($resulset_ho);
}else{

    mysqli_stmt_close($resulset_ho);
}

//Insert data in DDBB Performance Home Page

$query_per_ho = "INSERT INTO api_psi (
    id,
    u_negocio,
    fecha,
    pagina,
    movil,
    ordenador)
    VALUES(?, ?, ?, ?, ?, ?)";
    
$resulset_per_ho=mysqli_prepare($conetion,$query_per_ho);

$ok_per_ho=mysqli_stmt_bind_param($resulset_per_ho,"isssii", $id, $u_negocio, $fecha, $home, $perfor_mo_ho,$perfor_de_ho);

$ok_per_ho=mysqli_stmt_execute($resulset_per_ho);

if ($ok_per_ho==false) {
    echo 'Error al agregar resgistro a la BBDD <br>';
    mysqli_stmt_close($resulset_per_ho);
}else{

    mysqli_stmt_close($resulset_per_ho);
}



//Clossing conection with DDBB
mysqli_close($conetion);

}
*/