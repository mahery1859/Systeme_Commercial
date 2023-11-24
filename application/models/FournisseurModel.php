<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FournisseurModel extends CI_Model {
    public function getAllid(){
        $sql = "select id from fournisseurs";
        $result = $this->db->query($sql);
        return $result->result();
    }


   
}
