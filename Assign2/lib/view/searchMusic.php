<?php
	$title = "AudioNexus - Search Music";
	include '../view/headerinclude.php';
?>
<img alt="Image of a Mixer" src="../images/headphones.png" class="imageLoad" />
<section>
		 <div class="container">
			 <div class="jumbotron container">
				 <h2> Search Music </h2>
				 <hr /> 
				    <p>Select a Track:
					<select id="trackSelect" onchange="songLookup()">
					<option value="0">Select a Track</option>

					<?php foreach ($results as $row) { ?>
							<option value="<?php echo $row['ID']?>"><?php echo $row['trackName'] ?></option>
					<?php } ?>
					</select>
					</p>
					<p>
						<a href="../controller/controller.php?action=ListMusic&ListType=Local">View Local Bands</a>
				   </p>
				   <p>
				   		<input type="text" id="Criteria">
				   		<input type="button" value="General Seach" onclick="generalSearch()" class="btn btn-success">
				   </p>

			</div>
		</div>
		</section>
		<br>

<script>

	function songLookup()
	{
	   document.location = "../controller/controller.php?action=IndividualRecord&ID=" +  
       $('#trackSelect').val();
    }

    function generalSearch()
    {
    	document.location = "../controller/controller.php?action=ListMusic&ListType=GeneralSearch&Criteria="+
    	encodeURIComponent($('#Criteria').val());
    }

</script>

<?php
include '../view/footerinclude.php';
?>