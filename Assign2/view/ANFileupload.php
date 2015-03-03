<?php
	$title = "AudioNexus - File Upload";
	include './headerinclude.php';
?>

<!-- This code block reads from text file(if it is there) and loads its contents into title of link -->
<?php
        //Grab the file path
        $filePath = "../Quote/quotes.txt";
        //Check to see if there is a file there
        if(file_exists($filePath))
        {
            //if it does exist, load the contednts of it into variable to be added to title attribute in link
            $quoteFile = file_get_contents($filePath);
        }
        //If the file does not exist let user know
        else 
        {
            $quoteFile = "file does not exist";
        }
?>

<!-- This code block is for displaying files in images directory(other files only have 1 currently there) -->
<?php
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
?>
<img alt="One Way Upload" src="../images/uploads.png" class="imageLoad" />
<section>
    <div class="container">
        <div style="margin-top:20px;" class="jumbotron">
            <h2>File Upload</h2>
            <div >
               <form style=" margin: 0;
                              text-align: center;"
                      enctype="multipart/form-data" action="processFileUpload.php" method="post">
                    <div style="padding-left:30%;" class=" pull-left divInJumbo">Newsletter(.html)</div><input class="pull-left center-block" name="userfile" type="file" /> <br/><br/>
                    <input style="clear:both;" class="btn btn-success" type="submit" value="Upload Newsletter" /> <br/>
               </form>
               <br/>
               <div style="text-align: center;">
                   <a href="../Newsletters/ANNews.html" class="center-block" title="">View Current Newsletter</a>
               </div>
               <hr style="border-color: black;"/>
               <form style=" margin: 0;
                              text-align: center;"
                      enctype="multipart/form-data" action="processFileUpload.php" method="post">
                    <div style="padding-left:31%;" class=" pull-left divInJumbo">Quote File(.txt)</div><input class="pull-left center-block" name="userfile" type="file" /> <br/><br/>
                    <input style="clear:both;" class="btn btn-success" type="submit" value="Upload Quote File" /> <br/>
               </form>
               <br/>
               <!-- This is where the quote file is added to the title attribute for the "Quick View" -->
               <div style="text-align: center;">
                    <a href="../Quote/quotes.txt" class="center-block" title="<?php echo $quoteFile; ?>">View Quote File(Mouse Over For Quick view)</a>
               </div>
               <hr style="border-color: black;"/>
               <form style=" margin: 0;
                              text-align: center;"
                      enctype="multipart/form-data" action="processFileUpload.php" method="post">
                    <div style="padding-left:19%;" class=" pull-left divInJumbo">Home Page Images(.jpg, .png, .gif)</div><input class="pull-left center-block" name="userfile" type="file" /> <br/><br/>
                    <input style="clear:both;" class="btn btn-success" type="submit" value="Upload Image" /> <br/>
               </form>
               <div style="text-align: center;">
                    <h4>Current Files in Image Directory</h4>
                    <?php 
                         //For every file in the directory, print its name so user knows what is there
                         foreach ($imageArray as $image) 
                         {
                            print($image . "<br>");
                         }
                    ?>
               </div>
            </div>
        </div>
    </div>
</section>
<br>

 <?php
include './footerinclude.php';
?>