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
<div><br /><br /><br />
<?php
$user=$_POST["login"];
$pwd=$_POST["pwd"];
$cnx = mysql_connect( "localhost", "root", "" ) ;
$db  = mysql_select_db( "biblio" ) ;
$sql = mysql_query("SELECT * FROM lecteurs where login='$user' And pwd='$pwd' ;");
$num = mysql_num_rows($sql);
if($num > 0){echo "<h3>Bienvenue compte utilisateurs : $user </h3>";$x=1;}
$sql = mysql_query("SELECT * FROM editeur where login='$user' And pwd='$pwd' ;");
$num = mysql_num_rows($sql);
if($num > 0){echo "<h3>Bienvenue compte Administrateur : $user </h3>"; $x=2; echo"<a href='administrator.php'>Cliquer ici pour entrer dans le paltforme </a>";} 
else{
echo "verfifier login et mots de pass";echo "<a href='index.php'> ici </a>";
	}

?>

</div>
<div>
<h2>Affiche par :</h2>
<table><tr><td width="222"><center>livre</center></td><td width="222"><center>CDs</center></td><td width="222"><center>Themes</center> </td></tr></table>
</div>
<div><center>
<h2>livre</h2>
<h2>CDs</h2>
<h2>Themes</h2></center>
</div>
</center>
</body>
</html>