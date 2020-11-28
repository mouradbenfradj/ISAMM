<?php
function connexion($cin,$psudo,$pwd){
	$var=false;
include('connexion.php');
$qn=mysql_query("SELECT * FROM administrateur WHERE cin='$cin' AND inscription='$psudo' AND pass='$pwd'");
$qnt=mysql_num_rows($qn);
if($qnt>0){
$_SESSION['statut']='administrateur';
$var=true;
}
if(!$var){
$qn=mysql_query("SELECT * FROM enseignant WHERE cin='$cin' AND inscription='$psudo' AND pass='$pwd'");
$qnt=mysql_num_rows($qn);

if($qnt>0){
$_SESSION['statut']='enseignant';
$var=true;
}}
if(!$var){

$qn=mysql_query("SELECT *  FROM etudiant WHERE cin='$cin' AND inscription='$psudo' AND pass='$pwd'");
$qnt=mysql_num_rows($qn);

if($qnt>0){
$_SESSION['statut']='etudiant';
$var=true;
}
}
return $var;
}


function ajouterPer($statut,$cin,$inscri,$pass,$nom,$prenom,$annee,$moi,$jour,$poste){
	include('connexion.php');
		mysql_query("INSERT INTO $statut VALUES('$cin','$inscri','$pass','$nom','$prenom','$annee-$moi-$jour','$poste')");echo'<a href="gestion-administrateur.php">ajout effectuer</a>'; 
	
}
function ajouterMd($unite,$coef,$cr,$reg,$semestre){
	include('connexion.php');
	mysql_query("INSERT INTO module VALUES('$unite',$coef,$cr,'$reg',$semestre)");
	echo'<a href="gestion-administrateur.php">ajout effectuer</a>';
	}

function ajouterMt($libelle,$coef,$cr,$reg){
	include('connexion.php');
	mysql_query("INSERT INTO matiere VALUES('$libelle',$coef,$cr,'$reg')");
	echo'<a href="gestion-administrateur.php">ajout effectuer</a>';
	}

function ajouterCl($niveau,$specialiter,$group){
	include('connexion.php');
	mysql_query("INSERT INTO class VALUES(NULL,$niveau,'$specialiter',$group)");
	echo'<a href="gestion-administrateur.php">ajout effectuer</a>';
	}
	
	
	//affichage 
	function afModuleO(){
	include('connexion.php');
	$req=mysql_query("SELECT * FROM module");
	while($res=mysql_fetch_array($req)){
		echo"<option value=".$res['unites'].">".$res['unites']."</option>";
		}
		
	}
	
	
	//recherche

function rechnometu($cin){
		include('../connexion.php');
	$req=mysql_query("SELECT * FROM etudiant WHERE cin = '$cin' ");
	while($res=mysql_fetch_array($req)){
		echo $res['nom']." ".$res['prenom'];
		}

}

?>