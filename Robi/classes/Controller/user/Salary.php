<?php defined('SYSPATH') or die('No direct script access.');

Class Controller_User_Salary extends Controller_Application {

	// view Own attendance
	public function action_viewownpayslip()
	{
		if($this->request->method() == 'POST'){
			
			// form validation
			$post = Validation::factory($_POST)
					->rule('year','not_empty')
					->rule('month','not_empty');
					
			// if validation success
			if($post->check()){
				//model here
			}
			else{
				$error = $post->errors('user/report/viewownpayslip');
				$year=$_POST['year'];
				$month=$_POST['month'];
			}
		}
		
		// define page title
		$this->template->Page_Title = 'View Own Payslip';
		
		// define maincontent
		$this->template->mainContent = view::factory('user/report/viewownpayslip')
										->bind('year',$year)
										->bind('month',$month)
										->bind('error',$error);
	}
	
	
	// Show Own payslip
	public function action_showownpayslip()
	{
		$year=$_POST['year'];
		$month=$_POST['month'];
		
		// define page title
		$this->template->Page_Title = 'View Own Payslip';
		
		// define maincontent
		$this->template->mainContent = view::factory('user/report/showownpayslip')
										->bind('year',$year)
										->bind('month',$month);
	}
	
	
	// view Own Provident Fund
	public function action_viewownpf()
	{
		
		// define page title
		$this->template->Page_Title = 'View Own Provident Fund';
		
		// define maincontent
		$this->template->mainContent = view::factory('user/report/viewownpf');
	}
}