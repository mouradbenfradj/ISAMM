<nav class="art-nav">
    <ul class="art-hmenu"><li><a href="../home.php" class="">Home</a></li><li><a href="../actualite.php" class="">Actualité</a></li><li><a href="../formation.php" class="">Formation</a><ul class=""><li><a href="../formation/informatique-et-multimedia.php" class="">Informatique et Multimédia</a></li><li><a href="../formation/arts-visuels.php" class="">Arts Visuels</a><ul class=""><li><a href="../formation/arts-visuels/audio-visuel.php" class="">Audio visuel</a></li><li><a href="../formation/arts-visuels/communication-multimedia.php" class="">Communication multimedia</a></li></ul></li><li><a href="../formation/mastere.php" class="">Mastère</a></li></ul></li><li><a href="../etudiant.php" class="active">Etudiant</a><ul class="active"><li><a href="../etudiant/forum.php" class="">Forum</a></li><li><a href="../etudiant/bibliotheque.php" class="">Bibliothèque</a></li><li><a href="../etudiant/meilleur-projet.php" class="">Meilleur projet</a></li>
    <?php if(!session_start()){session_start();}
		if((isset($_SESSION['statut']))&&($_SESSION['statut']=='etudiant')){?>
    <li><a href="../etudiant/resultat.php" class="active">Resultat</a></li><?php } ?></ul></li><li><a href="../donner-etudiant.php">donner etudiant</a></li>        <?php if((isset($_SESSION['statut']))&&($_SESSION['statut']=='administrateur')){?>
        <li><a href="../gestion-administrateur.php">Gestion administrateur</a></li>
        <?php }
		 if((isset($_SESSION['statut']))&&($_SESSION['statut']=='enseignant')){?>
        <li><a href="../gestion-enseignant.php">Gestion Enseignant</a></li>
        <?php } ?>
<li><a href="../new-page-2.php">Contacts</a></li></ul> 
    </nav>
