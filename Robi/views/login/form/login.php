<h1><?= Arr::get($error, 'successful'); ?></h1>
<?php echo Form::open('',array('method'=>'POST')); ?>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::label('username', "User Name:"); ?>	
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?php echo Form::input('username', $username, array('class'=>'form-control')); ?>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?= Arr::get($error, 'username'); ?>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<?php echo Form::label('password', "Password:"); ?>	
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?php echo Form::input('password', $password, array('class'=>'form-control')); ?>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?= Arr::get($error, 'password'); ?>
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