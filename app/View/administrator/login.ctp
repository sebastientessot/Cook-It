
<div id="login_container">
	<?php
		echo $this->Form->create('Administrator');
			
			echo $this->Form->input('identifiant', array('label' => 'Identifiant '));
			echo $this->Form->input('password', array('label' => 'Mot de passe '));
			
		echo $this->Form->end('S\'identifier'); 
	?>
</div>