<div class="table-responsive">
	<table class="table table-bordered" align="center" border="1" width="60%" cellpadding="2" class="mytable" cellspacing="0">
		
		<thead>
			<tr>
				<th class="info" style="text-align:right;">Name</th>
				<td style="text-align:left;"><? echo $name; ?></td>
			</tr>
			<tr>
				<th class="info" style="text-align:right;">SBU</th>
				<td style="text-align:left;"><? //echo $company_name=$row->company_name;?></td>
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
	
	<br />
	
	<table class="table table-bordered table-hover" align="center" border="1" width="60%" cellpadding="2" class="mytable" cellspacing="0">
		
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
			/* $sql1=$obj->select("pf_amount where emp_id='$emp_id' and year='$year' and month='$month'","year,month,employee_amount,employeer_amount,total_pf_amount");
			$i=1;
			while($row1=$obj->fetch($sql1))
			{ */
		$i=1;
		?>
			<tr>
				<td style="text-align:right;"  colspan="2"><? echo $i++;?></td>
				<td style="text-align:right;" colspan="3"><? echo $year;?></td>
				<td style="text-align:right;" colspan="3"><? echo $month;?></td>
				<td style="text-align:right;" colspan="5"><?// echo $employee_amount=$row1->employee_amount;?></td>
				<td style="text-align:right;" colspan="5"><? //echo $employeer_amount=$row1->employeer_amount;?></td>
				<td style="text-align:right;" colspan="5"><? //echo $total_pf_amount=$row1->total_pf_amount;?></td>
			</tr>
			<?
				/* $total_employee_amount += $employee_amount;
				$total_employeer_amount += $employeer_amount;
			} */
			?>
			<tr>
				<td style="text-align:center;" colspan="8"><b>Total</b></td>
				<td style="text-align:right;" colspan="5"><b><? //echo $total_employee_amount;?></b></td>
				<td style="text-align:right;" colspan="5"><b><? //echo $total_employeer_amount;?></b></td>
				<td style="text-align:right;" colspan="5"><b><? //echo $final_total_pf_amount =($total_employee_amount+$total_employeer_amount);?></b></td>
			</tr>
			<tr>
				<td style="text-align:center;" colspan="8"><b>Grand Total</b></td>
				<td style="text-align:right;" colspan="5"><b><? //echo $grand_employee_amount=($total_employee_amount+$employee_pre_bal);?></b></td>
				<td style="text-align:right;" colspan="5"><b><? //echo $grand_employeer_amount=($total_employeer_amount+$employeer_pre_bal);?></b></td>
				<td style="text-align:right;" colspan="5"><b><? //echo $grand_final_total_pf_amount=($grand_employee_amount+$grand_employeer_amount);?></b></td>
			</tr>
			
		</tbody>
		
	</table>
</div>