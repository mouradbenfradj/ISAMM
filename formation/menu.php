<nav class="art-nav">
    <ul class="art-hmenu"><li><a href="../home.php" class="">Home</a></li><li><a href="../actualite.php" class="">Actualité</a></li><li><a href="../formation.php" class="active">Formation</a><ul class="active"><li><a href="../formation/informatique-et-multimedia.php" class="">Informatique et Multimédia</a></li><li><a href="../formation/arts-visuels.php" class="active">Arts Visuels</a><ul class="active"><li><a href="../formation/arts-visuels/audio-visuel.php">Audio visuel</a></li><li><a href="../formation/arts-visuels/communication-multimedia.php">Communication multimedia</a></li></ul></li><li><a href="../formation/mastere.php">Mastère</a></li></ul></li><li><a href="../etudiant.php">Etudiant</a><ul><li><a href="../etudiant/forum.php">Forum</a></li><li><a href="../etudiant/bibliotheque.php">Bibliothèque</a></li><li><a href="../etudiant/meilleur-projet.php">Meilleur projet</a></li>
       <?php if(!session_start()){session_start();}
		if((isset($_SESSION['statut']))&&($_SESSION['statut']=='etudiant')){?>
    <li><a href="../etudiant/resultat.php">Resultat</a></li><?php } ?></ul></li><li><a href="../donner-etudiant.php">donner etudiant</a></li>        <?php 
		if((isset($_SESSION['statut']))&&($_SESSION['statut']=='administrateur')){?>
        <li><a href="../gestion-administrateur.php">Gestion administrateur</a></li>
        <?php }
		 if((isset($_SESSION['statut']))&&($_SESSION['statut']=='enseignant')){?>
        <li><a href="../gestion-enseignant.php">Gestion Enseignant</a></li>
        <?php } ?>
<li><a href="../new-page-2.php">Contacts</a></li></ul> 
    </nav>
