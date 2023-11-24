<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crudModel extends CI_Model {

    public function insert_data($data,$Table)
    {

        $this->db->insert($Table, $data);
        $inserted = $this->db->affected_rows() > 0;
        
    }

    public function delete_data($id,$Table)
    {
    $this->db->where('id', $id);
    $this->db->delete($Table);
    return $this->db->affected_rows() > 0;

    }

    public function update_data($data,$nom_table)
{

    //$this->db->where($id, $id);
    $this->db->update($nom_table, $data);
    $updated = $this->db->affected_rows() > 0;

}
}
?>