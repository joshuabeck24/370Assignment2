<!-- </section> END OF SECTION IN HEADER INCLUDE -->
<footer id="mainFooter">
<a class="br" href="mailto:michele.a.gregory@gmail.com">Comments</a>
<a class="br" href="ANAbout.php">About</a>
					<a style="text-decoration:none">Copyright &copy; 2015</a>
		            <a href="../contoller/controller.php?action=Newsletter" style="text-decoration:none"> <img title="Join Our Newsletter!" class="socialMediaIcons" alt="Newsletter Icon" src="../images/mail.png" width="50" height="50"  /> </a>
					<ul class="pull-right" style="list-style-type: none;">
				         <li class="pull-left"><a href="https://www.facebook.com/"><img class="socialMediaIcons" src="../images/Ifacebook.png" alt="Facebook Icon" title="Go To Facebook" /></a></li>
				         <li class="pull-left"><a href="https://twitter.com/"><img class="socialMediaIcons" src="../images/Itwitter.png" alt="Twitter Icon" title="Go To Twitter" /></a></li>
			             <li class="pull-left"><a href="https://instagram.com/accounts/login/"><img class="socialMediaIcons" src="../images/Iinstagram.png" alt="Instagram Icon" title="Go To Instagram"/></a></li>
				         <li class="pull-left"><a href="https://www.youtube.com/"><img class="socialMediaIcons" src="../images/Iyoutube.png" alt="Youtube Icon" title="Go To Youtube"/></a></li>
			          </ul>
                            <br/>
</footer>
<div style="text-align: center; color:black;">
  <?php
        $array = array("ANFileupload.php","ANAbout.php", "ANAdmin.php", "index.php", "ANIdeas.php","ANMusic.php","ANNewsletter.php","ANSignup.php","ANUnderconstruction.php","checksheet.php","navinclude.html","headerinclude.php","footerinclude.php","processFileUpload.php");
        # $filename = 'somefile.txt';
        $filename="";
        foreach ($array as $filenameMatch)
        {
             if ($filenameMatch === basename($_SERVER['PHP_SELF'])) 
             {
               $filename =$filenameMatch;
               break;
             }
        }    
        if (file_exists($filename)) 
        {
            
          echo "$filename was last modified: " . date ("F d Y H:i:s.", filemtime($filename));
            
        }
    ?>
    </div>
	</body>
</html>
