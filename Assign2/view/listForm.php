<?php
	$title = "AudioNexus - All Music";
	include '../view/headerinclude.php';
?>
<img alt="Image of a Mixer" src="../images/headphones.png" class="imageLoad" />
		
		<section>
		 <div class="container">
			 <div class="jumbotron container">
				 <h2> ALL Music </h2>
				 <hr /> 
				 <table class="table table-bordered table-striped">
				 	<thead>
				 		<tr>
				 			<th>ARTIST</th>
				 			<th>ALBUM</th>
				 			<th>TRACK</th>
				 			<th>RELEASE DATE</th>
				 			<!-- <th>Play Meh</th> -->

				 		</tr>
				 	</tehead>
				 	<tbody>
				 		<?php foreach ($results as $row) {//BEGIN LOOP ?>
				 			
				 		
					 		<tr>
					 			<td><?php echo $row['artistName']; ?></td>
					 			<td><?php echo $row['albumName'] ; ?></td>
					 			<td><?php echo $row['trackName'] ; ?></td>
					 			<td><?php echo $row['releaseDate'] ; ?></td>
					 			<td>
					 				<!-- <audio controls>
									<source src= <?php echo $row['filePath']; ?>  type= <?php echo $row['fileType']; ?> >
									Your browser does not support the audio tag.
									</audio>  -->
					 			</td>
					 		</tr>
                        <?php }//END LOOP?>
				 	</tbody>
				 </table>
				 
			</div>
		</div>
		</section>
		<br>
<?php
include '../view/footerinclude.php';
?>
