<html>
  <head>
    <title>modification de donn�es en PHP :: partie 1</title>
  </head>
<body>
  <?php
    //connection au serveur:
    $cnx = mysql_connect( "localhost", "root", "" ) ;
 
    //s�lection de la base de donn�es:
    $db = mysql_select_db( "biblio" ) ;
 
    //requ�te SQL:
    $sql = "SELECT *
	      FROM lecteurs
	      ORDER BY nom" ;
 
    //ex�cution de la requ�te:
    $requete = mysql_query( $sql, $cnx ) ;
 
    //affichage des donn�es:
    while( $result = mysql_fetch_object( $requete ) )
    {
       echo(
           "<div align=\"center\">"
           .$result->nom." ".$result->prenom
           ." <a href=\"modification2.php?idPersonne=".$result->id."\">modifier</a></div>\n"
       ) ;
    }
  ?>
</body>
</html>