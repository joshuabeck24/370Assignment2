<?php
	$title = "AudioNexus - Your Portal To Musicians Everywhere";
	include './headerinclude.php';
?>

<?php
        $current_dir = '../HomepageImages';
        $dir = opendir($current_dir);
        while(false !== ($file = readdir($dir))){
                //strip out the two entries of . and ..
                if($file != "." && $file != ".."){
                        $logoArray[] = $file;
                }
        }
        closedir($dir);
        $headerImage = "../HomepageImages/" . $logoArray[array_rand($logoArray)];
?>
<div id="headmiddle">
    <img class="imageLoad" src= "<?php echo $headerImage; ?>" alt= "HeaderImage" title="" id="fadeIn"  />
</div>
<div class="container">
    <div style="margin-top:20px;" class="jumbotron">
             <p style="text-align:center;">
            <span class="tclb aboutUsLogo">Audio</span><span class="tclg aboutUsLogo">Nexus</span>
            is the site to connect with musicians all around the world.
             </p>
             <br />
             <p style="text-align:center;">
             Upload your music, make friends, and collaborate!
             </p>
             <br />
             <a href="../view/ANSignup.php" style="text-align:center;"><h1>Have your music be HEARD</h1></a>
    </div>
</div>
<br />
<?php
	include './footerinclude.php';
?>

