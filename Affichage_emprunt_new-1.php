<html>
<head>
<title>Bibliotheques ESSTT</title>
<style type="text/css" >
@charset "utf-8";
body {
	background-color: #FFFFCC;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 24px;
	color: #333333;
}

td, th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 24px;
	color: #330000;
}

a {
	color: #330000;
}

form {
	background-color: #CCCC99;
}

.title {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 18px;
	line-height: 30px;
  background-color: #990000; color: #FFFF66;
}

.subtitle {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 16px;
	line-height: 20px;
	font-weight: bold;
  color: #660000; font-style: oblique;
}

.header {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 24px;
	background-color: #990000;
  color: #FFFF66;
}

.nav {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 12px;
	font-weight: bold;
	background-color: #CCCC66;
}

.navLink {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
	background-color: #DEDECA;
}
a:hover {
	color: #DEDECA;
	background-color: #330000;
}

.sidebar {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 12px;
	line-height: 18px;
	padding: 3px;
	background-color: #FFFF99;
}

.sidebarHeader {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 14px;
	line-height: 18px;
	color: #FFFF99;
	background-color: #999933;
 font-weight: bold;
}

.sidebarFooter {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 12px;
	line-height: 18px;
	background-color: #FFFF99;
 color: #990000;
}

.footer {
  font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 12px;
	font-weight: bold;
	line-height: 22px;
	color: #333333;
	background-color: #FFFF99;
}

.legal {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 12pt;
	color: #333333;
}

.box1 {
	border-width: 2px;
	border-color: #CCCCCC #333333 #333333 #CCCCCC;
  border-style: dotted;
	}

.promo {
	font-family: "Times New Roman", Times, serif;
	color: #000033;
}

.titlebar {
	font-family: "Times New Roman", Times, serif;
	font-size: 9px;
	color: #FFFFFF;
	background-color: #336699;
}

.dingbat {
	font-family: Georgia, "Times New Roman", Times, serif;
	background-color: #CCCC99;
 color: #660000; font-weight: bolder; font-size: medium;
}

input.big {
	width: 100px;
}

input.small {
	width: 50px;
}


</style>
</head>
<body>
<center>
<h1>Biliotheque ESSTT</h1>

<div>
<h2>Liste des empruntes:</h2>
</div>
<div><center>
<table>
<tr><td>ID </td><td>nom lecteur </td><td> date de prets</td><td> date de retour</td></tr>
<?php  
$db = mysql_connect('localhost', 'root', '');  
mysql_select_db('biblio');  
$da=Date.new();
$sql = "SELECT * FROM prets,lecteurs where lecteurs.numero= prets.numero where dateretour>$da  ";
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());  
while($data = mysql_fetch_array($req))  
    { 
    // on affiche les informations de l'enregistrement en cours 
    //echo '<b>'.$data['nom'].' '.$data['titre'].'</b>';
    echo'<tr><td>' .$data['id']. '</td><td>' .$data['nom']. '</td><td>' .$data['datepret']. '</td><td>' .$data['dateretour']. '</td></tr>';
	}  
mysql_close();  
?> 
</table>
</div>
</center>
</body>
</html>