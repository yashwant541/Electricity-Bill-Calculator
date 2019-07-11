<!DOCTYPE html>
<html>
	<head>
		<title>Calculator</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		
		<div class="container" style="margin-top: 50px">
		
			<?php
			
				// If the submit button has been pressed
				if(isset($_POST['submit']))
				{
					// Check number values
					if(is_numeric($_POST['total_bill']) && is_numeric($_POST['total_unit']) && is_numeric($_POST['op1']) && is_numeric($_POST['op2']) && is_numeric($_POST['op3']))
					{
						echo "Yes";
						$rate=$_POST['total_bill']/$_POST['total_unit'];
						$sum=$_POST['op1']+$_POST['op2']+$_POST['op3'];
						$water=$_POST['total_unit']-($sum);
						$man1=$_POST['op1']+($_POST['op1']/$sum)*$water;
						$man2=$_POST['op2']+($_POST['op2']/$sum)*$water;
						$man3=$_POST['op3']+($_POST['op3']/$sum)*$water;
						$val1=$man1*$rate;
						$val2=$man2*$rate;
						$val3=$man3*$rate;
						
						// Print total to the browser
						echo "<h1>Operator 1 unit:{$_POST['op1']} cost:{$val1}</h1><br><h1>Operator 2 unit:{$_POST['op2']} cost:{$val2}</h1><br><h1>Operator 3 unit:{$_POST['op3']} cost:{$val3}</h1>";
					
					} else {
						
						// Print error message to the browser
						echo 'Numeric values are required';
					
					}
				}
			
			?>
		    
		    <!-- Calculator form -->
		    <form method="post" action="index.php">
				<label>Total Bill</label>
				<input name="total_bill" type="text" class="form-control" style="width: 150px; display: inline" /><br>
				<label>Total Unit</label>
				<input name="total_unit" type="text" class="form-control" style="width: 150px; display: inline" /><br>
				<label>Operator 1 Submeter unit</label>
				<input name="op1" type="text" class="form-control" style="width: 150px; display: inline" /><br>
				<label>Operator 2 Submeter unit</label>
				<input name="op2" type="text" class="form-control" style="width: 150px; display: inline" /><br>
				<label>Operator 3 Submeter unit</label>
				<input name="op3" type="text" class="form-control" style="width: 150px; display: inline" /><br>
		        
		        <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
		    </form>
	    
		</div>
	
	</body>
</html>