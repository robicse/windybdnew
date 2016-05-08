<h1><?= Arr::get($error, 'successful'); ?></h1>
<?php echo Form::open('hr_employeeinfo/createemployeeotherinfo',array('method'=>'POST')); ?>
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
	<h4>Academic Info</h4>
	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th style="text-align:center;" class="info">Title of exam<span style="color:red">*</span></th>
					<th style="text-align:center;" class="info">Institute Name<span style="color:red">*</span></th>
					<th style="text-align:center;" class="info">Result<span style="color:red">*</span></th>
					<th style="text-align:center;" class="info">Passing Year<span style="color:red">*</span></th>
					<th style="text-align:center;" class="info">Note<span style="color:red">*</span></th>
					<th style="text-align:center;" class="info"></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<input type="text" name="aca_exam_title" id="aca_exam_title" class="form-control"  />
					</td>
					<td>
						<input type="text" name="aca_institute_name" id="aca_institute_name" class="form-control"  />
					</td>
					<td>
						<input type="text" name="aca_result" id="aca_result" class="form-control"  />
					</td>
					<td>
						<input type="text" name="aca_passing_year" id="aca_passing_year" class="form-control"  />
					</td>
					<td>
						<input type="text" name="aca_note" id="aca_note" class="form-control"  />
					</td>
					<td>
						<!--<input type="submit" name="gen" value="Add" class="form-control  addmore" />-->
						<a href="javascript:;" class="addmore">add</a>
					</td>
				</tr>
			</tbody>
		</table>
		
		<table class="table table-bordered table-striped table-condensed" id="tab">
			<thead>
				<tr>
					<th style="text-align:center;font-style:italic;">Title of exam</th>
					<th style="text-align:center;font-style:italic;">Institute Name</th>
					<th style="text-align:center;font-style:italic;">Result</th>
					<th style="text-align:center;font-style:italic;">Passing Year</th>
					<th style="text-align:center;font-style:italic;">Note</th>
					<th><input type="hidden" id="emp_id" name="emp_id" value="<?php //echo $row->emp_id; ?>" /></th>
			  </tr>
			</thead>
		</table>
	</div>
	<br/>
	
	<h4>Extra Qualification</h4>
						
	<div class="table-responsive">
		<fieldset>
			<table class="table table-bordered ">
				<thead>
					<tr>
						<th style="text-align:center;">Title of exam<span style="color:red;">*</span></th>
						<th style="text-align:center;">Institute Name<span style="color:red;">*</span></th>
						<th style="text-align:center;">Result<span style="color:red;">*</span></th>
						<th style="text-align:center;">Passing Year<span style="color:red;">*</span></th>
						<th style="text-align:center;">Note<span style="color:red;">*</span></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<input type="text" name="qua_exam_title" id="qua_exam_title" class="form-control" />
						</td>
						<td>
							<input type="text" name="qua_institute_name" id="qua_institute_name" class="form-control"  />
						</td>
						<td>
							<input type="text" name="qua_result" id="qua_result" class="form-control"  />
						</td>
						<td>
							<input type="text" name="qua_passing_year" id="qua_passing_year" class="form-control"  />
						</td>
						<td>
							<input type="text" name="qua_note" id="qua_note" class="form-control"  />
						</td>
						<td>
							
							<a href="javascript:;" class="AddmoreQua">add</a>
						</td>
					</tr>
				</tbody>
			</table>
			
				
			<table class="table table-bordered table-striped table-condensed" id="tabQua">
				<thead>
					<tr>
						<th style="text-align:center;font-style:italic;">Title of exam</th>
						<th style="text-align:center;font-style:italic;">Institute Name</th>
						<th style="text-align:center;font-style:italic;">Result</th>
						<th style="text-align:center;font-style:italic;">Passing Year</th>
						<th style="text-align:center;font-style:italic;">Note</th>
						<th><input type="hidden" id="emp_id" name="emp_id" value="<?php //echo $row->emp_id; ?>" /></th>
				  </tr>
				</thead>
			</table>
				
				

		</fieldset>
	</div>
	<br/>
	
	<h4>Career History</h4>
						
	<div class="table-responsive">
		<fieldset>
			<table class="table table-bordered ">
				<thead>
					<tr>
						<th style="text-align:center;">Company Name<span style="color:red;">*</span></th>
						<th style="text-align:center;">Designation<span style="color:red;">*</span></th>
						<th style="text-align:center;">From<span style="color:red;">*</span></th>
						<th style="text-align:center;">To<span style="color:red;">*</span></th>
						<th style="text-align:center;">Note<span style="color:red;">*</span></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<input type="text" name="car_company_name" id="car_company_name" class="form-control" />
						</td>
						<td>
							<input type="text" name="car_designation" id="car_designation" class="form-control"  />
						</td>
						<td>
							<input type="text" name="car_from" id="car_from" class="form-control"  />
						</td>
						<td>
							<input type="text" name="car_to" id="car_to" class="form-control"  />
						</td>
						<td>
							<input type="text" name="car_note" id="car_note" class="form-control"  />
						</td>
						<td>
							
							<a href="javascript:;" class="AddmoreCar">add</a>
						</td>
					</tr>
				</tbody>
			</table>
			
				
			<table class="table table-bordered table-striped table-condensed" id="tabCar">
				<thead>
					<tr>
						<th style="text-align:center;font-style:italic;">Company Name</th>
						<th style="text-align:center;font-style:italic;">Designation</th>
						<th style="text-align:center;font-style:italic;">From</th>
						<th style="text-align:center;font-style:italic;">To</th>
						<th style="text-align:center;font-style:italic;">Note</th>
						<th><input type="hidden" id="emp_id" name="emp_id" value="<?php //echo $row->emp_id; ?>" /></th>
				  </tr>
				</thead>
			</table>
				
				

		</fieldset>
	</div>
	
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::submit('save', 'Save', array('class'=>'btn btn-success')); ?>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">
			
		</div>
	</div>
<?= Form::close(); ?>	
