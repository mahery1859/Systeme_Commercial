<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FinanceModel extends CI_Model {
    public function get_allTable($nom_table){
        $this->db->select('*');
        $this->db->from($nom_table);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_detailsFacture(){
        $sql = "select * from v_detailsfacture";
        $result = $this->db->query($sql);
        return $result->result();
        
    }

    public function get_Capital(){
        $this->db->select('capitale');
        $this->db->from('finance');
        $query = $this->db->get();
        return $query->row()->capitale;
    }

    public function delete_data($id,$Table)
    {

            $sql = "delete from %s where id_facture = '%s' " ;
            $sql = sprintf($sql, $Table,$id);
           $this->db->query($sql);
    }

    public function get_Factureattente($idFacture){
        $sql = "select * from factureattente where id_facture = '%s'";
        $sql = sprintf($sql, $idFacture);
        $result = $this->db->query($sql);
        return $result->result();
    }
    public function history(){
        $sql = "select * from v_financehistory ";
        $result = $this->db->query($sql);
        return $result->result(); 
    }
}       
?>