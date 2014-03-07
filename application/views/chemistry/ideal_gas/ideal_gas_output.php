	<?php if(isset($result->formula)) { ?>
	
		<div class="container">
			<blockquote class="pull-right">
				<p>"The state of an amount of gas is determined by its pressure, volume, and temperature. The temperature used in the equation of state is an absolute temperature, kelvin"
				</p>
			<small>Ideal Gas Law, <cite title="wikipedia">Wikipedia</cite></small></blockquote>
			
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
	              		<td>Pressure</td>
	              		<td><?php echo $result->pressure; ?></td>
	              		<td><?php echo $result->pressure_sol; ?></td>
	              		<td rowspan="4"><h1><?php echo $result->formula; ?></h1></td>
		    		</tr>
		    		<tr>
	                	<td>Volume</td>
	                	<td><?php echo $result->volume; ?></td>
	                	<td><?php echo $result->volume_sol; ?></td>
	                </tr>
	                <tr>
	                	<td>Moles</td>
	                	<td><?php echo $result->moles; ?></td>
	                	<td><?php echo $result->moles_sol; ?></td>
	                </tr>
	                <tr>
	                	<td>Gas Constant</td>
	                	<td><?php echo $result->gas_constant; ?></td>
	                	<td><?php echo $result->gas_constant_sol; ?></td>
	                </tr>
	                <tr>
	                	<td>Temperature</td>
	                	<td><?php echo $result->temperature; ?></td>
	                	<td><?php echo $result->temperature_sol; ?></td>
	                </tr>
	           </tbody>
	        </table>
        
	        <p>The <strong><?php echo $result->unknown;?></strong> is <strong><?php echo $result->solution; ?></strong>.</p> 
		</div>    
	<?php } else { ?>
	
	<div class="container">
		<a href="ideal_gas_input">Input Values Here</a>
	</div>
	
	<?php } ?>