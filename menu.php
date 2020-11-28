<nav class="art-nav">
    <ul class="art-hmenu"><?php if($page=='index'){ ?>
    	<li><a href="home.php" class="active">Home</a></li>
        <?php }else{ ?>
    	<li><a href="home.php">Home</a></li>
		<?php } ?>

<?php if($page=='actualiter'){ ?>
        <li><a href="actualite.php" class="active">Actualité</a></li>
        <?php }else{ ?>
        <li><a href="actualite.php" >Actualité</a></li>
		<?php } ?>
        <li>
        <?php if($page=='formation'){ ?>
        <a href="formation.php" class="active">Formation</a>
        <?php }else{ ?>
        <a href="formation.php">Formation</a>
		<?php } ?>
        	<ul>
        	<li><a href="formation/informatique-et-multimedia.php">Informatique et Multimédia</a></li>
            <li><a href="formation/arts-visuels.php">Arts Visuels</a><ul><li><a href="formation/arts-visuels/audio-visuel.php">Audio visuel</a></li>
            <li><a href="formation/arts-visuels/communication-multimedia.php">Communication multimedia</a></li>
        	</ul>
       </li>
       <li><a href="formation/mastere.php">Mastère</a></li>
       </ul>
       </li>
       <li>
              <?php if($page=='etudiant'){ ?>
       <a href="etudiant.php" class="active">Etudiant</a>
               <?php }else{ ?>
       <a href="etudiant.php">Etudiant</a>
		<?php } ?>

       		<ul><li><a href="etudiant/forum.php">Forum</a></li>
            	<li><a href="etudiant/bibliotheque.php">Bibliothèque</a></li>
                <li><a href="etudiant/meilleur-projet.php">Meilleur projet</a></li>
                <?php if(!session_start()){session_start();}
		if((isset($_SESSION['statut']))&&($_SESSION['statut']=='etudiant')){?>
                <li><a href="etudiant/resultat.php">Resultat</a></li> <?php } ?>
            </ul>
        </li>
        <li>
                      <?php if($page=='donner'){ ?>

        <a href="donner-etudiant.php" class="active">donner etudiant</a>
                       <?php }else{ ?>
        <a href="donner-etudiant.php">donner etudiant</a>
		<?php } ?>

        </li>
        <?php 
		if((isset($_SESSION['statut']))&&($_SESSION['statut']=='administrateur')){?>
        <li>
                              <?php if($page=='gestion'){ ?>
<a href="gestion-administrateur.php" class="active">Gestion administrateur</a>
                       <?php }else{ ?>
<a href="gestion-administrateur.php">Gestion administrateur</a>

                       		<?php } ?>

</li>
        <?php }
		 if((isset($_SESSION['statut']))&&($_SESSION['statut']=='enseignant')){?>
        <li>
                                      <?php if($page=='gestione'){ ?>
        <a href="gestion-enseignant.php" class="active">Gestion Enseignant</a>
                               <?php }else{ ?>
                                       <a href="gestion-enseignant.php">Gestion Enseignant</a>

                                                      		<?php } ?>


        </li>
        <?php } ?>
        <li>
                                              <?php if($page=='contacte'){ ?>
        <a href="new-page-2.php" class="active">Contacts</a>
                                       <?php }else{ ?>
                                   <a href="new-page-2.php">Contacts</a>
                                                                  		<?php } ?>


        </li></ul> 
    </nav>
