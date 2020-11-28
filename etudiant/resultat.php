<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.1.0.59861 -->
    <meta charset="utf-8">
    <title>Resultat</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="../https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="../style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="../style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="../style.responsive.css" media="all">


    <script src="../jquery.js"></script>
    <script src="../script.js"></script>
    <script src="../script.responsive.js"></script>



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




<?php include('menu.php'); ?>
                    
</header>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-sidebar1"><?php include('formulaire.php'); ?><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">Menu</h3>
        </div>
        <div class="art-blockcontent"><p><a href="../etudiant/bibliotheque.html">Bibliothèque</a></p><p><a href="#">Departements</a><br></p><p><a href="#">Stage et PFE</a></p><p><a href="#">Equipements</a><a href="#"></a></p><p><a href="#">Vie associative</a><br></p><p><a href="#">Classes</a><br></p></div>
</div><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">Album photo</h3>
        </div>
        <div class="art-blockcontent"><p><img width="190" height="142" alt="" src="../images/artwork2.jpg" class=""></p><p><br></p><p><a href="#">voire plus&gt;&gt;</a></p></div>
</div></div>
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                <div class="art-postmetadataheader">
                                        <h2 class="art-postheader"><span class="art-postheadericon">Resultat</span> de : <?php include('fonction.php'); rechnometu($_SESSION['cin']); ?> / cin : <?php echo $_SESSION['cin']; ?></h2>
                                                            
                                    </div>
                                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell" style="width: 100%" >
<table border="2">
<tr><td>Unites</td><td>coef</td><td>cr</td><td>reg</td><td>moy S P</td><td>cr.ack S P</td><td>moy S R</td><td>moy S R</td><td>element denseignement</td></tr>
<?php include('../connexion.php'); 
$req=mysql_query('SELECT * FROM module ORDER BY semestre ASC');
$sem=0;
while($tab=mysql_fetch_array($req)){
?>
<tr><td colspan="9">semestre <?php if($tab['semestre']!=$sem){$sem=$tab['semestre'];} echo "$sem"; ?></td></tr>


<tr><td><?php echo $tab['unites']; ?></td><td><?php echo $tab['coef']; ?></td><td><?php echo $tab['cr']; ?></td><td><?php echo $tab['reg']; ?></td><td></td><td></td><td></td><td></td><td><table border="1"><tr><td colspan="3"></td><td colspan="2">Moy Sess Pr</td><td colspan="2">Moy Sess Ratt</td></tr>

<tr><td>libelle</td><td>coef</td><td>reg</td><td>moy</td><td>cr Acq</td><td>moy</td><td>cr Acq</td></tr>

<?php
$mod=$tab['unites'];
$req2=mysql_query("SELECT * FROM matiere WHERE module='$mod'");
 while($tab2=mysql_fetch_array($req2)){

 ?>
<tr><td><?php echo $tab2['libelle']; ?></td><td><?php echo $tab2['coef']; ?></td><td><?php echo $tab['reg']; ?></td><td></td><td></td><td></td><td></td></tr>

<?php } ?>
</table></td></tr>
<?php } ?>
</table>


    </div>
    </div>
</div>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell" style="width: 100%" >
        <p><br /></p>
    </div>
    </div>
</div>
</div>
                                
                

</article></div>
                    </div>
                </div>
            </div><footer class="art-footer">
<p><br></p>
<div style="position:relative;padding-left:10px;padding-right:10px"><p><a href="../new-page-2.html">Contact</a></p><p><br></p></div>
</footer>

    </div>
    <p class="art-page-footer">
        <span id="art-footnote-links"><a href="http://www.artisteer.com/" target="_blank">Web Template</a> created with Artisteer.</span>
    </p>
</div>


</body></html>