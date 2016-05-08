<?php defined('SYSPATH') or die('No direct script access.');

Class Controller_User_Leave extends Controller_Application {

	//leave schedule
	public function action_leaveschedule()
	{
		// leave schedule
		$this->template->Page_Title = 'Leave Schedule';
		
		// main content
		$this->template->mainContent = view::factory('user/report/leaveschedule');
	}
	
	
	// own leave summary
	public function action_ownleavesummary()
	{
		
		// define page title
		$this->template->Page_Title = 'View Own Leave Summary';
		
		//define maincontent
		$this->template->mainContent = view::factory('user/report/ownleavesummary')
										->bind('year',$year)
										->bind('error',$error);
	}
	
	
	// show own leave summary
	public function action_showownleavesummary()
	{
		
		if($this->request->method() == 'POST'){
			if($_POST['year'] != "")
			{
				// define page title
				$this->template->Page_Title = 'View Own Leave Summary';
				
				//define maincontent
				$this->template->mainContent = view::factory('user/report/showownleavesummary')
												->bind('year',$year);
			}
			else if($_POST['year'] == "")
			{
				HTTP::redirect('user_leave/ownleavesummary');
			}
		}
		
		
	}
	
	
	// leave application
	public function action_leaveapplication()
	{
		// set connection js file
		$this->template->scripts = array('custom.js','dateTimeCust.js');
		
		if($this->request->method() == 'POST'){
			// form validation
			$post = Validation::factory($_POST)
					->rule('startDate','not_empty')
					->rule('endDate','not_empty')
					->rule('leaveType','not_empty');
					
			// if validation success
			if($post->check()){
				//model 
			}
			else{
				$error = $post->errors('user/form/leaveapplication');
				//re-pass values into form
				$startDate=$_POST['startDate'];
				$endDate=$_POST['endDate'];
				$leaveType=$_POST['leaveType'];
				$duration=$_POST['duration'];
				$subsPerDesig=$_POST['subsPerDesig'];
				$subsPerName=$_POST['subsPerName'];
			}
		}
		
		// define page title
		$this->template->Page_Title = 'Leave Application';
		
		
		// define maincontent
		$this->template->mainContent = view::factory('user/form/leaveapplication')
										->bind('startDate',$startDate)
										->bind('endDate',$endDate)
										->bind('leaveType',$leaveType)
										->bind('duration',$duration)
										->bind('subsPerDesig',$subsPerDesig)
										->bind('subsPerName',$subsPerName)
										->bind('error',$error);
	}
	
	// leave application confirm
	public function action_leaveapplicationconfirm()
	{
		// define page title
		$this->template->Page_Title = 'Leave Management';
		
		// define maincontent
		$this->template->mainContent = view::factory('user/form/leaveapplicationconfirm');
	}
	
	
	
	// view leave application request
	public function action_leaveapplicationrequest()
	{
		// define page title
		$this->template->Page_Title = 'Leave Application Request';
		
		// define maincontent
		$this->template->mainContent = view::factory('user/report/leaveapplicationrequest');
	}
}