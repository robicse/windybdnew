<?php echo Form::open('accounts_salary/showloanreport',array('method'=>'POST')); ?>
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
			
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">
			<?php echo Form::submit('save', 'Save', array('class'=>'btn btn-success')); ?>
		</div>
	</div>
<?= Form::close(); ?>	


