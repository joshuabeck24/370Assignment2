<?php
	$title = "AudioNexus - Sign Up";
	include './headerinclude.php';
?>
<br>		
<section>
 <div class="container">
         <div class="jumbotron">
         <h3 style="text-align:center">Sign in to your account</h3>
                <form class="formFormat" action="../view/ANUnderconstruction.php">
                  Username: <input type="text" name="un"><br><br>
                  Password: <input type="text" name="pw"><br><br>
                </form>
        <p style="text-align:center"><a class="btn btn-success" href="../view/ANUnderconstruction.php" role="button">Sign In</a></p>
        </div>
</div>
</section>
<br>
<?php
	include './footerinclude.php';
?>