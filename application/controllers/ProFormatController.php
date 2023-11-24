<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProFormatController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->Model('crudModel');
        $this->load->model('ProFormatModel');
        $this->load->model('FournisseurModel');
        
    }
	public function index() {
        $table='courrier_fournisseurs';
        $idf=$this->FournisseurModel->getAllid();

        foreach($idf as $row) {
            $data = array(
                'id_fournisseur' => $row->id,
                'details' => $this->input->get('idbesoin')
            );
        $this->crudModel->insert_data($data,$table);
        }
        
        redirect('Welcome');
	}	
    public function Bon_Commande(){
        $table = 'bons_de_commande';
        $data = array(
            'id_Produit' => $this->input->get('idarticle'),
            'quantite' => $this->input->get('quantite'),
            'date_commande' => $this->input->get('date_commande'),
            'Prix_unitaire' => $this->input->get('Prix_unitaire'),
            'id_Fournisseur' => $this->input->get('id_Fournisseur'),
            'TVA' => 20
        );
        $this->crudModel->insert_data($data, $table);
            redirect('index.php/Welcome');
    }	
}
?>