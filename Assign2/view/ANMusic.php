<?php
	$title = "AudioNexus - Music";
	include '../view/headerinclude.php';
?>
<img alt="Image of a Mixer" src="../images/headphones.png" class="imageLoad" />
		
		<section>
		 <div class="container">
			 <div class="jumbotron">
				 <h2> Music </h2>
				 <hr /> 
					 <div class="col-lg-6">
						 Artist: Tony Gregory
						 <br />
						 Song: Still Asleep
					 </div>
				 <div class="col-lg-6">
					 <audio controls>
						 <source src="../music/still_asleep.WAV" type="audio/wav">
						 Your browser does not support the audio tag.
					 </audio>
				 </div>
				 
				 <br />
				 <br />
				 <hr />
				 <br /> 
				 
				 <div class="col-lg-6">
					 Artist: Joshua Beck
					 <br />
					 Song: RingTones for Dayz
				 </div>
				 
				 <div class="col-lg-6">
					<audio controls>
					<source src="../music/ringtone.WAV" type="audio/wav">
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