<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ArticleController extends CI_Controller {

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
        $data['categories'] = $this->ArticleModel->categories();
        $this->load->view('header');
        $this->load->view('article/AjouterArticle', $data);
	}		

    public function Ajouter() {
        $nom = $this->input->post('nom');
        $idCategorie = $this->input->post('categorie');

        $this->load->model('ArticleModel');
        if($nom != null && $idCategorie != null) {
            $this->ArticleModel->save($nom, $idCategorie);
			redirect('ArticleController/GetAll');
        }
    }

	public function GetAll() {
		$this->load->model('ArticleModel');
        $data['articles'] = $this->ArticleModel->getArticleWithCategory();
        $this->load->view('header');	
        $this->load->view('article/ListeArticle', $data);
	}

	public function Delete($idArticle) {
		$this->load->model('ArticleModel');
		$this->ArticleModel->delete($idArticle);
	
		redirect('ArticleController/GetAll');
	}

	public function besoin() {
		$this->load->model('BesoinModel');
        $status = 'valider';
        $data['Besoin'] = $this->BesoinModel->getBesoin_confirmer($status); 
        $this->load->view('besoin/listeBesoin', $data);
	}		
}
?>