<?php

namespace App\Entity;

use App\Repository\thisRepository;
use Doctrine\ORM\Mapping as ORM;

class AssMat
{

    //private $IDAsm;

    private $NOM;

    private $adresse;

    private $cp;

    private $ville;

    private $tel;

//    private $place;
//
//    private $datec;
//
//    private $na;
//
//    private $Ana;
//
//    private $dra;
//
//    private $voiture;
//
//    private $lundi;
//
//    private $mardi;
//
//    private $mercredi;
//
//    private $jeudi;
//
//    private $vendredi;
//
//    private $samedi;
//
//    private $maison;
//
//    private $etage;
//
//    private $jardin;
//
//    private $appart;
//
//    private $cour;
//
//    private $animaux;
//
//    private $tarifs;
//
//    private $repas;
//
//    private $prix;
//
//    private $indem;
//
//    private $pindem;
//
//    private $obs;
//
//    private $secteur;
//
//    private $categorie;
//
//    private $daten;
//
    private $dispo;
//
//    private $admail;
//
//    private $formation;
//
//    private $secours;
//
//    private $lunapm;
//
//    private $maapm;
//
//    private $meapm;
//
//    private $jeuapm;
//
//    private $samapm;
//
//    private $ne;
//
//    private $venapm;
//
//    private $civilité;
//
//    private $specificites;
//
    private $portable;
//
//    private $dimanche;
//
//    private $dimapm;
//
//    private $nuits;
//
//    private $monenfant;
//
//    private $heuresatypiques;
//
//    private $depart;
//
//    private $date1;
//
//    private $date2;
//
//    private $date3;
//
//    private $date4;
//
//    private $obsdispo;
//
//    private $contactcourrier;
//
//    private $contactmail;
//
//    private $adresse1;
//
//    private $agre0_18;
//
//    private $agre2_18;
//
//    private $agre3_18;
//
//    private $agreautre;
//
//    private $enactivite;
//
//    private $mam;
//
//    private $groupeactivites;
//
//    private $Infoagrement;
//
//    private $Hsemaine;
//
//    private $ordrealeatoire;
//
//    private $periscolaire;
//
//    private $handicap;
//
//    private $urgence;
//
//    private $sel;
//
//    private $preparepas;
//
//    private $devoirs;
//
//    private $agre0_3;
//
//    private $agre0_6;
//
//    private $tempspartiel;
//
//    private $dispome;
//
//    private $signsouactiv;
//
//    private $accompram;
//
//    private $partifc;
//
//    private $anneefc;
//
//    private $retouractivite;
//
//    private $IDSites;
//
//    private $visio;
//
//    private $autorisationanim;



    public function __construct(array $asm)
    {
        $this->setNom($asm['NOM']);
        $this->setAdresse(utf8_encode($asm['adresse']));
        //$this->setAdresse1($asm['adresse1']);
        $this->setCp($asm['cp']);
        $this->setVille($asm['ville']);
        $this->setTel($asm['tel']);
        //$this->setDatec($asm['datec']);
//        $this->setNa($asm['na']);
//        $this->setAna($asm['Ana']);
//        $this->setDra($asm['dra']);
//        $this->setLundi($asm['lundi']);
//        $this->setLunapm($asm['lunapm']);
//        $this->setMardi($asm['mardi']);
//        $this->setMaapm($asm['maapm']);
//        $this->setMercredi($asm['mercredi']);
//        $this->setMeapm($asm['meapm']);
//        $this->setJeudi($asm['jeudi']);
//        $this->setJeuapm($asm['jeuapm']);
//        $this->setVendredi($asm['vendredi']);
//        $this->setVenapm($asm['venapm']);
//        $this->setSamedi($asm['samedi']);
//        $this->setSamapm($asm['samapm']);
//        $this->setVoiture($asm['voiture']);
//        $this->setMaison($asm['maison']);
//        $this->setEtage($asm['etage']);
//        $this->setJardin($asm['jardin']);
//        $this->setAppart($asm['appart']);
//        $this->setCour($asm['cour']);
//        $this->setAnimaux($asm['animaux']);
//        $this->setTarifs($asm['tarifs']);
//        $this->setRepas($asm['repas']);
//        $this->setPrix($asm['prix']);
//        $this->setIndem($asm['indem']);
//        $this->setPindem($asm['pindem']);
//        $this->setObs($asm['obs']);
//        $this->setSecteur($asm['secteur']);
//        $this->setCategorie($asm['categorie']);
//        $this->setDaten($asm['daten']);
//        $this->setNe($asm['ne']);
        $this->setDispo($asm['dispo']);
//        $this->setAdmail($asm['admail']);
//        $this->setFormation($asm['formation']);
//        $this->setSecours($asm['secours']);
//        $this->setSpecificites($asm['specificites']);
        $this->setPortable($asm['portable']);
//        $this->setDimanche($asm['dimanche']);
//        $this->setDimapm($asm['dimapm']);
//        $this->setNuits($asm['nuits']);
//        $this->setMonenfant($asm['monenfant']);
//        $this->setDepart($asm['depart']);
//        $this->setDate1($asm['date1']);
//        $this->setDate2($asm['date2']);
//        $this->setDate3($asm['date3']);
//        $this->setDate4($asm['date4']);
//        $this->setObsdispo($asm['obsdispo']);
//        $this->setContactcourrier($asm['contactcourrier']);
//        $this->setContactmail($asm['contactmail']);
//        $this->setAgre0_18($asm['agre0_18']);
//        $this->setAgre2_18($asm['agre2_18']);
//        $this->setAgre3_18($asm['agre3_18']);
//        $this->setAgreautre($asm['agreautre']);
//        $this->setEnactivite($asm['enactivite']);
//        $this->setMam($asm['mam']);
//        $this->setGroupeactivites($asm['groupeactivites']);
//        $this->setInfoagrement($asm['Infoagrement']);
//        $this->setHsemaine($asm['Hsemaine']);
//        $this->setOrdrealeatoire($asm['ordrealeatoire']);
//        $this->setHeuresatypiques($asm['heuresatypiques']);
//        $this->setPeriscolaire($asm['periscolaire']);
//        $this->setHandicap($asm['handicap']);
//        $this->setUrgence($asm['urgence']);
//        $this->setSel($asm['sel']);
//        $this->setPreparepas($asm['preparepas']);
//        $this->setDevoirs($asm['devoirs']);
//        $this->setAgre0_3($asm['agre0_3']);
//        $this->setAgre0_6($asm['agre0_6']);
//        $this->setTempspartiel($asm['tempspartiel']);
//        $this->setDispome($asm['dispome']);
//        $this->setSignsouactiv($asm['signsouactiv']);
//        $this->setAccompram($asm['accompram']);
//        $this->setPartifc($asm['partifc']);
//        $this->setAnneefc($asm['anneefc']);
//        $this->setRetouractivite($asm['retouractivite']);
//        $this->setIdsites($asm['IDSites']);
//        $this->setVisio($asm['visio']);
//        $this->setAutorisationanim($asm['autorisationanim']);
    }

    /**
     * @return mixed
     */
    public function getIDAsm()
    {
        return $this->IDAsm;
    }

    /**
     * @param mixed $IDAsm
     */
    public function setIDAsm($IDAsm): void
    {
        $this->IDAsm = $IDAsm;
    }

    /**
     * @return mixed
     */
    public function getNOM()
    {
        return $this->NOM;
    }

    /**
     * @param mixed $NOM
     */
    public function setNOM($NOM): void
    {
        mb_convert_encoding( $this->NOM = addslashes($NOM)==='\0'?"":utf8_encode($NOM), "UTF-16");

    }

    public function getAdresse(): ?string
    {
        $this->adresse = mb_strtolower($this->adresse);
        $this->adresse = ucwords($this->adresse);
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = addslashes($adresse)==='\0'?"":$adresse;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * @param mixed $cp
     */
    public function setCp($cp): void
    {
        $this->cp = addslashes($cp)==='\0'?"":$cp;
    }


    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville): void
    {
        mb_convert_encoding( $this->ville = addslashes($ville)==='\0'?"":utf8_encode($ville), "UTF-16");
    }

    public function getTel(): ?string
    {
        $this->tel = str_replace('.', '', $this->tel);
        $this->tel = str_replace('-', '', $this->tel);
        $this->tel = str_replace('/', '', $this->tel);
        if (preg_match('/^(\d{2})(\d{2})(\d{2})(\d{2})(\d{2})$/',$this->tel, $matches )){
            $this->tel = $matches[1].' '.$matches[2].' '.$matches[3].' '.$matches[4].' '.$matches[4];
        }
        return $this->tel;
    }

    public function setTel(?string $tel): self
    {
        $this->tel = addslashes($tel)==='\0'?"":$tel;

        return $this;
    }


    /**
     * @return mixed
     */
    public function getDatec()
    {
        return $this->datec;
    }

    /**
     * @param mixed $datec
     */
    public function setDatec($datec): void
    {
        $this->datec = $datec;
    }

    /**
     * @return mixed
     */
    public function getNa()
    {
        return $this->na;
    }

    /**
     * @param mixed $na
     */
    public function setNa($na): void
    {
        $this->na = $na;
    }

    /**
     * @return mixed
     */
    public function getAna()
    {
        return $this->Ana;
    }

    /**
     * @param mixed $Ana
     */
    public function setAna($Ana): void
    {
        $this->Ana = $Ana;
    }

    /**
     * @return mixed
     */
    public function getDra()
    {
        return $this->dra;
    }

    /**
     * @param mixed $dra
     */
    public function setDra($dra): void
    {
        $this->dra = $dra;
    }

    /**
     * @return mixed
     */
    public function getVoiture()
    {
        return $this->voiture;
    }

    /**
     * @param mixed $voiture
     */
    public function setVoiture($voiture): void
    {
        $this->voiture = $voiture;
    }

    /**
     * @return mixed
     */
    public function getLundi()
    {
        return $this->lundi;
    }

    /**
     * @param mixed $lundi
     */
    public function setLundi($lundi): void
    {
        $this->lundi = $lundi;
    }

    /**
     * @return mixed
     */
    public function getMardi()
    {
        return $this->mardi;
    }

    /**
     * @param mixed $mardi
     */
    public function setMardi($mardi): void
    {
        $this->mardi = $mardi;
    }

    /**
     * @return mixed
     */
    public function getMercredi()
    {
        return $this->mercredi;
    }

    /**
     * @param mixed $mercredi
     */
    public function setMercredi($mercredi): void
    {
        $this->mercredi = $mercredi;
    }

    /**
     * @return mixed
     */
    public function getJeudi()
    {
        return $this->jeudi;
    }

    /**
     * @param mixed $jeudi
     */
    public function setJeudi($jeudi): void
    {
        $this->jeudi = $jeudi;
    }

    /**
     * @return mixed
     */
    public function getVendredi()
    {
        return $this->vendredi;
    }

    /**
     * @param mixed $vendredi
     */
    public function setVendredi($vendredi): void
    {
        $this->vendredi = $vendredi;
    }

    /**
     * @return mixed
     */
    public function getSamedi()
    {
        return $this->samedi;
    }

    /**
     * @param mixed $samedi
     */
    public function setSamedi($samedi): void
    {
        $this->samedi = $samedi;
    }

    /**
     * @return mixed
     */
    public function getMaison()
    {
        return $this->maison;
    }

    /**
     * @param mixed $maison
     */
    public function setMaison($maison): void
    {
        $this->maison = $maison;
    }

    /**
     * @return mixed
     */
    public function getEtage()
    {
        return $this->etage;
    }

    /**
     * @param mixed $etage
     */
    public function setEtage($etage): void
    {
        $this->etage = $etage;
    }

    /**
     * @return mixed
     */
    public function getJardin()
    {
        return $this->jardin;
    }

    /**
     * @param mixed $jardin
     */
    public function setJardin($jardin): void
    {
        $this->jardin = $jardin;
    }

    /**
     * @return mixed
     */
    public function getAppart()
    {
        return $this->appart;
    }

    /**
     * @param mixed $appart
     */
    public function setAppart($appart): void
    {
        $this->appart = $appart;
    }

    /**
     * @return mixed
     */
    public function getCour()
    {
        return $this->cour;
    }

    /**
     * @param mixed $cour
     */
    public function setCour($cour): void
    {
        $this->cour = $cour;
    }

    /**
     * @return mixed
     */
    public function getAnimaux()
    {
        return $this->animaux;
    }

    /**
     * @param mixed $animaux
     */
    public function setAnimaux($animaux): void
    {
        $this->animaux = $animaux;
    }

    /**
     * @return mixed
     */
    public function getTarifs()
    {
        return $this->tarifs;
    }

    /**
     * @param mixed $tarifs
     */
    public function setTarifs($tarifs): void
    {
        $this->tarifs = $tarifs;
    }

    /**
     * @return mixed
     */
    public function getRepas()
    {
        return $this->repas;
    }

    /**
     * @param mixed $repas
     */
    public function setRepas($repas): void
    {
        $this->repas = $repas;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix): void
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getIndem()
    {
        return $this->indem;
    }

    /**
     * @param mixed $indem
     */
    public function setIndem($indem): void
    {
        $this->indem = $indem;
    }

    /**
     * @return mixed
     */
    public function getPindem()
    {
        return $this->pindem;
    }

    /**
     * @param mixed $pindem
     */
    public function setPindem($pindem): void
    {
        $this->pindem = $pindem;
    }

    /**
     * @return mixed
     */
    public function getObs()
    {
        return $this->obs;
    }

    /**
     * @param mixed $obs
     */
    public function setObs($obs): void
    {
        $this->obs = $obs;
    }

    /**
     * @return mixed
     */
    public function getSecteur()
    {
        return $this->secteur;
    }

    /**
     * @param mixed $secteur
     */
    public function setSecteur($secteur): void
    {
        $this->secteur = $secteur;
    }

    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param mixed $categorie
     */
    public function setCategorie($categorie): void
    {
        $this->categorie = $categorie;
    }

    /**
     * @return mixed
     */
    public function getDaten()
    {
        return $this->daten;
    }

    /**
     * @param mixed $daten
     */
    public function setDaten($daten): void
    {
        $this->daten = $daten;
    }

    /**
     * @return mixed
     */
    public function getDispo()
    {
        return $this->dispo;
    }

    /**
     * @param mixed $dispo
     */
    public function setDispo($dispo): void
    {
        $this->dispo = addslashes($dispo)==='\0'?0:$dispo;
    }

    /**
     * @return mixed
     */
    public function getAdmail()
    {
        return $this->admail;
    }

    /**
     * @param mixed $admail
     */
    public function setAdmail($admail): void
    {
        $this->admail = $admail;
    }

    /**
     * @return mixed
     */
    public function getFormation()
    {
        return $this->formation;
    }

    /**
     * @param mixed $formation
     */
    public function setFormation($formation): void
    {
        $this->formation = $formation;
    }

    /**
     * @return mixed
     */
    public function getSecours()
    {
        return $this->secours;
    }

    /**
     * @param mixed $secours
     */
    public function setSecours($secours): void
    {
        $this->secours = $secours;
    }

    /**
     * @return mixed
     */
    public function getLunapm()
    {
        return $this->lunapm;
    }

    /**
     * @param mixed $lunapm
     */
    public function setLunapm($lunapm): void
    {
        $this->lunapm = $lunapm;
    }

    /**
     * @return mixed
     */
    public function getMaapm()
    {
        return $this->maapm;
    }

    /**
     * @param mixed $maapm
     */
    public function setMaapm($maapm): void
    {
        $this->maapm = $maapm;
    }

    /**
     * @return mixed
     */
    public function getMeapm()
    {
        return $this->meapm;
    }

    /**
     * @param mixed $meapm
     */
    public function setMeapm($meapm): void
    {
        $this->meapm = $meapm;
    }

    /**
     * @return mixed
     */
    public function getJeuapm()
    {
        return $this->jeuapm;
    }

    /**
     * @param mixed $jeuapm
     */
    public function setJeuapm($jeuapm): void
    {
        $this->jeuapm = $jeuapm;
    }

    /**
     * @return mixed
     */
    public function getSamapm()
    {
        return $this->samapm;
    }

    /**
     * @param mixed $samapm
     */
    public function setSamapm($samapm): void
    {
        $this->samapm = $samapm;
    }

    /**
     * @return mixed
     */
    public function getNe()
    {
        return $this->ne;
    }

    /**
     * @param mixed $ne
     */
    public function setNe($ne): void
    {
        $this->ne = $ne;
    }

    /**
     * @return mixed
     */
    public function getVenapm()
    {
        return $this->venapm;
    }

    /**
     * @param mixed $venapm
     */
    public function setVenapm($venapm): void
    {
        $this->venapm = $venapm;
    }

    /**
     * @return mixed
     */
    public function getCivilité()
    {
        return $this->civilité;
    }

    /**
     * @param mixed $civilité
     */
    public function setCivilité($civilité): void
    {
        $this->civilité = $civilité;
    }

    /**
     * @return mixed
     */
    public function getSpecificites()
    {
        return $this->specificites;
    }

    /**
     * @param mixed $specificites
     */
    public function setSpecificites($specificites): void
    {
        $this->specificites = $specificites;
    }

    public function getPortable(): ?string
    {
        $this->portable = str_replace('.', '', $this->portable);
        $this->portable = str_replace('-', '', $this->portable);
        $this->portable = str_replace('/', '', $this->portable);
        if (preg_match('/^(\d{2})(\d{2})(\d{2})(\d{2})(\d{2})$/',$this->portable, $matches )){
            $this->portable = $matches[1].' '.$matches[2].' '.$matches[3].' '.$matches[4].' '.$matches[4];
        }
        return $this->portable;
    }

    public function setPortable(?string $portable): self
    {
        $this->portable = addslashes($portable)==='\0'?"":$portable;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDimanche()
    {
        return $this->dimanche;
    }

    /**
     * @param mixed $dimanche
     */
    public function setDimanche($dimanche): void
    {
        $this->dimanche = $dimanche;
    }

    /**
     * @return mixed
     */
    public function getDimapm()
    {
        return $this->dimapm;
    }

    /**
     * @param mixed $dimapm
     */
    public function setDimapm($dimapm): void
    {
        $this->dimapm = $dimapm;
    }

    /**
     * @return mixed
     */
    public function getNuits()
    {
        return $this->nuits;
    }

    /**
     * @param mixed $nuits
     */
    public function setNuits($nuits): void
    {
        $this->nuits = $nuits;
    }

    /**
     * @return mixed
     */
    public function getMonenfant()
    {
        return $this->monenfant;
    }

    /**
     * @param mixed $monenfant
     */
    public function setMonenfant($monenfant): void
    {
        $this->monenfant = $monenfant;
    }

    /**
     * @return mixed
     */
    public function getHeuresatypiques()
    {
        return $this->heuresatypiques;
    }

    /**
     * @param mixed $heuresatypiques
     */
    public function setHeuresatypiques($heuresatypiques): void
    {
        $this->heuresatypiques = $heuresatypiques;
    }

    /**
     * @return mixed
     */
    public function getDepart()
    {
        return $this->depart;
    }

    /**
     * @param mixed $depart
     */
    public function setDepart($depart): void
    {
        $this->depart = $depart;
    }

    /**
     * @return mixed
     */
    public function getDate1()
    {
        return $this->date1;
    }

    /**
     * @param mixed $date1
     */
    public function setDate1($date1): void
    {
        $this->date1 = $date1;
    }

    /**
     * @return mixed
     */
    public function getDate2()
    {
        return $this->date2;
    }

    /**
     * @param mixed $date2
     */
    public function setDate2($date2): void
    {
        $this->date2 = $date2;
    }

    /**
     * @return mixed
     */
    public function getDate3()
    {
        return $this->date3;
    }

    /**
     * @param mixed $date3
     */
    public function setDate3($date3): void
    {
        $this->date3 = $date3;
    }

    /**
     * @return mixed
     */
    public function getDate4()
    {
        return $this->date4;
    }

    /**
     * @param mixed $date4
     */
    public function setDate4($date4): void
    {
        $this->date4 = $date4;
    }

    /**
     * @return mixed
     */
    public function getObsdispo()
    {
        return $this->obsdispo;
    }

    /**
     * @param mixed $obsdispo
     */
    public function setObsdispo($obsdispo): void
    {
        $this->obsdispo = $obsdispo;
    }

    /**
     * @return mixed
     */
    public function getContactcourrier()
    {
        return $this->contactcourrier;
    }

    /**
     * @param mixed $contactcourrier
     */
    public function setContactcourrier($contactcourrier): void
    {
        $this->contactcourrier = $contactcourrier;
    }

    /**
     * @return mixed
     */
    public function getContactmail()
    {
        return $this->contactmail;
    }

    /**
     * @param mixed $contactmail
     */
    public function setContactmail($contactmail): void
    {
        $this->contactmail = $contactmail;
    }

    public function getAdresse1()
    {
        return $this->adresse1;
    }

    public function setAdresse1($adresse1): void
    {
        $this->adresse1 = $adresse1;
    }

    public function getAgre0_18()
    {
        return $this->agre0_18;
    }

    public function setAgre0_18($agre0_18): void
    {
        $this->agre0_18 = $agre0_18;
    }

    public function getAgre2_18()
    {
        return $this->agre2_18;
    }

    public function setAgre2_18($agre2_18): void
    {
        $this->agre2_18 = $agre2_18;
    }

    public function getAgre3_18()
    {
        return $this->agre3_18;
    }

    public function setAgre3_18($agre3_18): void
    {
        $this->agre3_18 = $agre3_18;
    }

    public function getAgreautre()
    {
        return $this->agreautre;
    }

    public function setAgreautre($agreautre): void
    {
        $this->agreautre = $agreautre;
    }

    public function getEnactivite()
    {
        return $this->enactivite;
    }

    public function setEnactivite($enactivite): void
    {
        $this->enactivite = $enactivite;
    }

    public function getMam()
    {
        return $this->mam;
    }

    public function setMam($mam): void
    {
        $this->mam = $mam;
    }

    public function getGroupeactivites()
    {
        return $this->groupeactivites;
    }

    public function setGroupeactivites($groupeactivites): void
    {
        $this->groupeactivites = $groupeactivites;
    }

    public function getInfoagrement()
    {
        return $this->Infoagrement;
    }

    public function setInfoagrement($Infoagrement): void
    {
        $this->Infoagrement = $Infoagrement;
    }

    public function getHsemaine()
    {
        return $this->Hsemaine;
    }

    public function setHsemaine($Hsemaine): void
    {
        $this->Hsemaine = $Hsemaine;
    }

    public function getOrdrealeatoire()
    {
        return $this->ordrealeatoire;
    }

    public function setOrdrealeatoire($ordrealeatoire): void
    {
        $this->ordrealeatoire = $ordrealeatoire;
    }

    public function getPeriscolaire()
    {
        return $this->periscolaire;
    }

    public function setPeriscolaire($periscolaire): void
    {
        $this->periscolaire = $periscolaire;
    }

    public function getHandicap()
    {
        return $this->handicap;
    }

    public function setHandicap($handicap): void
    {
        $this->handicap = $handicap;
    }

    public function getUrgence()
    {
        return $this->urgence;
    }

    public function setUrgence($urgence): void
    {
        $this->urgence = $urgence;
    }

    public function getSel()
    {
        return $this->sel;
    }

    public function setSel($sel): void
    {
        $this->sel = $sel;
    }

    public function getPreparepas()
    {
        return $this->preparepas;
    }

    public function setPreparepas($preparepas): void
    {
        $this->preparepas = $preparepas;
    }

    public function getDevoirs()
    {
        return $this->devoirs;
    }

    public function setDevoirs($devoirs): void
    {
        $this->devoirs = $devoirs;
    }

    public function getAgre0_3()
    {
        return $this->agre0_3;
    }

    public function setAgre0_3($agre0_3): void
    {
        $this->agre0_3 = $agre0_3;
    }

    public function getAgre0_6()
    {
        return $this->agre0_6;
    }

    public function setAgre0_6($agre0_6): void
    {
        $this->agre0_6 = $agre0_6;
    }

    public function getTempspartiel()
    {
        return $this->tempspartiel;
    }

    public function setTempspartiel($tempspartiel): void
    {
        $this->tempspartiel = $tempspartiel;
    }

    public function getDispome()
    {
        return $this->dispome;
    }

    public function setDispome($dispome): void
    {
        $this->dispome = $dispome;
    }

    public function getSignsouactiv()
    {
        return $this->signsouactiv;
    }

    public function setSignsouactiv($signsouactiv): void
    {
        $this->signsouactiv = $signsouactiv;
    }

    public function getAccompram()
    {
        return $this->accompram;
    }

    public function setAccompram($accompram): void
    {
        $this->accompram = $accompram;
    }

    public function getPartifc()
    {
        return $this->partifc;
    }

    public function setPartifc($partifc): void
    {
        $this->partifc = $partifc;
    }

    public function getAnneefc()
    {
        return $this->anneefc;
    }

    public function setAnneefc($anneefc): void
    {
        $this->anneefc = $anneefc;
    }

    public function getRetouractivite()
    {
        return $this->retouractivite;
    }

    public function setRetouractivite($retouractivite): void
    {
        $this->retouractivite = $retouractivite;
    }

    public function getIDSites()
    {
        return $this->IDSites;
    }

    public function setIDSites($IDSites): void
    {
        $this->IDSites = $IDSites;
    }

    public function getVisio()
    {
        return $this->visio;
    }

    public function setVisio($visio): void
    {
        $this->visio = $visio;
    }

    public function getAutorisationanim()
    {
        return $this->autorisationanim;
    }

    public function setAutorisationanim($autorisationanim): void
    {
        $this->autorisationanim = $autorisationanim;
    }


    public function __toString(): string
    {
        return $this->getNOM().' | '.$this->getAdresse()  ;

    }








}
