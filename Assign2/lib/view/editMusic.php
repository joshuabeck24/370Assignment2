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
                    <form id="MusicForm" action ="../controller/controller.php?action=ProcessAddEdit" method="post">
					  <div class="col-lg-6">
							 <span class="bold">Artist:</span> 
							 <input type="text" name="Artist" value="<?php echo $row['artistName']; ?>" />
							 <br />
							 <span class="bold">Album:</span>
							 <input type="text" name="Album" value="<?php echo $row['albumName'] ; ?>" /> 
	                         <br />
	                         <span class="bold">Song:</span>
	                         <input type="text" name="Song" value="<?php echo $row['trackName'] ; ?>" />
	                         <br/>
	                         <span class="bold">Release Date:</span> 
	                         <input type="text" name="ReleaseDate" value="<?php echo toDisplayDate($row['releaseDate'])  ?>" />
	                         <br/>
	                         <span class="bold">Local:</span> 
	                         <input type="text" name="IsLocal" value="<?php echo $row['isLocalBand'] ; ?>" />
	                         <!-- Not sure how I want to go about adding the song and its information -->
							 <input id="input-2" class="rating rating-xs" data-min="0" data-max="5" data-step="0.1" data-size="xs" data-readonly="true" value="<?php echo $row['rating'] ; ?>">
							  <div style="padding-left:30%;" class=" pull-left divInJumbo">Song File(.mp3, .m4a, .wav)</div>
							  <input class="pull-left center-block" name="userfile" type="file" /> <br/><br/>
		                    <input style="clear:both;" class="btn btn-success" type="submit" value="Save" /> <br/>
					  </div> <!-- Col -->
                  </form>				 
			</div> <!-- Jumbotron -->
		</div> <!-- container -->
		</section>
		<br>
<?php
    include '../view/footerinclude.php';
?>