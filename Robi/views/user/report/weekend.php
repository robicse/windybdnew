<div class="table-responsive">
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th class="info">SL No</th>
				<th class="info">Weekend Date</th>
				<th class="info">Weekend Day</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$i=1;
				foreach($data as $weekend){ 
			?>
			<tr>
				<td><?php echo $i++;?></td>
				<td><?php echo $weekend->weekendDate;?></td>
				<td><?php echo $weekend->weekendDay;?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
