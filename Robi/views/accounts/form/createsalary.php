<?php echo Form::open('',array('method'=>'POST')); ?>
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
			<?php echo Form::label('year', "Year:"); ?>	
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?php echo Form::select('year',array(''=>'--Select--','2015'=>'2015','2016'=>'2016','2017'=>'2017'), NULL, array('class'=>'form-control')); ?>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?= Arr::get($error, 'sick'); ?>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::label('month', "Month:"); ?>	
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?php echo Form::select('month',array(''=>'--Select--','01'=>'January','02'=>'February','03'=>'March','04'=>'April','05'=>'May','06'=>'June','07'=>'July','08'=>'August','09'=>'September','10'=>'October','11'=>'November','12'=>'December'), NULL, array('class'=>'form-control')); ?>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?= Arr::get($error, 'month'); ?>
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


