 <?php
  //connection au serveur:
  $cnx = mysql_connect( "localhost", "root", "" ) ;
 
  //s�lection de la base de donn�es:
  $db = mysql_select_db( "INFOS" ) ;
 
  //r�cup�ration de la variable d'URL,
  //qui va nous permettre de savoir quel enregistrement modifier
  $id  = $_GET["idPersonne"] ;
 
  //requ�te SQL:
  $sql = "SELECT *
            FROM personnes
	    WHERE id = ".$id ;
 
  //ex�cution de la requ�te:
  $requete = mysql_query( $sql, $cnx ) ;
 
  //affichage des donn�es:
  if( $result = mysql_fetch_object( $requete ) )
  {
  ?>
<form name="insertion" action="modification3.php" method="POST">
  <input type="hidden" name="id" value="<?php echo($id) ;?>">
  <table border="0" align="center" cellspacing="2" cellpadding="2">
    <tr align="center">
      <td>nom</td>
      <td><input type="text" name="nom" value="<?php echo($result->nom) ;?>"></td>
    </tr>
    <tr align="center">
      <td>prenom</td>
      <td><input type="text" name="prenom" value="<?php echo($result->prenom) ;?>"></td>
    </tr>
    <tr align="center">
      <td>adresse</td>
      <td><input type="text" name="adresse" value="<?php echo($result->adresse) ;?>"></td>
    </tr>
    <tr align="center">
      <td>date naissance</td>
      <td><input type="text" name="date naissance" value="<?php echo($result->datenaiss) ;?>"></td>
    </tr>
    <tr align="center">
      <td>dateadhesion</td>
      <td><input type="text" name="dateadhesion" value="<?php echo($result->dateadh) ;?>"></td>
    </tr>
    <tr align="center">
      <td colspan="2"><input type="submit" value="modifier"></td>
    </tr>
  </table>
</form>
  <?php
  }//fin if 
  ?>
</body>
</html>