<?php
/**
 *
 * This file will render views from views/administrator/
 *
 *
 *
 */
 
 class AdministratorController extends AppController {

	/**
	 * Controller name
	 *
	 * @var string
	 */
	public $name = 'Administrator';

	/**
	 *
	 * This function allow to login an admin
	 *
	 */
	public function login() {
	
		$this->layout = 'admin';
	}
	
	public function logout(){
		$this->Auth->logout();
		$this->redirect($this->referer());
	}
	
	public function signup() {
		
		if($this->request->is('post')){
		
			$data = $this->request->data;
			$data['Administrator']['id'] = null;
			
			if(!empty($data['Administrator']['password'])){
				$data['Administrator']['password'] = Security::hash($data['Administrator']['password']);
				/*debug($data);
				echo("password = ".$data['Administrator']['password']);*/
			}
			
			if($this->Administrator->save($data, true, array('identifiant', 'email', 'password'))){
				$this->Session->setFlash("Votre compte a bien été créé","notif");
			}else{
				$this->Session->setFlash("Merci de corriger vos erreurs","notif", array("type" => "error"));
			}
		}
		
		$this->layout = 'admin';
	}
}
?>