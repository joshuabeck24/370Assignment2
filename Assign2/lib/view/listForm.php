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
				 <table class="table table-bordered table-striped table-hover">
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
					 			<td>
					 				<a href="../controller/controller.php?action=IndividualRecord&ID=<?php echo $row['ID'] ; ?>">
					 				   <?php echo $row['artistName']; ?>
					 			    </a>
					 			</td>
					 			<td><?php echo $row['albumName'] ; ?></td>
					 			<td><?php echo $row['trackName'] ; ?></td>
					 			<td><?php echo toDisplayDate($row['releaseDate'])  ?></td>
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
