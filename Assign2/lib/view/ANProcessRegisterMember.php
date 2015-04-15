<?php
	$title = "Register Member";
	include '../view/headerinclude.php';
?>
<br>				
<section>
<div class="container">
<div style="margin-top: 100px;" class="jumbotron">
<?php
    echo "<h3>Current members are:</h3><ol>";
    foreach ($memberArray as $member) 
    {
       echo "<li><a href='mailto:$member[2]'>" . "$member[0] $member[1]</a></li>" ;      
    }
    echo "</ol>";
    echo "<h3>$msg</h3>";	
?>

</div>
</div>
</section>
<br>
<?php
	include '../view/footerinclude.php';
?>



