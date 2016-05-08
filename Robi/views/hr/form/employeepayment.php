<a class="btn btn-info" href="hr_employeeinfo/createemployeegeneralinfo">General Info</a> 
<a class="btn btn-info" href="hr_employeeinfo/createemployeeofficialprofileinfo">Employee official Profile</a>
<a class="btn btn-info" href="hr_employeeinfo/createemployeepfinfo">Employee PF Info</a>
<a class="btn btn-info active" href="hr_employeeinfo/createemployeepaymentinfo">Employee payment mode</a>
<a class="btn btn-info" href="hr_employeeinfo/createemployeelogininfo">Emp Login Info</a>

<h3 class="mb">Create Payment Info</h3>

<h1><?= Arr::get($error, 'successful'); ?></h1>
<?php echo Form::open($formLink,array('method'=>'POST')); ?>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::label('mobileBill', "Mobile Bill:"); ?>	
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?php echo Form::input('mobileBill', $mobileBill, array('class'=>'form-control')); ?>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?= Arr::get($error, 'mobileBill'); ?>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::label('taxDeduction', "Tax Deduction:"); ?>	
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?php echo Form::select('taxDeduction', array(''=>'--Select--','0'=>'No','1'=>'Yes'), null, array('class'=>'form-control')); ?>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?= Arr::get($error, 'taxDeduction'); ?>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::label('taxAmount', "Tax Amount:"); ?>	
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?php echo Form::input('taxAmount', $taxAmount, array('class'=>'form-control')); ?>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?= Arr::get($error, 'taxAmount'); ?>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::label('paymentMode', "Payment Mode:"); ?>	
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?php echo Form::radio('paymentMode', 0, '',array('id'=>'cash_payment','required'=>'true')); ?>&nbsp Cash
			<?php echo Form::radio('paymentMode', 1,'',array('id'=>'bank_payment')); ?>&nbsp Bank
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?= Arr::get($error, 'paymentMode'); ?>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::label('bankName', "Bank Name:"); ?>	
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<div id="showbank" class="bankToBranch">
				
			</div>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::label('branchName', "Branch Name:"); ?>	
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<div id="showbranch" class="branchToAcc"></div>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::label('accountNo', "Account NO:"); ?>	
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<div id="accountno"></div>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::label('customSalaryPacakge', "Custom Salary Package:"); ?>	
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?php echo Form::checkbox('customSalaryPacakge', 1, '',array('id'=>'package','required'=>'true')); ?>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?= Arr::get($error, 'mobileBill'); ?>
		</div>
	</div>
	<br/>
	<div class="show_salary_package" style="display:none;">
		<div class="row">
			<div class="col-sm-2 col-md-2 col-lg-2">
				<?php echo Form::label('basic', "Basic:"); ?>	
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">	
				<?php echo Form::input('basic', '', array('class'=>'form-control')); ?>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">	
				<?= Arr::get($error, 'basic'); ?>
			</div>
		</div>
		<br/>
		<div class="row">
			<div class="col-sm-2 col-md-2 col-lg-2">
				<?php echo Form::label('houseRent', "House Rent:"); ?>	
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">	
				<?php echo Form::input('houseRent', '', array('class'=>'form-control')); ?>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">	
				<?= Arr::get($error, 'houseRent'); ?>
			</div>
		</div>
		<br/>
		<div class="row">
			<div class="col-sm-2 col-md-2 col-lg-2">
				<?php echo Form::label('medical', "Medical:"); ?>	
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">	
				<?php echo Form::input('medical', '', array('class'=>'form-control')); ?>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">	
				<?= Arr::get($error, 'medical'); ?>
			</div>
		</div>
		<br/>
		<div class="row">
			<div class="col-sm-2 col-md-2 col-lg-2">
				<?php echo Form::label('transport', "Transport:"); ?>	
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">	
				<?php echo Form::input('transport', '', array('class'=>'form-control')); ?>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">	
				<?= Arr::get($error, 'transport'); ?>
			</div>
		</div>
		<br/>
		<div class="row">
			<div class="col-sm-2 col-md-2 col-lg-2">
				<?php echo Form::label('special', "Special:"); ?>	
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">	
				<?php echo Form::input('special', '', array('class'=>'form-control')); ?>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">	
				<?= Arr::get($error, 'special'); ?>
			</div>
		</div>
		<br/>
		<div class="row">
			<div class="col-sm-2 col-md-2 col-lg-2">
				<?php echo Form::label('salaryStep', "Salary Step:"); ?>	
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">	
				<?php echo Form::input('salaryStep', '', array('class'=>'form-control')); ?>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">	
				<?= Arr::get($error, 'salaryStep'); ?>
			</div>
		</div>
		<br/>
		<div class="row">
			<div class="col-sm-2 col-md-2 col-lg-2">
				<?php echo Form::label('salaryBand', "Salary Band:"); ?>	
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">	
				<?php echo Form::input('salaryBand', '', array('class'=>'form-control')); ?>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">	
				<?= Arr::get($error, 'salaryBand'); ?>
			</div>
		</div>
		<br/>
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
