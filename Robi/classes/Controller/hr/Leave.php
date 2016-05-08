<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Hr_Leave extends Controller_Application {
	
	// Create Leave Package
	public function action_createleavepackage()
	{
		if($this->request->method()=='POST'){
			
			//Form validation
			$post = Validation::factory($_POST)
					->rule('packageName','not_empty')
					->rule('casual','not_empty')
					->rule('earned','not_empty')
					->rule('sick','not_empty');
			
			//If Validation Success
			if ($post->check()) {
				$leavePackage = ORM::factory('leavepackage');
				$leavePackage->packageName=$_POST['packageName'];
				$leavePackage->casual=$_POST['casual'];
				$leavePackage->earned=$_POST['earned'];
				$leavePackage->sick=$_POST['sick'];
				$leavePackage->save();
				$error['successful']= 'Successfully Submitted';
			}
			else {
				$error = $post->errors('hr/form/leavepackage');
				
				//Re-pass Values Into Form
				$packageName=$_POST['packageName'];
				$casual=$_POST['casual'];
				$earned=$_POST['earned'];
				$sick=$_POST['sick'];
			}
			
		}
		
		// Define Page title
		$this->template->Page_Title = 'Create Leave Package';
		
		// View Company List
		$leavepackageList = ORM::factory('leavepackage')->find_all();
		
		// Url link
		$formLink = 'hr_leave/createleavepackage';
		
		
		// define maincontent
		$this->template->mainContent = view::factory('hr/form/leavepackage')
								->bind('packageName',$packageName)
								->bind('casual',$casual)
								->bind('earned',$earned)
								->bind('sick',$sick)
								->bind('leavepackageList',$leavepackageList)
								->bind('formLink',$formLink)
								->bind('error',$error); 
	}
	
	// Edit Leave Package
	public function action_editleavepackage()
	{
		// Define page title
		$this->template->Page_Title = 'Edit Leave Package';
		
		// For Update
		if($this->request->method() == 'POST'){
			$updateLeavepackage = ORM::factory('leavepackage',$this->request->param('id'));
			$updateLeavepackage->packageName = isset($_POST['packageName'])?$_POST['packageName']:$packageName;
			$updateLeavepackage->casual = isset($_POST['casual'])?$_POST['casual']:$casual;
			$updateLeavepackage->earned = isset($_POST['earned'])?$_POST['earned']:$earned;
			$updateLeavepackage->sick = isset($_POST['sick'])?$_POST['sick']:$sick;
			$updateLeavepackage->save();
			$error['successful'] = 'Successfully Updated';
		}
		
		
		// For Edit 
		$leavepackageId=$this->request->param('id');
		$leavepackageList = ORM::factory('leavepackage')->find_all();
		foreach($leavepackageList as $data){
			if($leavepackageId == $data->id) {
					$packageName=$data->packageName;
					$casual=$data->casual;
					$earned=$data->earned;
					$sick=$data->sick;
			}
		}
		
		
		// Url Link
		$formLink = 'hr_leave/editleavepackage/'. $leavepackageId ;
		
		// Define maincontent
		$this->template->mainContent = view::factory('hr/form/leavepackage')
								->bind('packageName',$packageName)
								->bind('casual',$casual)
								->bind('earned',$earned)
								->bind('sick',$sick)
								->bind('leavepackageList',$leavepackageList)
								->bind('formLink',$formLink)
								->bind('error',$error);
	}
	
	// For Delete 
	public function action_deleteleavepackage()
	{
		$leavepackageId=$this->request->param('id');
		
		$deleteLeavepackage = ORM::factory('leavepackage',$leavepackageId);
		$deleteLeavepackage->delete();
		$error['successful']='Successfully Deleted';
		
		$leavepackageList = ORM::factory('leavepackage')->find_all();
		foreach($leavepackageList as $data){
			if($leavepackageId == $data->id){
				$packageName=$data->packageName;
				$casual=$data->casual;
				$earned=$data->earned;
				$sick=$data->sick;
			}
		}
		
		// Url Link
		$formLink = 'hr_leave/editleavepackage/'. $leavepackageId ;
		
		// Define maincontent
		$this->template->mainContent = view::factory('hr/form/leavepackage')
								->bind('packageName',$packageName)
								->bind('casual',$casual)
								->bind('earned',$earned)
								->bind('sick',$sick)
								->bind('leavepackageList',$leavepackageList)
								->bind('formLink',$formLink)
								->bind('error',$error);
	}
	
	
	// Leave Application Request
	public function action_leaveapplicationrequest()
	{
		// Define page title
		$this->template->Page_Title = 'View Leave Application Request';
		
		// Define maincontent
		$this->template->mainContent = view::factory('hr/report/leaveapplicationrequest');
	}
	
	// View Leave Application
	public function action_viewleaveapplication()
	{
		// Define page title
		$this->template->Page_Title='View Leave Application';
		
		// Define maincontent
		$this->template->mainContent = view::factory('hr/report/viewleaveapplication');
	}
	
	
	// Leave Summery
	public function action_leavesummary()
	{
		$data = ORM::factory('companylist')->find_all();
		$companyName['--']='---Select---';
		$companyValue = '--';
		foreach($data as $com) {
			$companyName[$com->id] = $com->companyName;
		}
		
		if($this->request->method()=='POST'){
			
			//Form validation
			$post = Validation::factory($_POST)
					->rule('companyName','not_empty')
					->rule('year','not_empty');
			
			//If Validation Success
			if ($post->check()) {
				//model here
			}
			else {
				$error = $post->errors('hr/report/leavesummary');
				
				//Re-pass Values Into Form
				$companyValue=$_POST['companyName'];
				$year=$_POST['year'];
			}
			
		}
		
		// Define Page title
		$this->template->Page_Title = 'View leave Summary';
		
		
		// define maincontent
		$this->template->mainContent = view::factory('hr/report/leavesummary')
								->bind('companyName',$companyName)
								->bind('companyValue',$companyValue)
								->bind('year',$year)
								->bind('error',$error); 
	}
	
	
	// show leave summary
	public function action_showleavesummary()
	{
		$year = $_POST['year'];
		$companyNameId = $_POST['companyName'];
		
		$data = ORM::factory('companylist')->where('id','=',$companyNameId)->find_all();
		
		foreach($data as $com){
			$companyId[$com->id]=$com->companyName;
			$companyName=$com->companyName;
		}
		
		
		//define page title
		$this->template->Page_Title = 'Leave Summary of '. $year;
		
		// define maincontent
		$this->template->mainContent = view::factory('hr/report/showleavesummary');
	}
	
	
	// Date Wise Leave
	public function action_datewiseleave()
	{
		// set connection dateTimeCust.js file
		$this->template->scripts=array('dateTimeCust.js');
		
		// Define Page Title
		$this->template->Page_Title = 'View Date Wise Leave';
		
		// Define maincontent
		$this->template->mainContent = view::factory('hr/report/datewiseleave')
									->bind('startDate',$startDate)
									->bind('endDate',$endDate)
									->bind('error',$error);
	}
	
	
	// show date wise leave
	public function action_showdatewiseleave()
	{
		if($this->request->method() == 'POST'){
			 
			 if($_POST['startDate'] != "" && $_POST['endDate'] != "")
			{
		
				$startDate=$_POST['startDate'];
				$endDate=$_POST['endDate'];
				
				//define page title
				$this->template->Page_Title = 'Date Wise Leave Between ' . $startDate . ' And ' . $endDate;
				
				// define maincontent
				$this->template->mainContent = view::factory('hr/report/showdatewiseleave');
			}
			else if($_POST['startDate'] == "")
			{
				//echo '2';
				HTTP::redirect('hr_leave/datewiseleave');
			}
		}
	}
	
	
	// Leave report 
	public function action_leavereport()
	{
		// set connection custom.js file
		$this->template->scripts=array('custom.js');
		
		// view companylist dropdown
		$data = ORM::factory('companylist')->find_all();
		$companyName[]='--Select--';
		
		foreach($data as $com){
			$companyName[$com->id]=$com->companyName;
		}
		
		// view employee list dropdown
		$data = ORM::factory('employeeinfo')->find_all();
		$empNameId[]='--Select--';
		
		foreach($data as $emp){
			$empNameId[$emp->id]=$emp->name;
		}
		
		// Define page title
		$this->template->Page_Title = 'Leave Report';
		
		// Define mainContent
		$this->template->mainContent = view::factory('hr/report/leavereport')
									->bind('empNameId',$empNameId)
									->bind('empNameId',$empNameId)
									->bind('empId',$empId)
									->bind('empNameValue',$empNameValue)
									->bind('companyName',$companyName)
									->bind('companyValue',$companyValue)
									->bind('empName',$empName)
									->bind('year',$year)
									->bind('error',$error);
	}
	
	
	
	// show leave report
	public function action_showleavereport()
	{
		if($this->request->method() == 'POST'){
			
			 if($_POST['companyName'] != "0")
			{
				$empNameId=$_POST['empNameId'];
				//$empId=$_POST['empId'];
				$year=$_POST['year'];
				//$month=$_POST['month'];
				
				$data = ORM::factory('employeeinfo')->where('id','=',$empNameId)->find_all();
			   
				foreach($data as $emp){
					$employeeId[$emp->id]=$emp->name;
					$employeeId[$emp->id]=$emp->employeeId;
					$name=$emp->name;
					$employeeId=$emp->employeeId;
				}
				
				
				//define page title
				$this->template->Page_Title = 'Leave Report';
				
				// define maincontent
				$this->template->mainContent = view::factory('hr/report/showleavereport')
												->bind('year',$year)
												->bind('name',$name);
			}
			else if($_POST['companyName'] == "0")
			{
				//echo '2';
				HTTP::redirect('hr_leave/leavereport');
			}
		}
	}
	
	
	// Leave report all
	public function action_leavereportall()
	{
		// set connection custom.js file
		$this->template->scripts=array('custom.js');
		
		// view companylist dropdown
		$data = ORM::factory('companylist')->find_all();
		$companyId[]='--Select--';
		
		foreach($data as $com){
			$companyId[$com->id]=$com->companyName;
		}
		
		
		// Define page title
		$this->template->Page_Title = 'Leave Report All';
		
		// Define mainContent
		$this->template->mainContent = view::factory('hr/report/leavereportall')
									->bind('companyName',$companyName)
									->bind('companyId',$companyId)
									->bind('companyValue',$companyValue)
									->bind('DepartmentName',$DepartmentName)
									->bind('year',$year)
									->bind('error',$error);
	}
	
	
	// show leave report all
	public function action_showleavereportall()
	{
		if($this->request->method() == 'POST'){
			
			if($_POST['companyId'] != "0")
			{
				$companyId=$_POST['companyId'];
				$year=$_POST['year'];
				
				$data = ORM::factory('departmentlist')->where('companyId','=',$companyId)->find_all();
			   
				foreach($data as $dept){
					$departmentId[$dept->id]=$dept->departmentName;
				}
				$departmentName=$dept->departmentName;
				
				//define page title
				$this->template->Page_Title = 'Leave Report All';
				
				// define maincontent
				$this->template->mainContent = view::factory('hr/report/showleavereportall')
												->bind('year',$year)
												->bind('departmentName',$departmentName);
			}
			else if($_POST['companyId'] == "0")
			{
				//echo '2';
				HTTP::redirect('hr_leave/leavereportall');
			}
		}
	}
	
	
}