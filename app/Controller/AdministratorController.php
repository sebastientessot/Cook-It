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
}
?>