<?php defined('SYSPATH') or die('No direct script access.');
class Controller_User_Settings extends Controller_Application {
	
	// view holiday
	public function action_viewholiday()
	{
		// view holidaylist
		$data = ORM::factory('holidaylist')->find_all();
		
		// define page title
		$this->template->Page_Title = 'View Holiday';
		
		// define maincontent
		$this->template->mainContent =view::factory('user/report/holiday')
										->bind('data',$data);
	}
	
	
	// view weekend
	public function action_viewweekend()
	{
		// view weekendlist
		$data = ORM::factory('weekendlist')->find_all();
		
		// define page title
		$this->template->Page_Title = 'View Weekend';
		
		// define maincontent
		$this->template->mainContent =view::factory('user/report/weekend')
										->bind('data',$data);
	} 
	
}