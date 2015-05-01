<?php include '../view/headerInclude.php'; ?>
<div class="container">
	<div style="margin-top: 120px; margin-bottom:20px;" class="jumbotron">
	<section id="main">
		<script type="text/javascript" src="attributes.js"></script>
		<h3>Control Panel</h3>

		<?php if (userIsAuthorized("SecurityManageUsers")) {  ?>
				<a href="../security/index.php?action=SecurityManageUsers">Manage Users</a> &nbsp;
		<?php } 
			if (userIsAuthorized("SecurityManageFunctions")) {  ?>
				<a href="../security/index.php?action=SecurityManageFunctions">Manage Functions</a> &nbsp;
		<?php } 
			if (userIsAuthorized("SecurityManageRoles")) {  ?>
				<a href="../security/index.php?action=SecurityManageRoles">Manage Roles</a> &nbsp;
		<?php }
			if (loggedIn()) {  ?>
				<a href="../security/index.php?action=SecurityLogOut">Log Out</a>
		<?php } else { 
				echo "<a href=\"../security/index.php?action=SecurityLogin&RequestedPage=" . urlencode($_SERVER['REQUEST_URI']) . "\">Log In</a>";
		} ?>