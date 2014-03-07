		<div class="container">
			<blockquote class="pull-right">
				<p>In any right triangle, the area of the square whose side is the hypotenuse (the side opposite the right angle) is equal to the sum of the areas of the squares whose sides are the two legs (the two sides that meet at a right angle).
					
				</p>
				<small>Pythagoras' Theorum, <cite title="wikipedia">Wikipedia</cite></small>
			</blockquote>
			
			<h4>c<sup>2</sup> = a<sup>2</sup> + b<sup>2</sup></h4>
			<h4>hypotenenuse<sup>2</sup> = opposite<sup>2</sup> + adjacent<sup>2</sup></h4>
			
			<hr>
		
			<form class="form-horizontal" method="post" action="<?php echo site_url("Maths/Pythagoras"); ?>">
			  <div class="control-group">
			    <label class="control-label" for="opposite">Opposite</label>
			    <div class="input-append input-prepend">
			    	<span class="add-on">a</span>
			      <input type="text" id="opposite" name="opposite" placeholder="Integer" />
			      <span class="add-on"></span>
			    </div>
			  </div>
			  <div class="control-group">
			    <label class="control-label" for="adjacent">Adjacent</label>
			    <div class="input-prepend input-append">
			    	<span class="add-on">b</span>
			    	<input type="text" id="adjacent" name="adjacent" placeholder="Integer" />
			      	<span class="add-on"></span>
			    </div>
			  </div>
			  <div class="control-group">
			    <label class="control-label" for="Hypotenuse">Hypotenuse</label>
			    <div class="input-prepend input-append">
			    	<span class="add-on">c</span>
			    	<input type="text" id="hypotenuse" name="hypotenuse" placeholder="Integer">
			      	<span class="add-on"></span>
			    </div>
			  </div>
			  
			  <div class="control-group">
			  	<div class="controls">
			  		<label class="radio inline" style="padding-left:0;">Unknown: </label>
					<label class="radio inline">
					  <input type="radio" name="optionsSide" id="optionOpp" value="opp" checked />
					  	Opposite
					</label>
					<label class="radio inline">
					  <input type="radio" name="optionsSide" id="optionAdj" value="adj">
					  Adjacent
					</label>
					<label class="radio inline">
					  <input type="radio" name="optionsSide" id="optionsHyp" value="hyp">
					  Hypotenuse
					</label>
				</div>
			  </div>
				<div class="form-actions">
					<input type="submit" class="btn" />
				</div>
			</form>
		</div>
		
		