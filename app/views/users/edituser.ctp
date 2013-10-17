<h1>Edycja użytkownika</h1>
<?php
	echo $this->Form->create('User', array('action' => 'edituser	'));
	echo $this->Form->input('username');
	echo $this->Form->input('email');
	echo $this->Form->input('ticket');
	echo $this->Form->input('first_name');
	echo $this->Form->input('last_name');
	echo $this->Form->input('id', array('type' => 'hidden')); 
	echo $this->Form->end('Save Post');
?>
