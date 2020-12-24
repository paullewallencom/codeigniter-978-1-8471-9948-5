<?php

echo form_open('start/assessme');

echo form_label('Name: ', 'username');
echo form_input('username', '');

echo form_label('Password: ', 'password');
echo form_password('password', '');

echo form_submit('submit', 'Send!');

echo form_close();