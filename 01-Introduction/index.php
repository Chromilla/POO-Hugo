<?php

include 'Article.class.php';
include 'Auteur.class.php';
include 'Categorie.class.php';

/**
* Création d'une instance de la Class "Article"
* Ici, notre variable $UnArticle est un Objet de la classe Article
* En ce sens, elle a accès à l'ensemble des propriétés et fonctions qui la composent.
*/

$UnArticle = new Article("La Formation WF3", "Une Formation Certifiante en 3 mois !", "Rejoignez-nous à Limas et vous verrez bien !", "wf3.jpg", "04/08/2017");

// -- Afficher l'Objet Article
echo '<pre>';
print_r($UnArticle);
echo '</pre>';

$UnArticle2 = new Article("Bla bla bla", "Encore du bla bla", "Viendez blablater", "blabla.jpg", "04/08/2017");
$UnArticle3 = new Article("Bla bla bla", "Toujours du bla bla", "Viendez encore blablater", "blabla2.jpg", "04/08/2017");
$UnArticle4 = new Article("Bla bla bla", "Encore et toujours du bla bla", "Viendez toujours blablater", "blabla3.jpg", "04/08/2017");
$UnArticle5 = new Article("Bla bla bla", "JPP du bla bla", "Ne viendez plus blablater", "blabla4.jpg", "04/08/2017");

echo '<pre>';
print_r($UnArticle2);
echo '</pre>';

// -- Je veux afficher le Titre de mon Premier Article
// echo $UnArticle->Titre;
#  ERREUR : Cannot access private property Article::$Titre
echo $UnArticle->getTitre()."<br>";
echo $UnArticle->getAccroche()."<br>";
echo $UnArticle->getDescription()."<br>";
echo $UnArticle->getFeaturedImage()."<br>";
echo $UnArticle->getDateCreationArticle()."<br></br>";
echo $UnArticle2->getTitre()."<br>";
echo $UnArticle2->getAccroche()."<br>";
echo $UnArticle2->getDescription()."<br>";
echo $UnArticle2->getFeaturedImage()."<br>";
echo $UnArticle2->getDateCreationArticle()."<br></br>";

$UnArticle->setTitre("Voici mon nouveau titre : Coucou");
echo $UnArticle->getTitre()."<br></br>";

$UnAuteur = new Auteur("FARADJI", "Thibault", "thibault.faradji@hotmail.fr");
echo '<pre>';
print_r($UnAuteur);
echo '</pre>';
echo "<br>";
echo $UnAuteur->getNom()."<br>";
echo $UnAuteur->getPrenom()."<br>";
echo $UnAuteur->getEmail()."<br>";
echo "<br></br>";

$UneCategorie = new Categorie("BANANE");
echo '<pre>';
print_r($UneCategorie);
echo '</pre>';
echo "<br>";
echo $UneCategorie->getLibelle().'<br></br>';

$UneCategorie2 = new Categorie("Formation Informatique");
$UneCategorie2->AjoutArticle($UnArticle);
$UneCategorie2->AjoutArticle($UnArticle2);
$UneCategorie2->AjoutArticle($UnArticle5);
$UneCategorie->AjoutArticle($UnArticle3);
$UneCategorie->AjoutArticle($UnArticle4);

  echo '<ol>
          <li>';
  echo $UneCategorie->getLibelle();
  echo '</li>';
    echo "<ul>";
        $articles = $UneCategorie->getCollectionArticle();
        foreach($articles as $article) :
          echo '<li>'.$article->getTitre().'</li>';
        endforeach;
    echo '</ul>';
echo '</ol>';

echo '<br></br>';

$UnArticle->setAuteur($UnAuteur);
$UnArticle2->setAuteur($UnAuteur);
echo '<pre>';
print_r($UnArticle);
echo '</pre>';
echo '<br></br>';
echo '<pre>';
print_r($UnArticle2);
echo '</pre>';
