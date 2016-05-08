<p align="center">Year:<?php echo $year;?></p>
<p align="center">Month:<?php echo $month;?></p>

<?php echo Form::open('',array('method'=>'POST')); ?>
	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			
			<thead>
				<tr>
					<th class="info">SL No</th>
					<th class="info">Company</th>
					<th class="info">Department</th>
					<th class="info">Emp. Name</th>
					<th class="info">ID No</th>
					<th class="info">Arrear Amount</th>
					<th class="info">Remarks</th>
				</tr>
			</thead> 
			<?
				$i=1;
			?>
			<tbody>
				<tr>
					<td><? echo $i++; ?></td>
					<td><? echo $companyName;?></td>
					<td><? echo $departmentName;?><input type="hidden" value="<? echo $year;?>" name="year[]" /></td>
					<td><? //echo $row->name;?><input type="hidden" value="<? echo $month;?>" name="month[]" /></td>
					<td><? //echo $row->emp_id;?><input type="hidden" value="<? //echo $row->emp_id;?>" name="empid[]" /></td>
					<td><input type="text" name="amount[]" value="<? //echo $row->amount;?>"/></td>
					<td><input type="text" name="remarks[]" value="<? //echo $row->remarks;?>" /></td>
				</tr>
				
			</tbody>
			
		</table>
	</div>
	<?php echo Form::submit('save', 'Save', array('class'=>'btn btn-success')); ?>
<?= Form::close(); ?>