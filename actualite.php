<?php $page='actualiter'; ?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.1.0.59861 -->
    <meta charset="utf-8">
    <title>article1</title>
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
                        <div class="art-layout-cell art-sidebar1"><?php include('formulaire.php');
                        ?><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">Menu</h3>
        </div><?php include('menug.php'); ?>
</div><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">Album photo</h3>
        </div>
        <div class="art-blockcontent"><p><img width="190" height="142" alt="" src="images/artwork2.jpg" class=""></p><p><br></p><p><a href="#">voire plus&gt;&gt;</a></p></div>
</div></div>
                        <div class="art-layout-cell art-content">
                        
                        
                        
                        <article class="art-post art-article">
                   <?php
				   include('connexion.php');
				   $req=mysql_query('SELECT * FROM article ORDER BY id DESC' );
				   while($tab= mysql_fetch_array($req)){
				    ?>      
        
                                <div class="art-postmetadataheader">
                                        <h2 class="art-postheader"><span class="art-postheadericon">
										<?php echo$tab['label']; ?></span></h2>
                                                            
                                    </div>
                                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell" style="width: 50%" >
        <p><img width="330" height="311" alt="" class="art-lightbox" src="images/actualiter/<?php echo $tab['image']; ?>"><br></p>
    </div><div class="art-layout-cell" style="width: 50%" >
        <p><?php echo $tab['context']; ?></p>
    </div>
    </div>
</div>
</div>
                                
<?php } ?>                

</article>




</div>
                    </div>
                </div>
            </div><footer class="art-footer">
<p><br></p>
<div style="position:relative;padding-left:10px;padding-right:10px"><p><a href="new-page-2.html">Contact</a></p><p><br></p></div>
</footer>

    </div>
    
</div>


</body></html>