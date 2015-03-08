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
                    //if there is no file then tell the user to select one
                    if($_FILES['userfile']['error'] == UPLOAD_ERR_NO_FILE)
                    {
                        echo "<p>Please choose a file first and then try again...</p>";
                    }
                    //else if check the file type to see if it is an html file
                    else if($_FILES['userfile']['type']=="text/html")
                    {
                        //call the function that processes html newsletters
                        processNewsletter();
                    }
                    //else if check the file types for images(gif,jpeg,png)
                    else if(($_FILES['userfile']['type']=="image/gif") OR ($_FILES['userfile']['type']=="image/jpeg") OR ($_FILES['userfile']['type']=="image/png")  )
                    {
                        //call the function that processes images
                        processImages();
                    }
                    //else if check the file to see if it is just a text file(Quote)
                    else if ($_FILES['userfile']['type']=="text/plain")
                    {
                        //call the function to process the file
                        processQuote();
                    }
                    //If the type is not right let the user know and then do nothing
                    else 
                    {
                        echo '<p>Sorry Wrong File format</p>';
                    }
                    //This function deals with processing newsletters and setting them up correctly
                    function processNewsletter()
                    {
                        //Define the directory
                        $newsletterDir = "../Newsletters/";
                        //Set up the file to be uploaded and rename it to what email code looks for
                        $uploadedFile = $newsletterDir . "ANNews.html";
                        //Add the file to the directory
                        move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadedFile);
                        //notify the user of success
                        echo'<p>Newsletter Succesfully Uploaded</p>';
                    }
                    //This function deals with processing images
                    function processImages()
                    {
                        //Define the directory
                        $imagesDir = "../HomepageImages/";
                        //Grab the name of the file and set up its path
                        $uploadedFile = $imagesDir . $_FILES['userfile']['name'];
                        //grab information needed to check if the image is correct size
                        $image_info = getimagesize($_FILES['userfile']['tmp_name']);
                        $image_width = $image_info[0];                                       
                        $image_height = $image_info[1]; 
                        //Check the width(matters more than height) if its wrong notify user
                        if($image_width <1297)
                        {
                            echo"<p>Sorry, that image is not wide enough(must be larger than 1297px width)</p>";
                        }
                        //else move the file into the directory and notify user of success
                        else
                        {
                            move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadedFile);
                            echo'<p>Image Succesfully Uploaded</p>';
                            
                            //Get the directory of the images
                            $current_dir = '../HomepageImages';
                            //Open it
                            $dir = opendir($current_dir);
                            //Read all files there and add them to an array
                            while(false !== ($file = readdir($dir))){
                                    //strip out the two entries of . and ..
                                    if($file != "." && $file != ".."){
                                            $imageArray[] = $file;//will be using this to print the directory
                                    }
                            }
                            //When done close the directory
                            closedir($dir);
                            echo '<div style="text-align:center"> <p>Current File Listing</p> ';
                            //For every file in the directory, print its name so user knows what is there
                            foreach ($imageArray as $image) 
                            {
                               print($image . "<br>");
                            }
                            echo '</div>';//Close the div from the first echo containg "Current File Listing"
                        }
                        
                    }
                    //Function to process quotes and rename txt file to correct file name
                    function processQuote()
                    {
                        //Define the directory
                        $quoteDir = "../Quote/";
                        //Set up the name and path
                        $uploadedFile = $quoteDir . "quotes.txt";
                        //Move the file into the location
                        move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadedFile);
                        //Notify the user
                        echo'<p>Quote File Succesfully Uploaded</p>';
                    }
                ?>
            </div>
        </div>
    </div>
</section>
<br>
 <?php
include './footerinclude.php';
?>
