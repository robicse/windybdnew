<a class="btn btn-info" href="hr_employeeinfo/createemployeegeneralinfo">General Info</a> 
<a class="btn btn-info" href="hr_employeeinfo/createemployeeofficialprofileinfo">Employee official Profile</a>
<a class="btn btn-info active" href="hr_employeeinfo/createemployeepfinfo">Employee PF Info</a>
<a class="btn btn-info" href="hr_employeeinfo/createemployeepaymentinfo">Employee payment mode</a>
<a class="btn btn-info" href="hr_employeeinfo/createemployeelogininfo">Emp Login Info</a>

<h3 class="mb">Create Employee PF Info</h3>

<h1><?= Arr::get($error, 'successful'); ?></h1>
<?php echo Form::open($formLink,array('method'=>'POST')); ?>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::label('providentFund', "Provident Fund:"); ?>	
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?php echo Form::select('providentFund', array(''=>'--Select--','0'=>'No','1'=>'Yes'), null, array('class'=>'form-control')); ?>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?= Arr::get($error, 'providentFund'); ?>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::label('prevBalanceEmp', "Prev Balance(Emp):"); ?>	
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?php echo Form::input('prevBalanceEmp', $prevBalanceEmp, array('class'=>'form-control')); ?>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?= Arr::get($error, 'prevBalanceEmp'); ?>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::label('prevBalanceOff', "Prev Balance(Off):"); ?>	
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?php echo Form::input('prevBalanceOff', $prevBalanceOff, array('class'=>'form-control')); ?>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?= Arr::get($error, 'prevBalanceOff'); ?>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::label('timeFrame', "Time Frame:"); ?>	
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?php echo Form::input('timeFrame', $timeFrame, array('class'=>'form-control')); ?>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?= Arr::get($error, 'timeFrame'); ?>
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
