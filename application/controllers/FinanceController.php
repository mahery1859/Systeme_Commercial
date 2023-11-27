<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FinanceController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->Model('crudModel');
        $this->load->model('FinanceModel');        
    }

    public function index() {
        $data['detailsfinance'] = $this->FinanceModel->get_detailsFacture();
		$data['VolaFinance'] = $this->FinanceModel->get_allTable("finance");

        $this->load->view('header4');
        $this->load->view('finance/finance_view',$data);
    }


    public function validations(){
        $idFactureA = $this->input->get('idFactureA');
        $prixTTC = $this->input->get('idPrixTTC');
        $CapitalActu = $this->FinanceModel->get_Capital();
        if($CapitalActu < $prixTTC){
        redirect('FinanceController/index?erreur');
    }
    $newCapital =  $CapitalActu - $prixTTC;
    $data = array(
        'capitale' => $newCapital
    );

        $factureattente = $this->FinanceModel->get_Factureattente($idFactureA);
        foreach($factureattente as $row){
            $datass = array(
                'id_facture ' => $row->id_facture,
                'prixttc' => $row->prixttc
            );
        }
        $this->crudModel->insert_data($datass,"historiquefinance");
        $datas = array(
            'id_facture' => $idFactureA,
            'validation' => 1
        );
        $this->crudModel->insert_data($datas,"validationbon");

        $this->crudModel->update_data($data,"finance");
        $this->FinanceModel->delete_data($idFactureA,"factureattente");
        redirect('FinanceController/index');
    }

    public function Historique(){

		$data['historiques'] = $this->FinanceModel->history();
		$this->load->view('header4');
		$this->load->view('finance/Historique', $data);
    }


}
?>