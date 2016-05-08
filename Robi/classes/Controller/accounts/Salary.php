<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Accounts_Salary extends Controller_Application {
	
	// Create Salary
	public function action_createsalary()
	{
		// set connection custom.js file
		$this->template->scripts=array('custom.js');
		
		// view companylist dropdown
		$data = ORM::factory('companylist')->find_all();
		$companyId[]='--Select--';
		
		foreach($data as $com){
			$companyId[$com->id]=$com->companyName;
		}
		
		if($this->request->method()=='POST'){
			
			//Form validation
			$post = Validation::factory($_POST)
			->rule('companyId','not_empty');
			
			//If Validation Success
			if ($post->check()) {
				//model here
		
			}
			else {
				$error = $post->errors('accounts/form/createsalary');
				
				//Re-pass Values Into Form
				$companyValue=$_POST['companyId'];
				
			}
			
		}
		
		// Define Page title
		$this->template->Page_Title = 'Create Salary';
		
		
		// define maincontent
		$this->template->mainContent = view::factory('accounts/form/createsalary')
								->bind('companyId',$companyId)
								->bind('companyValue',$companyValue)
								->bind('error',$error); 
	}
	
	
	// Salary Sheet
	public function action_salarysheet()
	{
		// set connection custom.js file
		$this->template->scripts=array('custom.js');
		
		// view companylist dropdown
		$data = ORM::factory('companylist')->find_all();
		$companyId[]='--Select--';
		
		foreach($data as $com){
			$companyId[$com->id]=$com->companyName;
		}
		
		/* if($this->request->method()=='POST'){
			
			//Form validation
			$post = Validation::factory($_POST)
			->rule('companyId','not_empty');
			
			//If Validation Success
			if ($post->check()) {
				//model here
		
			}
			else {
				$error = $post->errors('accounts/report/salarysheet');
				
				//Re-pass Values Into Form
				$companyValue=$_POST['companyId'];
				
			}
			
		} */
		
		// Define Page title
		$this->template->Page_Title = 'Salary Sheet';
		
		
		// Define maincontent
		$this->template->mainContent = view::factory('accounts/report/salarysheet')
								->bind('companyId',$companyId)
								->bind('companyValue',$companyValue)
								->bind('error',$error); 
	}
	
	
	// show salary sheet
	public function action_showsalarysheet()
	{
		if($this->request->method() == 'POST'){
			
			 if($_POST['companyId'] != "0")
			{
				$companyId=$_POST['companyId'];
				$departmentId=$_POST['departmentId'];
				$year=$_POST['year'];
				$month=$_POST['month'];
				
				if($month == '01'){$month='January';}
				else if($month == '02'){$month='February';}
				else if($month == '03'){$month='March';}
				else if($month == '04'){$month='April';}
				else if($month == '05'){$month='May';}
				else if($month == '06'){$month='June';}
				else if($month == '07'){$month='July';}
				else if($month == '08'){$month='August';}
				else if($month == '09'){$month='September';}
				else if($month == '10'){$month='October';}
				else if($month == '11'){$month='November';}
				else if($month == '12'){$month='December';}
				
				// for company name
				$data = ORM::factory('companylist')->where('id','=',$companyId)->find_all();
			   
				foreach($data as $com){
					$companyId[$com->id]=$com->companyName;
				}
				$companyName=$com->companyName;
				
				
				// for department name
				$data = ORM::factory('departmentlist')->where('id','=',$departmentId)->find_all();
			   
				foreach($data as $dept){
					$departmentId[$dept->id]=$dept->departmentName;
				}
				$departmentName=$dept->departmentName;
				
				//define page title
				$this->template->Page_Title = 'View salary sheet of ' . $month;
				
				// define maincontent
				$this->template->mainContent = view::factory('accounts/report/showsalarysheet')
												->bind('companyName',$companyName)
												->bind('departmentName',$departmentName)
												->bind('year',$year)
												->bind('month',$month);
			}
			else if($_POST['companyId'] == "0")
			{
				HTTP::redirect('accounts_salary/salarysheet');
			}
		}		
		
		
	}
	
	
	// Bank Sheet
	public function action_banksheet()
	{
		// set connection custom.js file
		$this->template->scripts=array('custom.js');
		
		// view companylist dropdown
		$data = ORM::factory('companylist')->find_all();
		$companyId[]='--Select--';
		
		foreach($data as $com){
			$companyId[$com->id]=$com->companyName;
		}
		
		// Define Page title
		$this->template->Page_Title = 'Bank Sheet';
		
		
		// Define maincontent
		$this->template->mainContent = view::factory('accounts/report/banksheet')
								->bind('companyId',$companyId)
								->bind('companyValue',$companyValue)
								->bind('error',$error); 
	}
	
	
	// show bank sheet
	public function action_showbanksheet()
	{
		if($this->request->method() == 'POST'){
			
			 if($_POST['companyId'] != "0")
			{
		
		
				$companyId=$_POST['companyId'];
				$departmentId=$_POST['departmentId'];
				$year=$_POST['year'];
				$month=$_POST['month'];
				
				if($month == '01'){$month='January';}
				else if($month == '02'){$month='February';}
				else if($month == '03'){$month='March';}
				else if($month == '04'){$month='April';}
				else if($month == '05'){$month='May';}
				else if($month == '06'){$month='June';}
				else if($month == '07'){$month='July';}
				else if($month == '08'){$month='August';}
				else if($month == '09'){$month='September';}
				else if($month == '10'){$month='October';}
				else if($month == '11'){$month='November';}
				else if($month == '12'){$month='December';}
				
				// for company name
				$data = ORM::factory('companylist')->where('id','=',$companyId)->find_all();
			   
				foreach($data as $com){
					$companyId[$com->id]=$com->companyName;
				}
				$companyName=$com->companyName;
				
				
				// for department name
				$data = ORM::factory('departmentlist')->where('id','=',$departmentId)->find_all();
			   
				foreach($data as $dept){
					$departmentId[$dept->id]=$dept->departmentName;
				}
				$departmentName=$dept->departmentName;
				
				//define page title
				$this->template->Page_Title = 'View Bank sheet of ' . $month;
				
				// define maincontent
				$this->template->mainContent = view::factory('accounts/report/showbanksheet')
												->bind('companyName',$companyName)
												->bind('departmentName',$departmentName)
												->bind('year',$year)
												->bind('month',$month);
			}
			else if($_POST['companyId'] == "0")
			{
				HTTP::redirect('accounts_salary/banksheet');
			}
		}	
	}
	
	
	// Cash Sheet
	public function action_cashsheet()
	{
		// set connection custom.js file
		$this->template->scripts=array('custom.js');
		
		// view companylist dropdown
		$data = ORM::factory('companylist')->find_all();
		$companyId[]='--Select--';
		
		foreach($data as $com){
			$companyId[$com->id]=$com->companyName;
		}
		
		// Define Page title
		$this->template->Page_Title = 'Cash Sheet';
		
		
		// Define maincontent
		$this->template->mainContent = view::factory('accounts/report/cashsheet')
								->bind('companyId',$companyId)
								->bind('companyValue',$companyValue)
								->bind('error',$error); 
	}
	
	
	// show cash sheet
	public function action_showcashsheet()
	{
		if($this->request->method() == 'POST'){
			
			 if($_POST['companyId'] != "0")
			{
		
				$companyId=$_POST['companyId'];
				$departmentId=$_POST['departmentId'];
				$year=$_POST['year'];
				$month=$_POST['month'];
				
				if($month == '01'){$month='January';}
				else if($month == '02'){$month='February';}
				else if($month == '03'){$month='March';}
				else if($month == '04'){$month='April';}
				else if($month == '05'){$month='May';}
				else if($month == '06'){$month='June';}
				else if($month == '07'){$month='July';}
				else if($month == '08'){$month='August';}
				else if($month == '09'){$month='September';}
				else if($month == '10'){$month='October';}
				else if($month == '11'){$month='November';}
				else if($month == '12'){$month='December';}
				
				// for company name
				$data = ORM::factory('companylist')->where('id','=',$companyId)->find_all();
			   
				foreach($data as $com){
					$companyId[$com->id]=$com->companyName;
				}
				$companyName=$com->companyName;
				
				
				// for department name
				$data = ORM::factory('departmentlist')->where('id','=',$departmentId)->find_all();
			   
				foreach($data as $dept){
					$departmentId[$dept->id]=$dept->departmentName;
				}
				$departmentName=$dept->departmentName;
				
				//define page title
				$this->template->Page_Title = 'View Cash sheet of ' . $month;
				
				// define maincontent
				$this->template->mainContent = view::factory('accounts/report/showcashsheet')
												->bind('companyName',$companyName)
												->bind('departmentName',$departmentName)
												->bind('year',$year)
												->bind('month',$month);
			}
			else if($_POST['companyId'] == "0")
			{
				HTTP::redirect('accounts_salary/cashsheet');
			}
		}
	}
	
	
	// View payslip
	public function action_viewpayslip()
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
		$this->template->Page_Title = 'View Payslip';
		
		// Define Maincontent
		$this->template->mainContent = view::factory('accounts/report/viewpayslip')
										->bind('empNameId',$empNameId)
										->bind('empNameValue',$empNameValue)
										->bind('year',$year)
										->bind('month',$month)
										->bind('error',$error);
	}
	
	
	// show payslip
	public function action_showpayslip()
	{
		if($this->request->method() == 'POST'){
			//echo $empname=$_POST['empNameId'];
			 if($_POST['empNameId'] != "0")
			{
				//define page title
				$this->template->Page_Title = 'Payslip';
				
				// define maincontent
				$this->template->mainContent = view::factory('accounts/report/showpayslip')
												->bind('name',$name)
												->bind('employeeId',$employeeId)
												->bind('year',$year)
												->bind('month',$month);
			}
			else if($_POST['empNameId'] == "0")
			{
				//echo '2';
				HTTP::redirect('accounts_salary/viewpayslip');
			}
		
		}
		//exit;
		
        
		
		
	}
	
	
	// Arrear
	public function action_arrear()
	{
		// set connection custom.js file
		$this->template->scripts=array('custom.js');
		
		// view companylist dropdown
		$data = ORM::factory('companylist')->find_all();
		$companyId[]='--Select--';
		
		foreach($data as $com){
			$companyId[$com->id]=$com->companyName;
		}
		
		// Define Page title
		$this->template->Page_Title = 'Arrear';
		
		
		// Define maincontent
		$this->template->mainContent = view::factory('accounts/form/arrear')
								->bind('companyId',$companyId)
								->bind('companyValue',$companyValue)
								->bind('error',$error); 
	}
	
	
	//show arrear
	public function action_showarrear()
	{
		if($this->request->method() == 'POST'){
			
			 if($_POST['companyId'] != "0")
			{
		
				$companyId=$_POST['companyId'];
				$departmentId=$_POST['departmentId'];
				$year=$_POST['year'];
				$month=$_POST['month'];
				
				if($month == '01'){$month='January';}
				else if($month == '02'){$month='February';}
				else if($month == '03'){$month='March';}
				else if($month == '04'){$month='April';}
				else if($month == '05'){$month='May';}
				else if($month == '06'){$month='June';}
				else if($month == '07'){$month='July';}
				else if($month == '08'){$month='August';}
				else if($month == '09'){$month='September';}
				else if($month == '10'){$month='October';}
				else if($month == '11'){$month='November';}
				else if($month == '12'){$month='December';}
				
				// for company name
				$data = ORM::factory('companylist')->where('id','=',$companyId)->find_all();
			   
				foreach($data as $com){
					$companyId[$com->id]=$com->companyName;
					$companyName=$com->companyName;
				}
				
				
				
				// for department name
				$data = ORM::factory('departmentlist')->where('id','=',$departmentId)->find_all();
			   
				foreach($data as $dept){
					$departmentId[$dept->id]=$dept->departmentName;
					$departmentName=$dept->departmentName;
				}
				
				
				//define page title
				$this->template->Page_Title = 'View Employee';
				
				// define maincontent
				$this->template->mainContent = view::factory('accounts/form/showarrear')
												->bind('companyName',$companyName)
												->bind('departmentName',$departmentName)
												->bind('year',$year)
												->bind('month',$month);
			}
			else if($_POST['companyId'] == "0")
			{
				//echo '2';
				HTTP::redirect('accounts_salary/arrear');
			}
		
		}
	}
	
	
	// View KPI
	public function action_kpi()
	{
		// set connection custom.js file
		$this->template->scripts=array('custom.js');
		
		// view companylist dropdown
		$data = ORM::factory('companylist')->find_all();
		$companyId[]='--Select--';
		
		foreach($data as $com){
			$companyId[$com->id]=$com->companyName;
		}
		
		// Define Page title
		$this->template->Page_Title = 'KPI';
		
		
		// Define maincontent
		$this->template->mainContent = view::factory('accounts/form/kpi')
								->bind('companyId',$companyId)
								->bind('companyValue',$companyValue)
								->bind('error',$error); 
	}
	
	
	//show Kpi
	public function action_showkpi()
	{
		if($this->request->method() == 'POST'){
			
			 if($_POST['companyId'] != "0")
			{
		
				$companyId=$_POST['companyId'];
				$departmentId=$_POST['departmentId'];
				$year=$_POST['year'];
				$month=$_POST['month'];
				
				if($month == '01'){$month='January';}
				else if($month == '02'){$month='February';}
				else if($month == '03'){$month='March';}
				else if($month == '04'){$month='April';}
				else if($month == '05'){$month='May';}
				else if($month == '06'){$month='June';}
				else if($month == '07'){$month='July';}
				else if($month == '08'){$month='August';}
				else if($month == '09'){$month='September';}
				else if($month == '10'){$month='October';}
				else if($month == '11'){$month='November';}
				else if($month == '12'){$month='December';}
				
				// for company name
				$data = ORM::factory('companylist')->where('id','=',$companyId)->find_all();
			   
				foreach($data as $com){
					$companyId[$com->id]=$com->companyName;
				}
				$companyName=$com->companyName;
				
				
				// for department name
				$data = ORM::factory('departmentlist')->where('id','=',$departmentId)->find_all();
			   
				foreach($data as $dept){
					$departmentId[$dept->id]=$dept->departmentName;
				}
				$departmentName=$dept->departmentName;
				
				//define page title
				$this->template->Page_Title = 'View Kpi';
				
				// define maincontent
				$this->template->mainContent = view::factory('accounts/form/showkpi')
												->bind('companyName',$companyName)
												->bind('departmentName',$departmentName)
												->bind('year',$year)
												->bind('month',$month);
			}
			else if($_POST['companyId'] == "0")
			{
				//echo '2';
				HTTP::redirect('accounts_salary/kpi');
			}
		
		}
	}
	
	
	// View KPI Deduction
	public function action_kpideduction()
	{
		// set connection custom.js file
		$this->template->scripts=array('custom.js');
		
		// view companylist dropdown
		$data = ORM::factory('companylist')->find_all();
		$companyId[]='--Select--';
		
		foreach($data as $com){
			$companyId[$com->id]=$com->companyName;
		}
		
		// Define Page title
		$this->template->Page_Title = 'View KPI';
		
		
		// Define maincontent
		$this->template->mainContent = view::factory('accounts/form/kpideduction')
								->bind('companyId',$companyId)
								->bind('companyValue',$companyValue)
								->bind('error',$error); 
	}
	
	
	//show kpi deduction
	public function action_showkpideduction()
	{
		if($this->request->method() == 'POST'){
			
			 if($_POST['companyId'] != "0")
			{
		
				$companyId=$_POST['companyId'];
				$departmentId=$_POST['departmentId'];
				$year=$_POST['year'];
				$month=$_POST['month'];
				
				if($month == '01'){$month='January';}
				else if($month == '02'){$month='February';}
				else if($month == '03'){$month='March';}
				else if($month == '04'){$month='April';}
				else if($month == '05'){$month='May';}
				else if($month == '06'){$month='June';}
				else if($month == '07'){$month='July';}
				else if($month == '08'){$month='August';}
				else if($month == '09'){$month='September';}
				else if($month == '10'){$month='October';}
				else if($month == '11'){$month='November';}
				else if($month == '12'){$month='December';}
				
				// for company name
				$data = ORM::factory('companylist')->where('id','=',$companyId)->find_all();
			   
				foreach($data as $com){
					$companyId[$com->id]=$com->companyName;
				}
				$companyName=$com->companyName;
				
				
				// for department name
				$data = ORM::factory('departmentlist')->where('id','=',$departmentId)->find_all();
			   
				foreach($data as $dept){
					$departmentId[$dept->id]=$dept->departmentName;
				}
				$departmentName=$dept->departmentName;
				
				//define page title
				$this->template->Page_Title = 'View Kpi Deduction';
				
				// define maincontent
				$this->template->mainContent = view::factory('accounts/form/showkpideduction')
												->bind('companyName',$companyName)
												->bind('departmentName',$departmentName)
												->bind('year',$year)
												->bind('month',$month);
			}
			else if($_POST['companyId'] == "0")
			{
				//echo '2';
				HTTP::redirect('accounts_salary/kpideduction');
			}
		}
	}
	
	
	// Add Loan
	public function action_addloan()
	{
		// set connection custom.js file
		$this->template->scripts=array('custom.js','dateTimeCust.js');
		
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
					//->rule('empId','not_empty')
					->rule('loanIssueDate','not_empty')
					->rule('totalLoanAmount','not_empty')
					->rule('monthlyInstallment','not_empty')
					->rule('remarks','not_empty')
					->rule('year','not_empty')
					->rule('month','not_empty');
					
			// If Validation Success
			if($post->check()){
				// model here
			}
			else{
				$error = $post->errors('accounts/form/addloan');
				
				$empNameValue=$_POST['empNameId'];
				//$empId=$_POST['empId'];
				$loanIssueDate=$_POST['loanIssueDate'];
				$totalLoanAmount=$_POST['totalLoanAmount'];
				$monthlyInstallment=$_POST['monthlyInstallment'];
				$remarks=$_POST['remarks'];
				$year=$_POST['year'];
				$month=$_POST['month'];
			}
		}
		
		// Define Page Title
		$this->template->Page_Title = 'Add Loan';
		
		// Define Maincontent
		$this->template->mainContent = view::factory('accounts/form/addloan')
										->bind('empNameId',$empNameId)
										->bind('empNameValue',$empNameValue)
										->bind('loanIssueDate',$loanIssueDate)
										->bind('totalLoanAmount',$totalLoanAmount)
										->bind('monthlyInstallment',$monthlyInstallment)
										->bind('remarks',$remarks)
										->bind('year',$year)
										->bind('month',$month)
										->bind('error',$error);
	}
	
	
	// View Loan Report
	public function action_viewloanreport()
	{
		// set connection custom.js file
		$this->template->scripts=array('custom.js');
		
		// view companylist dropdown
		$data = ORM::factory('companylist')->find_all();
		$companyId[]='--Select--';
		
		foreach($data as $com){
			$companyId[$com->id]=$com->companyName;
		}
		
		// Define Page title
		$this->template->Page_Title = 'View Loan Report';
		
		
		// Define maincontent
		$this->template->mainContent = view::factory('accounts/report/viewloanreport')
								->bind('companyId',$companyId)
								->bind('companyValue',$companyValue)
								->bind('error',$error); 
	}
	
	
	//show loan report
	public function action_showloanreport()
	{
		if($this->request->method() == 'POST'){
			
			 if($_POST['companyId'] != "0")
			{
		
				$companyId=$_POST['companyId'];
				$departmentId=$_POST['departmentId'];
				
				// for company name
				$data = ORM::factory('companylist')->where('id','=',$companyId)->find_all();
			   
				foreach($data as $com){
					$companyId[$com->id]=$com->companyName;
				}
				$companyName=$com->companyName;
				
				
				// for department name
				$data = ORM::factory('departmentlist')->where('id','=',$departmentId)->find_all();
			   
				foreach($data as $dept){
					$departmentId[$dept->id]=$dept->departmentName;
				}
				$departmentName=$dept->departmentName;
				
				//define page title
				$this->template->Page_Title = 'View Loan Report';
				
				// define maincontent
				$this->template->mainContent = view::factory('accounts/report/showloanreport')
												->bind('companyName',$companyName)
												->bind('departmentName',$departmentName);
			}
			else if($_POST['companyId'] == "0")
			{
				//echo '2';
				HTTP::redirect('accounts_salary/viewloanreport');
			}
		}
	}
	
	
	// View Advance
	public function action_advance()
	{
		// set connection custom.js file
		$this->template->scripts=array('custom.js');
		
		// view companylist dropdown
		$data = ORM::factory('companylist')->find_all();
		$companyId[]='--Select--';
		
		foreach($data as $com){
			$companyId[$com->id]=$com->companyName;
		}
		
		// Define Page title
		$this->template->Page_Title = 'Advance';
		
		
		// Define maincontent
		$this->template->mainContent = view::factory('accounts/form/advance')
								->bind('companyId',$companyId)
								->bind('companyValue',$companyValue)
								->bind('error',$error); 
	}
	
	
	//show advance
	public function action_showadvance()
	{
		if($this->request->method() == 'POST'){
			
			 if($_POST['companyId'] != "0")
			{
		
				$companyId=$_POST['companyId'];
				$departmentId=$_POST['departmentId'];
				$year=$_POST['year'];
				$month=$_POST['month'];
				
				if($month == '01'){$month='January';}
				else if($month == '02'){$month='February';}
				else if($month == '03'){$month='March';}
				else if($month == '04'){$month='April';}
				else if($month == '05'){$month='May';}
				else if($month == '06'){$month='June';}
				else if($month == '07'){$month='July';}
				else if($month == '08'){$month='August';}
				else if($month == '09'){$month='September';}
				else if($month == '10'){$month='October';}
				else if($month == '11'){$month='November';}
				else if($month == '12'){$month='December';}
				
				// for company name
				$data = ORM::factory('companylist')->where('id','=',$companyId)->find_all();
			   
				foreach($data as $com){
					$companyId[$com->id]=$com->companyName;
				}
				$companyName=$com->companyName;
				
				
				// for department name
				$data = ORM::factory('departmentlist')->where('id','=',$departmentId)->find_all();
			   
				foreach($data as $dept){
					$departmentId[$dept->id]=$dept->departmentName;
				}
				$departmentName=$dept->departmentName;
				
				//define page title
				$this->template->Page_Title = 'View Advance';
				
				// define maincontent
				$this->template->mainContent = view::factory('accounts/form/showadvance')
												->bind('companyName',$companyName)
												->bind('departmentName',$departmentName)
												->bind('year',$year)
												->bind('month',$month);
			}
			else if($_POST['companyId'] == "0")
			{
				//echo '2';
				HTTP::redirect('accounts_salary/advance');
			}
		}
	}
	
	
	// ot sheet
	public function action_otsheet()
	{
		// set connection custom.js file
		$this->template->scripts=array('custom.js');
		
		// view employee list dropdown
		$data = ORM::factory('employeeinfo')->find_all();
		$empNameId[]='--Select--';
		
		foreach($data as $emp){
			$empNameId[$emp->id]=$emp->name;
		}
		
		// view department list dropdown
		$data = ORM::factory('departmentlist')->find_all();
		$departmentId[] = '--Select--';
		
		foreach($data as $dept){
			$departmentId[$dept->id]=$dept->departmentName;
		}
		
		// Define Page Title
		$this->template->Page_Title = 'OT Sheet';
		
		// Define Maincontent
		$this->template->mainContent = view::factory('accounts/form/otsheet')
										->bind('empNameId',$empNameId)
										->bind('empId',$empId)
										->bind('empNameValue',$empNameValue)
										->bind('departmentId',$departmentId)
										->bind('departmentValue',$departmentValue)
										->bind('year',$year)
										->bind('month',$month)
										->bind('error',$error);
	}
	
	
	// show OT Sheet
	public function action_showotsheet()
	{
		if($this->request->method() == 'POST'){
			
			 if($_POST['empNameId'] != "0")
			{
		
				$empNameId=$_POST['empNameId'];
				$empId=$_POST['empId'];
				$year=$_POST['year'];
				$month=$_POST['month'];
				
				$data = ORM::factory('employeeinfo')->where('id','=',$empNameId)->find_all();
			   
				foreach($data as $emp){
					$employeeId[$emp->id]=$emp->name;
					$employeeId[$emp->id]=$emp->employeeId;
				}
				$name=$emp->name;
				$employeeId=$emp->employeeId;
				
				//define page title
				$this->template->Page_Title = 'View Employee';
				
				// define maincontent
				$this->template->mainContent = view::factory('accounts/form/showotsheet')
												->bind('name',$name)
												->bind('employeeId',$employeeId)
												->bind('year',$year)
												->bind('month',$month);
			}
			else if($_POST['empNameId'] == "0")
			{
				//echo '2';
				HTTP::redirect('accounts_salary/otsheet');
			}
		}
	}
	
	
}