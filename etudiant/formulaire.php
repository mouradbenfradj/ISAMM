<div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">connexion</h3>
        </div>
                <?php

		if(!isset($_SESSION['cin'])){		
				if(!isset($_POST['cin'])){?>

        <div class="art-blockcontent"><form action="../index.php" method="post">
		<p>
		<label for="cin">CIN</label></p><p><input type="text" name="cin">
		</p>


		<p>	
		<label for="login">Login</label></p><p><input type="text" name="login">
		</p>

		<p>
		<label for="pass">Password</label></p><p><input type="password" name="pass">
		</p>
		<p>
		<input type="submit" value="Connexion">
		</p>
		</form>
        </div>
        <?php }elseif(isset($_POST['cin'])){

		extract($_POST);
		include('fonction.php');
		if(connexion($cin,$login,$pass)){
		$_SESSION['cin']=$_POST['cin'];
		$_SESSION['login']=$_POST['login'];
		}else{ echo '<a href="index.php">donner invalide</a>';}
		}
		}else{
		?> <a href="deconnexion.php">Deconnexion</a> <?php } ?>
</div>