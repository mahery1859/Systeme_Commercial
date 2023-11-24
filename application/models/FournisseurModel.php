<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FournisseurModel extends CI_Model {
    public function getAllid(){
        $sql = "select id from fournisseurs";
        $result = $this->db->query($sql);
        return $result->result();
    }

public function getcourrier_fournisseur($idfournisseur){
    $sql = "select * from courrier_fournisseurs where id_fournisseur = '%s'";
    $sql = sprintf($sql, $idfournisseur);
    $result = $this->db->query($sql);
    return $result->result();
}
   
}
