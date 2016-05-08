<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Hr_Employeeinfo extends Controller_Application {
	
	// Create Employee General Information
	public function action_createemployeegeneralinfo()
	{
		$this->template->scripts=array('custom.js','dateTimeCust.js');
		
		// view category list dropdown
		$data = ORM::factory('employeecategory')->find_all();
		$category['--']='---Select---';
		$categoryValue = '--';
		foreach($data as $cat) {
			$category[$cat->id] = $cat->categoryName;
		} 
		
		if($this->request->method()=='POST'){
			
			//Form validation
			$post = Validation::factory($_POST)
			->rule('employeeId','not_empty')
			->rule('secreteNo','not_empty')
			->rule('name','not_empty')
			->rule('DOB','not_empty')
			->rule('gender','not_empty')
			->rule('marritalStatus','not_empty')
			->rule('nationality','not_empty')
			->rule('bloodGroup','not_empty')
			->rule('telephone','not_empty')
			->rule('nationalID','not_empty')
			->rule('personalEmail','not_empty')
			->rule('presentAddress','not_empty')
			->rule('permanentAddress','not_empty')
			->rule('confirmationDate','not_empty')
			->rule('category','not_empty')
			->rule('emergencyContactPerson','not_empty')
			->rule('emergencyContactNo','not_empty')
			->rule('relationWithEC','not_empty')
			->rule('joinDate','not_empty')
			->rule('noticePeriod','not_empty')
			->rule('nameOfReference','not_empty')
			->rule('referenceContactNo','not_empty');
			
			//If Validation Success
			if ($post->check()) {
				/*$empinformation = ORM::factory('');
				$empinformation->employeeId=$_POST['employeeId'];
				$empinformation->secreteNo=$_POST['secreteNo'];
				$empinformation->name=$_POST['name'];
				$empinformation->DOB=$_POST['DOB'];
				$empinformation->gender=$_POST['gender'];
				$empinformation->marritalStatus=$_POST['marritalStatus'];
				$empinformation->nationality=$_POST['nationality'];
				$empinformation->bloodGroup=$_POST['bloodGroup'];
				$empinformation->telephone=$_POST['telephone'];
				$empinformation->nationalID=$_POST['nationalID'];
				$empinformation->personalEmail=$_POST['personalEmail'];
				$empinformation->presentAddress=$_POST['presentAddress'];
				$empinformation->permanentAddress=$_POST['permanentAddress'];
				$empinformation->confirmationDate=$_POST['confirmationDate'];
				$empinformation->category=$_POST['category'];
				$empinformation->emergencyContactPerson=$_POST['emergencyContactPerson'];
				$empinformation->emergencyContactNo=$_POST['emergencyContactNo'];
				$empinformation->relationWithEC=$_POST['relationWithEC'];
				$empinformation->joinDate=$_POST['joinDate'];
				$empinformation->noticePeriod=$_POST['noticePeriod'];
				$empinformation->nameOfReference=$_POST['nameOfReference'];
				$empinformation->referenceContactNo=$_POST['referenceContactNo'];
				$empinformation->save();*/
				$error['successful']= 'Successfully Submitted';
			}
			else {
				$error = $post->errors('hr/form/employeegeneralinfo');
				
				//Re-pass Values Into Form
				$employeeId=$_POST['employeeId'];
				$secreteNo=$_POST['secreteNo'];
				$name=$_POST['name'];
				$DOB=$_POST['DOB'];
				$gender=$_POST['gender'];
				$marritalStatus=$_POST['marritalStatus'];
				$nationality=$_POST['nationality'];
				$bloodGroup=$_POST['bloodGroup'];
				$telephone=$_POST['telephone'];
				$nationalID=$_POST['nationalID'];
				$personalEmail=$_POST['personalEmail'];
				$presentAddress=$_POST['presentAddress'];
				$permanentAddress=$_POST['permanentAddress'];
				$confirmationDate=$_POST['confirmationDate'];
				$categoryValue=$_POST['category'];
				$emergencyContactPerson=$_POST['emergencyContactPerson'];
				$emergencyContactNo=$_POST['emergencyContactNo'];
				$relationWithEC=$_POST['relationWithEC'];
				$joinDate=$_POST['joinDate'];
				$noticePeriod=$_POST['noticePeriod'];
				$nameOfReference=$_POST['nameOfReference'];
				$referenceContactNo=$_POST['referenceContactNo'];
			}
			
		}
		
		
		// Url Link
		$formLink = 'hr_employeeinfo/createemployeegeneralinfo';
		
		// define maincontent
		$this->template->mainContent = view::factory('hr/form/employeegeneralinfo')
								->bind('employeeId',$employeeId)
								->bind('secreteNo',$secreteNo)
								->bind('name',$name)
								->bind('lastName',$lastName)
								->bind('DOB',$DOB)
								->bind('gender',$gender)
								->bind('marritalStatus',$marritalStatus)
								->bind('nationality',$nationality)
								->bind('bloodGroup',$bloodGroup)
								->bind('telephone',$telephone)
								->bind('nationalID',$nationalID)
								->bind('personalEmail',$personalEmail)
								->bind('presentAddress',$presentAddress)
								->bind('permanentAddress',$permanentAddress)
								->bind('confirmationDate',$confirmationDate)
								->bind('category',$category)
								->bind('emergencyContactPerson',$emergencyContactPerson)
								->bind('emergencyContactNo',$emergencyContactNo)
								->bind('relationWithEC',$relationWithEC)
								->bind('joinDate',$joinDate)
								->bind('noticePeriod',$noticePeriod)
								->bind('nameOfReference',$nameOfReference)
								->bind('referenceContactNo',$referenceContactNo)
								->bind('categoryValue',$categoryValue)
								->bind('formLink',$formLink)
								->bind('error',$error); 
	}
	
	public function action_companydetail()
	{
		
		
		$companyid= $_POST['companyId'];
		echo $companyid;
		
		
	}
	// Create Employee Official Profile
	public function action_createemployeeofficialprofileinfo()
	{
		// set connection custom.js file
		$this->template->scripts=array('custom.js');
	
		// view leavepackage dropdown
		$data = ORM::factory('leavepackage')->find_all();
		$leavepackageId[]='--Select--';
		
		foreach($data as $leavepackage){
			$leavepackageId[$leavepackage->id]=$leavepackage->packageName;
		}
		
		// view companylist dropdown
		$data = ORM::factory('companylist')->find_all();
		$companyId[]='--Select--';
		
		foreach($data as $com){
			$companyId[$com->id]=$com->companyName;
		}
		
		// View employee type dropdown
		$data = ORM::factory('typelist')->find_all();
		
		$typeId[] = '--Select--';
		
		foreach($data as $type){
			$typeId[$type->id]=$type->typeName;
		}
		
		//view attendance rule dropdown
		$data = ORM::factory('attendancerule')->find_all();
		$attendanceruleId[]='--Select--';
		
		foreach($data as $attrule){
			$attendanceruleId[$attrule->id]=$attrule->attendanceRuleName;
		}
		
		if($this->request->method() == 'POST'){
			//Form Validation
			$post = Validation::factory($_POST)
					->rule('leavepackageId','not_empty')
					->rule('companyId','not_empty')
					->rule('typeId','not_empty')
					->rule('attendanceruleId','not_empty');
					
			// If validation success
			if($post->check()){
				/*
				$empofficialprofile = ORM::factory();
				$empofficialprofile->leavepackageId=$_POST['leavepackageId'];
				$empofficialprofile->companyId=$_POST['companyId'];
				$empofficialprofile->typeId=$_POST['typeId'];
				$empofficialprofile->attendanceruleId=$_POST['attendanceruleId'];
				$empofficialprofile->save();
				$error['successful'] = 'Successfully Submitted';
				*/
			}
			else{
				$error = $post->errors('hr/form/employeeofficialprofile');
				
				// re-pass value into form
				$companyValue=$_POST['companyId'];
				$leavepackageValue=$_POST['leavepackageId'];
				$typeValue=$_POST['typeId'];
				$attendanceruleValue=$_POST['attendanceruleId'];
			}
		}
		
		// Url link
		$formLink = 'hr_employeeinfo/createemployeeofficialprofileinfo';
		
		// Define Maincontnet
		$this->template->mainContent = view::factory('hr/form/employeeofficialprofile')
								->bind('companyId',$companyId)
								->bind('companyValue',$companyValue)
								->bind('leavepackageId',$leavepackageId)
								->bind('leavepackageValue',$leavepackageValue)
								->bind('typeId',$typeId)
								->bind('typeValue',$typeValue)
								->bind('attendanceruleId',$attendanceruleId)
								->bind('attendanceruleValue',$attendanceruleValue)
								->bind('formLink',$formLink)
								->bind('error',$error);
	}
	

	// Create Employee PF Info
	public function action_createemployeepfinfo()
	{
		if($this->request->method() == 'POST'){
			// Form Validation
			$post = Validation::factory($_POST)
					->rule('providentFund','not_empty');
					
			// if validation success
			if($post->check()){
				// model here
			}
			else{
				$error = $post->errors('hr/form/employeepf');
				
				//re-pass value into form
				$providentFund = $_POST['providentFund'];
				$prevBalanceEmp = $_POST['prevBalanceEmp'];
				$prevBalanceOff = $_POST['prevBalanceOff'];
				$timeFrame = $_POST['timeFrame'];
			}
		}
		
		// Define page title
		//$this->template->Page_Title = 'Create Provident Fund';
		
		// url link
		$formLink = 'hr_employeeinfo/createemployeepfinfo';
		
		// Define mainContent
		$this->template->mainContent = view::factory('hr/form/employeepf')
										->bind('providentFund',$providentFund)
										->bind('prevBalanceEmp',$prevBalanceEmp)
										->bind('prevBalanceOff',$prevBalanceOff)
										->bind('timeFrame',$timeFrame)
										->bind('formLink',$formLink)
										->bind('error',$error);
	}
	
	
	// Create Payment Info
	public function action_createemployeepaymentinfo()
	{
		// set connection js file
		$this->template->scripts = array('custom.js');
		
		if($this->request->method() == 'POST'){
			// Form Validation
			$post = Validation::factory($_POST)
					->rule('taxDeduction','not_empty')
					->rule('paymentMode','not_empty')
					->rule('customSalaryPacakge','not_empty')
					->rule('basic','not_empty')
					->rule('houseRent','not_empty')
					->rule('medical','not_empty')
					->rule('transport','not_empty')
					->rule('special','not_empty')
					->rule('salaryStep','not_empty')
					->rule('salaryBand','not_empty');
			// if validation success
			if($post->check()){
				// model here
			}
			else{
				$error = $post->errors('hr/form/employeepayment');
				
				//re-pass value into form
				$mobileBill = $_POST['mobileBill'];
				$taxDeduction = $_POST['taxDeduction'];
				$taxAmount = $_POST['taxAmount'];
				$paymentMode = $_POST['paymentMode'];
				$customSalaryPacakge = $_POST['customSalaryPacakge'];
				$basic = $_POST['basic'];
				$houseRent = $_POST['houseRent'];
				$medical = $_POST['medical'];
				$transport = $_POST['transport'];
				$special = $_POST['special'];
				$salaryStep = $_POST['salaryStep'];
				$salaryBand = $_POST['salaryBand'];
			}
		}
		
		// Define page title
		//$this->template->Page_Title = 'Create Payment Info';
		
		// url link
		$formLink = 'hr_employeeinfo/createemployeepaymentinfo';
		
		// Define mainContent
		$this->template->mainContent = view::factory('hr/form/employeepayment')
										->bind('mobileBill',$mobileBill)
										->bind('taxDeduction',$taxDeduction)
										->bind('taxAmount',$taxAmount)
										->bind('paymentMode',$paymentMode)
										->bind('customSalaryPacakge',$customSalaryPacakge)
										->bind('basic',$basic)
										->bind('houseRent',$houseRent)
										->bind('medical',$medical)
										->bind('transport',$transport)
										->bind('special',$special)
										->bind('salaryStep',$salaryStep)
										->bind('salaryBand',$salaryBand)
										->bind('formLink',$formLink)
										->bind('error',$error);
	}
	
	
	// Create Employee Login Info
	public function action_createemployeelogininfo()
	{
		if($this->request->method() == 'POST'){
			// Form Validation
			$post = Validation::factory($_POST)
					->rule('userName','not_empty')
					->rule('password','not_empty')
					->rule('officialEmail','not_empty')
					->rule('userType','not_empty')
					->rule('supDesig','not_empty');
					
			// if validation success
			if($post->check()){
				// model here
			}
			else{
				$error = $post->errors('hr/form/employeelogin');
				
				//re-pass value into form
				$userName = $_POST['userName'];
				$password = $_POST['password'];
				$officialEmail = $_POST['officialEmail'];
				$userType = $_POST['userType'];
				$supDesig = $_POST['supDesig'];
			}
		}
		
		// Define page title
		//$this->template->Page_Title = 'Create Login Info';
		
		// url link
		$formLink = 'hr_employeeinfo/createemployeelogininfo';
		
		// Define mainContent
		$this->template->mainContent = view::factory('hr/form/employeelogin')
										->bind('userName',$userName)
										->bind('password',$password)
										->bind('officialEmail',$officialEmail)
										->bind('userType',$userType)
										->bind('supDesig',$supDesig)
										->bind('formLink',$formLink)
										->bind('error',$error);
	}
	
	
	// View Employee List
	public function action_viewemployeelist()
	{
		// Define page title
		$this->template->Page_Title = 'View Employee List';
		
		// Define maincontent
		$this->template->mainContent = view::factory('hr/report/viewemployeelist');
	}
	
	
	
	// Employee Document
	public function action_createemployeedocument()
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
					->rule('documentTitle','not_empty')
					->rule('attachDocument','not_empty');
					
			// If Validation Success
			if($post->check()){
				// model here
			}
			else{
				$error = $post->errors('hr/form/employeedocument');
				// re-pass value into form
				$empNameValue=$_POST['empNameId'];
				$documentTitle=$_POST['documentTitle'];
				$attachDocument=$_POST['attachDocument'];
			}
		}
		
		// Define page title
		$this->template->Page_Title = 'Create Employee Document';
		
		// url link
		$formLink = 'hr_employeeinfo/createemployeedocument';
		
		// Define maincontent
		$this->template->mainContent = view::factory('hr/form/employeedocument')
										->bind('empNameId',$empNameId)
										->bind('empNameValue',$empNameValue)
										->bind('documentTitle',$documentTitle)
										->bind('attachDocument',$attachDocument)
										->bind('formLink',$formLink)
										->bind('error',$error);
	}
	
	
	// Employee Report
	public function action_employeereport()
	{
		// set connection custom.js file
		$this->template->scripts=array('custom.js');
		
		// view employee list dropdown
		$data = ORM::factory('employeeinfo')->find_all();
		$empNameId[]='--Select--';
		
		foreach($data as $emp){
			$empNameId[$emp->id]=$emp->name;
		}
		
		// Define Page Title
		$this->template->Page_Title = 'Employee Report';
		
		// Define maincontent
		$this->template->mainContent = view::factory('hr/report/employeereport')
										->bind('empNameId',$empNameId)
										->bind('empNameValue',$empNameValue)
										->bind('error',$error);
	}
	
	
	// show employee report
	public function action_showemployeereport()
	{
		if($this->request->method() == 'POST'){
			
			 if($_POST['empNameId'] != "0")
			{
		
				$empNameId=$_POST['empNameId'];
				//$empId=$_POST['empId'];
				
				$data = ORM::factory('employeeinfo')->where('id','=',$empNameId)->find_all();
			   
				foreach($data as $emp){
					$employeeId[$emp->id]=$emp->name;
					$employeeId[$emp->id]=$emp->employeeId;
					
					$fristName=$emp->name;
					$employeeId=$emp->employeeId;
				}
				
				
				//define page title
				$this->template->Page_Title = 'Employee Report';
				
				// define maincontent
				$this->template->mainContent = view::factory('hr/report/showemployeereport')
												->bind('fristName',$fristName)
												->bind('employeeId',$employeeId);
			}
			else if($_POST['empNameId'] == "0")
			{
				//echo '2';
				HTTP::redirect('hr_employeeinfo/employeereport');
			}
		}
	}
	
	
	// Employee Wise PF Report
	public function action_employeewisepf()
	{
		// set connection custom.js file
		$this->template->scripts=array('custom.js');
		
		// view employee list dropdown
		$data = ORM::factory('employeeinfo')->find_all();
		$empNameId[]='--Select--';
		
		foreach($data as $emp){
			$empNameId[$emp->id]=$emp->name;
		}
		
		
		// Define maincontent
		$this->template->mainContent = view::factory('hr/report/employeewisepf')
										->bind('empNameId',$empNameId)
										->bind('empNameValue',$empNameValue)
										->bind('error',$error);
	}
	
	// show employee wise pf
	public function action_showemployeewisepf()
	{
		if($this->request->method() == 'POST'){
			
			 if($_POST['empNameId'] != "0")
			{
		
				$empNameId=$_POST['empNameId'];
				//$empId=$_POST['empId'];
				$year=$_POST['year'];
				$month=$_POST['month'];
				
				$data = ORM::factory('employeeinfo')->where('id','=',$empNameId)->find_all();
			   
				foreach($data as $emp){
					$employeeId[$emp->id]=$emp->name;
					$employeeId[$emp->id]=$emp->employeeId;
					$name=$emp->name;
					$employeeId=$emp->employeeId;
				}
				
				
				//define page title
				$this->template->Page_Title = 'Provident Fund';
				
				// define maincontent
				$this->template->mainContent = view::factory('hr/report/showemployeewisepf')
												->bind('name',$name)
												->bind('employeeId',$employeeId)
												->bind('year',$year)
												->bind('month',$month);
												
			}
			else if($_POST['empNameId'] == "0")
			{
				//echo '2';
				HTTP::redirect('hr_employeeinfo/employeewisepf');
			}
		}
	}
	
	
	// Department Wise PF Report
	public function action_departmentwisepf()
	{
		$data = ORM::factory('departmentlist')->find_all();
		$departmentId[] = '--Select--';
		
		foreach($data as $dept){
			$departmentId[$dept->id]=$dept->departmentName;
		}
		
		
		// Define maincontent
		$this->template->mainContent = view::factory('hr/report/departmentwisepf')
										->bind('departmentId',$departmentId)
										->bind('departmentValue',$departmentValue)
										->bind('error',$error);
	}
	
	
	// show Department wise pf
	public function action_showdepartmentwisepf()
	{
		if($this->request->method() == 'POST'){
			
			 if($_POST['departmentId'] != "0")
			{
		
				$departmentId=$_POST['departmentId'];
				$year=$_POST['year'];
				$month=$_POST['month'];
				
				$data = ORM::factory('departmentlist')->where('id','=',$departmentId)->find_all();
			   
				foreach($data as $dept){
					$departmentId[$dept->id]=$dept->departmentName;
					
					$departmentName=$dept->departmentName;
				}
				
				
				//define page title
				$this->template->Page_Title = 'Provident Fund of ' . $departmentName;
				
				// define maincontent
				$this->template->mainContent = view::factory('hr/report/showdepartmentwisepf')
												->bind('departmentName',$departmentName)
												->bind('year',$year)
												->bind('month',$month);
												
			}
			else if($_POST['departmentId'] == "0")
			{
				//echo '2';
				HTTP::redirect('hr_employeeinfo/departmentwisepf');
			}
		}
	}
	
	
	// Company Wise PF Report
	public function action_companywisepf()
	{
		$data = ORM::factory('companylist')->find_all();
		$companyId[]='--Select--';
		
		foreach($data as $com){
			$companyId[$com->id]=$com->companyName;
		}
		
		
		// Define maincontent
		$this->template->mainContent = view::factory('hr/report/companywisepf')
										->bind('companyId',$companyId)
										->bind('companyValue',$companyValue)
										->bind('error',$error);
	}
	
	
	
	// show company wise pf
	public function action_showcompanywisepf()
	{
		if($this->request->method() == 'POST'){
			
			 if($_POST['companyId'] != "0")
			{
		
				$companyId=$_POST['companyId'];
				$year=$_POST['year'];
				$month=$_POST['month'];
				
				$data = ORM::factory('companylist')->where('id','=',$companyId)->find_all();
			   
				foreach($data as $com){
					$companyId[$com->id]=$com->companyName;
					$companyName=$com->companyName;
				}
				
				
				//define page title
				$this->template->Page_Title = 'Provident Fund';
				
				// define maincontent
				$this->template->mainContent = view::factory('hr/report/showcompanywisepf')
												->bind('companyName',$companyName)
												->bind('year',$year)
												->bind('month',$month);
			}
			else if($_POST['companyId'] == "0")
			{
				//echo '2';
				HTTP::redirect('hr_employeeinfo/companywisepf');
			}
		}
	}
	
	
	// view total pf 
	public function action_totalpf()
	{
		// Define page title
		//$this->template->Page_Title = 'View Total PF';
		
		// Define maincontent
		$this->template->mainContent = view::factory('hr/report/totalpf');
	}
	
	
	
	// Create appraisal
	public function action_createappraisal()
	{
		// set connection custom.js file
		$this->template->scripts=array('custom.js','addrows.js','dateTimeCust.js');
		
		// view employee list dropdown
		$data = ORM::factory('employeeinfo')->find_all();
		$empNameId[]='--Select--';
		
		foreach($data as $emp){
			$empNameId[$emp->id]=$emp->name;
		}
		
		if($this->request->method() == 'POST'){
			//Form Validation
			$post = Validation::factory($_POST)
					->rule('empNameId','not_empty');
					
			// If validation success
			if($post->check()){
				//model here
				
			}
			else{
				$error = $post->errors('hr/form/appraisal');
				$empNameValue = $_POST['empNameId'];
				$status = $_POST['status'];
				$effective_date = $_POST['effective_date'];
				$designation = $_POST['designation'];
				$pay_scale = $_POST['pay_scale'];
				$note = $_POST['note'];
			}
		}
		
		// Define page title
		$this->template->Page_Title = 'Create Appraisal';
		
		// Define mainContent
		$this->template->mainContent = view::factory('hr/form/appraisal')
										->bind('empNameId',$empNameId)
										->bind('empNameValue',$empNameValue)
										->bind('status',$status)
										->bind('designation',$designation)
										->bind('pay_scale',$pay_scale)
										->bind('note',$note)
										->bind('error',$error);
	}
	
	
	
	// Create Employee Other Info
	public function action_createemployeeotherinfo()
	{
		// set connection custom.js file
		$this->template->scripts=array('custom.js','addmorerows.js','dateTimeCust.js');
		
		// view employee list dropdown
		$data = ORM::factory('employeeinfo')->find_all();
		$empNameId[]='--Select--';
		
		foreach($data as $emp){
			$empNameId[$emp->id]=$emp->name;
		}
		
		if($this->request->method() == 'POST'){
			//Form Validation
			$post = Validation::factory($_POST)
					->rule('empNameId','not_empty');
					
			// If validation success
			if($post->check()){
				//model here
				
			}
			else{
				$error = $post->errors('hr/form/employeeotherinfo');
				$empNameValue = $_POST['empNameId'];
			}
		}
		
		// Define page title
		$this->template->Page_Title = 'Create Employee Other Info';
		
		// Define mainContent
		$this->template->mainContent = view::factory('hr/form/employeeotherinfo')
										->bind('empNameId',$empNameId)
										->bind('empNameValue',$empNameValue)
										->bind('error',$error);
	}
}