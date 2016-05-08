<?php echo Form::open($formLink,array('method'=>'POST')); ?>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::label('empNameId', "Employee Name:"); ?>	
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?php echo Form::select('empNameId', $empNameId, $empNameValue, array('class'=>'form-control','id'=>'empNameToId')); ?>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?= Arr::get($error, 'empNameId'); ?>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::label('empId', "Employee ID:"); ?>	
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<div id="empIdDiv">
				<?php echo Form::select('empId', null, null, array('class'=>'form-control','id'=>'showEmpNameId')); ?>
			</div>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?= Arr::get($error, 'empId'); ?>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::label('documentTitle', "Document Title:"); ?>	
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?php echo Form::input('documentTitle', $documentTitle, array('class'=>'form-control')); ?>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?= Arr::get($error, 'documentTitle'); ?>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::label('attachDocument', "Attach Document:"); ?>	
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?= Form::input('attachDocument','',array('id'=>'Document', 'type' => 'file')); ?>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?= Arr::get($error, 'attachDocument'); ?>
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

<h3>View Employee Document</h3>
<div class="table-responsive">
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th class="info">SL No</th>
				<th class="info">Employee Name</th>
				<th class="info">Employee ID</th>
				<th class="info">Employee Document</th>
				<th class="info" colspan="2">Action</th>
			</tr>
		</thead>
		
		<tbody>
			<?php
				$i=1;
				
				//foreach($companyList as $company) 
				//{
			?>
			<!--<tr>
				<td><?php //echo $i++;?></td>
				<td></td>
				<td></td>
				<td></td>
				<td><a class="tooltips" data-original-title="Edit" href="<?php URL::base();?>hr_settings/editcompany/<?php //echo $company->id;?>" onclick="return confirm('Are you sure want to do it?')"><span class="btn btn-primary btn-xs"><i class="fa fa-pencil">Edit</i></span></a></td>
				<td><a class="tooltips" data-original-title="Delete" href="<?php URL::base();?>hr_settings/deletecompany/<?php //echo $company->id;?>" onclick="return confirm('Are you sure want to do it?')"><span class="btn btn-danger btn-xs"><i class="fa fa-trash-o">Delete</i></span></a></td>
			</tr>-->
				<?php //} ?>
		</tbody>
	</table>
</div>
