<?php

declare(strict_types=1);

namespace App\Controller;



use App\Excel\ExcelParser;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Knp\Snappy\Pdf;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ExcelParserController extends AbstractController
{
    /**
     * @Route(path="/upload-excel/{secteur}", name="xlsx")
     */
    public function xlsx(ExcelParser $exel, Request $request, string $secteur) : Response
    {
        date_default_timezone_set('Europe/Paris');
        $secteur = substr($secteur, 1, -1);
        $secteurs = explode(",", $secteur);
        $liste = $exel->chargerSecteur($request, $secteurs);
        $dateListe = date("d/m/Y");
        $pdf = new Pdf('C:\wkhtmltopdf\bin\wkhtmltopdf.exe');
        $html = $this->renderView('Listes/listePdf.html.twig', ['liste'=>$liste, 'date'=>$dateListe]);
        //return new Response($this->renderView('Listes/listePdf.html.twig', ['liste'=>$liste, 'date'=>$dateListe]));
        return new PdfResponse($pdf->getOutputFromHtml($html,array('images'=>true)), 'test2.pdf');
    }

}