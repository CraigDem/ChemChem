		<div class="container">
			<blockquote class="pull-right">
				<p>"The state of an amount of gas is determined by its pressure, volume, and temperature. The temperature used in the equation of state is an absolute temperature, kelvin"
				</p>
			<small>Ideal Gas Law, <cite title="wikipedia">Wikipedia</cite></small></blockquote> 
			<h4>PV = nRT</h4><h4> Pressure * Volume = moles * Gas Constant * Temperature</h4>
			
			
			<hr>
		
			<form class="form-horizontal" method="post" action="<?php echo site_url("Chemistry/Ideal_gas"); ?>">
			  <div class="form-inline">
				  <div class="control-group">
				    <label class="control-label" for="absorbance">Pressure</label>
				    <div class="input-append input-prepend">
				      <span class="add-on">P</span>
				      <input type="text" id="pressure" name="pressure">
				      <span class="add-on">Pa</span>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="volume">Volume</label>
				    <div class="input-append input-prepend">
				    	<span class="add-on">V</span>
				      <input type="text" id="volume" name="volume">
				      <span class="add-on">m<sup>3</sup></span>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="moles">No. of Moles</label>
				    <div class="input-append input-prepend">
				    	<span class="add-on">n</span>
				      <input type="text" id="moles" name="moles">
				      <span class="add-on">Moles</span>
				    </div>
				  </div>
			  </div>
			  <div class="control-group">
			    <label class="control-label" for="gas_constant">Gas Constrant</label>
			    <div class="input-append input-prepend">
			    <span class="add-on">R</span>
			      <input type="text" id="gas_constant" name="gas_constant" value="8.314" disabled="">
			      <span class="add-on">J K<sup>-1</sup> Mol<sup>-1</sup></span>
			    </div>
			  </div>
			  <div class="control-group">
			    <label class="control-label" for="temperature">Temperature</label>
			    <div class="input-append input-prepend">
			    <span class="add-on">T</span>
			      <input type="text" id="temperature" name="temperature">
			      <span class="add-on">K</span>
			    </div>
			  </div>
			  
			  <div class="control-group">
			  	<div class="controls">
			  		<label class="radio inline" style="padding-left:0;">Unknown: </label>
					<label class="radio inline">
					  <input type="radio" name="optionsSide" id="optionPre" value="pre" checked>
					  	Pressure
					</label>
					<label class="radio inline">
					  <input type="radio" name="optionsSide" id="optionVol" value="vol">
					  Volume
					</label>
					<label class="radio inline">
					  <input type="radio" name="optionsSide" id="optionsMol" value="mol">
					  Moles
					</label>
					<label class="radio inline">
					  <input type="radio" name="optionsSide" id="optionsTemp" value="temp">
					  Temperature
					</label>
				</div>
			  </div>
				<div class="form-actions">
					<input type="submit" class="btn" />
				</div>
			</form>
		</div>
		
		