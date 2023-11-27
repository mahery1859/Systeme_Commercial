<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BesoinController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('BesoinModel');
    }
	public function index() {
        $status = 'valider';
        $idservice = $this->session->userdata('idService');
        $data['Besoin'] = $this->BesoinModel->getBesoin_confirmer_parid($status,$idservice); 
            $this->load->view('header3');
           $this->load->view('besoin/listeBesoin', $data);
        
	}		
}
?>