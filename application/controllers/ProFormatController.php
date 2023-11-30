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
        
        $this->envoyer_emails();
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
/*public function fetchEmails() {
        $this->load->library('Net/POP3');

        // Configurations de la boîte aux lettres POP3
        $pop3_config = array(
            'hostname' => 'pop.bamasetra3-provider.com',
            'port' => 465,
            'username' => 'bamasetra3@gmail.com',
            'password' => 'tyknsfzsjuexfoqm',
        );

        // Connexion à la boîte aux lettres POP3
        if ($this->net_pop3->connect($pop3_config['hostname'], $pop3_config['port'], $pop3_config['username'], $pop3_config['password'])) {
            // Récupérer la liste des e-mails
            $emails = $this->net_pop3->getListing();

            // Lire chaque e-mail
            foreach ($emails as $email) {
                $email_body = $this->net_pop3->getBody($email['msg_id']);

                // Faites quelque chose avec le corps de l'e-mail, par exemple, l'afficher
                echo $email_body;
            }

            // Déconnexion de la boîte aux lettres POP3
            $this->net_pop3->disconnect();
        } else {
            echo "Échec de la connexion à la boîte aux lettres POP3";
        }
    }
*/
    public function envoyer_emails() {
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
        $idbesoin = $this->input->get('idbesoin');

        $sujet = $idbesoin;
        $this->email->subject($sujet);
        $this->email->message('Contenu de l\'e-mail');
        
        if ($this->email->send()) {
            redirect('BesoinController');
        } else {
            show_error($this->email->print_debugger());
        }
        
            }

}
?>