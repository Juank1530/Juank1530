<?php


//Url with parameters to send ussing $_GET and argv to send its paraemters 
//http://192.168.10.192:90/psi_1.php https://www.farmalisto.com.co/ https://www.farmalisto.com.co/2078-dermocosmetica https://www.farmalisto.com.co/antisepticos/3401-comprar-agua-oxigenada-frasco-x-120-ml-precio-7702560000010.html farmalisto_co

$page_ho = $argv[1];
$page_ca = $argv[2];
$page_pr = $argv[3];
$u_negocio = $argv[4];

$strategy_MO = 'mobile';
$strategy_DE = 'desktop'; 
$home = 'Home';
$category = 'Categoria';
$product = 'Producto';
$fecha = date('Y-m-d');
$id = '';

//Consuming API of three pages 
$url_de_ho = 'https://www.googleapis.com/pagespeedonline/v5/runPagespeed?url=' . $page_ho . '&key=AIzaSyDIMjNInZ0Lw4no0JJzSPjQNZ2lFtrU_u0&strategy='.$strategy_DE;
$json_de_ho = file_get_contents ($url_de_ho);
$data_de_ho = json_decode($json_de_ho,true);

$url_mo_ho = 'https://www.googleapis.com/pagespeedonline/v5/runPagespeed?url=' . $page_ho . '&key=AIzaSyDIMjNInZ0Lw4no0JJzSPjQNZ2lFtrU_u0&strategy='.$strategy_MO;
$json_mo_ho = file_get_contents ($url_mo_ho);
$data_mo_ho = json_decode($json_mo_ho,true);

$url_de_ca = 'https://www.googleapis.com/pagespeedonline/v5/runPagespeed?url=' . $page_ca . '&key=AIzaSyDIMjNInZ0Lw4no0JJzSPjQNZ2lFtrU_u0&strategy='.$strategy_DE;
$json_de_ca = file_get_contents ($url_de_ca);
$data_de_ca = json_decode($json_de_ca,true);

$url_mo_ca = 'https://www.googleapis.com/pagespeedonline/v5/runPagespeed?url=' . $page_ca . '&key=AIzaSyDIMjNInZ0Lw4no0JJzSPjQNZ2lFtrU_u0&strategy='.$strategy_MO;
$json_mo_ca = file_get_contents ($url_mo_ca);
$data_mo_ca = json_decode($json_mo_ca,true);

$url_de_pr = 'https://www.googleapis.com/pagespeedonline/v5/runPagespeed?url=' . $page_pr . '&key=AIzaSyDIMjNInZ0Lw4no0JJzSPjQNZ2lFtrU_u0&strategy='.$strategy_DE;
$json_de_pr = file_get_contents ($url_de_pr);
$data_de_pr = json_decode($json_de_pr,true);

$url_mo_pr = 'https://www.googleapis.com/pagespeedonline/v5/runPagespeed?url=' . $page_pr . '&key=AIzaSyDIMjNInZ0Lw4no0JJzSPjQNZ2lFtrU_u0&strategy='.$strategy_MO;
$json_mo_pr = file_get_contents ($url_mo_pr);
$data_mo_pr = json_decode($json_mo_pr,true);

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


//Getting First Byte from Category page on mobile and desktop 
$ttbf_de_ca = number_format(($data_de_ca["lighthouseResult"]["audits"]["time-to-first-byte"]["numericValue"]/1000),2);
$ttbfdv_de_ca = $data_de_ca["lighthouseResult"]["audits"]["time-to-first-byte"]["displayValue"];

$ttbf_mo_ca = number_format(($data_mo_ca["lighthouseResult"]["audits"]["time-to-first-byte"]["numericValue"]/1000),2);
$ttbfdv_mo_ca = $data_mo_ca["lighthouseResult"]["audits"]["time-to-first-byte"]["displayValue"];

//Getting Perfromance from Category page on mobile and desktop
$perfor_de_ca = ($data_de_ca["lighthouseResult"]["categories"]["performance"]["score"]*100);
$perfor_mo_ca = ($data_mo_ca["lighthouseResult"]["categories"]["performance"]["score"]*100);

//Getting First Contentful Paint from Category page on mobile and desktop
$fcfp_de_ca = number_format(($data_de_ca["lighthouseResult"]["audits"]["first-contentful-paint"]["numericValue"]/1000),1);
$fcfpdv_de_ca = $data_de_ca["lighthouseResult"]["audits"]["first-contentful-paint"]["displayValue"];

$fcfp_mo_ca = number_format(($data_mo_ca["lighthouseResult"]["audits"]["first-contentful-paint"]["numericValue"]/1000),1);
$fcfpdv_mo_ca = $data_mo_ca["lighthouseResult"]["audits"]["first-contentful-paint"]["displayValue"];

//Getting First Meaningful Paint from Category page on mobile and desktop
$fmfp_de_ca = number_format(($data_de_ca["lighthouseResult"]["audits"]["first-meaningful-paint"]["numericValue"]/1000),1);
$fmfpdv_de_ca = $data_de_ca["lighthouseResult"]["audits"]["first-meaningful-paint"]["displayValue"];

$fmfp_mo_ca = number_format(($data_mo_ca["lighthouseResult"]["audits"]["first-meaningful-paint"]["numericValue"]/1000),1);
$fmfpdv_mo_ca = $data_mo_ca["lighthouseResult"]["audits"]["first-meaningful-paint"]["displayValue"];

//Getting Time to Interactive from Category page on mobile and desktop
$tti_de_ca = number_format(($data_de_ca["lighthouseResult"]["audits"]["interactive"]["numericValue"]/1000),1);
$ttidv_de_ca = $data_de_ca["lighthouseResult"]["audits"]["interactive"]["displayValue"];

$tti_mo_ca = number_format(($data_mo_ca["lighthouseResult"]["audits"]["interactive"]["numericValue"]/1000),1);
$ttidv_mo_ca = $data_mo_ca["lighthouseResult"]["audits"]["interactive"]["displayValue"];


//Getting First Byte from Product page on mobile and desktop 
$ttbf_de_pr = number_format(($data_de_pr["lighthouseResult"]["audits"]["time-to-first-byte"]["numericValue"]/1000),2);
$ttbfdv_de_pr = $data_de_pr["lighthouseResult"]["audits"]["time-to-first-byte"]["displayValue"];

$ttbf_mo_pr = number_format(($data_mo_pr["lighthouseResult"]["audits"]["time-to-first-byte"]["numericValue"]/1000),2);
$ttbfdv_mo_pr = $data_mo_pr["lighthouseResult"]["audits"]["time-to-first-byte"]["displayValue"];

//Getting Perfromance from Product page on mobile and desktop
$perfor_de_pr = ($data_de_pr["lighthouseResult"]["categories"]["performance"]["score"]*100);
$perfor_mo_pr = ($data_mo_pr["lighthouseResult"]["categories"]["performance"]["score"]*100);

//Getting First Contentful Paint from Product page on mobile and desktop
$fcfp_de_pr = number_format(($data_de_pr["lighthouseResult"]["audits"]["first-contentful-paint"]["numericValue"]/1000),1);
$fcfpdv_de_pr = $data_de_pr["lighthouseResult"]["audits"]["first-contentful-paint"]["displayValue"];

$fcfp_mo_pr = number_format(($data_mo_pr["lighthouseResult"]["audits"]["first-contentful-paint"]["numericValue"]/1000),1);
$fcfpdv_mo_pr = $data_mo_pr["lighthouseResult"]["audits"]["first-contentful-paint"]["displayValue"];

//Getting First Meaningful Paint from Product page on mobile and desktop
$fmfp_de_pr = number_format(($data_de_pr["lighthouseResult"]["audits"]["first-meaningful-paint"]["numericValue"]/1000),1);
$fmfpdv_de_pr = $data_de_pr["lighthouseResult"]["audits"]["first-meaningful-paint"]["displayValue"];

$fmfp_mo_pr = number_format(($data_mo_pr["lighthouseResult"]["audits"]["first-meaningful-paint"]["numericValue"]/1000),1);
$fmfpdv_mo_pr = $data_mo_pr["lighthouseResult"]["audits"]["first-meaningful-paint"]["displayValue"];

//Getting Time to Interactive from Product page on mobile and desktop
$tti_de_pr = number_format(($data_de_pr["lighthouseResult"]["audits"]["interactive"]["numericValue"]/1000),1);
$ttidv_de_pr = $data_de_pr["lighthouseResult"]["audits"]["interactive"]["displayValue"];

$tti_mo_pr = number_format(($data_mo_pr["lighthouseResult"]["audits"]["interactive"]["numericValue"]/1000),1);
$ttidv_mo_pr = $data_mo_pr["lighthouseResult"]["audits"]["interactive"]["displayValue"];

//Showing Results

// echo $page_ho . '<br>';

// echo "<pre>";
// echo '<br>' . 'TTFB Desktop ';
// print_r($ttbf_de_ho);
// echo '<br>' . 'TTFBDV ';
// print_r($ttbfdv_de_ho);
// echo '<br>' . 'TTFB Mobile ';
// print_r($ttbf_mo_ho);
// echo '<br>' . 'TTFBDV ';
// print_r($ttbfdv_mo_ho);

// echo '<br>' . 'performance Desktop ';
// print_r($perfor_de_ho);
// echo '<br>' . 'performance Mobile ';
// print_r($perfor_mo_ho);

// echo '<br>' . 'first-contentful-paint Desktop ';
// print_r($fcfp_de_ho);
// echo '<br>' . 'first-contentful-paintDV ';
// print_r($fcfpdv_de_ho);
// echo '<br>' . 'first-contentful-paint Mobile ';
// print_r($fcfp_mo_ho);
// echo '<br>' . 'first-contentful-paintDV ';
// print_r($fcfpdv_mo_ho);

// echo '<br>' . 'first-meaningful-paint Desktop ';
// print_r($fmfp_de_ho);
// echo '<br>' . 'first-meaningful-paintDV ';
// print_r($fmfpdv_de_ho);
// echo '<br>' . 'first-meaningful-paint Mobile ';
// print_r($fmfp_mo_ho);
// echo '<br>' . 'first-meaningful-paintDV ';
// print_r($fmfpdv_mo_ho);

// echo '<br>' . 'time-to-interactive Desktop';
// print_r($tti_de_ho);
// echo '<br>' . 'time-to-interactiveDV ';
// print_r($ttidv_de_ho);
// echo '<br>' . 'time-to-interactive Mobile ';
// print_r($tti_mo_ho);
// echo '<br>' . 'time-to-interactiveDV ';
// print_r($ttidv_mo_ho);

// echo "</pre>";


// echo '<br>' . $page_ca . '<br>';

// echo "<pre>";
// echo '<br>' . 'TTFB Desktop ';
// print_r($ttbf_de_ca);
// echo '<br>' . 'TTFBDV ';
// print_r($ttbfdv_de_ca);
// echo '<br>' . 'TTFB Mobile ';
// print_r($ttbf_mo_ca);
// echo '<br>' . 'TTFBDV ';
// print_r($ttbfdv_mo_ca);

// echo '<br>' . 'performance Desktop ';
// print_r($perfor_de_ca);
// echo '<br>' . 'performance Mobile ';
// print_r($perfor_mo_ca);

// echo '<br>' . 'first-contentful-paint Desktop ';
// print_r($fcfp_de_ca);
// echo '<br>' . 'first-contentful-paintDV ';
// print_r($fcfpdv_de_ca);
// echo '<br>' . 'first-contentful-paint Mobile ';
// print_r($fcfp_mo_ca);
// echo '<br>' . 'first-contentful-paintDV ';
// print_r($fcfpdv_mo_ca);

// echo '<br>' . 'first-meaningful-paint Desktop ';
// print_r($fmfp_de_ca);
// echo '<br>' . 'first-meaningful-paintDV ';
// print_r($fmfpdv_de_ca);
// echo '<br>' . 'first-meaningful-paint Mobile ';
// print_r($fmfp_mo_ca);
// echo '<br>' . 'first-meaningful-paintDV ';
// print_r($fmfpdv_mo_ca);

// echo '<br>' . 'time-to-interactive Desktop';
// print_r($tti_de_ca);
// echo '<br>' . 'time-to-interactiveDV ';
// print_r($ttidv_de_ca);
// echo '<br>' . 'time-to-interactive Mobile ';
// print_r($tti_mo_ca);
// echo '<br>' . 'time-to-interactiveDV ';
// print_r($ttidv_mo_ca);

// echo "</pre>";


// echo '<br>' . $page_pr . '<br>';

// echo "<pre>";
// echo '<br>' . 'TTFB Desktop ';
// print_r($ttbf_de_pr);
// echo '<br>' . 'TTFBDV ';
// print_r($ttbfdv_de_pr);
// echo '<br>' . 'TTFB Mobile ';
// print_r($ttbf_mo_pr);
// echo '<br>' . 'TTFBDV ';
// print_r($ttbfdv_mo_pr);

// echo '<br>' . 'performance Desktop ';
// print_r($perfor_de_pr);
// echo '<br>' . 'performance Mobile ';
// print_r($perfor_mo_pr);

// echo '<br>' . 'first-contentful-paint Desktop ';
// print_r($fcfp_de_pr);
// echo '<br>' . 'first-contentful-paintDV ';
// print_r($fcfpdv_de_pr);
// echo '<br>' . 'first-contentful-paint Mobile ';
// print_r($fcfp_mo_pr);
// echo '<br>' . 'first-contentful-paintDV ';
// print_r($fcfpdv_mo_pr);

// echo '<br>' . 'first-meaningful-paint Desktop ';
// print_r($fmfp_de_pr);
// echo '<br>' . 'first-meaningful-paintDV ';
// print_r($fmfpdv_de_pr);
// echo '<br>' . 'first-meaningful-paint Mobile ';
// print_r($fmfp_mo_pr);
// echo '<br>' . 'first-meaningful-paintDV ';
// print_r($fmfpdv_mo_pr);

// echo '<br>' . 'time-to-interactive Desktop';
// print_r($tti_de_pr);
// echo '<br>' . 'time-to-interactiveDV ';
// print_r($ttidv_de_pr);
// echo '<br>' . 'time-to-interactive Mobile ';
// print_r($tti_mo_pr);
// echo '<br>' . 'time-to-interactiveDV ';
// print_r($ttidv_mo_pr);

// echo "</pre>";

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

//End


//Insert Data in DDBB Category page 

$query_ca = "INSERT INTO api_fb (
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
    
$resulset_ca=mysqli_prepare($conetion,$query_ca);

$ok_ca=mysqli_stmt_bind_param($resulset_ca,"isssdddddddd", $id, $u_negocio, $fecha, $category, $fcfp_de_ca, $fmfp_de_ca, $tti_de_ca, $ttbf_de_ca, $fcfp_mo_ca, $fmfp_mo_ca, $tti_mo_ca, $ttbf_mo_ca);

$ok_ca=mysqli_stmt_execute($resulset_ca);

if ($ok_ca==false) {
    echo 'Error al agregar resgistro a la BBDD <br>';
    mysqli_stmt_close($resulset_ca);
}else{

    mysqli_stmt_close($resulset_ca);
}

//Insert data in DDBB Performance Category Page

$query_per_ca = "INSERT INTO api_psi (
    id,
    u_negocio,
    fecha,
    pagina,
    movil,
    ordenador)
    VALUES(?, ?, ?, ?, ?, ?)";
    
$resulset_per_ca=mysqli_prepare($conetion,$query_per_ca);

$ok_per_ca=mysqli_stmt_bind_param($resulset_per_ca,"isssii", $id, $u_negocio, $fecha, $category, $perfor_mo_ca,$perfor_de_ca);

$ok_per_ca=mysqli_stmt_execute($resulset_per_ca);

if ($ok_per_ca==false) {
    echo 'Error al agregar resgistro a la BBDD <br>';
    mysqli_stmt_close($resulset_per_ca);
}else{

    mysqli_stmt_close($resulset_per_ca);
}

//End


//Insert Data in DDBB Product page

$query_pr = "INSERT INTO api_fb (
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
    
$resulset_pr=mysqli_prepare($conetion,$query_pr);

$ok_pr=mysqli_stmt_bind_param($resulset_pr,"isssdddddddd", $id, $u_negocio, $fecha, $product, $fcfp_de_pr, $fmfp_de_pr, $tti_de_pr, $ttbf_de_pr, $fcfp_mo_pr, $fmfp_mo_pr, $tti_mo_pr, $ttbf_mo_pr);

$ok_pr=mysqli_stmt_execute($resulset_pr);

if ($ok_pr==false) {
    echo 'Error al agregar resgistro a la BBDD <br>';
    mysqli_stmt_close($resulset_pr);
}else{
    echo 'Registros agredados correctamente a la BBDD <br>';

    mysqli_stmt_close($resulset_pr);
}

//Insert data in DDBB Performance Category Page

$query_per_pr = "INSERT INTO api_psi (
    id,
    u_negocio,
    fecha,
    pagina,
    movil,
    ordenador)
    VALUES(?, ?, ?, ?, ?, ?)";
    
$resulset_per_pr=mysqli_prepare($conetion,$query_per_pr);

$ok_per_pr=mysqli_stmt_bind_param($resulset_per_pr,"isssii", $id, $u_negocio, $fecha, $product, $perfor_mo_pr,$perfor_de_pr);

$ok_per_pr=mysqli_stmt_execute($resulset_per_pr);

if ($ok_per_pr==false) {
    echo 'Error al agregar resgistro a la BBDD <br>';
    mysqli_stmt_close($resulset_per_pr);
}else{

    mysqli_stmt_close($resulset_per_pr);
}

//End

//Clossing conection with DDBB
mysqli_close($conetion);

}
