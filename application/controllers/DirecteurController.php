<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DirecteurController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index () {
		$this->load->model('DirecteurModel');
		// $data['besoins'] = $this->DirecteurModel->findall();
		$this->load->view('header2');
		$this->load->view('directeur/Accueil', $data);
	}	

	public function CheckYes($idBesoin) {
		$this->load->model('DirecteurModel');	
		$reponse = "valider";

		$this->DirecteurModel->insertReponse($reponse, $idBesoin);
		redirect('DirecteurController/index');
	}

	public function CheckNo($idBesoin) {
		$this->load->model('DirecteurModel');	
		$reponse = "refuser";

		$this->DirecteurModel->insertReponse($reponse, $idBesoin);
		redirect('DirecteurController/index');
	}

	public function Historique() {
		$this->load->model('DirecteurModel');	
		$data['historiques'] = $this->DirecteurModel->history();
		$this->load->view('header2');
		$this->load->view('directeur/Historique', $data);
	}

	function AddDepart() {
		$this->load->view('header2');
		$this->load->view('directeur/AjoutDepartView');
	}
}
?>