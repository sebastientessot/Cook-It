<div id="login_container">
	<?php
		echo $this->Html->link("", "../.." , array('class' => 'logo'));
		
		echo $this->Session->flash();
	
		echo $this->Form->create('Administrator');
			
			echo $this->Form->input('identifiant', array('label' => 'Identifiant '));
			echo $this->Form->input('password', array('label' => 'Mot de passe '));
			
		echo $this->Form->end('S\'identifier');
		
		echo $this->Html->link("Mot de passe oublié ?", array('controller' => 'administrator', 'action' => 'pwdRenew'));
	?>
</div>