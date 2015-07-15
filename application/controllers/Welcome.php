<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
            require_once APPPATH.'models/Entities/User.php';
            require_once APPPATH.'models/Entities/UserGroup.php';
            		$this->load->library('doctrine');
                $group = new Entity\UserGroup;
		$group->setName('Users');

		$user = new Entity\User;
		$user->setUsername('wildlyinaccurate');
		$user->setPassword('Passw0rd');
		$user->setEmail('wildlyinaccurate@gmail.com');
		$user->setGroup($group);
                
		$this->load->view('welcome_message', array(
			'user' => $user,
			'group' => $group,
		));
	}
}
