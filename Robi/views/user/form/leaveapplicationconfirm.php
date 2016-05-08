<p style="font-size:14px;font-family:sans-serif;">Your remaining leave days in This Quarter is <? //echo $qid; ?>. You applied for '<? //echo $duration; ?>' Days extra leave.</p>
<br />
<p style="font-size:14px;font-family:sans-serif;">If you want to Apply for <? //echo $duration; ?> Days leave By Without pay Please select without pay from the dropdown and submit your application.</p>
<p style="font-size:14px;font-family:sans-serif;">Otherwise if your are not agree to apply please select not apply and click submit.</p><br/>

<?php echo Form::open('',array('method'=>'POST')); ?>
	<div class="row">
		<div class="col-sm-4 col-md-4 col-lg-4">	
			<?php echo Form::select('paytype', array('2'=>'Without Pay','3'=>'Not Apply'), null, array('class'=>'form-control')); ?>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-4 col-md-4 col-lg-4">
			<?php echo Form::submit('save', 'Save', array('class'=>'btn btn-success')); ?>
		</div>
	</div>
<?= Form::close(); ?>	
