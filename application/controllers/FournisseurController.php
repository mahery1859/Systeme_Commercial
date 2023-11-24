<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FournisseurController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->Model('FournisseurModel');

        
    }
    public function index(){
        $this->load->view('fournisseur/fournisseur_view');
    }
    public function courrier(){
        $idfournisseur = $this->session->userdata('idfournisseur');
        $data['courrier']= $this->FournisseurModel->getcourrier_fournisseur($idfournisseur);
        $this->load->view('fournisseur/courrier',$data);
    }
}
?>