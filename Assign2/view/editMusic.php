<?php
	$title = "AudioNexus - Add Music";
	include '../view/headerinclude.php';
?>
<img alt="Image of Headphones" src="../images/headphones.png" class="imageLoad" />
		
		<section>
		 <div class="container">
			 <div class="jumbotron container">
				 <h2>Edit Music</h2>
				 <hr />
                    <form enctype="multipart/form-data" class="ma" id="MusicForm" action ="../controller/controller.php?action=ProcessAddEdit" method="post">
					  <div class="">
							 <span class="bold">Artist:</span> 
							 <input type="text" required=""  maxlength="50" name="Artist" value="<?php echo $ArtistName ?>" />
							 <br /><br />
							 <span class="bold">Album:</span>
							 <input type="text" required="" maxlength="50" name="Album" value="<?php echo $AlbumName ?>" /> 
	                         <br /><br />
	                         <span class="bold">Song:</span>
	                         <input type="text" required="" maxlength="50" name="Song" value="<?php echo $TrackName ?>" />
	                         <br/><br />
	                         <span class="bold">Release Date:</span> 
	                         <input type="text" required="" placeholder="MM/DD/YYYY" pattern="(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d" name="ReleaseDate" value="<?php echo toDisplayDate($ReleaseDate)  ?>" />
	                         <br/><br />
	                         <span class="bold">Local:</span> 
	                         <input type="checkbox" name="IsLocal" value="<?php if($IsLocalBand=='Y') echo 'checked' ?>" />
	                         <!-- Not sure how I want to go about adding the song and its information -->
							 <input name ="Rating" required="" id="input-2" class="rating rating-xs" data-min="0" data-max="5" data-step="0.1" data-size="xs" data-readonly="false" value="<?php echo $Rating ?>">
							  <div style="padding-left:30%;" class=" pull-left divInJumbo">Song File(.mp3, .m4a, .wav)</div>
							  <input class="pull-left center-block" required="" name="userfile" type="file" /> <br/><br/>
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
		</script>
<?php
    include '../view/footerinclude.php';
?>