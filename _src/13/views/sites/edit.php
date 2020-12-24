<h1><?php echo $title; ?></h1>

<?php	
	//Again if there are no records, a message will be shown, if there is a record, we will see the form.
	if($row == FALSE){	
		echo "The record does not exist";
		?>
		<a href="javascript:history.back()">Back</a>
		<?php
	}else{
?>

<?php 

	//Again we make use of the form helper, this time we pass the current record id into the third parameter, as an array. We will use it to know which record to edit later. We could have also appended the id to the first parameter as 'sites/edit/'.$row->id
	echo form_open('sites/edit','',array('id' => $row->id)); 

?>

<ul>

	<!-- Now create each form field, adding the current value, got from the database, in the second parameter -->

	<li>Site name: <?php echo form_input('name', $row->name); ?></li>

	<li>Site url: <?php echo form_input('url', $row->url); ?> </li>

	<li>Site username: <?php echo form_input('un', $row->un); ?></li>

	<li>Username password: <?php echo form_input('pw', $row->pw); ?></li>

	<li>Client name 1: <?php echo form_input('client1', $row->client1); ?></li>

	<li>Client name 2: <?php echo form_input('client2', $row->client2); ?></li>

	<li>Admin name 1: <?php echo form_input('admin1', $row->admin1); ?></li>

	<li>Admin name 2: <?php echo form_input('admin2', $row->admin2); ?></li>

	<li>Domain id: <?php echo form_input('domainid', $row->domainid); ?></li>

	<li>Host id: <?php echo form_input('hostid', $row->hostid); ?></li>

	<li>Webroot: <?php echo form_input('webroot', $row->webroot); ?></li>

	<li>Files count: <?php echo form_input('files', $row->files); ?></li>

	<li>Files upload date: <?php echo form_input('filesdate', $row->filesdate); ?></li>

	<li>Last update: <?php echo form_input('lastupdate', $row->lastupdate); ?></li>

	<li>Submit date: <?php echo form_input('submit', $row->submit); ?></li>

</ul>

<?php echo form_submit('edit', 'Edit site'); ?> 

<?php
	}
?>