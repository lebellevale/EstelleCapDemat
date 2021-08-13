<?php

declare(strict_types=1);

namespace App\Excel;


use App\Entity\AssMat;
use App\Entity\Liste;
use App\Entity\Secteur;
use Symfony\Component\HttpFoundation\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;



class ExcelParser
{
    private const SECTEURS = ['Bourg' => 'ASMBourg.xlsx',
                                'Chabeuil' => 'ASMChabeuil.xlsx',
                                'Portes' => 'ASMPortes.xlsx',
                                'Romans' => 'ASMRomans.xlsx',
                                'Valence' => 'ASMValence.xlsx'];

    public function denormXlsx(AssMat $assMat, array $ligne): void
    {
        $assMat->setPlace((int)$ligne['B']);
        $assMat->setNomPrenom($ligne['D']);
        $assMat->setAdresse($ligne['E']);
        $assMat->setCodePostal($ligne['F']);
        $assMat->setVille($ligne['G']);
        $assMat->setTelFixe($ligne['H']);
        $assMat->setTelPortable($ligne['I']);

    }



    public function xlsx(string $nameFile, Secteur $secteur): void
    {
        $fileFolder = __DIR__.'/../../src/ExcelFile/';

        $spreadsheet = IOFactory::load($fileFolder . $nameFile);
        $row = $spreadsheet->getActiveSheet()->removeRow(1);
        $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

        foreach ($sheetData as $ligne){
            if ($ligne['C'] !== null){
                $assMat = new AssMat();
                $this->denormXlsx($assMat, $ligne);
                $secteur->setAssMats($assMat);
            }
        }

    }

    public function chargerSecteur(Request $request,array $secteurs): Liste
    {
        $liste = new Liste();

        foreach ($secteurs as $unSecteur){
            $secteur = new Secteur();
            if (is_string(self::SECTEURS[$unSecteur])) {
                $secteur->setLabel($unSecteur);
                $this->xlsx(self::SECTEURS[$unSecteur] , $secteur);
                $liste->setSecteurs($secteur);
            }

        }
        return $liste;
    }





}