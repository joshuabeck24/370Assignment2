<?php
	$title = "Register Member";
	include '../view/headerinclude.php';
?>
<img alt="Picture of broken instrument" src="../images/error.png" class="imageLoad" />	
<section style="margin-top:-80px;">
        <div style="margin-top: 80px;" class="container">
                <div style="overflow:auto" class="jumbotron">
                        <h2>OOPS, Somthing Bad Happend</h2>
                         <p style="text-align:center;">
                             <?php echo $errorMessage; ?>   
                         </p>
                </div>
        </div>
</section>
<br>

 <?php
include '../view/footerinclude.php';
?>
