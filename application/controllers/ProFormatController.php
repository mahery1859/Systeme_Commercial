<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProFormatController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->Model('crudModel');
        $this->load->model('ProFormatModel');
        $this->load->model('FournisseurModel');
        
    }

	public function index() {
        $table='courrier_fournisseurs';
        $idf=$this->FournisseurModel->getAllid();
        $idbesoin = $this->input->get('idbesoin');
        $exbesoin = $this->checkifexiste($idbesoin);
        var_dump($exbesoin);
        if($exbesoin == true) {
            redirect('BesoinController/index?erreur');
            return;
        }
        foreach($idf as $row) {
            $data = array(
                'id_fournisseur' => $row->id,
                'details' => $idbesoin
            );
        $this->crudModel->insert_data($data,$table);
        }
        
        redirect('BesoinController/index');
	}	

    public function checkifexiste($idbesoin){
        $sql = "select details from courrier_fournisseurs";
        $result = $this->db->query($sql);
        $val = $result->result();
        foreach ($val as $row) {
            if ($row->details == $idbesoin){
                return true;
            }
        }
        return false;
    }

    public function getproformat(){
        $idservice = $this->session->userdata('idService');
        $idbesoin = $this->input->get('idbesoin');
        $data['proformat'] = $this->ProFormatModel->getproformat_byidservice($idservice,$idbesoin);
        $this->load->view('header3');
        $this->load->view('proformat/proFormat_view',$data);
    }
    
    public function Bon_Commande(){
        $table = 'bons_de_commande';
        $idservice = $this->session->userdata('idService');
        $idbesoin = $this->input->get('idbesoin');
        $idf = $this->ProFormatModel->getProFormat_byidProduit($idservice,$idbesoin); 
        foreach ($idf as $row){
        $data = array(
            'idbesoin' => $row->idbesoin,
            'id_fournisseur' => $row->id_fournisseur,
            'prix_unitaire' => $row->prix_unitaire,
            'tva' => 20,
            'date' => $row->date,
        );
    }
        $this->crudModel->insert_data($data, $table);
            redirect('BesoinController');
    }
}
?>