<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FournisseurController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->Model('FournisseurModel');
        $this->load->Model('crudModel');    
        $this->load->Model('BesoinModel');   
    }
    public function index(){
        $this->load->view('headerfour');
        $this->load->view('fournisseur/fournisseur_view');
    }
    public function courrier(){
        $idfournisseur = $this->session->userdata('idfournisseur');
        $data['courrier']= $this->FournisseurModel->getcourrier_fournisseur($idfournisseur);
        $this->load->view('headerfour');
        $this->load->view('fournisseur/courrier',$data);
    }
    public function proFormat(){
        $table = 'proformat';
        $status = 'valider';
        $idfournisseur = $this->input->get('id_fournisseur');
        $idbesoin = $this->input->get('idbesoin') ;
        $data = array(
            'idbesoin' => $idbesoin,
            'idarticle' => $this->input->get('idarticle'),
            'prix_unitaire' => $this->input->get('prix_unitaire'),
            'date' => $this->input->get('date'),
            'id_fournisseur' => $idfournisseur 

        );

        $this->crudModel->insert_data($data,$table);
        $this->envoyer_emails($idbesoin,$idfournisseur);
        redirect('FournisseurController/index');
       }

    public function issertproFormat(){
        $idbesoin = $this->input->get('idbesoin');
        $data['besoin'] = $this->BesoinModel->getBesoin_confirmer_byid($idbesoin);
        $this->load->view('headerfour');
        $this->load->view('fournisseur/insertProFormat',$data);
       }


       public function envoyer_emails($idbesoin,$idfournisseur) {
        // Load the CodeIgniter Email library
        $this->load->library('email');
        
        // Set the timezone
        date_default_timezone_set('Indian/Antananarivo');
        
        // Configure Email library settings
        $this->email->initialize(array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_user' => 'bamasetra3@gmail.com',
            'smtp_pass' => 'tyknsfzsjuexfoqm', // Use your actual Gmail password
            'smtp_crypto' => 'ssl',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ));

        $this->email->from('bamasetra3@gmail.com', 'mahery');
        $this->email->to('vioartvidoc@gmail.com');
        $sujet = $idfournisseur + $idbesoin;
        $this->email->subject($sujet);
        $this->email->message('Contenu de l\'e-mail');
        
        if ($this->email->send()) {
            redirect('FournisseurController/index');
        } else {
            show_error($this->email->print_debugger());
        }
        
            }


}
?>