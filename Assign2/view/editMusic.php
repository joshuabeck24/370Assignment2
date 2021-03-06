<?php
	$title = "AudioNexus - Add Music";
	include '../view/headerinclude.php';
?>
<img alt="Image of Headphones" src="../images/headphones.png" class="imageLoad" />
		
		<section>
		 <div class="container">
			 <div class="jumbotron container">
				 <h2>Add Music</h2>
				 <hr />
                    <form enctype="multipart/form-data" class="ma" id="MusicForm" action ="../controller/controller.php?action=ProcessAddEdit" method="post" onsubmit="doubleCheck()">
					  <div class="">
					  		<?php
					  			if($mode == 'edit')
							  	{
					  	     		echo "<input type='hidden' name='ID' value=$musicID />";
							  	}
							?>
					  	     <input type="hidden" name="Mode" value=<?php echo $mode; ?> />
							 <span class="bold">Artist:</span> <span class="needed"> * </span> 
							 <input autofocus type="text" size="30"required=""  maxlength="50" name="Artist" value="<?php echo htmlspecialchars($ArtistName) ?>" />
							 <br /><br />
							 <span class="bold">Album:</span> <span class="needed"> * </span> 
							 <input type="text" size="30" required="" maxlength="50" name="Album" value="<?php echo htmlspecialchars($AlbumName) ?>" /> 
	                         <br /><br />
	                         <span class="bold">Song:</span> <span class="needed"> * </span> 
	                         <input type="text" size="30" required="" maxlength="50" name="Song" value="<?php echo htmlspecialchars($TrackName) ?>" />
	                         <br/><br />
	                         <span class="bold">Release Date:</span> <span class="needed"> * </span> 
	                         <input type="text" size="10" required="" placeholder="MM/DD/YYYY" pattern="(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d" name="ReleaseDate" value="<?php echo htmlspecialchars(toDisplayDate($ReleaseDate))  ?>" />
	                         <br/><br />
	                         <span class="bold">Local:</span> 
	                         <input type="checkbox" name="IsLocal" value="<?php if($IsLocalBand=='Y') echo 'checked' ?>" />
	                         <!-- Not sure how I want to go about adding the song and its information -->
							 <input name ="Rating" required="" id="rating" class="rating rating-xs" data-min="0" data-max="5" data-step="0.1" data-size="xs" data-readonly="false" value="<?php echo $Rating ?>">
							  <?php
							  	if($mode == 'add')
							  	{
								  echo '<div style="padding-left:30%;" class=" pull-left divInJumbo">  <span class="needed"> * </span> Song File(.mp3, .m4a, .wav)</div>  
								  <input class="pull-left center-block" required="" name="userfile" type="file" /> <br/><br/>';
								}
							  ?>
		                    <input style="clear:both;" class="btn btn-success" type="submit" value="Save" /> <br/>
					  </div> <!-- Col -->
                  </form>				 
			</div> <!-- Jumbotron -->
		</div> <!-- container -->
		</section>
		<br>

		<script>
			<?php
			if(!empty($errorLog))
			{
				echo "alert('Please Correct the following errors: \\n $errorLog');";
			}
			?>

			function doubleCheck()
			{
				var rating = $('#rating').val();
				if (rating == 0.0 || rating == 0)
				{
					//window.confirm("Are you sure you don't want to rate the song?");
					var choice = confirm("Are you sure you don't want to rate the song?");
					if (choice == true) //OK was pressed
					{
					    return true;
					} 
					else 
					{
					    return false;
					}
				}
				else{return true;}
			}
		</script>
<?php
    include '../view/footerinclude.php';
?>