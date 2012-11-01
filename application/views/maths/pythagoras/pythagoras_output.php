	<?php if (isset($result->hypotenuse_sol)) { ?>
	
		<script type="text/javascript">
		window.addEventListener('load', function () {
		  // Get the canvas element.
		  var elem = document.getElementById('myCanvas');
		  if (!elem || !elem.getContext) {
		    return;
		  }
		
		  // Get the canvas 2d context.
		  var context = elem.getContext('2d');
		  if (!context) {
		    return;
		  }
		
		  context.fillStyle   = '#fff';
		  context.strokeStyle = '#000';
		  context.lineWidth   = 4;
		
		  // Draw a right triangle.
		  context.beginPath();
		  context.moveTo(10, 10);
		  context.lineTo(10, <?php echo $result->opposite_sol;?>);
		  context.lineTo(<?php echo $result->adjacent_sol;?>, <?php echo $result->opposite_sol; ?>);
		  context.lineTo(10, 10);
		  context.fill();
		  context.stroke();
		  context.scale(2,2);
		  context.closePath();
		}, false);
	</script>
	    
	<div class="container">
		<table class="table table-bordered table-striped">
        	<thead>
            	<tr>
              		<th>Sides</th>
              		<th>Inputs</th>
              		<th>Outputs</th>
              	</tr>
            </thead>
            <tbody>
            	<tr>
              		<td>Adjacent</td>
              		<td><?php echo $result->adjacent; ?></td>
              		<td><?php echo $result->adjacent_sol; ?></td>
              		<td rowspan="3">
              			<p>
              				<canvas id="myCanvas" width="100%" height="100%">Your browser does not have 
	    support for Canvas. You should see: <img src="images/example-triangle.jpg" 
	    alt="Triangle">
	    					</canvas>
	    				</p>
	    			</td>
	    		</tr>
	    		<tr>
                	<td>Opposite</td>
                	<td><?php echo $result->opposite; ?></td>
                	<td><?php echo $result->opposite_sol; ?></td>
                </tr>
                <tr>
                	<td>Hypotenuse</td>
                	<td><?php echo $result->hypotenuse; ?></td>
                	<td><?php echo $result->hypotenuse_sol; ?></td>
                </tr>
           </tbody>
        </table>
	</div>    
	
	<?php } else { ?>
	
	<div class="container">
		<a href="pythagoras_input">Input Values Here</a>
	</div>
	
	<?php } ?>