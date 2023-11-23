<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DirecteurModel extends CI_Model {
    public function insertReponse($reponse, $idBesoin) {
        $sql = "insert into reponse_directeur values(default, '%s', now(), '%s')";
        $sql = sprintf($sql, $reponse, $idBesoin);
        echo $sql;
        
        $this->db->query($sql);
    }
    
    public function findall() {
        $sql = "select * from v_demandeAchat where idbesoin not in (select idbesoin from reponse_directeur)";
        $result = $this->db->query($sql);

        return $result->result_array();
    }

    public function history() {
        $sql = "select * from v_historique";
        $result = $this->db->query($sql);

        return $result->result_array();
    }
}       
?>