<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Hr_Settings extends Controller_Application {
	
	
	
	// Create New Company
	public function action_addcompany()
	{
		if($this->request->method()=='POST'){
			
			//Form validation
			$post = Validation::factory($_POST)
			->rule('companyName','not_empty');
			
			//If Validation Success
			if ($post->check()) {
				$company = ORM::factory('companylist');
				$company->companyName=$_POST['companyName'];
				$company->save();
				$error['successful']= 'Successfully Submitted';
			}
			else {
				$error = $post->errors('hr/form/addcompany');
				
				//Re-pass Values Into Form
				$companyName=$_POST['companyName'];
			}
			
		}
		
		// Define Page title
		$this->template->Page_Title = 'Create New Company';
		
		// View Company List
		$companyList = ORM::factory('companylist')->find_all();
		
		// Url link
		$formLink = 'hr_settings/addcompany';
		
		// define maincontent
		$this->template->mainContent = view::factory('hr/form/addcompany')
								->bind('companyName',$companyName)
								->bind('error',$error)
								->bind('formLink',$formLink)
								->bind('companyList',$companyList); 
	}
	
	
	// Edit Company
	public function action_editcompany()
	{
		// Define Page title
		$this->template->Page_Title = 'Edit Company';
		
		// For Update
		if($this->request->method()=='POST'){
			$updateCompany = ORM::factory('companylist',$this->request->param('id'));
			$updateCompany->companyName=isset($_POST['companyName'])?$_POST['companyName']:$companyName;
			$updateCompany->save();
			$error['successful']= 'Successfully Updated';
		}	
		
		// For Edit
		$comId=$this->request->param('id');
		$companyList = ORM::factory('companylist')->find_all();
		foreach($companyList as $data){
			if($comId == $data->id) {
					$companyName = $data->companyName;
			}
		}
		
		
		// Url link	
		$formLink = 'hr_settings/editcompany/' . $comId ;
		
		// Define maincontent
		$this->template->mainContent = view::factory('hr/form/addcompany')
								->bind('companyName',$companyName)
								->bind('companyList',$companyList)
								->bind('formLink',$formLink)
								->bind('error',$error);
	}
	
	// Delete Company
	public function action_deletecompany()
	{
		$comId=$this->request->param('id');
		
		$deleteCompany = ORM::factory('companylist',$comId);
		$deleteCompany->delete();
		$error['successful']= 'Successfully Deleted';
			
		$companyList = ORM::factory('companylist')->find_all();
		foreach($companyList as $data){
			if($comId == $data->id) {
					$companyName = $data->companyName;
			}
		}
		
		// Url link
		$formLink = 'hr_settings/deletecompany/' . $comId ;
		
		// define maincontent
		$this->template->mainContent = view::factory('hr/form/addcompany')
								->bind('companyName',$companyName)
								->bind('companyList',$companyList)
								->bind('formLink',$formLink)
								->bind('error',$error);
	}
	
	
	// Create New Department
	public function action_adddepartment()
	{
		$data = ORM::factory('companylist')->find_all();
		$companyId[]='--Select--';
		
		foreach($data as $com){
			$companyId[$com->id]=$com->companyName;
		}
		
		if($this->request->method()=='POST'){
			
			//Form validation
			$post = Validation::factory($_POST)
			->rule('companyId','not_empty')
			->rule('departmentName','not_empty');
			
			//If Validation Success
			if ($post->check()) {
				$department = ORM::factory('departmentlist');
				$department->companyId=$_POST['companyId'];
				$department->departmentName=$_POST['departmentName'];
				$department->save();
				$error['successful']= 'Successfully Submitted';
			}
			else {
				$error = $post->errors('hr/form/adddepartment');
				
				//Re-pass Values Into Form
				$companyValue=$_POST['companyId'];
				$departmentName=$_POST['departmentName'];
			}
			
		}
		
		// Define Page title
		$this->template->Page_Title = 'Create New Department';
		
		// View Department List
		$departmentList = ORM::factory('departmentlist')
						->select('departmentlist.departmentName','companylist.companyName')
						->join('companylist', 'inner')
						->on('departmentlist.companyId', '=', 'companylist.id')
						->find_all();						
						
		
		// Url link
		$formLink = 'hr_settings/adddepartment';
		
		// define maincontent
		$this->template->mainContent = view::factory('hr/form/adddepartment')
								->bind('companyId',$companyId)
								->bind('companyValue',$companyValue)
								->bind('departmentName',$departmentName)
								->bind('departmentList',$departmentList)
								->bind('formLink',$formLink)
								->bind('error',$error); 
	}
	
	
	// Edit Department
	public function action_editdepartment()
	{
		
		// view dropdown
		$data = ORM::factory('companylist')->find_all();
		$companyId[]='--Select--';
		
		foreach($data as $com){
			$companyId[$com->id]=$com->companyName;
		}
		
		// Define Page title
		$this->template->Page_Title = 'Edit Department';
		
		// For Update
		if($this->request->method()=='POST'){
			$updateDepartment = ORM::factory('departmentlist',$this->request->param('id'));
			$updateDepartment->companyId=isset($_POST['companyId'])?$_POST['companyId']:$companyId;
			$updateDepartment->departmentName=isset($_POST['departmentName'])?$_POST['departmentName']:$departmentName;
			$updateDepartment->save();
			$error['successful']= 'Successfully Updated';
		}
		
		// For Edit
		$deptId=$this->request->param('id');
		
		$departmentList =ORM::factory('departmentlist')
						->select('departmentlist.departmentName','departmentlist.companyId','companylist.companyName')
						->join('companylist', 'inner')
						->on('departmentlist.companyId', '=', 'companylist.id')
						->find_all();
		
		foreach($departmentList as $data){
			if($deptId == $data->id) {
					$companyValue = $data->companyId;
					$departmentName = $data->departmentName;
			}
		}
		
		
		// Url link	
		$formLink = 'hr_settings/editdepartment/' . $deptId ;
		
		// define maincontent
		$this->template->mainContent = view::factory('hr/form/adddepartment')
								->bind('companyId',$companyId)
								->bind('companyValue',$companyValue)
								->bind('departmentName',$departmentName)
								->bind('departmentList',$departmentList)
								->bind('formLink',$formLink)
								->bind('error',$error);
	}
	
	
	// Delete Department
	public function action_deletedepartment()
	{
		$deptId=$this->request->param('id');
		$deleteDepartment = ORM::factory('departmentlist',$deptId);
		$deleteDepartment->delete();
		$error['successful']= 'Successfully Deleted';
			
		$departmentList = ORM::factory('departmentlist')->find_all();
		foreach($departmentList as $data){
			if($deptId == $data->id) {
					$companyId = $data->companyId;
					$departmentName = $data->departmentName;
			}
		}
		
		// Url link
		$formLink = 'hr_settings/deletedepartment/' . $deptId ;
		
		// define maincontent
		$this->template->mainContent = view::factory('hr/form/adddepartment')
								->bind('companyId',$companyId)
								->bind('companyValue',$companyValue)
								->bind('departmentName',$departmentName)
								->bind('departmentList',$departmentList)
								->bind('formLink',$formLink)
								->bind('error',$error);
	}
	
	
	
	// Create New Section
	public function action_addsection()
	{
		$data = ORM::factory('departmentlist')->find_all();
		$departmentId[]='--Select--';
		
		foreach($data as $dept){
			$departmentId[$dept->id]=$dept->departmentName;
		}
		
		if($this->request->method()=='POST'){
			
			//Form validation
			$post = Validation::factory($_POST)
			->rule('departmentId','not_empty')
			->rule('sectionName','not_empty');
			
			//If Validation Success
			if ($post->check()) {
				$section = ORM::factory('sectionlist');
				$section->departmentId=$_POST['departmentId'];
				$section->sectionName=$_POST['sectionName'];
				$section->save();
				$error['successful']= 'Successfully Submitted';
			}
			else {
				$error = $post->errors('hr/form/addsection');
				
				//Re-pass Values Into Form
				$departmentValue=$_POST['departmentId'];
				$sectionName=$_POST['sectionName'];
			}
			
		}
		
		// Define Page title
		$this->template->Page_Title = 'Create New Section';
		
		// View Section List
		$sectionList = ORM::factory('sectionlist')
						->select('sectionlist.sectionName','departmentlist.departmentName')
						->join('departmentlist', 'inner')
						->on('sectionlist.departmentId', '=', 'departmentlist.id')
						->find_all();
		
		// Url link
		$formLink = 'hr_settings/addsection';
		
		// define maincontent
		$this->template->mainContent = view::factory('hr/form/addsection')
								->bind('departmentId',$departmentId)
								->bind('departmentValue',$departmentValue)
								->bind('sectionName',$sectionName)
								->bind('sectionList',$sectionList)
								->bind('formLink',$formLink)
								->bind('error',$error); 
	}
	
	
	// Edit Section 
	public function action_editsection()
	{
		// view dropdown
		$data = ORM::factory('departmentlist')->find_all();
		$departmentId[]='--Select--';
		
		foreach($data as $dept){
			$departmentId[$dept->id]=$dept->departmentName;
		}
		
		// Define Page title
		$this->template->Page_Title = 'Edit Section';
		
		// For Update
		if($this->request->method()=='POST'){
			$updateSection = ORM::factory('sectionlist',$this->request->param('id'));
			$updateSection->departmentId=isset($_POST['departmentId'])?$_POST['departmentId']:$departmentId;
			$updateSection->sectionName=isset($_POST['sectionName'])?$_POST['sectionName']:$sectionName;
			$updateSection->save();
			$error['successful']= 'Successfully Updated';
		}
		
		// For Edit
		$secId=$this->request->param('id');
		$sectionList =ORM::factory('sectionlist')
						->select('sectionlist.sectionName','sectionlist.departmentId','departmentlist.departmentName')
						->join('departmentlist', 'inner')
						->on('sectionlist.departmentId', '=', 'departmentlist.id')
						->find_all();
						
		foreach($sectionList as $data){
			if($secId == $data->id) {
					$departmentValue = $data->departmentId;
					$sectionName = $data->sectionName;
			}
		}
		
		
		// Url link	
		$formLink = 'hr_settings/editsection/' . $secId ;
		
		
		// define maincontent
		$this->template->mainContent = view::factory('hr/form/addsection')
								->bind('departmentId',$departmentId)
								->bind('departmentValue',$departmentValue)
								->bind('sectionName',$sectionName)
								->bind('sectionList',$sectionList)
								->bind('formLink',$formLink)
								->bind('error',$error);
	}
	
	
	// Delete Section
	public function action_deletesection()
	{
		$secId=$this->request->param('id');
		$deleteSection = ORM::factory('sectionlist',$secId);
		$deleteSection->delete();
		$error['successful']= 'Successfully Deleted';
			
		$sectionList = ORM::factory('sectionlist')->find_all();
		foreach($sectionList as $data){
			if($secId == $data->id) {
					$departmentId = $data->departmentId;
					$sectionName = $data->sectionName;
			}
		}
		
		// Url link
		$formLink = 'hr_settings/deletesection/' . $secId ;
		
		// define maincontent
		$this->template->mainContent = view::factory('hr/form/addsection')
								->bind('departmentId',$departmentId)
								->bind('departmentValue',$departmentValue)
								->bind('sectionName',$sectionName)
								->bind('sectionList',$sectionList)
								->bind('formLink',$formLink)
								->bind('error',$error);
	}	
	
	
	// Create New Type
	public function action_addtype()
	{
		if($this->request->method()=='POST'){
			
			//Form validation
			$post = Validation::factory($_POST)
			->rule('typeName','not_empty');
			
			//If Validation Success
			if ($post->check()) {
				$type = ORM::factory('typelist');
				$type->typeName=$_POST['typeName'];
				$type->save();
				$error['successful']= 'Successfully Submitted';
			}
			else {
				$error = $post->errors('hr/form/addtype');
				
				//Re-pass Values Into Form
				$typeName=$_POST['typeName'];
			}
			
		}
		
		// Define Page title
		$this->template->Page_Title = 'Create New Type';
		
		// View Company List
		$typeList = ORM::factory('typelist')->find_all();
		
		// Url link
		$formLink = 'hr_settings/addtype';
		
		// define maincontent
		$this->template->mainContent = view::factory('hr/form/addtype')
								->bind('typeName',$typeName)
								->bind('error',$error)
								->bind('formLink',$formLink)
								->bind('typeList',$typeList); 
	}
	
	
	// Edit Type
	public function action_edittype()
	{
		// Define Page title
		$this->template->Page_Title = 'Edit Type';
		
		// For Update
		if($this->request->method()=='POST'){
			$updateType = ORM::factory('typelist',$this->request->param('id'));
			$updateType->typeName=isset($_POST['typeName'])?$_POST['typeName']:$typeName;
			$updateType->save();
			$error['successful']= 'Successfully Updated';
		}	
		
		// For Edit
		$typeId=$this->request->param('id');
		$typeList = ORM::factory('typelist')->find_all();
		foreach($typeList as $data){
			if($typeId == $data->id) {
					$typeName = $data->typeName;
			}
		}
		
		
		// Url link	
		$formLink = 'hr_settings/edittype/' . $typeId ;
		
		// Define maincontent
		$this->template->mainContent = view::factory('hr/form/addtype')
								->bind('typeName',$typeName)
								->bind('typeList',$typeList)
								->bind('formLink',$formLink)
								->bind('error',$error);
	}
	
	// Delete Type
	public function action_deletetype()
	{
		$typeId=$this->request->param('id');
		
		$deleteType = ORM::factory('typelist',$typeId);
		$deleteType->delete();
		$error['successful']= 'Successfully Deleted';
			
		$typeList = ORM::factory('typelist')->find_all();
		foreach($typeList as $data){
			if($typeId == $data->id) {
					$typeName = $data->typeName;
			}
		}
		
		// Url link
		$formLink = 'hr_settings/deletetype/' . $typeId ;
		
		// define maincontent
		$this->template->mainContent = view::factory('hr/form/addtype')
								->bind('typeName',$typeName)
								->bind('typeList',$typeList)
								->bind('formLink',$formLink)
								->bind('error',$error);
	}
	
	
	// Create New Designation
	public function action_adddesignation()
	{
		$data = ORM::factory('typelist')->find_all();
		$typeId[]='--Select--';
		
		foreach($data as $type){
			$typeId[$type->id]=$type->typeName;
		}
		
		if($this->request->method()=='POST'){
			
			//Form validation
			$post = Validation::factory($_POST)
			->rule('typeId','not_empty')
			->rule('designationName','not_empty');
			
			//If Validation Success
			if ($post->check()) {
				$designation = ORM::factory('designationlist');
				$designation->typeId=$_POST['typeId'];
				$designation->designationName=$_POST['designationName'];
				$designation->save();
				$error['successful']= 'Successfully Submitted';
			}
			else {
				$error = $post->errors('hr/form/adddesignation');
				
				//Re-pass Values Into Form
				$typeValue=$_POST['typeId'];
				$designationName=$_POST['designationName'];
			}
		
		}
		
		// Define Page title
		$this->template->Page_Title = 'Create New Designation';
		
		// View Designation List
		//$designationList = ORM::factory('designationlist')->find_all();
		$designationList = ORM::factory('designationlist')
						->select('designationlist.designationName','typelist.typeName')
						->join('typelist', 'inner')
						->on('designationlist.typeId', '=', 'typelist.id')
						->find_all();
		
		// Url link
		$formLink = 'hr_settings/adddesignation';
		
		
		// define maincontent
		$this->template->mainContent = view::factory('hr/form/adddesignation')
								->bind('typeId',$typeId)
								->bind('typeValue',$typeValue)
								->bind('designationName',$designationName)
								->bind('designationList',$designationList)
								->bind('formLink',$formLink)
								->bind('error',$error); 
	}
	
	
	// Edit Designation
	public function action_editdesignation()
	{
		// View dropdown
		$data = ORM::factory('typelist')->find_all();
		$typeId[]='--Select--';
		
		foreach($data as $type){
			$typeId[$type->id]=$type->typeName;
		}
		
		// Define Page title
		$this->template->Page_Title = 'Edit Designation';
		
		// For Update
		if($this->request->method()=='POST'){
			$updateDesignation = ORM::factory('designationlist',$this->request->param('id'));
			$updateDesignation->typeId=isset($_POST['typeId'])?$_POST['typeId']:$typeId;
			$updateDesignation->designationName=isset($_POST['designationName'])?$_POST['designationName']:$designationName;
			$updateDesignation->save();
			$error['successful']= 'Successfully Updated';
		}
		
		// For Edit
		$desigId=$this->request->param('id');
		//$designationList = ORM::factory('designationlist')->find_all();
		$designationList = ORM::factory('designationlist')
							->select('designationlist.designationName','typelist.typeName')
							->join('typelist','inner')
							->on('designationlist.typeId','=','typelist.id')
							->find_all();
		foreach($designationList as $data){
			if($desigId == $data->id) {
					$typeValue=$data->typeId;
					$designationName = $data->designationName;
			}
		}
		
		
		// Url link	
		$formLink = 'hr_settings/editdesignation/' . $desigId ;
		
		// define maincontent
		$this->template->mainContent = view::factory('hr/form/adddesignation')
								->bind('typeId',$typeId)
								->bind('typeValue',$typeValue)
								->bind('designationName',$designationName)
								->bind('designationList',$designationList)
								->bind('formLink',$formLink)
								->bind('error',$error); 
	}
	
	
	// Delete Designation
	public function action_deletedesignation()
	{
		$desigId=$this->request->param('id');
		$deleteDesignation = ORM::factory('designationlist',$desigId);
		$deleteDesignation->delete();
		$error['successful']= 'Successfully Deleted';
			
		$designationList = ORM::factory('designationlist')->find_all();
		foreach($designationList as $data){
			if($desigId == $data->id) {
					$typeId = $data->typeId;
					$designationName = $data->designationName;
			}
		}
		
		// Url link
		$formLink = 'hr_settings/deletedesignation/' . $desigId ;
		
		// define maincontent
		$this->template->mainContent = view::factory('hr/form/adddesignation')
								->bind('typeId',$typeId)
								->bind('typeValue',$typeValue)
								->bind('designationName',$designationName)
								->bind('designationList',$designationList)
								->bind('formLink',$formLink)
								->bind('error',$error);
	}
	
	
	// Create New Category
	public function action_addcategory()
	{
		if($this->request->method()=='POST'){
			
			//Form validation
			$post = Validation::factory($_POST)
			->rule('categoryName','not_empty');
			
			//If Validation Success
			if ($post->check()) {
				$category = ORM::factory('employeecategory');
				$category->categoryName=$_POST['categoryName'];
				$category->save();
				$error['successful']= 'Successfully Submitted';
			}
			else {
				$error = $post->errors('hr/form/addcategory');
				
				//Re-pass Values Into Form
				$categoryName=$_POST['categoryName'];
			}
		
		}
		
		// Define Page title
		$this->template->Page_Title = 'Create New Category';
		
		
		// View Category List
		$categoryList = ORM::factory('employeecategory')->find_all();
		
		// Url link
		$formLink = 'hr_settings/addcategory';
		
		// define maincontent
		$this->template->mainContent = view::factory('hr/form/addcategory')
								->bind('categoryName',$categoryName)
								->bind('categoryList',$categoryList)
								->bind('formLink',$formLink)
								->bind('error',$error); 
	}
	
	
	// Edit Category
	public function action_editcategory()
	{
		// Define Page title
		$this->template->Page_Title = 'Edit Category';
		
		// For Update
		if($this->request->method()=='POST'){
			$updateCategory = ORM::factory('employeecategory',$this->request->param('id'));
			$updateCategory->categoryName=isset($_POST['categoryName'])?$_POST['categoryName']:$categoryName;
			$updateCategory->save();
			$error['successful']= 'Successfully Updated';
		}
		
		// For Edit
		$catId=$this->request->param('id');
		$categoryList = ORM::factory('employeecategory')->find_all();
		foreach($categoryList as $data){
			if($catId == $data->id) {
					$categoryName = $data->categoryName;
			}
		}
		
		
		// Url link	
		$formLink = 'hr_settings/editcategory/' . $catId ;
		
		
		// define maincontent
		$this->template->mainContent = view::factory('hr/form/addcategory')
								->bind('categoryName',$categoryName)
								->bind('categoryList',$categoryList)
								->bind('formLink',$formLink)
								->bind('error',$error);
	}
	
	
	// Delete Category
	public function action_deletecategory()
	{
		$catId=$this->request->param('id');
		$deleteCategory = ORM::factory('employeecategory',$catId);
		$deleteCategory->delete();
		$error['successful']= 'Successfully Deleted';
			
		$categoryList = ORM::factory('employeecategory')->find_all();
		foreach($categoryList as $data){
			if($catId == $data->id) {
					$categoryName = $data->categoryName;
			}
		}
		
		// Url link
		$formLink = 'hr_settings/deletecategory/' . $catId ;
		
		// define maincontent
		$this->template->mainContent = view::factory('hr/form/addcategory')
								->bind('categoryName',$categoryName)
								->bind('categoryList',$categoryList)
								->bind('formLink',$formLink)
								->bind('error',$error);
	}
	
	
	// Create Bank Name
	public function action_addbank()
	{
		if($this->request->method()=='POST'){
			
			//Form validation
			$post = Validation::factory($_POST)
			->rule('bankName','not_empty');
			
			//If Validation Success
			if ($post->check()) {
				$bank = ORM::factory('banklist');
				$bank->bankName=$_POST['bankName'];
				$bank->save();
				$error['successful']= 'Successfully Submitted';
			}
			else {
				$error = $post->errors('hr/form/addbank');
				
				//Re-pass Values Into Form
				$bankName=$_POST['bankName'];
			}
		
		}
		
		// Define Page title
		$this->template->Page_Title = 'Create New Bank';
		
		// View Bank List
		$bankList = ORM::factory('banklist')->find_all();
		
		// Url link
		$formLink = 'hr_settings/addbank';
		
		
		// define maincontent
		$this->template->mainContent = view::factory('hr/form/addbank')
								->bind('bankName',$bankName)
								->bind('bankList',$bankList)
								->bind('formLink',$formLink)
								->bind('error',$error); 
	}
	
	
	// Edit Bank
	public function action_editbank()
	{
		// Define Page title
		$this->template->Page_Title = 'Edit Bank';
		
		// For Update
		if($this->request->method()=='POST'){
			$updateBank = ORM::factory('banklist',$this->request->param('id'));
			$updateBank->bankName=isset($_POST['bankName'])?$_POST['bankName']:$bankName;
			$updateBank->save();
			$error['successful']= 'Successfully Updated';
		}
		
		// For Edit
		$bankId=$this->request->param('id');
		$bankList = ORM::factory('banklist')->find_all();
		foreach($bankList as $data){
			if($bankId == $data->id) {
					$bankName = $data->bankName;
			}
		}
		
		
		// Url link	
		$formLink = 'hr_settings/editbank/' . $bankId ;
		
		
		// define maincontent
		$this->template->mainContent = view::factory('hr/form/addbank')
								->bind('bankName',$bankName)
								->bind('bankList',$bankList)
								->bind('formLink',$formLink)
								->bind('error',$error); 
	}
	
	
	// Delete Bank
	public function action_deletebank()
	{
		$bankId=$this->request->param('id');
		$deleteBank = ORM::factory('banklist',$bankId);
		$deleteBank->delete();
		$error['successful']= 'Successfully Deleted';
			
		$bankList = ORM::factory('banklist')->find_all();
		foreach($bankList as $data){
			if($bankId == $data->id) {
					$bankName = $data->bankName;
			}
		}
		
		// Url link
		$formLink = 'hr_settings/deletebank/' . $bankId ;
		
		// define maincontent
		$this->template->mainContent = view::factory('hr/form/addbank')
								->bind('bankName',$bankName)
								->bind('bankList',$bankList)
								->bind('formLink',$formLink)
								->bind('error',$error); 
	}
	
	
	// Create Branch Name
	public function action_addbranch()
	{
		// view dropdown
		$data = ORM::factory('banklist')->find_all();
		$bankId[]='--Select--';
		
		foreach($data as $bank){
			$bankId[$bank->id]=$bank->bankName;
		}
		
		if($this->request->method()=='POST'){
			
			//Form validation
			$post = Validation::factory($_POST)
			->rule('bankId','not_empty')
			->rule('branchName','not_empty');
			
			//If Validation Success
			if ($post->check()) {
				$branch = ORM::factory('bankbranch');
				$branch->bankId=$_POST['bankId'];
				$branch->branchName=$_POST['branchName'];
				$branch->save();
				$error['successful']= 'Successfully Submitted';
			}
			else {
				$error = $post->errors('hr/form/addbranch');
				
				//Re-pass Values Into Form
				$bankValue=$_POST['bankId'];
				$branchName=$_POST['branchName'];
			}
		
		}
		
		// Define Page title
		$this->template->Page_Title = 'Create New Branch';
		
		// View Branch List
		//$branchList = ORM::factory('bankbranch')->find_all();
		$branchList = ORM::factory('bankbranch')
						->select('bankbranch.branchName','banklist.bankName')
						->join('banklist', 'inner')
						->on('bankbranch.bankId', '=', 'banklist.id')
						->find_all();
		
		// Url link
		$formLink = 'hr_settings/addbranch';
		
		
		// define maincontent
		$this->template->mainContent = view::factory('hr/form/addbranch')
								->bind('bankId',$bankId)
								->bind('bankValue',$bankValue)
								->bind('branchName',$branchName)
								->bind('branchList',$branchList)
								->bind('formLink',$formLink)
								->bind('error',$error); 
	}
	
	
	// Edit Branch
	public function action_editbranch()
	{
		// view dropdown
		$data = ORM::factory('banklist')->find_all();
		$bankId[]='--Select--';
		
		foreach($data as $bank){
			$bankId[$bank->id]=$bank->bankName;
		}
		
		// Define Page title
		$this->template->Page_Title = 'Edit Branch';
		
		// For Update
		if($this->request->method()=='POST'){
			$updateBranch = ORM::factory('bankbranch',$this->request->param('id'));
			$updateBranch->bankId=isset($_POST['bankId'])?$_POST['bankId']:$bankId;
			$updateBranch->branchName=isset($_POST['branchName'])?$_POST['branchName']:$branchName;
			$updateBranch->save();
			$error['successful']= 'Successfully Updated';
		}
		
		// For Edit
		$branchId=$this->request->param('id');
		//$branchList = ORM::factory('bankbranch')->find_all();
		$branchList =ORM::factory('bankbranch')
						->select('bankbranch.branchName','banklist.bankName')
						->join('banklist', 'inner')
						->on('bankbranch.bankId', '=', 'banklist.id')
						->find_all();
		foreach($branchList as $data){
			if($branchId == $data->id) {
					$bankValue = $data->bankId;
					$branchName = $data->branchName;
			}
		}
		
		
		// Url link	
		$formLink = 'hr_settings/editbranch/' . $branchId ;
		
		
		// define maincontent
		$this->template->mainContent = view::factory('hr/form/addbranch')
								->bind('bankId',$bankId)
								->bind('bankValue',$bankValue)
								->bind('branchName',$branchName)
								->bind('branchList',$branchList)
								->bind('formLink',$formLink)
								->bind('error',$error); 
	}
	
	
	// Delete Branch
	public function action_deletebranch()
	{
		$branchId=$this->request->param('id');
		$deleteBranch = ORM::factory('bankbranch',$branchId);
		$deleteBranch->delete();
		$error['successful']= 'Successfully Deleted';
			
		$branchList = ORM::factory('bankbranch')->find_all();
		foreach($branchList as $data){
			if($branchId == $data->id) {
					$bankId = $data->bankId;
					$branchName = $data->branchName;
			}
		}
		
		// Url link
		$formLink = 'hr_settings/deletebranch/' . $branchId ;
		
		// define maincontent
		$this->template->mainContent = view::factory('hr/form/addbranch')
								->bind('bankId',$bankId)
								->bind('bankValue',$bankValue)
								->bind('branchName',$branchName)
								->bind('branchList',$branchList)
								->bind('formLink',$formLink)
								->bind('error',$error); 
	}
	
	
	// Create weekend
	public function action_addweekend()
	{
		// set connection dateTime file
		$this->template->scripts=array('dateTimeCust.js');
		
		// view department list
		$data = ORM::factory('departmentlist')->find_all();
		$departmentId[]='--Select--';
		
		foreach($data as $dept){
			$departmentId[$dept->id]=$dept->departmentName;
		}
		
		if($this->request->method()=='POST'){
			
			//Form validation
			$post = Validation::factory($_POST)
			->rule('departmentId','not_empty')
			->rule('weekendDate','not_empty')
			->rule('weekendDay','not_empty');
			
			//If Validation Success
			if ($post->check()) {
				$weekend = ORM::factory('weekendlist');
				$weekend->departmentId=$_POST['departmentId'];
				$weekend->weekendDate=$_POST['weekendDate'];
				$weekend->weekendDay=$_POST['weekendDay'];
				$weekend->save();
				$error['successful']= 'Successfully Submitted';
			}
			else {
				$error = $post->errors('hr/form/addweekend');
				
				//Re-pass Values Into Form
				$departmentValue=$_POST['departmentId'];
				$weekendDate=$_POST['weekendDate'];
				$weekendDay=$_POST['weekendDay'];
			}
		
		}
		
		// Define Page title
		$this->template->Page_Title = 'Create Weekend';
		
		// View weekend List
		//$weekendList = ORM::factory('weekendlist')->find_all();
		$weekendList = ORM::factory('weekendlist')
						->select('weekendlist.weekendDate','weekendlist.weekendDay','departmentlist.departmentName')
						->join('departmentlist', 'inner')
						->on('weekendlist.departmentId', '=', 'departmentlist.id')
						->find_all();
		
		// Url link
		$formLink = 'hr_settings/addweekend';
		
		
		// define maincontent
		$this->template->mainContent = view::factory('hr/form/addweekend')
								->bind('departmentId',$departmentId)
								->bind('departmentValue',$departmentValue)
								->bind('weekendDate',$weekendDate)
								->bind('weekendDay',$weekendDay)
								->bind('weekendList',$weekendList)
								->bind('formLink',$formLink)
								->bind('error',$error); 
	}
	
	
	// Edit Weekend
	public function action_editweekend()
	{
		// set connection dateTime file
		$this->template->scripts=array('dateTimeCust.js');
		
		// view dropdown
		$data = ORM::factory('departmentlist')->find_all();
		$departmentId[]='--Select--';
		
		foreach($data as $dept){
			$departmentId[$dept->id]=$dept->departmentName;
		}
		
		// Define Page title
		$this->template->Page_Title = 'Edit Weekend';
		
		// For Update
		if($this->request->method()=='POST'){
			$updateWeekend = ORM::factory('weekendlist',$this->request->param('id'));
			$updateWeekend->departmentId=isset($_POST['departmentId'])?$_POST['departmentId']:$departmentId;
			$updateWeekend->weekendDate=isset($_POST['weekendDate'])?$_POST['weekendDate']:$weekendDate;
			$updateWeekend->weekendDay=isset($_POST['weekendDay'])?$_POST['weekendDay']:$weekendDay;
			$updateWeekend->save();
			$error['successful']= 'Successfully Updated';
		}
		
		// For Edit
		$weekId=$this->request->param('id');
		//$weekendList = ORM::factory('weekendlist')->find_all();
		$weekendList =ORM::factory('weekendlist')
						->select('weekendlist.weekendDate','weekendlist.weekendDay','weekendlist.departmentId','departmentlist.departmentName')
						->join('departmentlist', 'inner')
						->on('weekendlist.departmentId', '=', 'departmentlist.id')
						->find_all();
		foreach($weekendList as $data){
			if($weekId == $data->id) {
					$departmentValue = $data->departmentId;
					$weekendDate = $data->weekendDate;
					$weekendDay = $data->weekendDay;
			}
		}
		
		
		// Url link	
		$formLink = 'hr_settings/editweekend/' . $weekId ;
		
		
		// define maincontent
		$this->template->mainContent = view::factory('hr/form/addweekend')
								->bind('departmentId',$departmentId)
								->bind('departmentValue',$departmentValue)
								->bind('weekendDate',$weekendDate)
								->bind('weekendDay',$weekendDay)
								->bind('weekendList',$weekendList)
								->bind('formLink',$formLink)
								->bind('error',$error);
	}
	
	
	// Delete Weekend
	public function action_deleteweekend()
	{
		// For delete
		$weekId=$this->request->param('id');
		$deleteWeekend = ORM::factory('weekendlist',$weekId);
		$deleteWeekend->delete();
		$error['successful']= 'Successfully Deleted';
			
		// View data after delete
		$weekendList = ORM::factory('weekendlist')->find_all();
		foreach($weekendList as $data){
			if($weekId == $data->id) {
					$departmentId = $data->departmentId;
					$weekendDate = $data->weekendDate;
					$weekendDay = $data->weekendDay;
			}
		}
		
		// Url link
		$formLink = 'hr_settings/deleteweekend/' . $weekId ;
		
		// define maincontent
		$this->template->mainContent = view::factory('hr/form/addweekend')
								->bind('departmentId',$departmentId)
								->bind('departmentValue',$departmentValue)
								->bind('weekendDate',$weekendDate)
								->bind('weekendDay',$weekendDay)
								->bind('weekendList',$weekendList)
								->bind('formLink',$formLink)
								->bind('error',$error);
	}
	
	
	// Create Holiday
	public function action_addholiday()
	{
		// set connection dateTime file
		$this->template->scripts=array('dateTimeCust.js');
		
		if($this->request->method()=='POST'){
			
			//Form validation
			$post = Validation::factory($_POST)
			->rule('holidayDate','not_empty')
			->rule('description','not_empty');
			
			//If Validation Success
			if ($post->check()) {
				$holiday = ORM::factory('holidaylist');
				$holiday->holidayDate=$_POST['holidayDate'];
				$holiday->description=$_POST['description'];
				$holiday->save();
				$error['successful']= 'Successfully Submitted';
			}
			else {
				$error = $post->errors('hr/form/addholiday');
				
				//Re-pass Values Into Form
				$holidayDate=$_POST['holidayDate'];
				$description=$_POST['description'];
			}
		
		}
		
		// Define Page title
		$this->template->Page_Title = 'Create Holiday';
		
		// View holiday List
		$holidayList = ORM::factory('holidaylist')->find_all();
		
		// Url link
		$formLink = 'hr_settings/addholiday';
		
		
		// define maincontent
		$this->template->mainContent = view::factory('hr/form/addholiday')
								->bind('holidayDate',$holidayDate)
								->bind('description',$description)
								->bind('holidayList',$holidayList)
								->bind('formLink',$formLink)
								->bind('error',$error); 
	}
	
	
	// Edit Holiday
	public function action_editholiday()
	{
		// set connection dateTime file
		$this->template->scripts=array('dateTimeCust.js');
		
		// Define Page title
		$this->template->Page_Title = 'Edit Holiday';
		
		// For Update
		if($this->request->method()=='POST'){
			$updateHoliday = ORM::factory('holidaylist',$this->request->param('id'));
			$updateHoliday->holidayDate=isset($_POST['holidayDate'])?$_POST['holidayDate']:$holidayDate;
			$updateHoliday->description=isset($_POST['description'])?$_POST['description']:$description;
			$updateHoliday->save();
			$error['successful']= 'Successfully Updated';
		}
		
		// For Edit
		$holiId=$this->request->param('id');
		$holidayList = ORM::factory('holidaylist')->find_all();
		foreach($holidayList as $data){
			if($holiId == $data->id) {
					$holidayDate = $data->holidayDate;
					$description = $data->description;
			}
		}
		
		
		// Url link	
		$formLink = 'hr_settings/editholiday/' . $holiId ;
		
		
		// define maincontent
		$this->template->mainContent = view::factory('hr/form/addholiday')
								->bind('holidayDate',$holidayDate)
								->bind('description',$description)
								->bind('holidayList',$holidayList)
								->bind('formLink',$formLink)
								->bind('error',$error); 
	}
	
	// Delete Holiday
	public function action_deleteholiday()
	{
		// For delete
		$holiId=$this->request->param('id');
		$deleteHoliday = ORM::factory('holidaylist',$holiId);
		$deleteHoliday->delete();
		$error['successful']= 'Successfully Deleted';
			
		// View data after delete
		$holidayList = ORM::factory('holidaylist')->find_all();
		foreach($holidayList as $data){
			if($holiId == $data->id) {
					$holidayDate = $data->holidayDate;
					$description = $data->description;
			}
		}
		
		// Url link
		$formLink = 'hr_settings/deleteholiday/' . $holiId ;
		
		// define maincontent
		$this->template->mainContent = view::factory('hr/form/addholiday')
								->bind('holidayDate',$holidayDate)
								->bind('description',$description)
								->bind('holidayList',$holidayList)
								->bind('formLink',$formLink)
								->bind('error',$error); 
	}

}
	
	
