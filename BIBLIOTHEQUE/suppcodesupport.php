<?php
function connect(){
$e=0;
mysql_connect("localhost","root") or  $e++;
mysql_select_db("biblio") or $e++;
return $e;
}
/*suppression utilisateur*/
if(connect()==0){
if(isset($_POST['idsuuport'])){
$numero=$_POST['idsuuport'];
$query=mysql_query("DELETE FROM titre where idtitre=".$numero);
if(mysql_affected_rows()!=0){header('location:suppsupport.php?err=tr');}
else{header('location:suppsupport.php?err=fl');}
}
}
else{
echo 'database error';
}
?>
