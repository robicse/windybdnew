<p style="text-align:center;font-weight:bold; font-size:15px;"><?php //echo $row2->department_name;?>Web Department</p>
<p style="text-align:center;font-size:15px;">Leave Report of <b><?php //echo $row2->name;?>Robeul</b></p>
<p style="text-align:center;font-weight:bold; font-size:12px;">For the Year of <?= $year;?></p>
<br>
<h4 class="mb">
	Leave Details
</h4>
<div class="table-responsive">
	<table class="table table-bordered" align="center" border="1px;" width="680px;" class="mytable" cellpadding="2" cellspaning="0">
		<thead>
			<tr>
				<th class="info" style="text-align:center;">SL NO</th>
				<th class="info" style="text-align:center;">Start Date</th>
				<th class="info" style="text-align:center;">End Date</th>
				<th class="info" style="text-align:center;">Leave Type</th>
				<th class="info" style="text-align:center;"><? //if($confirmation_date){echo 'Duration';}else{echo 'Extra Days';}?></th>
				<!--<th class="info" style="text-align:center;">Extra Days</th>-->
				<th class="info" style="text-align:center;">Payment Types</th>
			</tr>
				
			<tr>
				<td><? //echo $i++;?></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<!--<td></td>-->
				<td></td>
			</tr>
			
		</thead>
	</table>
	<br>


	<h4 class="mb">
		Leave Summery
	</h4>
	<table class="table table-bordered" align="center" border="1px;" width="680px;" class="mytable" cellpadding="2" cellspaning="0">
		<tbody>
			<tr>
				<th style="text-align:center;" colspan="2">Leave Package</th>
				<th style="text-align:center;" colspan="2">Leave Spent</th>
				<th style="text-align:center;" colspan="2">Leave Balance</th>
			</tr>
			
			<tr>
				<th class="info" width="133px">PACKAGE NAME:</th>
				<td width="133px"><?php //echo $package_name=$row1->package_name;?></td>
				<th width="133px"></th>
				<td width="133px"></td>
				<th width="133px"></th>
				<td width="133px"></td>
			</tr>
			
			<tr>
				<th class="info">CASUAL LEAVE:</th>
				<td><?php //echo $csual_leave=$row1->csual_leave;?></td>
				<th class="info">CASUAL:</th>
				<td></td>
				<th class="info">CASUAL:</th>
				<td></td>
			</tr> 
			<tr>
				<th class="info">SICK LEAVE:</th>
				<td><?php //echo $sick_leave=$row1->sick;?></td>
				<th class="info">SICK:</th>
				<td></td>
				<th class="info">SICK:</th>
				<td></td>
			</tr> 
			<tr>
				<th class="info">EARNED LEAVE:</th>
				<td><?php //echo $earned_leave=$row1->earned;?></td>
				<th class="info">EARNED:</th>
				<td></td>
				<th class="info">EARNED:</th>
				<td></td>
			</tr> 
			
			<tr>
				<th style="text-align:center;" colspan="2">Total:</th>
				<th style="text-align:center;" colspan="2">Total:</th>
				<th style="text-align:center;" colspan="2">
					Total:
						
				</th>
				
			</tr>                            
		</tbody>
	</table>
	<br/>

	<table class="table table-bordered" align="center" border="1px;" width="680px;" class="mytable" cellpadding="2" cellspaning="0">
		<tbody>
			<tr>
				<td class="info" colspan="18" style="text-align:right;">Total With Pay : </td>                  
				<td colspan="6" style="text-align:left;"> Days</td> 	
			</tr>
			<tr>
				<td class="info" colspan="18" style="text-align:right;">Total without Pay : </td>                  
				<td colspan="6" style="text-align:left;"> Days</td> 	
			</tr>
		</tbody>
	</table>
</div>