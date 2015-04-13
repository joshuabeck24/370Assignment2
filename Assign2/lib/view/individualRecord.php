<?php
	$title = "AudioNexus - Music";
	include '../view/headerinclude.php';
?>
<img alt="Image of a Mixer" src="../images/headphones.png" class="imageLoad" />
		
		<section>
		 <div class="container">
			 <div class="jumbotron container">
				 <h2> Music Details</h2>
				 <hr />

				  <div class="col-lg-6">
						 <span class="bold">Artist:</span> <?php echo $row['artistName']; ?>
						 <br />
						 <span class="bold">Album:</span> <?php echo $row['albumName'] ; ?>
                         <br />
                         <span class="bold">Song:</span> <?php echo $row['trackName'] ; ?>
                         <br/>
                         <span class="bold">Release Date:</span> <?php echo toDisplayDate($row['releaseDate'])  ?>
                         <br/>
                         <span class="bold">Local:</span> <?php echo $row['isLocalBand'] ; ?>
						 <input id="input-2" class="rating rating-xs" data-min="0" data-max="5" data-step="0.1" data-size="xs" data-readonly="true" value="<?php echo $row['rating'] ; ?>">
				 </div>

                     

				 <div class="col-lg-6">
					 <audio controls>
						 <source src=<?php echo $row['filePath'] ; ?> type=<?php echo $row['fileType'] ; ?>>
						 Your browser does not support the audio tag.
					 </audio>
				 </div> 
					 
			</div>
		</div>
		</section>
		<br>
<?php
    include '../view/footerinclude.php';
?>