<div class="container">
	<?php echo form_open(site_url('login/authenticate')) ?>
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" id="username" name="username" value="" /></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" id="password" name="password" value="" /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Login" /></td>
		</tr>
	</table>
	<?php echo form_close(); ?>
</div>