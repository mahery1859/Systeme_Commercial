<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChefServiceModel extends CI_Model {
    public function save($matricule, $email, $mdp, $idService) {
        $sql = "insert into chef_service values (default, '%s', '%s', '%s', '%s')";
        $sql = sprintf($sql, $matricule, $email, $mdp, $idService);
        echo $sql;

        $this->db->query($sql);
    }

    public function saveBesoin($idService, $article, $quantite) {
        $sql = "insert into besoin values (default, '%s', '%s', %s, now())";
        $sql = sprintf($sql, $idService, $article, $quantite);
        echo $sql;

        $this->db->query($sql);
    }

    public function findallBesoin() {
        $sql = "select * from v_demandeAchat";
        $result = $this->db->query($sql);

        return $result->result_array();
    }
}       
?>