<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BoncommandeController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->Model('BoncommandeModel');
        $this->load->Model('crudModel');
        
    }

	public function index(){
        $idservice = $this->session->userdata('idService');
        $data['BonCommande'] = $this->BoncommandeModel->getBonCommande($idservice); 
            $this->load->view('header3');
           $this->load->view('boncommande/listBoncommande', $data);
    }
    public function envoyer(){
        $idboncommande = $this->input->get('idboncommande');
        $data['Message']  = $this->BoncommandeModel-> get_ok($idboncommande);
        $data['facture'] = $this->BoncommandeModel->getBonCommandeid($idboncommande); 
            $this->load->view('header3');
           $this->load->view('boncommande/FactureBonCommande', $data);
    }
    public function envoyerbon(){
        $idFacture = $this->input->get('idFacture');
        $prixttc = $this->input->get('prixttc');
        $data = array(
            'id_facture' => $idFacture,
            'prixttc' => $prixttc
        );
        $this->crudModel->insert_data($data,"factureattente");   
        redirect('BoncommandeController/index');
    }
}
?>