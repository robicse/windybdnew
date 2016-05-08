<div class="table-responsive">
	<table class="table table-bordered" align="center" border="1" width="60%" cellpadding="2" class="mytable" cellspacing="0">
		<tbody>
			<tr>
				<th class="info">SL No</th>
				<th class="info">Company</th>
				<th class="info">Department</th>
				<th class="info">Emp ID No</th>
				<th class="info">Name</th>
				<th class="info">Loan Issue Date</th>
				<th class="info">Loan Amount</th>
				<th class="info">Monthly Installment</th>
				<th class="info">Deduct</th>
				<th class="info">Remain</th>
				<th class="info">Remarks</th>
			</tr>
		
		<?
			$i=1;
			/* while($row=$obj->fetch($sql))
			{ */
		?>
		
			<tr>
				<td><? echo $i++; ?></td>
				<td><? echo $companyName;?></td>
				<td><? echo $departmentName;?></td>
				<td><? //echo $row->emp_id;?></td>
				<td><? //echo $row->name;?></td>
				<td><? //echo $row->issue_date;?></td>
				<td><? //echo $row->loan_amount;?></td>
				<td><? //echo $row->monthly_installment;?></td>
				<td><? ?></td>
				<td><? ?></td>
				<td><? ?></td>
			</tr>
		</tbody>
		<? /* } */?>
	</table>
</div>