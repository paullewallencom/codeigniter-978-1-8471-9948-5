<?php

echo "<h1>".$heading."</h1>";

echo $this->session->flashdata('status');

//Using the url helper's anchor function we create a link to our controller's new_site function
echo anchor('/sites/new_site', 'Add new element')."<br/><br/>";

//And if the $site variable is not empty we echo it's content by using the generate method of the table class / library
if(!empty($sites)) echo $this->table->generate($sites); 

echo "<br/><br/>".$this->pagination->create_links();