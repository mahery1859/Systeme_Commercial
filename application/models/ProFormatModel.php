<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProFormatModel extends CI_Model {
    public function getProFormat_byidProduit($idarticle){
        $sql = "select * from v_proformat where idarticle = '%s' and quantite = (select min(quantite) from v_proformat)";
        $sql = sprintf($sql, $idarticle);
        $result = $this->db->query($sql);
        return $result->result();
    }


   
}
