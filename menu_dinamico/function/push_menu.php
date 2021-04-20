<?php
    include_once "db.php";//se incluye el archivo de configuracion de la DB.

    /*--Funcion main_manu agrega las columnas principales del menu--*/
    function main_menu(){
        $tabla = new DBManager;//Se crea un objeto de la DB.
        $stmt = $tabla->conn->prepare("SELECT * FROM tbl_menu WHERE level=0 ORDER BY position ASC");
	    $stmt->execute();
        $res = $stmt->fetchAll();
        return $res;
    }
    /*--Funcion main_manu agrega las columnas principales del menu--*/

    /*--Funcion submenu agrega todos los submenus--*/
    function submenu($id){
        $tabla2 = new DBManager;
        $stmt = $tabla2->conn->prepare("select * from tbl_menu WHERE id_depen=$id ORDER BY position ASC");
        $stmt->execute();
        $res = $stmt->fetchAll();
        if(!empty($res)){
            //Si el arreglo no esta vacio agregara los campos
            echo "<ul>";
            for($i=0; $i<sizeof($res); $i++){
                echo "<li>";
                echo '<a href="">'.$res[$i]['cat_name'].'</a>';
                product($res[$i]['menu_id']);
                submenu($res[$i]['menu_id']);
                echo "</li>";
            }
            echo "</ul>";
        }
    }
    /*--Funcion submenu agrega todos los submenus--*/


    /*--Funcion product agrega los productos de esa categoria--*/
    function product($id){
        $tabla2 = new DBManager;
        $stmt = $tabla2->conn->prepare("SELECT * FROM tbl_product WHERE id_depen=$id");
        $stmt->execute();
        $res = $stmt->fetchAll();
        if(!empty($res)){
            //Si el arerglo contiene algo se agregaran los productos
            echo "<ul>";
            for($i=0; $i<sizeof($res); $i++){
                echo "<li>";
                echo '<a href="">'.$res[$i]['name'].'</a>';
                echo "</li>";
            }
            echo "</ul>";
        }
    }
    /*--Funcion product agrega los productos de esa categoria--*/

?>