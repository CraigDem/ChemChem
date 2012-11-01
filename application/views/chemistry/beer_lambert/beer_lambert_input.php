		<div class="container">
			<blockquote class="pull-right">
				<p>"There is a logarithmic dependence between the transmission (or transmissivity), T, of light through a substance and the product of the absorption coefficient of the substance, α, and the distance the light travels through the material (i.e., the path length), ℓ. The absorption coefficient can, in turn, be written as a product of either a molar absorptivity (extinction coefficient) of the absorber, ε, and the molar concentration c of absorbing species in the material.
				</p>
			<small>Beer Lambert Law, <cite title="wikipedia">Wikipedia</cite></small></blockquote> 
			<h4>α = ε * c * ℓ</h4><h4> Absorbance = Extinction Coefficient * Concentration * Path Length</h4>
			
			
			<hr>
		
			<form class="form-horizontal" method="post" action="<?php echo site_url("Chemistry/Beer_lambert"); ?>">
			  <div class="form-inline">
				  <div class="control-group">
				    <label class="control-label" for="absorbance">Absorbance</label>
				    <div class="input-append input-prepend">
				      <span class="add-on">α</span>
				      <input type="text" id="absorbance" name="absorbance">
				      <span class="add-on"></span>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="extinction">Extinction Coefficient</label>
				    <div class="input-append input-prepend">
				    	<span class="add-on">ε</span>
				      <input type="text" id="extinction" name="extinction">
				      <span class="add-on">dm<sup>3</sup> cm<sup>-1</sup></span>
				    </div>
				  </div>
			  </div>
			  <div class="control-group">
			    <label class="control-label" for="concentration">Concentration</label>
			    <div class="input-append input-prepend">
			    <span class="add-on">c</span>
			      <input type="text" id="concentration" name="concentration">
			      <span class="add-on">mol<sup>-1</sup> dm<sup>3</sup></span>
			    </div>
			  </div>
			  <div class="control-group">
			    <label class="control-label" for="path_length">P Length</label>
			    <div class="input-append input-prepend">
			    <span class="add-on">ℓ</span>
			      <input type="text" id="path_length" name="path_length">
			      <span class="add-on">cm</span>
			    </div>
			  </div>
			  
			  <div class="control-group">
			  	<div class="controls">
			  		<label class="radio inline" style="padding-left:0;">Unknown: </label>
					<label class="radio inline">
					  <input type="radio" name="optionsSide" id="optionAbs" value="absorb" checked>
					  	Absorbance
					</label>
					<label class="radio inline">
					  <input type="radio" name="optionsSide" id="optionExt" value="extinct">
					  Extinction
					</label>
					<label class="radio inline">
					  <input type="radio" name="optionsSide" id="optionsConc" value="conc">
					  Concentration
					</label>
					<label class="radio inline">
					  <input type="radio" name="optionsSide" id="optionsPath" value="path">
					  Path Length
					</label>
				</div>
			  </div>
				<div class="form-actions">
					<input type="submit" class="btn" />
				</div>
			</form>
		</div>
		
		