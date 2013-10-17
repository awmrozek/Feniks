<h1>Import użytkowników</h1>

<p>
Wybierz plik, z którego chciałbyś zaimportować użytkowników i potwierdź.
</p>

<p>
<?php
	echo $this->Form->create('Users', array('action' => 'valImport', 'type' => 'file'));
	echo $this->Form->file('File');
	echo $this->Form->end('Importuj');
?>
</p>
