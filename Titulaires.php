<?php

class Titulaires
{
    private string $_nom;
    private string $_prenom;
    private DateTime $_naissance;
    private string $_ville;
    private array $_comptes;
    private float $age;

    public function __construct(string $nom, string $prenom, string $naissance, string $ville)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_naissance = new DateTime($naissance);
        $this->_ville = $ville;
        $this->_comptes = [];
    }

    public function get_Nom()
    {
        return $this->_nom;
    }

    public function set_Nom($_nom)
    {
        $this->_nom = $_nom;

        return $this->_nom;
    }

    public function get_Prenom()
    {
        return $this->_prenom;
    }

    public function set_Prenom($_prenom)
    {
        $this->_prenom = $_prenom;

        return $this->_prenom;
    }

    public function get_Naissance()
    {
        return $this->_naissance;
    }

    public function set_Naissance($_naissance)
    {
        $this->_naissance = $_naissance;

        return $this;
    }

    public function get_Ville()
    {
        return $this->_ville;
    }

    public function set_Ville($_ville)
    {
        $this->_ville = $_ville;

        return $this;
    }

    public function get_Comptes()
    {
        return $this->_comptes;
    }

    public function get_Age()
    {
        return date_diff($this->_naissance, new DateTime());
    }

    public function set_Age()
    {
        $this->_age = $age;

        return $this;
    }

    public function ajoutComptes($nouvCompte)
    {
        array_push($this->_comptes, $nouvCompte);

        return $this;
    }

    public function __toString()
    {
        return "Nom : $this->_nom <br> Prenom : $this->_prenom <br> Née le : ".$this->_naissance->format('Y-m-d').' <br> Age : '.$this->get_Age()->format('%y ans ')." <br> Ville : $this->_ville <br> Comptes : ".implode('; ', $this->_comptes).'';
    }
}
