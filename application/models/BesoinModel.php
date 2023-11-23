<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class   BesoinModel extends CI_Model {
    public function getBesoin_confirmer($status) {
        $sql = "select * from v_besoinConfirmer where reponse = '%s'";
        $sql = sprintf($sql, $status);
        $result = $this->db->query($sql);
        return $result->result();
    }

}       
?>