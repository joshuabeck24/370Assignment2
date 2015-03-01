<?php
	$title = "AudioNexus - File Upload";
	include './headerinclude.php';
?>

<img alt="Image of a Mixer" src="../images/uploads.png" class="imageLoad" />
<section>
    <div class="container">
        <div style="margin-top:20px;" class="jumbotron">
            <h2>File Upload</h2>
            <div >
               <form style=" margin: 0;
                              text-align: center;"
                      enctype="multipart/form-data" action="processFileUpload.php" method="post">
                    <div style="padding-left:30%;" class=" pull-left divInJumbo">Newsletter(.html)</div><input class="pull-left center-block" name="userfile" type="file" /> <br/><br/>
                    <input style="clear:both;" class="btn btn-success" type="submit" value="Send Newsletter" /> <br/>
                    
                    <!-- <div style="padding-left:22%;" class=" pull-left divInJumbo">Home Page Images(.png)</div><input class="pull-left center-block" name="userfile" type="file" /> <br/><br/>
                    <input style="clear:both;" class="btn btn-success" type="submit" value="Send Image" /> <br/>-->
               </form>
               <hr/>
               <form style=" margin: 0;
                              text-align: center;"
                      enctype="multipart/form-data" action="processFileUpload.php" method="post">
                    <div style="padding-left:24.5%;" class=" pull-left divInJumbo">Home Page Images(.png)</div><input class="pull-left center-block" name="userfile" type="file" /> <br/><br/>
                    <input style="clear:both;" class="btn btn-success" type="submit" value="Send Image" /> <br/>
               </form>
            </div>
        </div>
    </div>
</section>
<br>

 <?php
include './footerinclude.php';
?>