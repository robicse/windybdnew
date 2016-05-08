<?php defined('SYSPATH') or die('No direct script access.');

Class Controller_User_Attendance extends Controller_Application {

	// view attendance request
	public function action_viewattendancerequest()
	{
		// define page title
		$this->template->Page_Title = 'View Attendance Request';
		
		// define maincontent
		$this->template->mainContent = view::factory('user/report/attendancerequest');
	}
	
	
	// view Own attendance
	public function action_viewownattendance()
	{
		
		// define page title
		$this->template->Page_Title = 'View Own Attendance';
		
		// define maincontent
		$this->template->mainContent = view::factory('user/report/viewownattendance')
										->bind('year',$year)
										->bind('month',$month)
										->bind('error',$error);
	}
	
	
	// Show Own attendance
	public function action_showownattendance()
	{
		$year=$_POST['year'];
		$month=$_POST['month'];
		
		// define page title
		$this->template->Page_Title = 'View Own Attendance';
		
		// define maincontent
		$this->template->mainContent = view::factory('user/report/showownattendance')
										->bind('year',$year)
										->bind('month',$month);
	}
}