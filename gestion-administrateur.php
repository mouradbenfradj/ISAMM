<?php $page='gestion'; ?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.1.0.59861 -->
    <meta charset="utf-8">
    <title>Administrateur</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>



</head>
<body>
<div id="art-main">
<header class="art-header">


    <div class="art-shapes">
<div class="art-object543223378" data-left="0%"></div>
<div class="art-object927660696" data-left="79.23%"></div>

            </div>
<h1 class="art-headline" data-left="3.57%">
    <a href="#">ISAMM</a>
</h1>
<h2 class="art-slogan" data-left="4.55%">institut superieure des art multimédias de la manouba</h2>




<?php include("menu.php") ?>

                    
</header>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-sidebar1"><?php include('formulaire.php'); ?><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">Menu</h3>
        </div>
        <?php include('menug.php'); ?> 
</div><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">Album photo</h3>
        </div>
        <div class="art-blockcontent"><p><img width="190" height="142" alt="" src="images/artwork2.jpg" class=""></p><p><br></p><p><a href="#">voire plus&gt;&gt;</a></p></div>
</div></div>
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                <div class="art-postmetadataheader">
                                        <h2 class="art-postheader"><span class="art-postheadericon">Administrateur</span></h2>
                                                            
                                    </div>
                                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell" style="width: 25%" >
        <p>
        Administrateur</p>
    </div><div class="art-layout-cell" style="width: 25%" >
        <p>
        <?php if((isset($_GET['ajar']))&&($_GET['ajar']=="administrateur")){?>
<form action="gestion-administrateur.php" method="post">
<p><label for="cina">CIN</label><input type="text" maxlength="8" name="cina"></p><p><label for="inscriptiona">inscription</label><input type="text" maxlength="8" name="inscriptiona"></p><p><label for="passa">mot de passe</label><input type="password" name="passa"> </p>
<p><label for="noma">nom</label><input type="text" maxlength="50" name="noma"></p>
<p><label for="prenoma">prenom</label><input type="text" maxlength="50" name="prenoma"></p>
<p><label for="datea">naissance</label><select name="annera"><?php for($i=1800;$i<=2020;$i++){echo"<option value='$i'>$i</option>";} ?></select><select name="moia"><?php for($i=1;$i<=12;$i++){echo"<option value='$i'>$i</option>";} ?></select><select name="joura"><?php for($i=1;$i<=31;$i++){echo"<option value='$i'>$i</option>";} ?></select></p>
<p><label for="posta">Statut</label><input type="text" maxlength="50" name="posta"></p>

<p><input type="hidden" name="statut" value="administrateur"></p><p><input type="submit" value="ajouter"></p></form> 

<?php 
	}else if(isset($_POST['cina'])){
		extract($_POST);
		include('fonction.php');
		ajouterPer($statut,$cina,$inscriptiona,$passa,$noma,$prenoma,$annera,$moia,$joura,$posta);
	
	}else{
	 ?>
        <a href="gestion-administrateur.php?ajar=administrateur">ajouter</a><?php } ?></p>
    </div><div class="art-layout-cell" style="width: 25%" >
        <p><a href="affichage.php?af=administrateur">afficher</a></p>
    </div>
    </div>
</div>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell" style="width: 25%" >
        <p>Enseigant</p>
    </div><div class="art-layout-cell" style="width: 25%" >
        <p>        <?php if((isset($_GET['ajar']))&&($_GET['ajar']=="enseigant")){?>
<form action="gestion-administrateur.php" method="post">
<p><label for="cine">CIN</label><input type="text" maxlength="8" name="cine"></p><p><label for="inscriptione">inscription</label><input type="text" maxlength="8" name="inscriptione"></p><p><label for="passe">mot de passe</label><input type="password" name="passe"> </p>
<p><label for="nome">nom</label><input type="text" maxlength="50" name="nome"></p>
<p><label for="prenome">prenom</label><input type="text" maxlength="50" name="prenome"></p>
<p><label for="datee">naissance</label><select name="annere"><?php for($i=1800;$i<=2020;$i++){echo"<option value='$i'>$i</option>";} ?></select><select name="moie"><?php for($i=1;$i<=12;$i++){echo"<option value='$i'>$i</option>";} ?></select><select name="joure"><?php for($i=1;$i<=31;$i++){echo"<option value='$i'>$i</option>";} ?></select></p>
<p><label for="diplomee">diplome</label><input type="text" maxlength="50" name="diplomee"></p>

<p><input type="hidden" name="statut" value="enseignant"></p><p><input type="submit" value="ajouter"></p></form> 

<?php 
	}else if(isset($_POST['cine'])){
		extract($_POST);
		include('fonction.php');
		ajouterPer($statut,$cine,$inscriptione,$passe,$nome,$prenome,$annere,$moie,$joure,$diplomee);
	
	}else{
	 ?>
        <a href="gestion-administrateur.php?ajar=enseignant">ajouter</a><?php } ?></p>
    </div><div class="art-layout-cell" style="width: 25%" >
        <p><a href="affichage.php?af=enseignant">afficher</a></p>
    </div>
    </div>
</div>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell" style="width: 25%" >
        <p>
        Etudiant</p>
    </div><div class="art-layout-cell" style="width: 25%" >
        <p>  <?php if((isset($_GET['ajar']))&&($_GET['ajar']=="etudiant")){?>
<form action="gestion-administrateur.php" method="post">
<p><label for="cinet">CIN</label><input type="text" maxlength="8" name="cinet"></p><p><label for="inscriptionet">inscription</label><input type="text" maxlength="8" name="inscriptionet"></p><p><label for="passet">mot de passe</label><input type="password" name="passet"> </p>
<p><label for="nomet">nom</label><input type="text" maxlength="50" name="nomet"></p>
<p><label for="prenomet">prenom</label><input type="text" maxlength="50" name="prenomet"></p>
<p><label for="dateet">naissance</label><select name="anneret"><?php for($i=1900;$i<=2020;$i++){echo"<option value='$i'>$i</option>";} ?></select><select name="moiet"><?php for($i=1;$i<=12;$i++){echo"<option value='$i'>$i</option>";} ?></select><select name="jouret"><?php for($i=1;$i<=31;$i++){echo"<option value='$i'>$i</option>";} ?></select></p>
<p><label for="specialiteret">specialiter</label><input type="text" maxlength="50" name="specialiteret"></p>
<p><input type="hidden" name="statut" value="etudiant"></p><p><input type="submit" value="ajouter"></p></form> 

<?php 
	}else if(isset($_POST['cinet'])){
		extract($_POST);
		include('fonction.php');
		ajouterPer($statut,$cinet,$inscriptionet,$passet,$nomet,$prenomet,$anneret,$moiet,$jouret,$specialiteret);
	
	}else{
	 ?>
        <a href="gestion-administrateur.php?ajar=etudiant">ajouter</a><?php } ?></p>
    </div><div class="art-layout-cell" style="width: 25%" >
        <p><a href="affichage.php?af=etudiant">afficher</a></p>
    </div>
    </div>
</div>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell" style="width: 25%" >
        <p>Class</p>
    </div><div class="art-layout-cell" style="width: 25%" >
        <p>   <?php if((isset($_GET['ajar']))&&($_GET['ajar']=="class")){?>
<form action="gestion-administrateur.php" method="post">
<p><label for="niveau">niveau</label><input type="text" maxlength="8" name="niveau"></p><p><label for="specialiter">specialiter</label><input type="text" maxlength="8" name="specialiter"></p><p><label for="group">group</label><select name="group"><?php for($i=1;$i<=20;$i++){echo"<option value='$i'>$i</option>";} ?></select> </p>
<p><input type="submit" value="ajouter"></p></form> 

<?php 
	}else if(isset($_POST['niveau'])){
		extract($_POST);
		include('fonction.php');
		ajouterCl($niveau,$specialiter,$group);
	
	}else{
	 ?>
        <a href="gestion-administrateur.php?ajar=class">ajouter</a><?php } ?></p>
    </div><div class="art-layout-cell" style="width: 25%" >
        <p><a href="affichage.php?af=class">afficher</a></p>
    </div>
    </div>
</div>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell" style="width: 25%" >
        <p>Module</p>
    </div><div class="art-layout-cell" style="width: 25%" >
        <p><?php if((isset($_GET['ajar']))&&($_GET['ajar']=="module")){?>
<form action="gestion-admiunitenistrateur.php" method="post">
<p><label for="unite"></label><input type="text" name="unite"></p><p><label for="coef">coefficient</label><input type="text" name="coef"></p><p><label for="cr">credi</label><input type="text" name="cr"> </p><p><label for="reg">regime</label><input type="text" name="reg"> </p><p><label for="semestre">semestre</label><input type="text" name="semestre"> </p>
<p><input type="submit" value="ajouter"></p></form> 

<?php 
	}else if(isset($_POST['unite'])){
		extract($_POST);
		include('fonction.php');
		ajouterMd($unite,$coef,$cr,$reg,$semestre);
	
	}else{
	 ?>
        <a href="gestion-administrateur.php?ajar=module">ajouter</a><?php } ?></p>
    </div><div class="art-layout-cell" style="width: 25%" >
        <p><a href="affichage.php?af=module">afficher</a></p>
    </div>
    </div>
</div>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell" style="width: 25%" >
        <p>Actualité</p>
    </div>
    
    
    <div class="art-layout-cell" style="width: 25%" >
        <p>
<?php if((isset($_GET['ajar']))&&($_GET['ajar']=="actualitee")){?>

<form action="gestion-administrateur.php" method="post" enctype="multipart/form-data">
<p><label for="titre">titre</label><input type="text" maxlength="50" name="titre"></p><p><label for="sujet">sujet</label><textarea name="sujet"></textarea></p><p><label for="image">image</label><input type="file" name="image"></p><p><input type="submit" value="ajouter"></p></form> 

<?php 
	}else if(isset($_POST['titre'])){
		extract($_POST);
		include('connexion.php');
		
		 $dossier = 'images/actualiter/'; 
		 
    $tmp_file = $_FILES['image']['tmp_name'];
 
    if( !is_uploaded_file($tmp_file) )
    {
        $nomFichier='default.jpg';
    }else{
 
    // on vérifie maintenant l'extension
    $type_file = $_FILES['image']['type'];
 
    if( !strstr($type_file, 'jpg') && !strstr($type_file, 'jpeg') && !strstr($type_file, 'bmp') && !strstr($type_file, 'gif') )
    {
        exit("Le fichier n'est pas une image");
    }
 
    // on copie le fichier dans le dossier de destination
    $nomFichier = $_FILES['image']['name'];
 
    if( !move_uploaded_file($tmp_file, $dossier . $nomFichier) )
    {
        exit("Impossible de copier le fichier dans $content_dir");
    }
	}
    mysql_query("INSERT INTO article VALUES (NULL, '$titre', '$sujet', '$nomFichier')");
		echo("enregistrement effectuer");
		
		
		
			}	
	else{?>
    <a href="gestion-administrateur.php?ajar=actualitee">ajouter</a><?php }?></p>
    
    
    </div><div class="art-layout-cell" style="width: 25%" >
        <p><a href="affichage.php?af=article">afficher</a></p>
    </div>
    </div>
</div>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell" style="width: 25%" >
        <p>Matiere</p>
    </div><div class="art-layout-cell" style="width: 25%" >
        <p><?php if((isset($_GET['ajar']))&&($_GET['ajar']=="matiere")){?>
<form action="gestion-administrateur.php" method="post">
<p><label for="libelle">libelle</label><input type="text" name="libelle"></p><p><label for="coef">coefficient</label><input type="text" name="coef"></p><p><label for="cr">credi</label><input type="text" name="cr"> </p><p><label for="module">module</label><select name="module">
<?php
include('fonction.php'); afModuleO(); 
?>
 </select></p>
<p><input type="submit" value="ajouter"></p></form> 

<?php 
	}else if(isset($_POST['libelle'])){
		extract($_POST);
		include('fonction.php');
		ajouterMt($libelle,$coef,$cr,$module);
	}else{
	 ?>
        <a href="gestion-administrateur.php?ajar=matiere">ajouter</a><?php } ?></p>
    </div><div class="art-layout-cell" style="width: 25%" >
        <p><a href="affichage.php?af=matiere">afficher</a></p>
    </div>
    </div>
</div>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell" style="width: 25%" >
        <p>emploie du temps</p>
    </div><div class="art-layout-cell" style="width: 25%" >
        <p><?php if((isset($_GET['ajar']))&&($_GET['ajar']=="emploie")){?>
<form action="emploie.php" method="post">
<p><label for="class">class</label><select name="class">
<?php
include('fonction.php'); afClass(); 
?>
 </select></p>
<p><input type="submit" value="ajouter"></p></form> 

<?php 
	}else{ ?><a href="gestion-administrateur.php?ajar=emploie">ajouter</a><?php } ?></p>
    </div><div class="art-layout-cell" style="width: 25%" >
        <p><a href="affichage.php?af=emploie">afficher</a><br></p>
    </div>
    </div>
</div>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell" style="width: 25%" >
        <p>Salle</p>
    </div><div class="art-layout-cell" style="width: 25%" >
        <p><?php if((isset($_GET['ajar']))&&($_GET['ajar']=="salle")){?>
<form action="gestion-administrateur.php" method="post">
<p><label for="noms">salle</label><input type="text" name="noms"></p>
<p><input type="submit" value="ajouter"></p></form> 

<?php 
	}else if(isset($_POST['noms'])){
		extract($_POST);
		include('fonction.php');
		ajouterSl($noms);
	}else{
	 ?>
        <a href="gestion-administrateur.php?ajar=salle">ajouter</a><?php } ?></p>
    </div><div class="art-layout-cell" style="width: 25%" >
        <p><a href="affichage.php?af=salle">afficher</a></p>
    </div>
    </div>
</div>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell" style="width: 25%" >
        <p>affection du prof a une matiere</p>
    </div><div class="art-layout-cell" style="width: 25%" >
        <p><?php if((isset($_GET['ajar']))&&($_GET['ajar']=="affect")){?>
<form action="gestion-administrateur.php" method="post">
<p><label for="professeur">cin professeur</label><select name="professeur">
<?php
include('fonction.php'); afProf(); 
?>
 </select></p>
 <p><label for="matiere">matiere</label><select name="matiere">
<?php
 afMatiere(); 
?>
 </select></p>
<p><input type="submit" value="ajouter"></p></form> 

<?php 
	}else if(isset($_POST['professeur'])){
		extract($_POST);
		include('fonction.php');
		ajouterMP($professeur,$matiere);
	}else{ ?><a href="gestion-administrateur.php?ajar=affect">affecter</a><?php } ?></p>
    </div><div class="art-layout-cell" style="width: 25%" >
        <p><a href="affichage.php?af=promat">afficher</a></p>
    </div>
    </div>
</div>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell" style="width: 25%" >
        <p><br></p>
    </div><div class="art-layout-cell" style="width: 25%" >
        <p><br></p>
    </div><div class="art-layout-cell" style="width: 25%" >
        <p><br></p>
    </div><div class="art-layout-cell" style="width: 25%" >
        <p><br></p>
    </div>
    </div>
</div>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell" style="width: 25%" >
        <p><br></p>
    </div><div class="art-layout-cell" style="width: 25%" >
        <p><br></p>
    </div><div class="art-layout-cell" style="width: 25%" >
        <p><br></p>
    </div><div class="art-layout-cell" style="width: 25%" >
        <p><br></p>
    </div>
    </div>
</div>
</div>
                                
                

</article></div>
                    </div>
                </div>
            </div><footer class="art-footer">
<p><br></p>
<div style="position:relative;padding-left:10px;padding-right:10px"><p><a href="new-page-2.html">Contact</a></p><p><br></p></div>
</footer>

    </div>
</div>


</body></html>