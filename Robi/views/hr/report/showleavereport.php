<p style="text-align:center;font-weight:bold; font-size:12px;">Leave Report of <span style="text-align:center;font-weight:bold;font-size:15px;"><? echo $name;?></span></p>
<p style="text-align:center;font-weight:bold; font-size:12px;">For the Year of <? echo $year;?></p>
<hr />
<p style="text-align:left; font-size:12px;"><b>Employee Name:</b> <? echo $name;?></p>
<p style="text-align:right; font-size:12px;">Year: <? echo $year;?></p>


<h4>
	Leave Summary:
</h4>

<table class="table table-bordered">
	<thead>
		<tr>
			<th colspan="8">Leave Package</th>
			<th colspan="8">Leave Spent</th>
			<th colspan="8">Leave Balance</th>
			
		</tr>
	 </thead>
	 <tbody>
		<tr>
			<th class="info" colspan="4">Casual Leave:</th>
			<th colspan="4"><? //echo $csual_leave=$rows->csual_leave;?></th>
			<th class="info" colspan="4">Casual:</th>
			<th colspan="4"></th>
			<th class="info" colspan="4">Casual:</th>
			<th colspan="4"></th>
		</tr>
		<tr>
			<th class="info" colspan="4">Sick Leave:</th>
			<th colspan="4"><? //echo $sick_leave=$rows->sick;?></th>
			<th class="info" colspan="4">Sick:</th>
			<th colspan="4"></th>
			<th class="info" colspan="4">Sick:</th>
			<th colspan="4"></th>
		</tr>
		<tr>
			<th class="info" colspan="4">Earned Leave:</th>
			<th colspan="4"><? //echo $earned_leave=$rows->earned;?></th>
			<th class="info" colspan="4">Earned:</th>
			<th colspan="4"></th>
			<th class="info" colspan="4">Earned:</th>
			<th colspan="4"></th>
		</tr>
		
		<?
		
		?>
		<tr>
			<th style="text-align:right;" colspan="7">Total:</th>
			<th colspan="1"><? //echo $total_package=$rows->csual_leave+$rows->sick+$rows->earned;?></th>
			<th style="text-align:right;" colspan="7">Total:</th>
			<th colspan="1"></th>
			<th style="text-align:right;" colspan="7">Total:</th>
			
		</tr>
	</tbody>
   
</table>
<br />

<table class="table table-bordered">
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