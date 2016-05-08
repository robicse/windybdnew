<div class="col-sm-6 col-md-6 col-lg-6">
	<?php echo Form::open('user_leave/leaveapplication',array('method'=>'POST')); ?>
	<div class="row">
		<div class="col-sm-4 col-md-4 col-lg-4">
				
		</div>
		<div class="col-sm-8 col-md-8 col-lg-8">
			<div id="calculation"></div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4 col-md-4 col-lg-4">
			<?php echo Form::label('startDate', "Start Date:"); ?>	
		</div>
		<div class="col-sm-8 col-md-8 col-lg-8">
			<?php echo Form::input('startDate', $startDate, array('class'=>'form-control','id'=>'datepicker1')); ?>
			<?= Arr::get($error, 'startDate'); ?>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-4 col-md-4 col-lg-4">
			<?php echo Form::label('endDate', "End Date:"); ?>	
		</div>
		<div class="col-sm-8 col-md-4 col-lg-8">	
			<?php echo Form::input('endDate', $endDate, array('class'=>'form-control set_duration','id'=>'datepicker2')); ?>
			<?= Arr::get($error, 'endDate'); ?>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-4 col-md-4 col-lg-4">
			<?php echo Form::label('leaveType', "Leave Type:"); ?>	
		</div>
		<div class="col-sm-8 col-md-8 col-lg-8">	
			<?php echo Form::select('leaveType', array(''=>'--Select--','1'=>'Casual','2'=>'Sick','3'=>'Earned'), null, array('class'=>'form-control leave_error_calculation','id'=>'leavetype')); ?>
			<?= Arr::get($error, 'leaveType'); ?>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-4 col-md-4 col-lg-4">
			<?php echo Form::label('duration', "Duration:"); ?>	
		</div>
		<div class="col-sm-8 col-md-8 col-lg-8">	
			<div id="find_duration">
				<?php echo Form::input('duration', null, array('class'=>'form-control')); ?>
			</div>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-4 col-md-4 col-lg-4">
			<?php echo Form::label('subsPerDesig', "Substitute Person Desig:"); ?>	
		</div>
		<div class="col-sm-8 col-md-8 col-lg-8">	
			<?php echo Form::select('subsPerDesig', array(''=>'--Select--','1'=>'Jr. Web Developer','2'=>'Sr. Web Developer','3'=>'Director'), null, array('class'=>'form-control')); ?>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-4 col-md-4 col-lg-4">
			<?php echo Form::label('subsPerName', "Substitute Person Name:"); ?>	
		</div>
		<div class="col-sm-8 col-md-8 col-lg-8">	
			<?php echo Form::select('subsPerName', array(''=>'--Select--','1'=>'Robeul','2'=>'Shamim','3'=>'Dilir'), null, array('class'=>'form-control')); ?>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-4 col-md-4 col-lg-4">
			
		</div>
		<div class="col-sm-8 col-md-8 col-lg-8">
			<?php echo Form::submit('save', 'Save', array('class'=>'btn btn-success')); ?>
		</div>
	</div>
<?= Form::close(); ?>	

</div>
<div class="col-sm-6 col-md-6 col-lg-6">
	<p style="color:red;">Note:</p>
	<p style="color:red;font-size:12px;font-style:italic;font-weight:bold;margin-bottom:3px;font-family:Sans-serif;">* Start And End Date must be in same year and in same quartile.</p>
	<p style="color:red;font-size:12px;font-style:italic;font-weight:bold;margin-bottom:3px;font-family:Sans-serif;">* End Date must be greater then or equal to Start Date.</p>
	<p style="color:red;font-size:12px;font-style:italic;font-weight:bold;margin-bottom:3px;font-family:Sans-serif;">* Previous Date are allowed only for sick leave.</p>
	<p style="color:red;font-size:12px;font-style:italic;font-weight:bold;margin-bottom:3px;font-family:Sans-serif;">* You have to Apply at least two days ago.</p>
	<p style="color:red;font-size:12px;font-style:italic;font-weight:bold;margin-bottom:3px;font-family:Sans-serif;">* Don't choose Holiday and weekend days for leave.</p>
</div>