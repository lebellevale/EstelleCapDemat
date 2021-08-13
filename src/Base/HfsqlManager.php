<?php

declare(strict_types=1);

namespace App\Base;


use App\Entity\AssMat;
use App\Entity\Liste;
use App\Entity\Secteur;
use Symfony\Component\HttpFoundation\Request;

class HfsqlManager
{

    private const SECTEURS = ['Bourg' => 'asmBourg',
                                'Chabeuil' => 'asmChabeuil',
                                'Portes' => 'asmPortes',
                                'Romans' => 'asmRomans',
                                'Valence' => 'asmValence'];


    public function hfsql(string $nameBase, Secteur $secteur): void
    {
        //ça c'est ok
        $hf_hostname = "PC1520";
        $hf_port = "4900";
        $hf_database = $nameBase;
        $hf_user = "admin";
        $hf_password = "";
        $hf_dsn = sprintf("odbc:DRIVER={HFSQL};Server Name=%s;Server Port=%s;Database=%s;UID=%s;PWD=%s;", $hf_hostname, $hf_port, $hf_database, $hf_user, $hf_password);

        try {
            $hf_dbh = new \PDO($hf_dsn);
            $sql = 'SELECT * FROM asm ORDER BY ville, UUID()';
            $res_select = $hf_dbh->prepare($sql);
            $res_select->execute();
            $asms = $res_select->fetchAll(\PDO::FETCH_ASSOC);
            foreach ($asms as $asm){
                if ($asm['NOM'] !== null){
                    $assMat = new AssMat($asm);
                    $secteur->setAssMats($assMat);
                }
            }
            //dd($secteur);
        } catch (\PDOException $e) {
            echo $e;
        }
    }

    public function chargerSecteur(Request $request,array $secteurs): Liste
    {
        $liste = new Liste();

        foreach ($secteurs as $unSecteur){
            $secteur = new Secteur();
            if (is_string(self::SECTEURS[$unSecteur])) {
                $secteur->setLabel($unSecteur);
                $this->hfsql(self::SECTEURS[$unSecteur] , $secteur);
                $liste->setSecteurs($secteur);
            }

        }
        return $liste;
    }


}