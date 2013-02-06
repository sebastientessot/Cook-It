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
		<div id="admin_header">
		</div>
		
		<div id="side_bar">
			<ul id="bar-menu">
				<li id="bar-margin-top"></li>
				<li id="monCompte" class="menu-element">Mon Compte<div id="triangle-hover" style="top:215px"></div></li>
				<li id="menu-article" class="menu-element">Articles<div id="triangle-hover" style="top:257px"></div></li>
			</ul>
		</div>
		
		<div id="admin-log-content">
			<!-- Here's where I want my views to be displayed -->
			<?php echo $this->fetch('content'); ?>
		</div>
	</body>
</html>