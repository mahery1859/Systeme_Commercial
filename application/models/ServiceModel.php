<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServiceModel extends CI_Model {
    public function save($nom) {
        $sql = "insert into service values (default, '%s', default)";
        $insert = sprintf($sql, $nom);
        
        $this->db->query($insert);
    }

    public function findall() {
        $sql = "select * from service";
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function findById($idService) {
        $sql = "select * from service where idService = '%s'";
        $sql = sprintf($sql, $idService);
        $result = $this->db->query($sql);
        
        return $result->row_array();
    }

    public function update($nom, $idService) {
        $sql = "update service set nom_service = '%s' where idService = '%s'";
        $sql = sprintf($sql, $nom, $idService);
        
        $this->db->query($sql);
    }

    public function delete($idService) {
        $sql = "delete from service where idService = '%s'";
        $sql = sprintf($sql, $idService);

        $this->db->query($sql);
    }
}   
?>