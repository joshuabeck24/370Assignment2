<?php
	$title = "AudioNexus - File Upload";
	include './headerinclude.php';
?>
<img alt="One Way Upload" src="../images/uploads.png" class="imageLoad" />
<section>
    <div class="container">
        <div style="margin-top:20px;" class="jumbotron">
            <h2>File Upload</h2>
            <div >
               <?php
                    /* This puts uploaded file into correct directory with its own name */
                    #$uploadedFile = '../DataFiles/' . $_FILES['userfile']['name'];
                    
                    if($_FILES['userfile']['error'] == UPLOAD_ERR_NO_FILE)
                    {
                        echo "<p>Please choose a file first and then try again...</p>";
                    }
                    else if($_FILES['userfile']['type']=="text/html")
                    {
                        /* echo 'This is a HTML File' ;*/
                        processNewsletter();
                    }
                    else if(($_FILES['userfile']['type']=="image/gif") OR ($_FILES['userfile']['type']=="image/jpeg") OR ($_FILES['userfile']['type']=="image/png")  )
                    {
                        /*echo 'This is a Image File' ;*/
                        processImages();
                    }
                    else if ($_FILES['userfile']['type']=="text/plain")
                    {
                        processQuote();
                    }
                    else 
                    {
                        echo '<p>Sorry Wrong File format</p>';
                    }
                    function processNewsletter()
                    {
                        $newsletterDir = "../Newsletters/";
                        $uploadedFile = $newsletterDir . $_FILES['userfile']['name'];
                        move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadedFile);
                        echo'<p>Newsletter Succesfully Uploaded</p>';
                    }
                    function processImages()
                    {
                        $imagesDir = "../HomepageImages/";
                        $uploadedFile = $imagesDir . $_FILES['userfile']['name'];
                        $image_info = getimagesize($_FILES['userfile']['tmp_name']);
                        $image_width = $image_info[0];                                       
                        $image_height = $image_info[1]; 
                        if($image_width <1297)
                        {
                            echo"<p>Sorry, that image is not wide enough(must be larger than 1297px widht)</p>";
                        }
                        else
                        {
                            move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadedFile);
                            echo'<p>Image Succesfully Uploaded</p>';
                        }
                        
                    }
                    function processQuote()
                    {
                        $quoteDir = "../Quote/";
                        $uploadedFile = $quoteDir . $_FILES['userfile']['name'];
                        move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadedFile);
                        echo'<p>Quote File Succesfully Uploaded</p>';
                    }
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
