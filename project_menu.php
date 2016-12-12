<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="styledivercity.css" />
</head>
<body>
<?php
class menu //菜单类(creer un class qui appel menu. j'avais creer ce class pour creer des liaison rapidement)
{
	var $Nom;
	var $Address;
	var $value;
	function Menu($Nom,$Address)
	{
		$this->Nom=$Nom;
		$this->Address=$Address;
	}
	function afficher(){
		echo  '<a href=',$this->Address,'>'.$this->Nom;
		echo "<br>";
	}
}
$Menu_menu= new Menu('menu','/projet_menu.php');// un object realite.
$Menu_menu->afficher();
echo "<br>";
$Menu_capteur = new Menu('capteur','/projet_menu.php');
$Menu_capteur->afficher();
echo "<br>";
$Menu_profit= new Menu('mon profit','/projet_menu.php');
$Menu_profit->afficher();
echo "<br>";
?>
</body>
</html>
