<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BesoinController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('BesoinModel');
    }
	public function index() {
        $status = 'valider';
        $data['Besoin'] = $this->BesoinModel->getBesoin_confirmer($status); 
        $this->load->view('header');
        $this->load->view('besoin/listeBesoin', $data);
	}		
}
?>