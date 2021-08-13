<?php

declare(strict_types=1);

namespace App\Controller;





use App\Base\HfsqlManager;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Knp\Snappy\Pdf;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HfsqlManagerController extends AbstractController
{
    /**
     * @Route(path="/hfsql/{secteur}", name="hfsql")
     */
    public function hfsql(HfsqlManager $hfsql, Request $request, string $secteur) :  Response
    {
        date_default_timezone_set('Europe/Paris');
        $secteurs = str_word_count($secteur,1);
        $liste = $hfsql->chargerSecteur($request, $secteurs);
        $dateListe = date("d/m/Y");
        $pdf = new Pdf('C:\wkhtmltopdf\bin\wkhtmltopdf.exe');
        $html = $this->renderView('Listes/listePdf.html.twig', ['liste'=>$liste, 'date'=>$dateListe]);
        //Pour afficher la version html : return new Response($this->renderView('Listes/listePdf.html.twig', ['liste'=>$liste, 'date'=>$dateListe]));
        return new PdfResponse($pdf->getOutputFromHtml($html,array('images'=>true, 'orientation'=>'Landscape')), 'test2.pdf');

    }
}

//"Bourg","Chabeuil"
//"Chabeuil","Portes"
//"Portes","Romans"
//"Romans","Valence"
//"Valence","Bourg","Portes"
//"Romans","Portes","Chabeuil"
//"Valence","Chabeuil","Portes","Romans"
//"Bourg","Chabeuil","Portes","Romans","Valence"