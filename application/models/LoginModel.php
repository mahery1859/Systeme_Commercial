<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {
    public function checkDirlo($email, $mdp) {
        $sql = "select * from directeur where email = '%s' and motdepasse = '%s'";
        $sql = sprintf($sql, $email, $mdp);
        $result = $this->db->query($sql);

        return $result->row();
    }

    public function checkChefService($email, $mdp) {
        $sql = "select * from chef_service where email = '%s' and motdepasse = '%s'";
        $sql = sprintf($sql, $email, $mdp);
        $result = $this->db->query($sql);

        return $result->row_array();
    }
    
    public function checkfournisseur($email, $mdp) {
        $sql = "select * from fournisseurs where email = '%s' and motdepasse = '%s'";
        $sql = sprintf($sql, $email, $mdp);
        $result = $this->db->query($sql);

        return $result->row_array();
    }
    public function checkfinance($email, $mdp) {
        $sql = "select * from finance where email = '%s' and motdepasse = '%s'";
        $sql = sprintf($sql, $email, $mdp);
        $result = $this->db->query($sql);

        return $result->row_array();
    }
}       
?>