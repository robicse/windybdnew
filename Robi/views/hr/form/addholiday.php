<h1><?= Arr::get($error, 'successful'); ?></h1>
<?php echo Form::open($formLink,array('method'=>'POST')); ?>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::label('holidayDate', "Holiday Date:"); ?>	
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?php echo Form::input('holidayDate', $holidayDate, array('class'=>'form-control','id'=>'datepicker1')); ?>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?= Arr::get($error, 'holidayDate'); ?>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::label('description', "Description:"); ?>	
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?php echo Form::textarea('description', $description, array('class'=>'form-control','rows'=>'5')); ?>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?= Arr::get($error, 'description'); ?>
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

<h3>View Holiday List</h3>
<div class="table-responsive">
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th class="info">SL No</th>
				<th class="info">Holiday Date</th>
				<th class="info">Description</th>
				<th class="info" colspan="2">Action</th>
			</tr>
		</thead>
		
		<tbody>
			<?php
				$i=1;
				
				foreach($holidayList as $holiday) 
				{
			?>
			<tr>
				<td><?php echo $i++;?></td>
				<td><?php echo $holiday->holidayDate;?></td>
				<td><?php echo $holiday->description;?></td>
				<td><a class="tooltips" data-original-title="Edit" href="<?php URL::base();?>hr_settings/editholiday/<?php echo $holiday->id;?>" onclick="return confirm('Are you sure want to do it?')"><span class="btn btn-primary btn-xs"><i class="fa fa-pencil">Edit</i></span></a></td>
				<td><a class="tooltips" data-original-title="Delete" href="<?php URL::base();?>hr_settings/deleteholiday/<?php echo $holiday->id;?>" onclick="return confirm('Are you sure want to do it?')"><span class="btn btn-danger btn-xs"><i class="fa fa-trash-o">Delete</i></span></a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>