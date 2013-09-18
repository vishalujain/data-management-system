<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" href="<?php echo base_url() ?>/datepicker/themes/base/jquery.ui.all.css">
	<script src="<?php echo base_url() ?>/datepicker/jquery-1.9.1.js"></script>
	<script src="<?php echo base_url() ?>/datepicker/ui/jquery.ui.core.js"></script>
	<script src="<?php echo base_url() ?>/datepicker/ui/jquery.ui.widget.js"></script>
	<script src="<?php echo base_url() ?>/datepicker/ui/jquery.ui.datepicker.js"></script>
	<script>
		 $(function() {
			$( ".datepicker" ).datepicker({
				defaultDate: "0",
				changeMonth: true,
				dateFormat :'yy-mm-dd'
			});
		});
	</script>
	<style>
		.container{
			padding:0 20%;
		}
	</style>
	<title><?php echo isset($title) ? $title : 'Data Management System' ; ?></title>
</head>
<body>
<div style="display:block;height:40px;margin-bottom:20px;background-color:#000;"></div>