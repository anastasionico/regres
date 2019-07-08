<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<div>
		<ul>
			<?php
				foreach ($users as $key => $user) {
			?>
					<li style="display: block;margin-bottom: 3rem;">
						<img src="<?= $user->avatar?>"/>
						<?php
							
							echo "<p>" . $user->first_name .' '. $user->last_name . "</p>";
							
							echo "<p>" . $user->email . "</p>";
							
						?>
					</li>			
			<?php
				}
			?>
		</ul>	
	</div>
	
	
</body>
</html>