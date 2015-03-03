<?php
	$title = "AudioNexus - File Upload";
	include './headerinclude.php';
?>

<!-- This code block reads from text file(if it is there) and loads its contents into title of link -->
<?php
        $filePath = "../Quote/quotes.txt";
        if(file_exists($filePath))
        {
            $message = "the file exists";
            $quoteFile = file_get_contents($filePath);
        }
        else 
        {
            $quoteFile = "file does not exist";
        }
        //$quoteFile = file_get_contents('http://www.example.com/');
?>
<!-- This code block is for displaying files in images directory(other files only have 1 currently there) -->
<?php
        $current_dir = '../HomepageImages';
        $dir = opendir($current_dir);
        while(false !== ($file = readdir($dir))){
                //strip out the two entries of . and ..
                if($file != "." && $file != ".."){
                        $imageArray[] = $file;
                }
        }
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
                    
                    <!-- <div style="padding-left:22%;" class=" pull-left divInJumbo">Home Page Images(.png)</div><input class="pull-left center-block" name="userfile" type="file" /> <br/><br/>
                    <input style="clear:both;" class="btn btn-success" type="submit" value="Send Image" /> <br/>-->
               </form>
               <hr/>
               <form style=" margin: 0;
                              text-align: center;"
                      enctype="multipart/form-data" action="processFileUpload.php" method="post">
                    <div style="padding-left:19%;" class=" pull-left divInJumbo">Home Page Images(.jpg, .png, .gif)</div><input class="pull-left center-block" name="userfile" type="file" /> <br/><br/>
                    <input style="clear:both;" class="btn btn-success" type="submit" value="Upload Image" /> <br/>
               </form>
               <div style="text-align: center;">
               <h4>Current Files in Image Directory</h4>
               <?php 
                    foreach ($imageArray as $image) 
                    {
                       print($image . "<br>");
                    }
               ?>
               </div>
               <hr/>
               <form style=" margin: 0;
                              text-align: center;"
                      enctype="multipart/form-data" action="processFileUpload.php" method="post">
                    <div style="padding-left:31%;" class=" pull-left divInJumbo">Quote File(.txt)</div><input class="pull-left center-block" name="userfile" type="file" /> <br/><br/>
                    <input style="clear:both;" class="btn btn-success" type="submit" value="Upload Quote File" /> <br/>
               </form>
               <br/>
               <a class="center-block" title="<?php echo $quoteFile; ?>">View Current Quote File(mouse over)</a>
            </div>
        </div>
    </div>
</section>
<br>

 <?php
include './footerinclude.php';
?>