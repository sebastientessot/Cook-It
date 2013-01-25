<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $title_for_layout?></title>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<!-- Include external files and scripts here (See HTML helper for more info.) -->
		<?php
		echo $this->Html->css('admin');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		?>
	</head>
	<body>

		<!-- Here's where I want my views to be displayed -->
		<?php echo $this->fetch('content'); ?>
		
	</body>
</html>