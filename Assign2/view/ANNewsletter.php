<?php
	$title = "AudioNexus - Newsletter";
	include './headerinclude.php';
?>
<br>				
<section>
<div class="container">
<div style="margin-top: 100px;" class="jumbotron">
<h3>Subscribe To our newsletter</h3>
<p>Subscribe to our newsletter to see the latest news in upcoming musicians, lessons, and
other exciting news about Audio-Nexus. </p>


<form action="ANProcessRegisterMember.php" method="post">
<div class="col-lg-6">
<label>First Name:</label>
<input type="text" name="FirstName" required /><br />
<label>Last Name:</label>
<input type="text" name="LastName" required ><br />
<label>EMail: </label>
<input type="email" name="Email" required /><br />
</div>
<div class="col-lg-6 col-lg-pull-3">
<input class="btn btn-success" type="submit" value="Subscribe Now"/>
</div>
</form>
<br />
<br />
<hr />


<h3>February 2015</h3>
<p>Our site is now live! <a href="../view/ANUnderconstruction.html">Sign up today</a> to connect with other musicicans now,
and feel free to check out our <a href="../view/ANAbout.html">About</a> page to learn more about AudioNexus.</p>
		
</div>
</div>
</section>
<br>
 <?php
include './footerinclude.php';
?>



