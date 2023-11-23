<?php
// Chemin : application/controllers/PdfController.php

defined('BASEPATH') OR exit('No direct script access allowed');

class PdfController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('Pdf'); // Charger la bibliothèque PDF personnalisée
    }

    public function generatePdf() {
        // Votre contenu HTML à convertir en PDF
        $html = '<html>
                    <body>
                        <h1>Exemple de fichier PDF avec Dompdf et CodeIgniter</h1>
                        <p>Ceci est un exemple de paragraphe dans le PDF.</p>
                    </body>
                </html>';

        $file_path = FCPATH . 'assets/pdf'; // Chemin vers le répertoire 'pdfs' dans le dossier racine de votre application
        $file_name = 'example.pdf'; // Nom du fichier PDF
            
        // Générer le PDF en utilisant la bibliothèque PdfGenerator
        $this->pdfgenerator->generate($html, $file_path.$file_name, 'save');
    }
}
