<p style="text-align:center;font-weight:bold;font-size:15px;"><b>OT Sheet</b></p>
<p style="text-align:center;font-weight:bold; font-size:12px;">Salary Sheet of <? echo $month;?> ,<? echo $year;?></p>
<p style="text-align:center;font-weight:bold;font-size:15px;">Employee name : <? echo $name;?></p>
<p style="text-align:center;font-weight:bold;font-size:15px;">ID NO : <? echo $employeeId;?></p>
<?php echo Form::open('',array('method'=>'POST')); ?>
	<div class="table-responsive">
		<table class="table table-striped table-bordered">
			<tbody>
				<tr>
					<th class="info">Date</th>
					<th class="info">In Time</th>
					<th class="info">Out Time</th>
					<th class="info">Total Hour</th>
					<th class="info">Hour Rate</th>
					<th class="info">Total</th>
				</tr>
				
				<?
					
					// data collect from server then put dynamic fatch sql here	
					
					$c = 1; 
					if ($month == '01') 
					{ 
						$total_month_day = 31; 
					} 
					elseif ($month == '02') 
					{ 
						$total_month_day = 28;
					} 
					elseif ($month == '03') 
					{ $total_month_day = 31; } 
					elseif ($month == '04') 
					{ 
						$total_month_day = 30; 
					} 
					elseif ($month == "05") 
					{ 
						$total_month_day = 31; 
					} 
					elseif ($month == "06") 
					{ 
						$total_month_day = 30; 
					} 
					elseif ($month == "07") 
					{ 
						$total_month_day = 31; 
					} 
					elseif ($month == "08") 
					{ 
						$total_month_day = 31; 
					} 
					elseif ($month == "09") 
					{ 
						$total_month_day = 30; 
					} 
					elseif ($month == "10") 
					{ 
						$total_month_day = 31; 
					} 
					elseif ($month == "11") 
					{ 
						$total_month_day = 30; 
					} 
					elseif ($month == "12") 
					{ 
						$total_month_day = 31; 
					} 
					else 
					{ 
						$total_month_day = 30;
					}
					
					$i=1;
					
					while($c <= $total_month_day) {
						if ($c < 10) 
						{ 
							$c="0".$c; 
						}
						$att_date=$year."-".$month."-".$c;
						//$dt = date('1-m-Y',strtotime($att_date));
						$att_day = date('l',strtotime($att_date));
						//echo $day;
						
						?>
						
						<tr>
							<td><? echo $att_date;?></td>
							<td><input type="text" name="in_time" value=""></td>
							<td><input type="text" name="out_time" value=""></td>
							<td><input type="text" name="total_time" value=""></td>
							<td><input type="text" name="hour_rate" value=""></td>
							<td><input type="text" name="total" value=""></td>
						</tr>
					<?
					$c++;
					}  
				
				?>
				
			</tbody>
		</table>
	</div>
	<?php echo Form::submit('save', 'Save', array('class'=>'btn btn-success')); ?>
<?= Form::close(); ?>