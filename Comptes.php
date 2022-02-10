<?php

class Comptes
{
    private $_libelle;
    private $_soldeInitiale;
    private $_devise;
    private $_titulaireUnique;

    public function __construct(string $libelle, float $soldeInitiale, string $devise, Titulaire $titulaireUnique)
    {
        $this->_libelle = $libelle;
        $this->_soldeInitiale = $soldeInitiale;
        $this->_devise = $devise;
        $this->_titulaireUnique = $titulaireUnique;
        $titulaireUnique->ajoutComptes($this);
    }

    public function get_libelle()
    {
        return $this->_libelle;
    }

    public function set_libelle($_libelle)
    {
        $this->_libelle = $_libelle;

        return $this;
    }

    public function get_soldeInitiale()
    {
        return $this->_soldeInitiale;
    }

    public function set_soldeInitiale($_soldeInitiale)
    {
        $this->_soldeInitiale = $_soldeInitiale;

        return $this->_soldeInitiale;
    }

    public function get_devise()
    {
        return $this->_devise;
    }

    public function set_devise($_devise)
    {
        $this->_devise = $_devise;

        return $this;
    }

    public function get_titulaireUnique()
    {
        return $this->_titulaireUnique;
    }

    public function set_titulaireUnique($_titulaireUnique)
    {
        $this->_titulaireUnique = $_titulaireUnique;

        return $this->_tiulaireUnique;
    }

    public function Crediter(float $montant)
    {
        $this->_soldeInitiale = $this->_soldeInitiale + $montant;

        return $this->_soldeInitiale;
    }

    public function Debiter(float $montant)
    {
        $this->_soldeInitiale = $this->_soldeInitiale - $montant;

        return $this->_soldeInitiale;
    }

    public function Virements(float $montant, Comptes $compteCrediter)
    {
        $this->Debiter($montant);
        $compteCrediter->Crediter($montant);

        return;
    }

    public function __toString()
    {
        return "Compte : $this->_libelle <br> Solde : $this->_soldeInitiale $this->_devise";
    }
}