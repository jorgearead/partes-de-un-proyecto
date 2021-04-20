<?php
class DBManager {
    public $conn;
    public function __construct() {
        $this->conn = null;
        $host = "mysql:host=localhost";
        $DB   = "dbname=nw_pillar";
        $user = "root";
        $pass = "";
      try {
        $this->conn = new PDO ( "$host;$DB", $user, $pass );
        $this->conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        //echo "conexion exitosa";
      } catch ( PDOException $e ) { echo "Connection failed: " . $e->getMessage(); die();}
    }

}

?>