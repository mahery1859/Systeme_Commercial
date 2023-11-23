<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServiceController extends CI_Controller {

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
        $this->load->view('header');
		$this->load->view('service/AjoutService');
	}		

    public function Ajouter() {
        $nom = $this->input->post('nom');
        $this->load->model('ServiceModel');

        if($nom != null) {
            $this->ServiceModel->save($nom);
            redirect('ServiceController/GetAll');
        } else {
            redirect('ServiceController/index');
        }
    }

    public function GetAll() {
        $this->load->model('ServiceModel');
        $data['services'] = $this->ServiceModel->findall();
        $this->load->view('header');
        $this->load->view('service/ListeService', $data);        
    }

    public function Modifier($idService) {
        $this->load->model('ServiceModel');
        $data['nom'] = $this->ServiceModel->findById($idService);
        $this->load->view('header');
        $this->load->view('service/ModifierService', $data);
    }

    public function UpdateService($idService) {
        $nom = $this->input->post('nom');
        $this->load->model('ServiceModel');

        $this->ServiceModel->update($nom, $idService);
        redirect('ServiceController/GetAll');
    }

    public function Supprimer($idService) {
        $this->load->model('ServiceModel');
        $this->ServiceModel->delete($idService);

        redirect('ServiceController/GetAll');
    }
}
