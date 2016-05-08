<h1><?= Arr::get($error, 'successful'); ?></h1>
<?php echo Form::open('hr_employeeinfo/createappraisal',array('method'=>'POST')); ?>
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
	<br/>
	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th style="text-align:center;" class="info">Status<span style="color:red">*</span></th>
					<th style="text-align:center;" class="info">Effective Date<span style="color:red">*</span></th>
					<th style="text-align:center;" class="info">Designation<span style="color:red">*</span></th>
					<th style="text-align:center;" class="info">Pay Scale<span style="color:red">*</span></th>
					<th style="text-align:center;" class="info">Note<span style="color:red">*</span></th>
					<th style="text-align:center;" class="info"></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<input type="text" id="status" name="status" value="" class="form-control" required />
					</td>
					<td>
						<input type="text" id="datepicker1" class="form-control" value="" name="effective_date" required>
					</td>
					<td>
						<input type="text" id="designation" name="designation" value="" class="form-control" required />
					</td>
					<td>
						<input type="text" id="pay_scale" name="pay_scale" value="" class="form-control" required />
					</td>
					<td>
						<input type="text" id="note" name="note" value="" class="form-control" required />
					</td>
					<td>
						<input type="submit" name="gen" value="Add" class="form-control addmore" />
						
					</td>
				</tr>
			</tbody>
		</table>
		
		<table class="table table-bordered table-striped table-condensed" id="tab">
			
			<tr>
				<th style="text-align:center;font-style:italic;">Status</th>
				<th style="text-align:center;font-style:italic;">Effective Date</th>
				<th style="text-align:center;font-style:italic;">Designation</th>
				<th style="text-align:center;font-style:italic;">Pay Scale</th>
				<th style="text-align:center;font-style:italic;">Note</th>
				<th>
					<input type="hidden" id="emp_id" name="emp_id" value="<?php //echo $row->emp_id; ?>" />
				</th> 
			</tr>
			
		</table>
	</div>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::submit('save', 'Save', array('class'=>'btn btn-success')); ?>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">
			
		</div>
	</div>
<?= Form::close(); ?>	
