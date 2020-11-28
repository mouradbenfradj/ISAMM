<?php
//fonction de controle
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

//fonction d'ajout 
function ajouterPer($statut,$cin,$inscri,$pass,$nom,$prenom,$annee,$moi,$jour,$poste){
	include('connexion.php');
		mysql_query("INSERT INTO $statut VALUES('$cin','$inscri','$pass','$nom','$prenom','$annee-$moi-$jour','$poste')");echo'<a href="gestion-administrateur.php">ajout effectuer</a>'; 
	
}
function ajouterMd($unite,$coef,$cr,$reg,$semestre){
	include('connexion.php');
	mysql_query("INSERT INTO module VALUES('$unite',$coef,$cr,'$reg',$semestre)");
	echo'<a href="gestion-administrateur.php">ajout effectuer</a>';
	}

function ajouterMP($professeur,$matiere){
	include('connexion.php');
	mysql_query("INSERT INTO promat VALUES(NULL,'$professeur','$matiere')");
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
	
	function ajouterSl($noms){
	include('connexion.php');
	mysql_query("INSERT INTO salle VALUES('$noms')");
	echo'<a href="gestion-administrateur.php">ajout effectuer</a>';
		
		}
	
	//affichage optionnel
	function afModuleO(){
	include('connexion.php');
	$req=mysql_query("SELECT * FROM module");
	while($res=mysql_fetch_array($req)){
		echo"<option value=".$res['unites'].">".$res['unites']."</option>";
		}
		
	}
	
function afClass(){
		include('connexion.php');
	$req=mysql_query("SELECT * FROM class");
	while($res=mysql_fetch_array($req)){
		echo"<option value='".$res['niveau']." ".$res['specialiter']." ".$res['group']."'>".$res['niveau']." ".$res['specialiter']." ".$res['group']."</option>";
		}

}

function afSalle(){
		include('connexion.php');
	$req=mysql_query("SELECT * FROM salle");
	while($res=mysql_fetch_array($req)){
		echo"<option value='".$res['nom']."'>".$res['nom']."</option>";
		}

}

function afProf(){
		include('connexion.php');
	$req=mysql_query("SELECT * FROM enseignant");
	while($res=mysql_fetch_array($req)){
		echo"<option value='".$res['cin']."'>".$res['cin']."</option>";
		}

}

function afMatiere(){
		include('connexion.php');
	$req=mysql_query("SELECT * FROM matiere");
	while($res=mysql_fetch_array($req)){
		echo"<option value='".$res['libelle']."'>".$res['libelle']."</option>";
		}

}


// affichage general
function afficher($tableau){
		include('connexion.php');
	
	echo"<table>";
	$req=mysql_query("SELECT * FROM $tableau");
	while($res=mysql_fetch_array($req)){
		$i=0;
		echo"<tr>";
	$reqsql=mysql_query("DESC $tableau");
	while($ressql=mysql_fetch_array($reqsql)){
		if($ressql['Field']!='pass'){$i++;
	echo "<td>".$res[''.$ressql['Field'].'']."</td>";
		}if($i==1){
		$ident=$res[''.$ressql['Field'].''];
		}
	}
	echo"<td><form action='affichage.php' method='post'>
    <input type='hidden' value='$ident' name='identm' />
    <input type='hidden' name='tab' value='$tableau' />
    <input type='submit' value='modifier' />
    </form></td><td><form action='affichage.php' method='post'>
    <input type='hidden' value='$ident' name='idents' />
    <input type='hidden' name='tab' value='$tableau' />
    <input type='submit' value='supprimer' />
    </form></td>";
	echo"</tr>";
	}
	echo"</table>";

}

//recherche

function rechnometu($cin){
		include('connexion.php');
	$req=mysql_query("SELECT * FROM etudiant WHERE cin = '$cin' ");
	while($res=mysql_fetch_array($req)){
		echo $res['nom']." ".$res['prenom'];
		}

}

// supression
function supprimer($id,$tab){
			include('connexion.php');
		$reqsq=mysql_query("DESC $tab");
		$i=0;
	while($ressql=mysql_fetch_array($reqsq)){
		$i++;
	if($i==1){
mysql_query("DELETE  FROM $tab WHERE ".$ressql['Field']." = $id ");
echo"<p>supression effectuer pour ".$ressql['Field']." = $id </p>";
echo"<p><a href='gestion-administrateur.php'>retour</a></p>";

		}
	}
}

?>