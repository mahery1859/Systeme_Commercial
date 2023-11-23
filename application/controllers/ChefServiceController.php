<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChefServiceController extends CI_Controller {

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
		$this->load->model('ArticleModel');
		$data['articles'] = $this->ArticleModel->findall();
		$this->load->view('header3');
		$this->load->view('chefService/Accueil', $data);
	}

    public function Add() {
        $this->load->model('ServiceModel');
        $data['services'] = $this->ServiceModel->findall();
		$this->load->view('header3');
        $this->load->view('chefService/Ajout', $data);
    }

    public function Ajouter() {
        $matricule = $this->input->post('matricule');
        $email = $this->input->post('email');
        $mdp = $this->input->post('motdepasse');
        $idService = $this->input->post('service');

        $this->load->model('ChefServiceModel');
        if($matricule != null && $email != null && $mdp != null && $idService != null) {
            $this->ChefServiceModel->save($matricule, $email, $mdp, $idService);
            redirect('LoginController/index');
        }
    }

	public function DemandeAff() {
		$this->load->model('ArticleModel');
		$data['articles'] = $this->ArticleModel->findall();
		$this->load->view('header3');
		$this->load->view('chefService/Demander', $data);
	}

	public function Demander() {
		$article = $this->input->post('article');
		$quantite = $this->input->post('quantite');
		$idService = $this->session->userdata('idService');

		$this->load->model('ChefServiceModel');

		if(isset($idService) && $article != null && $quantite != null) {
			$this->ChefServiceModel->saveBesoin($idService, $article, $quantite);
			redirect('ChefServiceController/index');
		}
	}
}
?>