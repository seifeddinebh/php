<?php
  //connection au serveur
  $cnx = mysql_connect( "localhost", "root", "" ) ;
 
  //sélection de la base de données:
  $db  = mysql_select_db( "biblio" ) ;
 
  //récupération des valeurs des champs:
  //nom:
  $titre= $_POST["titre"] ;
  //prenom:
  $description = $_POST["description"] ;
  if($_POST["support"]=="livre")
  $support = 1 ;
  else
  $support = 2;
  
  
   if($_POST["theme"]=="physique")
  $theme = 1 ;
  else if($_POST["theme"]=="math")
  $theme = 2;
   else if($_POST["theme"]=="informatique")
  $theme = 3;
     else 
  $theme = 4;

 
  //création de la requête SQL:
  $sql = "INSERT INTO `titre`(`titre`, `descrit`, `idsupport`, `codetheme`) values('".$titre."','".$description."',".$support.",".$theme.")" ;
 
  //exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
 
  //affichage des résultats, pour savoir si l'insertion a marchée:
  if($requete)
  {
    echo("L'insertion a été correctement effectuée") ;
  }
  else
  {
    echo("L'insertion à échouée") ;
  }
?>