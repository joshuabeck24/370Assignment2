<?php
	$title = "AudioNexus - File Upload";
	include './headerinclude.php';
?>
<!-- <img alt="Image of a Mixer" src="../images/mixer.png" class="imageLoad" /> -->


<section>
    <div style ="margin-top: 100px;"class="container">
        <div class="jumbotron">
            <h2>File Upload</h2>
            <div style ="text-align: center;">
                <form  enctype="multipart/form-data" action="processFileUpload.php" method="post">
                    <h4> Send this file: </h4>
                    <input class="center-block" name="userfile" type="file" /> <br/>
                    <input  class="btn btn-success" type="submit" value="Send File" /> <br/>
               </form>
            </div>
        </div>
    </div>
</section>
<br>

 <?php
include './footerinclude.php';
?>