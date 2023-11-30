<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH . 'libraries/tcpdf/tcpdf.php'); // Inclure le fichier de la bibliothèque TCPDF

class PdfController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->Model('BoncommandeModel');
    }

    public function generer_pdf_view() {
        date_default_timezone_set('Indian/Antananarivo');
            $idboncommande = $this->input->get('idboncommande');
            $data['facture'] = $this->BoncommandeModel->getBonCommandeid($idboncommande); 
        // Créer une instance de la classe TCPDF
        $pdf = new TCPDF();
    
        $pdf->SetCreator('Fournisseur');
        $pdf->SetAuthor('Super U');
        $pdf->SetTitle('Proformat');
        $pdf->SetSubject('Sujet du PDF');

        // Ajouter une page
        $pdf->AddPage();

        // Ajouter du contenu au PDF
        $pdf->SetFont('helvetica', '', 12);
        $pdf->Write(5, 'Contenu du PDF...');

        // Nom du fichier PDF à télécharger
        $nom_fichier = 'Proformat.pdf';
    
        // Commencer la sortie du buffer
        ob_start();
    
        // Charger la vue de CodeIgniter pour générer le contenu du PDF
        $this->load->view('pdf/pdf',$data); // Remplacez 'nom_de_votre_vue' par le nom de votre vue
    
        // Récupérer le contenu généré dans le buffer
        $contenu_pdf = ob_get_clean();
    
        // Ajouter le contenu généré au PDF
        $pdf->writeHTML($contenu_pdf);
        
        ob_end_clean();
        // Rendu du PDF et téléchargement ou sauvegarde du fichier
        // $chemin_destination = 'D:/ITU/S5/Tovo/UwAmp/www/EmailPdf/assets/pdf/' . $nom_fichier;
        $pdf->Output($nom_fichier, 'D'); // 'F' pour enregistrer le fichier
    
        // Arrêter l'exécution du script après la génération du PDF
        exit();
    }
    
}
