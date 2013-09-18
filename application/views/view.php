<div class="container">
	<?php if($user->role==1): ?>
		<button onclick="window.location='<?php echo site_url('project/add') ?>';">Add Project</button>
	<?php endif; ?>
	<table border="1">
		<tr>
			<td>Assigned Date</td>
			<td>Deadline Date</td>
			<td>Last Update</td>
			<td>Project Name</td>
			<td>Description</td>
			<td>Status</td>
			<td>Comments</td>
			<td>Tags</td>
			<td>Keywords</td>
			<td>Assigned To</td>
			<td>Assigned By</td>
		</tr>
		<?php if($projects): $i=1; ?>
			<?php foreach($projects as $project): ?>
				<tr <?php if((strtotime($project->deadline_date)<time()) && $project->status<4){ echo "style='background:red;'"; } ?> onclick="window.location='<?php echo site_url('project/edit') ?>/<?php echo $project->id ?>'" <?php if($i%2==0){ echo "class='light'"; } else { echo "class='dark'"; } ?>>
					<td><?php echo $project->assigned_date 	?></td>
					<td><?php echo $project->deadline_date 	?></td>
					<td><?php echo $project->last_update 	?></td>
					<td><?php echo $project->project_name 	?></td>
					<td><?php echo $project->description 	?></td>
					<td><?php echo $project->status 		?></td>
					<td><?php echo $project->comments 		?></td>
					<td><?php echo $project->tags 			?></td>
					<td><?php echo $project->keywords 		?></td>
					<td><?php echo $project->assigned_to 	?></td>
					<td><?php echo $project->assigned_by 	?></td>
				</tr>
			<?php $i++; endforeach; ?>
		<?php else: ?>
			<tr>
				<td colspan="11">Sorry, but currently we don't have any project.</td>
			</tr>
		<?php endif; ?>
	</table>
</div>