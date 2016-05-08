<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Hr_Attendance extends Controller_Application {
	
	// Create Attendance Rule
	public function action_createattendancerule()
	{
		// set connection dateTime file
		$this->template->scripts=array('dateTimeCust.js');
		
		if($this->request->method()=='POST'){
			
			//Form validation
			$post = Validation::factory($_POST)
			->rule('attendanceRuleName','not_empty')
			->rule('startTime','not_empty')
			->rule('lateTime','not_empty');
			
			//If Validation Success
			if ($post->check()) {
				$attendancerule = ORM::factory('attendancerule');
				$attendancerule->attendanceRuleName=$_POST['attendanceRuleName'];
				$attendancerule->startTime=$_POST['startTime'];
				$attendancerule->lateTime=$_POST['lateTime'];
				$attendancerule->endTime=$_POST['endTime'];
				$attendancerule->save();
				$error['successful']= 'Successfully Submitted';
			}
			else {
				$error = $post->errors('hr/form/attendancerule');
				
				//Re-pass Values Into Form
				$attendanceRuleName=$_POST['attendanceRuleName'];
				$startTime=$_POST['startTime'];
				$lateTime=$_POST['lateTime'];
				$endTime=$_POST['endTime'];
			}
			
		}
		
		// Define Page title
		$this->template->Page_Title = 'Create Attendance Rule';
		
		// View Attendance Rule List
		$attendanceruleList = ORM::factory('attendancerule')->find_all();
		
		// Url link
		$formLink = 'hr_attendance/createattendancerule';
		
		
		// define maincontent
		$this->template->mainContent = view::factory('hr/form/attendancerule')
								->bind('attendanceRuleName',$attendanceRuleName)
								->bind('startTime',$startTime)
								->bind('lateTime',$lateTime)
								->bind('endTime',$endTime)
								->bind('attendanceruleList',$attendanceruleList)
								->bind('formLink',$formLink)
								->bind('error',$error); 
	}
	
	// Edit Attendance Rule
	public function action_editattendancerule()
	{
		// set connection dateTime file
		$this->template->scripts=array('dateTimeCust.js');
		
		// Define Page title
		$this->template->Page_Title = 'Edit Attendance Rule';
		
		// For Update
		if($this->request->method()=='POST'){
			$updateAttendancerule = ORM::factory('attendancerule',$this->request->param('id'));
			$updateAttendancerule->attendanceRuleName=isset($_POST['attendanceRuleName'])?$_POST['attendanceRuleName']:$attendanceRuleName;
			$updateAttendancerule->startTime=isset($_POST['startTime'])?$_POST['startTime']:$startTime;
			$updateAttendancerule->lateTime=isset($_POST['lateTime'])?$_POST['lateTime']:$lateTime;
			$updateAttendancerule->endTime=isset($_POST['endTime'])?$_POST['endTime']:$endTime;
			$updateAttendancerule->save();
			$error['successful']= 'Successfully Updated';
		}	
		
		// For Edit
		$attruleId=$this->request->param('id');
		$attendanceruleList = ORM::factory('attendancerule')->find_all();
		foreach($attendanceruleList as $data){
			if($attruleId == $data->id) {
					$attendanceRuleName = $data->attendanceRuleName;
					$startTime = $data->startTime;
					$lateTime = $data->lateTime;
					$endTime = $data->endTime;
			}
		}
		
		
		// Url link	
		$formLink = 'hr_attendance/editattendancerule/' . $attruleId ;
		
		// Define maincontent
		$this->template->mainContent = view::factory('hr/form/attendancerule')
								->bind('attendanceRuleName',$attendanceRuleName)
								->bind('startTime',$startTime)
								->bind('lateTime',$lateTime)
								->bind('endTime',$endTime)
								->bind('attendanceruleList',$attendanceruleList)
								->bind('formLink',$formLink)
								->bind('error',$error);
	}
	
	
	// Delete Attendance Rule
	public function action_deleteattendancerule()
	{
		$attruleId=$this->request->param('id');
		
		$deleteAttendancerule = ORM::factory('attendancerule',$attruleId);
		$deleteAttendancerule->delete();
		$error['successful']= 'Successfully Deleted';
			
		$attendanceruleList = ORM::factory('attendancerule')->find_all();
		foreach($attendanceruleList as $data){
			if($attruleId == $data->id) {
					$attendanceRuleName = $data->attendanceRuleName;
					$startTime = $data->startTime;
					$lateTime = $data->lateTime;
					$endTime = $data->endTime;
			}
		}
		
		// Url link	
		$formLink = 'hr_attendance/deleteattendancerule/' . $attruleId ;
		
		// Define maincontent
		$this->template->mainContent = view::factory('hr/form/attendancerule')
								->bind('attendanceRuleName',$attendanceRuleName)
								->bind('startTime',$startTime)
								->bind('lateTime',$lateTime)
								->bind('endTime',$endTime)
								->bind('attendanceruleList',$attendanceruleList)
								->bind('formLink',$formLink)
								->bind('error',$error);
	}
	
	
	// View Attendance Request
	public function action_viewattendancerequest()
	{
		// Define Page Title
		$this->template->Page_Title = 'View Attendance Request';
		
		// Define Maincontent
		$this->template->mainContent = view::factory('hr/report/viewattendancerequest');
	}
	
	// View Attendance
	public function action_viewattendance()
	{
		// set connection custom.js file
		$this->template->scripts=array('custom.js');
		
		// view employee list dropdown
		$data = ORM::factory('employeeinfo')->find_all();
		$empNameId[]='--Select--';
		
		foreach($data as $emp){
			$empNameId[$emp->id]=$emp->name;
		}
		
		if($this->request->method() == 'POST'){
			// Form Validation
			$post = Validation::factory($_POST)
					->rule('empNameId','not_empty')
					->rule('empId','not_empty')
					->rule('year','not_empty')
					->rule('month','not_empty');
					
			// If Validation Success
			if($post->check()){
				// model here
			}
			else{
				$error = $post->errors('hr/report/viewattendance');
				
				$empNameValue=$_POST['empNameId'];
				$empId=$_POST['empId'];
				$year=$_POST['year'];
				$month=$_POST['month'];
			}
		}
		
		// Define Page Title
		$this->template->Page_Title = 'View Attendance';
		
		// Define Maincontent
		$this->template->mainContent = view::factory('hr/report/viewattendance')
										->bind('empNameId',$empNameId)
										->bind('empId',$empId)
										->bind('empNameValue',$empNameValue)
										->bind('year',$year)
										->bind('month',$month)
										->bind('error',$error);
	}
	
	
	// show attendance
	public function action_showattendance()
	{
		//define page title
		$this->template->Page_Title = 'View Attendance of Robeul';
		
		// define maincontent
		$this->template->mainContent = view::factory('hr/report/showattendance');
	}
	
	
	// Attendance Summary
	public function action_attendancesummary()
	{
		$data = ORM::factory('companylist')->find_all();
		$companyName[]='--Select--';
		$companyValue='--';
		
		foreach($data as $com) {
			$companyName[$com->id] = $com->companyName;
		}
		
		// Define Page Title
		$this->template->Page_Title = 'Attendance Summary';
		
		// Define Maincontent
		$this->template->mainContent = view::factory('hr/report/attendancesummary')
										->bind('companyName',$companyName)
										->bind('companyValue',$companyValue)
										->bind('year',$year)
										->bind('month',$month)
										->bind('error',$error);
	}
	
	
	
	// show attendance summary
	public function action_showattendancesummary()
	{
		if($this->request->method() == 'POST'){
			 
			 if($_POST['companyName'] != "0")
			{
		
				$year = $_POST['year'];
				$month = $_POST['month'];
				
				//define page title
				$this->template->Page_Title = 'Attendance Summary of '. $month.','.$year;
				
				// define maincontent
				$this->template->mainContent = view::factory('hr/report/showattendancesummary');
			}
			else if($_POST['companyName'] == "0")
			{
				//echo '2';
				HTTP::redirect('hr_attendance/attendancesummary');
			}
		}
	}
	
}