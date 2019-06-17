<?php

/* NOTA IMPORTANTE */
// Este archivo PHP debe guardarse con encoding UTF8"

/*+++++++++++++++++++++++++++++++++++++++++++++++++/
/*++++++++++++++++++ DB CONNECTION ****************/
/**************************************************/

$servername = "localhost";
$username = "yasser";
$password = "bentley97";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$conn->select_db("melicar");

/* cambiar el conjunto de caracteres a utf8 */
$conn->set_charset("utf8");

/*+++++++++++++++++++++++++++++++++++++++++++++++++/
/**************************************************/

// Elimina caracteres extraños que me pueden molestar en las cadenas que meto en los item de los RSS
function sanitize($str) {
	$str=str_replace("&","&amp;",$str);
	$str=str_replace("\"","&quot;",$str);
	$str=str_replace("'","&apos;",$str);
	$str=str_replace(">","&gt;",$str);
	$str=str_replace("<","&lt;",$str);
	return $str;
}




$sql = "SELECT * FROM valoraciones";


$result = $conn->query($sql);



//comienzo a escribir el código del RSS
$data = '<?xml version="1.0" encoding="iso-8859-1" ?>';

//Cabeceras del RSS
$data .= '<rss version="2.0">';


//Datos generales del Canal. Edítalos conforme a tus necesidades
$titulo_canal="RSS";         
$link_canal = "http://localhost/melicar/php/templates/temp-valoraciones";
$descripcion_canal="AQUÍ VA LA CHANNEL'S DESCRIPTION";
$idioma_canal = "es-es";
$copyright_canal = "&copy; melicar";

$data .= "<channel>\n";
$data .= "<title>".sanitize($opinion)."</title>";
$data .= "<description>".sanitize($puntuacions)."</description>";

if ($result->num_rows > 0) {
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
       //elimino caracteres extraños en campos susceptibles de tenerlos
	   $titulo=sanitize($row["opinion_val"]);         
	   $desc=sanitize($row["puntuacion_val"]);

	   $data .= "<item>\n";
	   $data .= "<title>".$titulo."</title>\n";
	   $data .= "<description>".$desc."</description>\n";
	   $data .= "</item>\n";
    }
}

//cierro las etiquetas del XML
$data .= "</channel>";
$data .= "</rss>";


//creo cabeceras desde PHP para decir que devuelvo un XML
header("Content-type: text/xml;charset=utf-8");

echo $data;