<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class   ProFomatModel extends CI_Model {
    public function getProFormat_byidProduit($idProduit){
        $this->db->select('mouvm.id as idproFormat, mouvm.id_Produit as id_Produit,id_typemouvement, p.nom_produit as nom_Produit, Quantite, u.nom, mouvm.Prix_unitaire as Prix_unitaire, Date, f.nom_fournisseur as nom_Fourniseur');
        $this->db->from('proFormat mouvm');
        $this->db->join('produits p', 'mouvm.id_Produit = p.id', 'inner');
        $this->db->join('fournisseurs f', 'mouvm.id_Fournisseur = f.id', 'inner');
        $this->db->join('Unite u', 'mouvm.id_Unite = u.id', 'inner');
        $this->db->where('id_Produit',$idProduit);
        $query = $this->db->get();
        return $query->result();
    }
}  

?>