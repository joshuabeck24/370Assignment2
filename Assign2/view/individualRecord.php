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
						 <span class="bold">Artist:</span> <?php echo htmlspecialchars($row['artistName']) ?>
						 <br />
						 <span class="bold">Album:</span> <?php echo htmlspecialchars($row['albumName']) ?>
                         <br />
                         <span class="bold">Song:</span> <?php echo htmlspecialchars($row['trackName']) ?>
                         <br/>
                         <span class="bold">Release Date:</span> <?php echo htmlspecialchars(toDisplayDate($row['releaseDate']))  ?>
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

				 <!-- Buttons for editing -->
                 
				 <div style="margin-top:15px;"class="ma col-lg-12">
				 	<?php if(userIsAuthorized("AddMusic")) { ?>
				 		<input type="button" value="Add" onclick="document.location= '../controller/controller.php?action=AddMusic'" class="btn btn-success">
				 	<?php } if(userIsAuthorized("EditMusic")) { ?>
				 		<input type="button" value="Edit" onclick="document.location= '../controller/controller.php?action=EditMusic&ID=<?php echo $row['ID'] ; ?>';" class="btn btn-success">
				 	<?php } if(userIsAuthorized("DeleteMusic")) { ?>
				 		<input type="button" value="Delete" onclick="confirmDelete()" class="btn btn-success">
                    <?php } ?>
				 </div> 

			</div>
		</div>
		</section>
		<br>

		<script>
				function confirmDelete()
			    {
                    //window.confirm("Are you sure you don't want to rate the song?");
					var choice = confirm("Are you sure you don't want to delete this song?");
					if (choice == true) //OK was pressed
					{
					    document.location ='../controller/controller.php?action=DeleteMusic&ID=<?php echo $row['ID'] ; ?>';
					} 
					else 
					{
					    return;
					}
			   }
		</script>
<?php
    include '../view/footerinclude.php';
?>