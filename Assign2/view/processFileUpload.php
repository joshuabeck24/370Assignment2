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
               <?php
                    /* This puts uploaded file into correct directory with its own name */
                    #$uploadedFile = '../DataFiles/' . $_FILES['userfile']['name'];
                    if($_FILES['userfile']['type']=="text/html")
                    {
                        echo 'This is a HTML File' ;
                    }else {echo 'Sorry This is not html';}
                    /*
                    if (file_exists($uploadedfile)) 
                    {
                       $message = "The file was replaced successfully";
                    } 
                    else 
                    {
                       $message = "The file was successfully uploaded";
                    }
                    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) 
                    {
                       echo "<p>$message.</p>";
                    } 
                    else if ($_FILES['userfile']['error'] == UPLOAD_ERR_NO_FILE)
                    {
                       echo "<p>Please choose a file first and then try again...</p>";
                    } 
                    else if ($_FILES['userfile']['size'] > 1000000) 
                    {
                       echo "<p>Please choose a file smaller than 1MB and then try again...</p>";
                    } 
                    else 
                    {
                       echo "File Upload Error\n Debugging info:";
                       print_r($_FILES);
                    }*/
                ?>
            </div>
        </div>
    </div>
</section>
<br>
 <?php
include './footerinclude.php';
?>
