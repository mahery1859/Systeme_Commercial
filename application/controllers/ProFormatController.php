<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProFormatController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('ProFormatModel');
    }
	public function index() {
        $idProduit = 'null';
        $data['Besoin'] = $this->ProFormatModel->getProFormat_byidProduit($idProduit); 
        $this->load->view('header');
        $this->load->view('proFormat_view', $data);
	}		
}
?>