<?php
/*--
* Création d'une classe Categorie
* Une classe est une entité regroupant des variables / propriétés
* et des fonctions.
*/

class Categorie {
 // -- Déclaration des propriétés de notre Class "Categorie"
 private $Libelle;
 private $CollectionArticles = [];

/**
* Afin de pouvoir attribuer une valeur à mes différentes variables,
* Je vais mettre en place un constructeur
*/

/**
*Getters : Fonctions qui vont avoir la charge de renvoyer les informations.
*Nous aurons une fonction par propriété de notre classe.
*/

public function getLibelle(){
  return $this->Libelle;
}
public function getCollectionArticle(){
  return $this->CollectionArticles;
}

/**
* Setters : Fonctions qui va avoir la charge de modifier les propriétés.
*/
public function setLibelle($MonNouveauLibelle) {
  $this->Libelle = $MonNouveauLibelle;
}
/**
* Permet d'ajouter un Objet article à notre tableau (Collection) d'Articles
*/
public function AjoutArticle(Article $Article){
  $this->CollectionArticles[] = $Article;
}

public function __construct(

          $Libelle) {

            // -- Ici, nous allons attribuer à chaque propriété de notre classe,
            // -- la valeur qui a été passée au constructeur.

          $this->Libelle    =$Libelle;

        } // Fin du constructeur



} // fin de la calsse Categorie
