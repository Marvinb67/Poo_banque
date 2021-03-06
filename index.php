<?php

require 'Comptes.php';
require 'Titulaires.php';

$titulaire = new Titulaires('Slaoui', 'Martin', '1999-04-01', 'Wantzenau');

$livretA = new Comptes('Livret A', 10000, '€', $titulaire);
$compteCourant = new Comptes('Compte Courant', 80000, '£', $titulaire);

echo '<h3>Infos Titulaire</h3>'.'<br>';

echo $titulaire.'<br>';

echo '<h3>Infos Comptes</h3>'.'<br>';

echo $livretA->infosComptes().'<br>';
echo $compteCourant->infosComptes().'<br>';

echo '<h3>Apres Credit</h3>'.'<br>';
$livretA->Crediter(8500);
echo $livretA;

echo '<h3>Apres Debit</h3>'.'<br>';
$compteCourant->Debiter(15000);
echo $compteCourant;

echo '<h3>Apres Virement</h3>'.'<br>';
$compteCourant->Virements(25000, $livretA);
echo $compteCourant.'<br>';
echo $livretA;
