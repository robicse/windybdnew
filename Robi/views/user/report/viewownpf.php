<div class="table-responsive">
	<table class="table table-bordered">
		<tbody>
			<tr>
				<th class="info" style="text-align:right;">NAME</th>
				<td style="text-align:left;"><? //echo $name=$rows->name;?></td>
			</tr>
			<tr>
				<th class="info" style="text-align:right;">BRANCH</th>
				<td style="text-align:left;"><? //echo $company_name=$rows->company_name;?></td>
			</tr>
			<tr>
				<th class="info" style="text-align:right;">DEPERTMENT</th>
				<td style="text-align:left;"><? //echo $dep_name=$rows->dep_name;?></td>
			</tr>
			<tr>
				<th class="info" style="text-align:right;">EMPLOYEE PREVIOUS BALANCE</th>
				<td style="text-align:left;"><? //echo $pre_balance_off=$rows->employeer_amount;?></td>
			</tr>
			<tr>
				<th class="info" style="text-align:right;">EMPLOYEER PREVIOUS BALANCE</th>
				<td style="text-align:left;"><? //echo $pre_balance_emp=$rows->employee_amount;?></td>
			</tr>
		</tbody>
	</table>
	<br><br>
	<table class="table table-bordered table-hover">
		<tr>
			<th class="info" style="text-align:right;">SL</th>
			<th class="info" style="text-align:right;">YEAR</th>
			<th class="info" style="text-align:right;">MONTH</th>
			<th class="info" style="text-align:right;">EMPLOYEE AMOUNT</th>
			<th class="info" style="text-align:right;">EMPLOYEER AMOUNT</th>
			<th class="info" style="text-align:right;">TOTAL PROVIDENT FUND AMOUNT</th>
		</tr>
		
		<tr>
			<td style="text-align:right;"><? //echo $i++;?></td>
			<td style="text-align:right;"><? //echo $year=$row1->year;?></td>
			<td style="text-align:right;"><? //echo $month=$row1->month;?></td>
			<td style="text-align:right;"><? //echo $employee_amount=$row1->employee_amount;?></td>
			<td style="text-align:right;"><? //echo $employeer_amount=$row1->employeer_amount;?></td>
			<td style="text-align:right;"><? //echo $total_pf=$row1->total_pf_amount;?></td>
		</tr>
		
		<tr>
			<td style="text-align:center;" colspan="3"><b>Total</b></td>
			<td style="text-align:right;"><b><?php //if($total_employee_amount){echo $total_employee_amount;}else{echo '0';}?></b></td>
			<td style="text-align:right;"><b><?php //if($total_employeer_amount){echo $total_employeer_amount;}else{echo '0';}?></b></td>
			<td style="text-align:right;"><b><?php //echo $total_pf_amount=($total_employee_amount+$total_employeer_amount);?></b></td>
		</tr>
		<tr>
			<td style="text-align:center;" colspan="3"><b>Grand Total</b></td>
			<td style="text-align:right;"><b><?php //echo $grand_total_employee_amount=($total_employee_amount+$pre_balance_off);?></b></td>
			<td style="text-align:right;"><b><?php //echo $grand_total_employeer_amount=($total_employeer_amount+$pre_balance_emp);?></b></td>
			<td style="text-align:right;"><b><?php //echo $grand_total_employeer_amount=($grand_total_employee_amount+$grand_total_employeer_amount);?></b></td>
		</tr>
	</table>
</div>