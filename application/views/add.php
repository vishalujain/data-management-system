<div class="container">
	<?php echo form_open('') ?>
		<table>
			<tr>
				<td>Project Name</td>
				<td><input type="text" name="project_name" value="" /></td>
			</tr>
			<tr>
				<td>Description</td>
				<td>
					<textarea name="description" id="description" ><p></p></textarea>
					<?php echo display_ckeditor($ckeditor1); ?>
				</td>
			</tr>
			<tr>
				<td>Date Created</td>
				<td><input type="text" name="assigned_date" class="datepicker" readonly="readonly" value="" /></td>
			</tr>
			<tr>
				<td>Deadline</td>
				<td><input type="text" name="deadline_date" class="datepicker" readonly="readonly" value="" /></td>
			</tr>
			<tr>
				<td>Status</td>
				<td>
					<select name="status">
						<option value="1">New</option>
						<option value="2">On-Progress</option>
						<option value="3">Pending</option>
						<option value="4">Closed</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Comments</td>
				<td>
					<textarea name="comments" id="comments" ><p></p></textarea>
					<?php echo display_ckeditor($ckeditor2); ?>
				</td>
			</tr>
			<tr>
				<td>Tags</td>
				<td>
					<textarea name="tags" id="tags" ><p></p></textarea>
					<?php echo display_ckeditor($ckeditor3); ?>
				</td>
			</tr>
			<tr>
				<td>Keywords</td>
				<td>
					<textarea name="keywords" id="keywords" ><p></p></textarea>
					<?php echo display_ckeditor($ckeditor4); ?>
				</td>
			</tr>
			<tr>
				<td>Assigned To</td>
				<td>
					<select name="assigned_to">
						<?php if($content_producers): foreach($content_producers as $content_producer): ?>
							<option value="<?php echo $content_producer->id ?>"><?php echo $content_producer->username ?></option>
						<?php endforeach; endif; ?>
					</select>
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