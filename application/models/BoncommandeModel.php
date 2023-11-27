<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BoncommandeModel extends CI_Model {
    public function getBonCommande($idservice){
        $sql = "select * from v_boncommande where idservice = '%s'";
        $sql = sprintf($sql, $idservice);
        $result = $this->db->query($sql);
        return $result->result();
    }
    public function getBonCommandeid($idboncommande){
        $sql = "select * from v_boncommande where id= '%s'";
        $sql = sprintf($sql, $idboncommande);
        $result = $this->db->query($sql);
        return $result->result();  
    }

    public function get_ok($idFacture){
        $sql = "select * from validationbon where id_facture = '%s'";
        $sql = sprintf($sql, $idFacture);
        $result = $this->db->query($sql);
           // Check if any rows are returned
if ($result->num_rows() > 0) {
    return $result->row()->validation;  

} else {
    return null;
}
         
    }
    
    
}
