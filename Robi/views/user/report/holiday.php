<div class="table-responsive">
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th class="info">SL No</th>
				<th class="info">Title of Holiday</th>
				<th class="info">Holiday Date</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$i=1;
				foreach($data as $holiday){ 
			?>
			<tr>
				<td><?php echo $i++;?></td>
				<td><?php echo $holiday->description;?></td>
				<td><?php echo $holiday->holidayDate;?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
