<?php
include_once('./../config/config.php');

class CandidatoModel{
    private $db;

    public function __construct(){
        
        $this->db = new Database();
    }
    public function show(){
        
        $result = $this->db->query("select * from candidatos;");
        $datos = [];

        while ($row = $result->fetch_assoc()) {
            $datos[] = $row;
        }          
        return $datos;
    }

    public function showComune($id){           

        $result = $this->db->query("select * from commune where fk_region_id = $id;");
        $datos = [];

        while ($row = $result->fetch_assoc()) {
            $datos[] = $row;
        }  
        return $datos;
    }
}
?>