<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProFormatModel extends CI_Model {
    public function getProFormat_byidProduit($idservice,$idbesoin){
        $sql = "select * from v_proformatdetails where idservice = '%s' and idbesoin = '%s' and prix_unitaire = (select min(prix_unitaire) from v_proformatdetails where idservice = '%s' and idbesoin = '%s')";
        $sql = sprintf($sql, $idservice,$idbesoin,$idservice,$idbesoin);
        $result = $this->db->query($sql);
        return $result->result();
    }

    public function getproformat_byidservice($idservice,$idbesoin){
        $sql = "select * from v_proformatdetails where idservice = '%s' and idbesoin = '%s' ";
        $sql = sprintf($sql, $idservice, $idbesoin);
        $result = $this->db->query($sql);
    return $result->result();

    }
    
    
}
