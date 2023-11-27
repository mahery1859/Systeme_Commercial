<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FournisseurController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->Model('FournisseurModel');
        $this->load->Model('crudModel');    
        $this->load->Model('BesoinModel');   
    }
    public function index(){
        $this->load->view('headerfour');
        $this->load->view('fournisseur/fournisseur_view');
    }
    public function courrier(){
        $idfournisseur = $this->session->userdata('idfournisseur');
        $data['courrier']= $this->FournisseurModel->getcourrier_fournisseur($idfournisseur);
        $this->load->view('headerfour');
        $this->load->view('fournisseur/courrier',$data);
    }
    public function proFormat(){
        $table = 'proformat';
        $status = 'valider';
        $idfournisseur = $this->input->get('id_fournisseur');
        $idbesoin = $this->input->get('idbesoin') ;
        $data = array(
            'idbesoin' => $idbesoin,
            'idarticle' => $this->input->get('idarticle'),
            'prix_unitaire' => $this->input->get('prix_unitaire'),
            'date' => $this->input->get('date'),
            'id_fournisseur' => $idfournisseur 

        );

        $this->crudModel->insert_data($data,$table);
        redirect('FournisseurController/index');
       }

    public function issertproFormat(){
        $idbesoin = $this->input->get('idbesoin');
        $data['besoin'] = $this->BesoinModel->getBesoin_confirmer_byid($idbesoin);
        $this->load->view('headerfour');
        $this->load->view('fournisseur/insertProFormat',$data);
       }


}
?>