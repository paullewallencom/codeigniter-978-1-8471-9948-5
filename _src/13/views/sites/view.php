<h1><?php echo $title ?></h1>

<?php	
	//If our query returned no data, we created the $row variable with the FALSE value, we now use this to pick out the correct info to show
	if($row == FALSE){	
		echo "The record does not exist";
	}else{
?>
	<ul>
		<!-- If all was ok, then we show the values of each field -->

		<li>Site name: <?php echo $row->name; ?></li>
		<li>Site url: <?php echo $row->url; ?> </li>
		<li>Site username: <?php echo $row->un; ?></li>
		<li>Username password: <?php echo $row->pw; ?></li>
		<li>Client name 1: <?php echo $row->client1; ?></li>
		<li>Client name 2: <?php echo $row->client2; ?></li>
		<li>Admin name 1: <?php echo $row->admin1; ?></li>
		<li>Admin name 2: <?php echo $row->admin2; ?></li>
		<li>Domain id: <?php echo $row->domainid; ?></li>
		<li>Host id: <?php echo $row->hostid; ?></li>
		<li>Webroot: <?php echo $row->webroot; ?></li>
		<li>Files count: <?php echo $row->files; ?></li>
		<li>Files upload date: <?php $row->filesdate; ?></li>
		<li>Last update: <?php echo $row->lastupdate; ?></li>
		<li>Submit date: <?php echo $row->submit; ?></li>
	</ul>

<?php
	}
?>

<a href="javascript:history.back()">Back</a>