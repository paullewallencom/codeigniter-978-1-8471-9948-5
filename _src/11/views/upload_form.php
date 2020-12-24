<?php 

echo form_open_multipart('uploader/upload');

echo form_upload('file')."<br/><br/>";

echo form_submit('submit', 'Send');

echo form_close();

?>