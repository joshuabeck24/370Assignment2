<?php
	$title = "AudioNexus - Sign Up";
	include '../view/headerinclude.php';
?>
<br>		
<section>
 <div class="container">
         <div style="margin-top: 100px;" class="jumbotron">
         <h3 style="text-align:center">Sign in to your account</h3>
                <form method="post"class="formFormat" action="../security/index.php?action=SecurityProcessLogin">
                  Username: <input type="text" name="username"><br><br>
                  Password: <input type="password" name="password"><br><br>
                  <input type="hidden" name="RequestedPage" value="<?php echo $_GET['RequestedPage'] ?>" />
                  <?php
                    if (isset($_GET['LoginFailure'])) {
                        echo '<p/><h4> Invalid Username or Password.  Please try again.</h4>';
                    }
                  ?>
                  <p style="text-align:center">
                    <input class="btn btn-success" type="submit" value="Sign In"  />
                    <a title="Not a Member?"class="btn btn-success" href="../view/ANUnderconstruction.php" role="button">Sign Up</a>
                 </p>
                </form>
          
        </div>
</div>
</section>
<br>
<?php
	include '../view/footerinclude.php';
?>