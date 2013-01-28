<?php

	class Administrator extends AppModel{
		public $validate = array(
        'identifiant' => array(
            array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Vous devez indiquer un identifiant'
            ),
            array(
                'rule' => 'alphanumeric',
                'message' => 'Votre identifiant doit être alphanimérique'
            ),
            array(
                'rule' => 'isUnique',
                'message' => 'Cet identifiant est déjà pris'
            )
        ),
        
        'password' => array(
        	array(
	            'rule' => 'notEmpty',
	            'allowEmpty' => false,
	            'message' => 'Vous devez entrer un mot de passe'
            )
        ),
        
        'email' => array(
            array(
                'rule' => 'email',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Votre email n\'est pas valide'
            ),
            array(
                'rule' => 'isUnique',
                'message' => 'Cet email est déjà pris'
            )
        )
    );
	}

?>