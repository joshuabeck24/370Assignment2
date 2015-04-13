<?php
	$title = "AudioNexus - Music";
	include '../view/headerinclude.php';
?>
<img alt="Image of a Mixer" src="../images/headphones.png" class="imageLoad" />
		
		<section>
		 <div class="container">
			 <div class="jumbotron container">
				 <h2> Music </h2>
				 <hr /> 
					 <div class="col-lg-6">
						 Artist: Tony Gregory
						 <br />
						 Song: Still Asleep
					 </div>
                     <input id="input-2" class="rating rating-xs" data-min="0" data-max="5" data-step="0.1" data-size="xs">

				 <div class="col-lg-6">
					 <audio controls>
						 <source src="../music/Still Aleep.WAV" type="audio/wav">
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
				 <input id="input-3" class="rating rating-xs" data-min="0" data-max="5" data-step="0.1" data-size="xs">
				<!--  <fieldset class="rating">
					    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
					    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
					    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
					    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
					    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
					    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
					    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
					    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
					    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
					    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
					</fieldset> -->
				 
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