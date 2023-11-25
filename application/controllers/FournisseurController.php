<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChefServiceController extends CI_Controller {
	public function index () {		
		$this->load->view('headerFournisseur');
		$this->load->view('fournisseur/Fournisseur_view');
		$this->load->view('footerFournisseur');
	}
	public function email () {		
		$this->load->view('headerFournisseur');
		$this->load->view('fournisseur/ContenuEmail');
		$this->load->view('footerFournisseur');
	}
	public function proforma () {		
		$this->load->view('headerFournisseur');
		$this->load->view('fournisseur/ContenuEmail');
		$this->load->view('footerFournisseur');
	}
}
?>