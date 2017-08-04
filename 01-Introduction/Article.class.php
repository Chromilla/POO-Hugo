<?php
/*--
* Création d'une classe Article
* Une classe est une entité regroupant des variables / propriétés
* et des fonctions.
*/

class Article {
 // -- Déclaration des propriétés de notre Class "Article"
 private $Titre,
         $Accroche,
         $Description,
         $FeaturedImage,
         $DateCreationArticle;
private $Auteur;
/**
* Afin de pouvoir attribuer une valeur à mes différentes variables,
* Je vais mettre en place un constructeur
*/

public function getTitre(){
  return $this->Titre;
}
public function getAccroche(){
  return $this->Accroche;
}
public function getDescription(){
  return $this->Description;
}
public function getFeaturedImage(){
  return $this->FeaturedImage;
}
public function getDateCreationArticle(){
  return $this->DateCreationArticle;
}
public function getAuteur(){
  return $this->Auteur;
}

/**
* Setters : Fonctions qui
*/
public function setTitre($MonNouveauTitre) {
  $this->Titre = $MonNouveauTitre;
}
public function setAuteur(Auteur $Auteur){
  $this->Auteur = $Auteur;
}

public function __construct(

          $Titre,
          $Accroche,
          $Description,
          $FeaturedImage,
          $DateCreationArticle) {

            // -- Ici, nous allons attribuer à chaque propriété de notre classe,
            // -- la valeur qui a été passée au constructeur.

          $this->Titre                =$Titre;
          $this->Accroche             =$Accroche;
          $this->Description          =$Description;
          $this->FeaturedImage        =$FeaturedImage;
          $this->DateCreationArticle  =$DateCreationArticle;

        } // Fin du constructeur

        /**
        *Getters : Fonctions qui vont avoir la charge de renvoyer les informations.
        *Nous aurons une fonction par propriété de notre classe.
        */

} // fin de la calsse Article
