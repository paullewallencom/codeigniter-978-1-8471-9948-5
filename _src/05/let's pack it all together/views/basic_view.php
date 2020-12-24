<html>
	<head>

	</head>
<body>
	<?php echo validation_errors(); ?>
	<?php echo form_open('welcome/mail') ?>
	Name: <?php echo form_input('name', set_value('name')); ?> <br/>
	Phone: <?php echo form_input('phone', set_value('phone')); ?> <br/>
	Message: <?php echo form_textarea('message', set_value('message')); ?> <br/>
	<?php echo form_submit('submit', 'Send'); ?>
	<?php echo form_close(); ?>
	
</body>
</html>