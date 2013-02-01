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
		
		if($this->request->is('post')){
			if($this->Auth->login()){
				$this->redirect(array('controller' =>'administrator', 'action' => 'overview'));
			}else{
				$this->Session->setFlash("Identifiant ou mot de passe incorrect","notif", array("type" => "error"));
			}
		}
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
				$data['Administrator']['password'] = AuthComponent::password($data['Administrator']['password']);
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