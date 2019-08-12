<?php
function connect(){
$e=0;
mysql_connect("localhost","root") or  $e++;
mysql_select_db("biblio") or $e++;
return $e;
}
/*suppression utilisateur*/
if(connect()==0){
if(isset($_POST['idlect'])){
$numero=$_POST['idlect'];
$query=mysql_query("DELETE FROM lecteurs where numero=".$numero);
if(mysql_affected_rows()!=0){header('location:supp.php?err=tr');}
else{header('location:supp.php?err=fl');}
}
}
else{
echo 'database error';
}
?>
