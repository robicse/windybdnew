
<h1><?= Arr::get($error, 'successful'); ?></h1>
<?php echo Form::open($formLink,array('method'=>'POST')); ?>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::label('attendanceRuleName', "Rule Name:"); ?>	
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?php echo Form::input('attendanceRuleName', $attendanceRuleName, array('class'=>'form-control')); ?>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?= Arr::get($error, 'attendanceRuleName'); ?>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::label('startTime', "Start Time:"); ?>	
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?php echo Form::input('startTime', $startTime, array('class'=>'form-control','id'=>'timepicker1')); ?>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?= Arr::get($error, 'startTime'); ?>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::label('lateTime', "Late Time:"); ?>	
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?php echo Form::input('lateTime', $lateTime, array('class'=>'form-control','id'=>'timepicker2')); ?>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?= Arr::get($error, 'lateTime'); ?>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::label('endTime', "End Time:"); ?>	
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?php echo Form::input('endTime', $endTime, array('class'=>'form-control','id'=>'timepicker3')); ?>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?= Arr::get($error, 'endTime'); ?>
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

<h3>View Attendance Rule</h3>
<div class="table-responsive">
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th class="info">SL No</th>
				<th class="info">Rule Name</th>
				<th class="info">Start Time</th>
				<th class="info">Late Time</th>
				<th class="info">End Time</th>
				<th class="info" colspan="2">Action</th>
			</tr>
		</thead>
		
		<tbody>
			<?php
				$i=1;
				foreach($attendanceruleList as $attendancerule) 
				{ 
			?>
			<tr>
				<td><?php echo $i++;?></td>
				<td><?php echo $attendancerule->attendanceRuleName;?></td>
				<td><?php echo $attendancerule->startTime;?></td>
				<td><?php echo $attendancerule->lateTime;?></td>
				<td><?php echo $attendancerule->endTime;?></td>
				<td><a class="tooltips" data-original-title="Edit" href="<?php URL::base();?>hr_attendance/editattendancerule/<?php echo $attendancerule->id;?>" onclick="return confirm('Are you sure want to do it?')"><span class="btn btn-primary btn-xs"><i class="fa fa-pencil">Edit</i></span></a></td>
				<td><a class="tooltips" data-original-title="Delete" href="<?php URL::base();?>hr_attendance/deleteattendancerule/<?php echo $attendancerule->id;?>" onclick="return confirm('Are you sure want to do it?')"><span class="btn btn-danger btn-xs"><i class="fa fa-trash-o">Delete</i></span></a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>

