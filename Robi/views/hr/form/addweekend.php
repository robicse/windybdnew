
<h1><?= Arr::get($error, 'successful'); ?></h1>
<?php echo Form::open($formLink,array('method'=>'POST')); ?>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::label('departmentId', "Department Name:"); ?>	
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?php echo Form::select('departmentId', $departmentId, $departmentValue, array('class'=>'form-control')); ?>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?= Arr::get($error, 'departmentId'); ?>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::label('weekendDate', "Weekend Date:"); ?>	
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?php echo Form::input('weekendDate', $weekendDate, array('class'=>'form-control','id'=>'datepicker1')); ?>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?= Arr::get($error, 'weekendDate'); ?>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::label('weekendDay', "Weekend Day:"); ?>	
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?php echo Form::select('weekendDay', array(''=>'--Select--','Saturday'=>'Saturday','Sunday'=>'Sunday','Monday'=>'Monday','Tuesday'=>'Tuesday','Wednesday'=>'Wednesday','Thursday'=>'Thursday','Friday'=>'Friday'), $weekendDay, array('class'=>'form-control')); ?>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?= Arr::get($error, 'weekendDate'); ?>
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

<h3>View Weekend List</h3>
<div class="table-responsive">
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th class="info">SL No</th>
				<th class="info">Department Name</th>
				<th class="info">Weekend Date</th>
				<th class="info">Weekend Day</th>
				<th class="info" colspan="2">Action</th>
			</tr>
		</thead>
		
		<tbody>
			<?php
				$i=1;
				
				foreach($weekendList as $weekend) 
				{ 
			?>
			<tr>
				<td><?php echo $i++;?></td>
				<td><?php echo $weekend->departmentName;?></td>
				<td><?php echo $weekend->weekendDate;?></td>
				<td><?php echo $weekend->weekendDay;?></td>
				<td><a class="tooltips" data-original-title="Edit" href="<?php URL::base();?>hr_settings/editweekend/<?php echo $weekend->id;?>" onclick="return confirm('Are you sure want to do it?')"><span class="btn btn-primary btn-xs"><i class="fa fa-pencil">Edit</i></span></a></td>
				<td><a class="tooltips" data-original-title="Delete" href="<?php URL::base();?>hr_settings/deleteweekend/<?php echo $weekend->id;?>" onclick="return confirm('Are you sure want to do it?')"><span class="btn btn-danger btn-xs"><i class="fa fa-trash-o">Delete</i></span></a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>