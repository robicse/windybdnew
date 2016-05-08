<p style="text-align:center;font-weight:bold;font-size:15px;"><? echo $companyName;?></p>
<p style="text-align:center;font-weight:bold; font-size:12px;">Salary Sheet of <? echo $month;?> ,<? echo $year;?></p>
<p style="text-align:center;font-weight:bold;font-size:15px;">Department : <? echo $departmentName;?></p>
<div class="table-responsive">
	<div class="screen-tree">
		<table class="table table-bordered table-striped" align="center" border="1" width="100%">
			<thead>
				<tr>
					<th style="text-align:center;" rowspan="2">SL No</th>
					<th style="text-align:center;" rowspan="2">Name</th>	
					<th style="text-align:center;" rowspan="2">Deg</th>

					<th style="text-align:center;" colspan="13">Gross Salary</th>                                       
					
					<th style="text-align:center;"  rowspan="2">Present</th>                     
					<th style="text-align:center;" rowspan="2">Late</th>                     
					<th style="text-align:center;"  rowspan="2">Absent</th>

					<th style="text-align:center;" colspan="7">Deduction</th>

					<th style="text-align:center;" rowspan="2">Net Payable</th>
					<th style="text-align:center;" rowspan="2">P.M</th>
				</tr>
				<tr>
					<th style="text-align:center;">Gross</th> 
					<th style="text-align:center;">Basic</th>                     
					<th style="text-align:center;">H.Rent</th>
					<th style="text-align:center;">Med</th>
					<th style="text-align:center;">Transport</th>
					<th style="text-align:center;">Special</th>                    
					<th style="text-align:center;">Arrear</th>
					<th style="text-align:center;">Kpi</th>
					<th style="text-align:center;">M.Bill</th>
					<th style="text-align:center;">PF</th>                   
					<th style="text-align:center;">Yearly Bonus</th>                   
					<th style="text-align:center;">Ot</th>                   
					<th style="text-align:center;">G.Payable</th>
					
					<td style="text-align:center;">PF<br>(office+Emp)</td>                     
					<td style="text-align:center;">Absent</td>                     
					<td style="text-align:center;">Loan</td>                     
					<td style="text-align:center;">Advance</td>
					<td style="text-align:center;">TDS</td>
					<td style="text-align:center;">KPI</td>
					<td style="text-align:center;">T.Ded</td>
				</tr>
			</thead>
			<?
				/* $bank=$obj->Bank_Sheet($id_com_id,$id_dept_id,$year,$month,$pay_mode);
				$allbank=$bank['alldata'];
				$cnt=sizeof($allbank);
				$j=1;
				
				if($cnt>5)
				{
					$count=6;
				}
				else
				{
					$count=$cnt;
				}
				
				for($i=0;$i<$count; $i++)
				{
					$allbanks=$allbank[$i]; */
					
			?>
			<tbody>
				<tr>
					<td><? //echo $j++;?></td>
					<td><? //echo $name=$allbanks['name'];?></td>
					<td><? //echo $tx_designation=$allbanks['tx_designation'];?></td>
					<td><? //echo $gross_salary=$allbanks['gross_salary'];?></td>
					<td><? //echo $basic=$allbanks['basic'];?></td>
					<td><? //echo $house_rent=$allbanks['house_rent'];?></td>
					<td><? //echo $medical=$allbanks['medical'];?></td>
					<td><? //echo $transport=$allbanks['transport'];?></td>
					<td><? //echo $special=$allbanks['special'];?></td>
					<td><? //echo $arrear=$allbanks['arrear'];?></td>
					<td><? //echo $kpi_add=$allbanks['kpi_add'];?></td>
					<td><? //echo $mobile_bill=$allbanks['mobile_bill'];?></td>
					<td><? //echo $pf_add=$allbanks['pf_add'];?></td>
					<td><? //echo $yearly_bonus=$allbanks['yearly_bonus'];?></td>
					<td><? //echo $ot=$allbanks['ot'];?></td>
					<td><? //echo $gross_payable=$allbanks['gross_payable'];?></td>
					<td><? //echo $present=$allbanks['present'];?></td>
					<td><? //echo $late=$allbanks['late'];?></td>
					<td><? //echo $absent=$allbanks['absent'];?></td>
					<td><? //echo $total_pf_ded=$allbanks['total_pf_ded'];?></td>
					<td><? //echo $absent_deduction=$allbanks['absent_deduction'];?></td>
					<td><? //echo $loan=$allbanks['loan'];?></td>
					<td><? //echo $advance=$allbanks['advance'];?></td>
					<td><? //echo $tax=$allbanks['tax'];?></td>
					<td><? //echo $kpi_de=$allbanks['kpi_de'];?></td>
					<td><? //echo $total_ded=($total_pf_ded+$absent_deduction+$loan+$advance+$tax+$kpi_de);?></td>
					<td><? //echo $net_salary=$allbanks['net_salary'];?></td>
					<td><? echo 'Bank';?></td>
				</tr>
				
			<? 
			/* $total_gross += $gross_salary;
			$total_basic += $basic;
			$total_house_rent += $house_rent;
			$total_medical += $medical;
			$total_transport += $transport;
			$total_special += $special;
			$total_arrear += $arrear;
			$total_kpi_add += $kpi_add;
			$total_mobile_bill += $mobile_bill;
			$total_pf_add += $pf_add;
			$total_yearly_bonus += $yearly_bonus;
			$total_ot += $ot;
			$total_gross_payable += $gross_payable;
			$total_present += $present;
			$total_late += $late;
			$total_absent += $absent;
			$total_total_pf += $total_pf;
			$total_absent_deduction += $absent_deduction;
			$total_loan += $loan;
			$total_advance += $advance;
			$total_tax += $tax;
			$total_kpi_de += $kpi_de;
			$final_total_ded += $total_ded;
			$total_net_salary += $net_salary;
			//$total_basic += $basic;
			 
				} */
				
				
			?>
				<tr>
					<td></td>
					<td style="text-align:center;" colspan="2"><b>Total: </b></td>
					<td style="text-align:center;"><b>Gross: </b><? //echo $total_gross;?></td>
					<td style="text-align:center;"><b>Basic: </b><? //echo $total_basic;?></td>
					<td style="text-align:center;"><b>House Rent: </b><? //echo $total_house_rent;?></td>
					<td style="text-align:center;"><b>Medical: </b><? //echo $total_medical;?></td>
					<td style="text-align:center;"><b>Transport: </b><? //echo $total_transport;?></td>
					<td style="text-align:center;"><b>Special: </b><? //echo $total_special;?></td>
					<td style="text-align:center;"><b>Arrear: </b><? //echo $total_arrear;?></td>
					<td style="text-align:center;"><b>KPI Add: </b><? //echo $total_kpi_add;?></td>
					<td style="text-align:center;"><b>Mo. bil: </b><? //echo $total_mobile_bill;?></td>
					<td style="text-align:center;"><b>PF Add: </b><? //echo $total_pf_add;?></td>
					<td style="text-align:center;"><b>Yearly: </b><? //echo $total_yearly_bonus;?></td>
					<td style="text-align:center;"><b>OT: </b><? //echo $total_ot;?></td>
					<td style="text-align:center;"><b>Gross Payable: </b><? //echo $total_gross_payable;?></td>
					<td style="text-align:center;"><b>Present: </b><? //echo $total_present;?></td>
					<td style="text-align:center;"><b>Late: </b><? //echo $total_late;?></td>
					<td style="text-align:center;"><b>Absent: </b><? //echo $total_absent;?></td>
					<td style="text-align:center;"><b>PF DE: </b><? //echo $total_total_pf;?></td>
					<td style="text-align:center;"><b>Absent DE: </b><? //echo $total_absent_deduction;?></td>
					<td style="text-align:center;"><b>Loan: </b><? //echo $total_loan;?></td>
					<td style="text-align:center;"><b>Advance: </b><? //echo $total_advance;?></td>
					<td style="text-align:center;"><b>Tax: </b><? //echo $total_tax;?></td>
					<td style="text-align:center;"><b>KPI DE: </b><? //echo $total_kpi_de;?></td>
					<td style="text-align:center;"><b>Total Ded: </b><? //echo $final_total_ded;?></td>
					<td style="text-align:center;"><b>Total Net Salary: </b><? //echo $total_net_salary;?></td>
					<td style="text-align:center;"><b></b><? ?></td>
				</tr>
			</tbody>
		</table>
		<div style="width:100%; height:40px;" id="pager" class="pager"></div>
		<div style="width:1000px; margin-top:50px; margin-bottom: 20px;text-align:center">
			<div style="width:200px; float: left; text-align: center; position:relative">
				<span style="border-top:1px solid black">Prepared By</span>
			</div> 
			<div style="width:200px; float: left;text-align: center; position:relative">
				<span style="border-top:1px solid black"> Checked By</span>
			</div>  
			<div style="width:200px; float: left;text-align: center; position:relative">
				<span style="border-top:1px solid black"> Recommended By </span>
			</div> 
			<div style="width:200px; float: left;text-align: center; position:relative">
				<span style="border-top:1px solid black">  Approved By</span>
			</div> 
		</div>
		<div style="width:800px; clear: both; margin-top: 10px; height: 30px"></div>
		<div class="table-apply"></div>
	</div>
</div>