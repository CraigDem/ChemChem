	<?php if(isset($result->formula)) { ?>
	
		<div class="container">
			<blockquote class="pull-right">
				<p>"There is a logarithmic dependence between the transmission (or transmissivity), T, of light through a substance and the product of the absorption coefficient of the substance, α, and the distance the light travels through the material (i.e., the path length), ℓ. The absorption coefficient can, in turn, be written as a product of either a molar absorptivity (extinction coefficient) of the absorber, ε, and the molar concentration c of absorbing species in the material.
				</p>
			<small>Beer Lambert Law, <cite title="wikipedia">Wikipedia</cite></small></blockquote> 
			
			<table class="table table-bordered table-striped">
	        	<thead>
	            	<tr>
	              		<th>Arguments</th>
	              		<th>Inputs</th>
	              		<th>Outputs</th>
	              		<th>Formulae</th>
	              	</tr>
	            </thead>
	            <tbody>
	            	<tr>
	              		<td>Absorbance</td>
	              		<td><?php echo $result->absorbance; ?></td>
	              		<td><?php echo $result->absorbance_sol; ?></td>
	              		<td rowspan="4"><h1><?php echo $result->formula; ?></h1></td>
		    		</tr>
		    		<tr>
	                	<td>Extinction Coefficent</td>
	                	<td><?php echo $result->extinction; ?></td>
	                	<td><?php echo $result->extinction_sol; ?></td>
	                </tr>
	                <tr>
	                	<td>Concentration</td>
	                	<td><?php echo $result->concentration; ?></td>
	                	<td><?php echo $result->concentration_sol; ?></td>
	                </tr>
	                <tr>
	                	<td>Path Length</td>
	                	<td><?php echo $result->path_length; ?></td>
	                	<td><?php echo $result->path_length_sol; ?></td>
	                </tr>
	           </tbody>
	        </table>
        
	        <p>The <strong><?php echo $result->unknown;?></strong> is <strong><?php echo $result->solution; ?></strong>.</p> 
		</div>    
	<?php } else { ?>
	
	<div class="container">
		<a href="beer_lambert_input">Input Values Here</a>
	</div>
	
	<?php } ?>