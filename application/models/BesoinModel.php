<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class   BesoinModel extends CI_Model {
    public function getBesoin_confirmer($status) {
        $sql = "select * from v_besoinConfirmer where reponse = '%s'";
        $sql = sprintf($sql, $status);
        $result = $this->db->query($sql);
        return $result->result();
    }
    
    public function getBesoin_confirmer_parid($status,$idservice) {
        $sql = "select * from v_besoinConfirmer where reponse = '%s' and idservice = '%s' ";
        $sql = sprintf($sql, $status,$idservice);
        $result = $this->db->query($sql);
        return $result->result();
    }

    public function getBesoin_confirmer_byid($id) {
        $sql = "select * from v_besoinConfirmer where idbesoin = '%s'";
        $sql = sprintf($sql, $id);
        $result = $this->db->query($sql);
        return $result->result();
    }

}       
?>