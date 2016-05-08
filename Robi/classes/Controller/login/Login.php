<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Login_Login extends Controller_Application {
	
	public function action_index()
	{
		if($this->request->method() == 'POST'){
			//Form Validation
			$post = Validation::factory($_POST)
					->rule('username','not_empty')
					->rule('password','not_empty');
					
			// If validation success
			if($post->check()){
				//model here
				
			}
			else{
				$error = $post->errors('login/form/login');
				$username = $_POST['username'];
				$password = $_POST['password'];
			}
		}
		
		// Define page title
		$this->template->Page_Title = 'Login Penel';
		
		// Define mainContent
		$this->template->mainContent = view::factory('login/form/login')
										->bind('username',$username)
										->bind('password',$password)
										->bind('error',$error);
		
	}
	
}