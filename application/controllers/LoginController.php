<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

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
		$this->load->view('login/Login');
	}		

    public function Login() {
        $email = $this->input->post('email');
        $mdp = $this->input->post('motdepasse');

        $this->load->model('LoginModel');
        $dirlo = $this->LoginModel->checkDirlo($email, $mdp);
        $chefService = $this->LoginModel->checkChefService($email, $mdp);
		$fournisseur = $this->LoginModel->checkfournisseur($email, $mdp);
		$finance = $this->LoginModel->checkfinance($email, $mdp);
		

        if(count($dirlo) != 0) {
            redirect('DirecteurController/index');
        } else if(count($chefService) != 0) {
			$idService = $chefService['idservice'];
			$this->session->set_userdata('idService', $idService);
            redirect('BesoinController/index');
        }else if(count($fournisseur) != 0) {
			$fournisseur = $fournisseur['id'];
			$this->session->set_userdata('idfournisseur', $fournisseur);
            redirect('FournisseurController/index');
        }else if(count($finance) != 0) {
            redirect('FinanceController/index');
        } else {
            redirect('index.php/LoginController/index');
        }
    }
}
?>