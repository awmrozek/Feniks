<h1>Dodaj użytkownika</h1>

<?php
echo $this->Form->create('User');
echo $this->Form->input('username');
echo $this->Form->input('first_name');
echo $this->Form->input('last_name');
echo $this->Form->input('email');
echo $this->Form->end('Dodaj');
?>
