<?php
	$title = "AudioNexus - Newsletter";
	include '../view/headerinclude.php';
?>
<br>				
<section>
<div class="container">
	<div style="margin-top: 100px;" class="jumbotron">
		<h3>Subscribe To our newsletter</h3>
		<p>Subscribe to our newsletter to see the latest news in upcoming musicians, lessons, and
		other exciting news about Audio-Nexus. </p>

		<form action="controller.php?action=ProcessRegisterMember" method="post" class="row">
			<div class="col-lg-6">
				<label>First Name:</label>
				<input type="text" name="FirstName" required=""><br>
				<label>Last Name:</label>
				<input type="text" name="LastName" required=""><br>
				<label>EMail: </label>
				<input type="email" name="Email" required=""><br>
			</div>
			<div class="row col-lg-12">
				<input class="btn btn-success" type="submit" value="Subscribe Now">
			</div>
		</form>
		<br>
		<br>
		<div class="row">
			<hr>
                        <h3>February 2015</h3>
			<p class="col-lg-12">Our site is now live! <a href="../view/ANUnderconstruction.php">Sign up today</a> to connect with other musicicans now,
			and feel free to check out our <a href="../view/ANAbout.php">About</a> page to learn more about AudioNexus.</p>
		</div>	
	</div>
</div>
</section>
<br>
 <?php
include '../view/footerinclude.php';
?>



