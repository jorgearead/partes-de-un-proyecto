<?php
//Este archivo es el que se encarga de mandar a llamar tanto a las vistas(home,nosotros,etc.)

  $URLBASE = "http://localhost/partesDeUnProyecto/llamar_todas_las_vistas_a_archivo_index/";

  $TITLE = "";

  $URL = ( isset($_GET['url']) ) ? $_GET['url'] : "home" ;
  
  $INTERNA = ( file_exists("$URL.php") ) ? "./$URL.php" : "./home.php" ;
  

  switch ( $URL ) {
    case 'home':
      $TITLE = "Home";
    break;
    case 'nosotros':
      $TITLE = "Nosotros";
    break;
    default:
      $TITLE = "index";
    break;
  }




?>