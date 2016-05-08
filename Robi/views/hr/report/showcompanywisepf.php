<div class="table-responsive">
	<?
		/* while($row=$obj->fetch($sql))
		{ */
	?>
		<table class="table table-bordered" align="center" border="1" width="680px" cellpadding="2" class="mytable" cellspacing="0">
			
			<thead>
				<tr>
					<th class="info" style="text-align:right;">Name</th>
					<td style="text-align:left;"><? //echo $name=$row->name; ?></td>
				</tr>
				<tr>
					<th class="info" style="text-align:right;">Company</th>
					<td style="text-align:left;"><? echo $companyName;?></td>
				</tr>
				<tr>
					<th class="info" style="text-align:right;">Department</th>
					<td style="text-align:left;"><? //echo $dep_name=$row->dep_name;?></td>
				</tr>
				<tr>
					<th class="info" style="text-align:right;">Employee Previous Balance</th>
					<td style="text-align:left;"><? //echo $employee_pre_bal=$row->employee_pre_bal;?></td>
				</tr>
				<tr>
					<th class="info" style="text-align:right;">Employeer Previous Balance</th>
					<td style="text-align:left;"><? //echo $employeer_pre_bal=$row->employeer_pre_bal;?></td>
				</tr>
			</thead>	
			
		</table>
	<?
		/* $sum_pre_balance_off += $employeer_pre_bal;
		$sum_pre_balance_emp += $employee_pre_bal;
		echo '<br>';
		} */
		//echo $total_pre_balance_off;
	?>

	</div>
	<br />
	<div class="table-responsive">
		<table class="table table-bordered" align="center" border="1" width="680px" cellpadding="2" class="mytable" cellspacing="0">
			
			<thead>
				<tr>
					<th class="info" style="text-align:right;"  colspan="2">SL</th>
					<th class="info" style="text-align:right;" colspan="3">Year</th>
					<th class="info" style="text-align:right;" colspan="3">Month</th>
					<th class="info" style="text-align:right;" colspan="5">Employee Amount</th>
					<th class="info" style="text-align:right;" colspan="5">Employeer Amount</th>
					<th class="info" style="text-align:right;" colspan="5">Total Provident Fund Amount</th>
				</tr>
			</thead>	
			<tbody>
			
			<?
				/* $sql1=$obj->select("pf_amount
inner join employeeinfo on pf_amount.emp_id=employeeinfo.emp_id
inner join emp_offipro on employeeinfo.emp_id=emp_offipro.emp_id
where emp_offipro.id_com_id='$id_com_id' and pf_amount.year='$year' and pf_amount.month='$month'","pf_amount.year,pf_amount.month,pf_amount.employee_amount,pf_amount.employeer_amount,pf_amount.total_pf_amount");
				$i=1;
				while($row1=$obj->fetch($sql1))
				{ */
			$i=1;
			?>
				<tr>
					<td style="text-align:right;"  colspan="2"><? echo $i++;?></td>
					<td style="text-align:right;" colspan="3"><? echo $year;?></td>
					<td style="text-align:right;" colspan="3"><? echo $month;?></td>
					<td style="text-align:right;" colspan="5"><? //echo $employee_amount=$row1->employee_amount;?></td>
					<td style="text-align:right;" colspan="5"><? //echo $employeer_amount=$row1->employeer_amount;?></td>
					<td style="text-align:right;" colspan="5"><? //echo $total_pf_amount=$row1->total_pf_amount;?></td>
				</tr>
				<?
					/* $sum_employee_amount += $employee_amount;
					$sum_employeer_amount += $employeer_amount;
				} */
				?>
				<tr>
					<td style="text-align:center;" colspan="8"><b>Total</b></td>
					<td style="text-align:right;" colspan="5"><b><? //echo $sum_employee_amount;?></b></td>
					<td style="text-align:right;" colspan="5"><b><? //echo $sum_employeer_amount;?></b></td>
					<td style="text-align:right;" colspan="5"><b><? //echo $final_total_pf_amount =($sum_employee_amount+$sum_employeer_amount);?></b></td>
				</tr>
				<tr>
					<td style="text-align:center;" colspan="8"><b>Grand Total</b></td>
					<td style="text-align:right;" colspan="5"><b><? //echo $grand_employee_amount=($sum_pre_balance_emp+$sum_employee_amount);?></b></td>
					<td style="text-align:right;" colspan="5"><b><? //echo $grand_employeer_amount=($sum_pre_balance_off+$sum_employeer_amount);?></b></td>
					<td style="text-align:right;" colspan="5"><b><? //echo $grand_final_total_pf_amount=($grand_employee_amount+$grand_employeer_amount);?></b></td>
				</tr>
				
			</tbody>
			
		</table>
		
	</div>