<div class="container">
	<?php echo form_open('') ?>
		<table>
			<tr>
				<td>Project Name</td>
				<td>
					<?php if($role=='1'): ?>
					<input type="text" name="project_name" value="<?php echo $project->project_name ?>" />
					<?php else: ?>
					<?php echo $project->project_name ?>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td>Description</td>
				<td>
					<?php if($role=='1'): ?>
					<textarea name="description" id="description" ><?php echo $project->description ?></textarea>
					<?php echo display_ckeditor($ckeditor1); ?>
					<?php else: ?>
					<?php echo $project->description ?>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td>Date Created</td>
				<td>
					<?php if($role=='1'): ?>
					<input type="text" name="assigned_date" class="datepicker" readonly="readonly" value="<?php echo $project->assigned_date ?>" />
					<?php else: ?>
					<?php echo $project->assigned_date ?>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td>Deadline</td>
				<td>
					<?php if($role=='1'): ?>
					<input type="text" name="deadline_date" class="datepicker" readonly="readonly" value="<?php echo $project->deadline_date ?>" />
					<?php else: ?>
					<?php echo $project->deadline_date ?>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td>Status</td>
				<td>
					<select name="status">
						<option <?php if($project->status==1){ echo "selected='selected'"; } ?> value="1">New</option>
						<option <?php if($project->status==2){ echo "selected='selected'"; } ?> value="2">On-Progress</option>
						<option <?php if($project->status==3){ echo "selected='selected'"; } ?> value="3">Pending</option>
						<option <?php if($project->status==4){ echo "selected='selected'"; } ?> value="4">Closed</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Comments</td>
				<td>
					<textarea name="comments" id="comments" ><?php echo $project->comments ?></textarea>
					<?php echo display_ckeditor($ckeditor2); ?>
				</td>
			</tr>
			<tr>
				<td>Tags</td>
				<td>
					<?php if($role=='1'): ?>
					<textarea name="tags" id="tags" ><?php echo $project->tags ?></textarea>
					<?php echo display_ckeditor($ckeditor3); ?>
					<?php else: ?>
					<?php echo $project->tags ?>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td>Keywords</td>
				<td>
					<?php if($role=='1'): ?>
					<textarea name="keywords" id="keywords" ><?php echo $project->keywords ?></textarea>
					<?php echo display_ckeditor($ckeditor4); ?>
					<?php else: ?>
					<?php echo $project->keywords ?>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td>Assigned To</td>
				<td>
					<?php if($role=='1'): ?>
					<select name="assigned_to">
						<?php if($content_producers): foreach($content_producers as $content_producer): ?>
							<option <?php if($content_producer->id==$project->assigned_to){ echo "selected='selected'"; } ?> value="<?php echo $content_producer->id ?>"><?php echo $content_producer->username ?></option>
						<?php endforeach; endif; ?>
					</select>
					<?php else: ?>
					<?php echo $content_producer->id ?>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td>
					<input type="hidden" name="assigned_by" value="<?php echo $current_user ?>" />
					<input type="reset" value="Cancel" />
				</td>
				<td><input type="submit" name="submit" value="Save" /></td>
			</tr>
		</table>
	<?php echo form_close() ?>
</div>