<?php
/*--
* Création d'une classe Article
* Une classe est une entité regroupant des variables / propriétés
* et des fonctions.
*/

class Auteur {
 // -- Déclaration des propriétés de notre Class "Article"
 private $Nom,
         $Prenom,
         $Email;

/**
* Afin de pouvoir attribuer une valeur à mes différentes variables,
* Je vais mettre en place un constructeur
*/

public function getNom(){
  return $this->Nom;
}
public function getPrenom(){
  return $this->Prenom;
}
public function getEmail(){
  return $this->Email;
}
public function getNomComplet(){
  return $this->Prenom.' '.$this->Nom;
}

/**
* Setters : Fonctions qui
*/
public function setNom($MonNouveauNom) {
  $this->Nom = $MonNouveauNom;
}
public function setPrenom($MonNouveauPrenom){
 $this->Prenom = $MonNouveauPrenom;
}
public function setEmail($MonNouveauEmail){
 $this->Email = $MonNouveauEmail;
}

public function __construct(

          $Nom,
          $Prenom,
          $Email) {

            // -- Ici, nous allons attribuer à chaque propriété de notre classe,
            // -- la valeur qui a été passée au constructeur.

          $this->Nom           =$Nom;
          $this->Prenom        =$Prenom;
          $this->Email         =$Email;

        } // Fin du constructeur

        /**
        *Getters : Fonctions qui vont avoir la charge de renvoyer les informations.
        *Nous aurons une fonction par propriété de notre classe.
        */

} // fin de la calsse Article
