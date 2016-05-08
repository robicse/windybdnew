
<a class="btn btn-info" href="hr_employeeinfo/createemployeegeneralinfo">General Info</a> 
<a class="btn btn-info active" href="hr_employeeinfo/createemployeeofficialprofileinfo">Employee official Profile</a>
<a class="btn btn-info" href="hr_employeeinfo/createemployeepfinfo">Employee PF Info</a>
<a class="btn btn-info" href="hr_employeeinfo/createemployeepaymentinfo">Employee payment mode</a>
<a class="btn btn-info" href="hr_employeeinfo/createemployeelogininfo">Emp Login Info</a>

<h3 class="mb">Create Employee Official Profile</h3>


<?php echo Form::open($formLink,array('method'=>'POST'));?>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::label('leavepackgeId','Leave Package');?>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">
			<?php echo Form::select('leavepackageId',$leavepackageId,$leavepackageValue,array('class'=>'form-control'));?>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">
			<?= Arr::get($error,'leavepackgeId');?>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::label('companyId', "Company Name:"); ?>	
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?php echo Form::select('companyId', $companyId, $companyValue, array('class'=>'form-control','id'=>'comToDept')); ?>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?= Arr::get($error, 'companyId'); ?>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::label('departmentId', "Department Name:"); ?>	
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">
			<div id="departmentIdDiv">
			<?php echo Form::select('departmentId', null, null, array('class'=>'form-control','id'=>'showComNameId')); ?>
			</div>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?= Arr::get($error, 'departmentId'); ?>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::label('sectionId', "Section Name:"); ?>	
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<div id="sectionIdDiv">
				<?php echo Form::select('sectionId', null, null, array('class'=>'form-control','id'=>'showDeptNameId')); ?>
			</div>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?= Arr::get($error, 'sectionId'); ?>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::label('typeId', "Type Name:"); ?>	
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?php echo Form::select('typeId', $typeId, $typeValue, array('class'=>'form-control','id'=>'typeToDesig')); ?>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?= Arr::get($error, 'typeId'); ?>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::label('designationId', "Emp Designation:"); ?>	
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<div id="designationIdDiv">
				<?php echo Form::select('designationId', null, null, array('class'=>'form-control','id'=>'showTypeNameId')); ?>
			</div>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::label('attendanceruleId', "Duty Schedule:"); ?>	
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?php echo Form::select('attendanceruleId', $attendanceruleId, $attendanceruleValue, array('class'=>'form-control')); ?>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?= Arr::get($error, 'attendanceruleId'); ?>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">
			<?php echo Form::submit('save', 'Save', array('class'=>'btn btn-success')); ?>
		</div>
	</div>
<?php echo Form::close();?>
