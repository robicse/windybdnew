<div class="table-responsive">
	<table class="table table-bordered" align="center" border="1" width="60%" cellpadding="2" class="mytable" cellspacing="0">
		<tbody>
			<tr>
				<th colspan='2' style="text-align:right;">
					<img src="assets/images/logo1.png" alt="img_pro">
				</th>
			</tr>
			<tr>
				<th style="text-align:center;" colspan='2'>Pay slip</th>
			</tr>
			<tr>
				<th style="text-align:center;" colspan='2'>Private & Confidential</th>
			</tr>
			<tr>
				<th>PAYSLIP FOR THE MONTH OF</th>
				<th>
					<? 
						echo $month; 
					?>
					<? 
						echo $year;
					?>
				</th>
			</tr>
			<tr>
				<th>Name of Employee</th>
				<th><? echo $name?></th>
			</tr>
			<tr>
				<th>Designation</th>
				<th><? //echo $rows->tx_designation?></th>
			</tr>
			<tr>
				<th>Gross Salary</th>
				<th>BDT <?php //if($gross_salary){echo $gross_salary;}else{echo '0';}?></th>
			</tr>
			<tr>
				<th>Joining Date</th>
				<th><? //echo $rows->join_date?></th>
			</tr>
			<tr>
				<th>Bank Name</th>
				<th><? //echo $rows->bank_name?></th>
			</tr>
			<tr>
				<th>Account No</th>
				<th><? //echo $rows->acc_no?></th>
			</tr>

		</tbody>
	</table>
	<table class="table table-bordered" align="center" border="1" width="60%" cellpadding="2" class="mytable" cellspacing="0">
		<tbody>
			<tr class="info">
				<th>PAYMENT HEADS</th>
				<th>AMOUNT</th>
				<th>PAYMENT HEADS</th>
				<th>AMOUNT</th>
			</tr>
			<tr>
				<td>Basic Salary</td>
				<td style="text-align:right;">BDT <?php //if($basic){echo $basic;}else{echo '0';}?></td>
				<td>PF Contribution (Office+Employee)</td>
				<td style="text-align:right;">BDT <?php //if($total_pf){echo $total_pf;}else{echo '0';}?></td>
			</tr>
			<tr>
				<td>House Rent Allowance (60%)</td>
				<td style="text-align:right;">BDT <?php //if($house_rent){echo $house_rent;}else{echo '0';}?></td>
				<td>Adjustment ( Absent )</td>
				<td style="text-align:right;">BDT <?php //if($absent_deduction){echo $absent_deduction;}else{echo '0';}?></td>
			</tr>
			<tr>
				<td>Medical Allowance (20%)</td>
				<td style="text-align:right;">BDT <?php //if($medical){echo $medical;}else{echo '0';}?></td>
				<td>Advance Adjustment (I.O.U)</td>
				<td style="text-align:right;">BDT <?php //if($advance){echo $advance;}else{echo '0';}?></td>
			</tr>
			<tr>
				<td>Conveyance Allowance (10%)</td>
				<td style="text-align:right;">BDT <?php //if($transport){echo $transport;}else{echo '0';}?></td>
				<td>Loan Adjustment (negative)</td>
				<td style="text-align:right;">BDT <?php //if($loan){echo $loan;}else{echo '0';}?></td>
			</tr>
			<tr>
				<td>Special Allowance (10%)</td>
				<td style="text-align:right;">BDT <?php //if($special){echo $special;}{echo '0';}?></td>
				<td>Tax Deducted at Source</td>
				<td style="text-align:right;">BDT <?php //if($tax){echo $tax;}else{echo '0';}?></td>
			</tr>
			<tr>
				<td>PF Contribution (Windmill-10%)</td>
				<td style="text-align:right;">BDT <?php //if($pf_info_amo){echo $pf_info_amo;}else{echo '0';}?></td>
				<td>KPI</td>
				<td style="text-align:right;">BDT <?php //if($kpi_de){echo $kpi_de;}else{echo '0';}?></td>
			</tr>
			<tr>
				<td>Arrear</td>
				<td style="text-align:right;">BDT <?php //if($arrear_amount){echo $arrear_amount;}else{echo '0';}?></td>
				<td></td>
				<td style="text-align:right;"></td>
			</tr>
			<tr>
				<td>Mobile Allowance ( Fixed )</td>
				<td style="text-align:right;">BDT <?php //if($mo_bill){echo $mo_bill;}else{echo '0';}?></td>
				<td></td>
				<td style="text-align:right;"></td>
			</tr>
			<tr>
				<td>Half Yearly Bonus</td>
				<td style="text-align:right;">BDT 0</td>
				<td></td>
				<td style="text-align:right;"></td>
			</tr>
			<tr>
				<td>KPI/Performance</td>
				<td style="text-align:right;">BDT <? //if($kpi_amount){echo $kpi_amount;}else{echo '0';}?></td>
				<td></td>
				<td style="text-align:right;"></td>
			</tr>
			<tr>
				<td>OT</td>
				<td style="text-align:right;">BDT <? //if($ot_amount){echo $ot_amount;}else{echo '0';}?></td>
				<td></td>
				<td style="text-align:right;"></td>
			</tr>
			<tr>
				<td style="text-align:center;background-color:#CCCCCC;">Total Gross Pay</td>
				<td style="text-align:right;">BDT <?php //if($gross_payable){echo $gross_payable;}?></td>
				<td style="text-align:center;">Total Deduction</td>
				<td style="text-align:right;">BDT <? //if($total_deduction){echo $total_deduction;}else{echo '0';}?></td>
			</tr>
			<tr>
				<td colspan='2' style="text-align:center;background-color:#CCCCCC;">Net Amount Transferred By <? //if($pay_mode=='0'){echo 'Cash';}else{echo 'Bank';}?></td>
				<td colspan='2' style="text-align:center;">BDT <? //if($net_amount){echo $net_amount;}else{echo '0';}?></td>
			</tr>
			<tr>
				<td colspan='4' style="text-align:center;background-color:#CCCCCC;">
					<p align="left" style="font-size:11px;">Note 1 : For Any clarification please contact sharif@windmill.com.bd</p>
					<p align="left" style="font-size:11px;">Note 2 : This is a system generated report and requires no manual signature.</p>
				</td>
			</tr>
		</tbody>
	</table>
</div>