<div id="mast" class="circlemenu">
	<ul>
	<li><?php echo $this->Html->link("Wyloguj", array("controller" => "users", "action" => "logout")); ?></li>
	<li><?php echo $this->Html->link("Powrót", array("controller" => "subscriptions", "action" => "index")); ?></li>
	<li><?php echo $this->Html->link("Dodaj", array("controller" => "users", "action" => "adduser")); ?></li>
	<li><?php echo $this->Html->link("Importuj", array("controller" => "users", "action" => "import")); ?></li>
	<li><?php echo $this->Html->link("Wyślij bilety", array("controller" => "users", "action" => "send_tickets")); ?>
	</ul>
</div>

<h1>Zarządzanie użytkownikami</h1>

<table>
	<tr>
		<th>Akcje</th>
		<th>Id</th>
		<th>Nazwa użytkownika</th>
		<th>Imię i nazwisko</th>
		<th>E-mail</th>
		<th>Bilet</th>
		<th>Administrator</th>
	</tr>

	<?php foreach ($users as $user): ?>
	<tr>
		<td class="small"><?php 
			echo $this->Html->link("[usuń]", array("action" => "remuser", $user['User']['id']), null, "Czy na pewno usunąć użytkownika?");
			echo $this->Html->link("[edytuj]", array("action" => "edituser", $user['User']['id']));
		?></td>
		<td><?php echo $user['User']['id']?></td>
		<td><?php echo $user['User']['username']?></td>
		<td><?php echo $user['User']['first_name']." ".$user['User']['last_name']?>
		<td><?php echo $user['User']['email'] ?>
		<td>
			<?php echo $this->Html->link("[wyślij]", array("action" => "send_tickets", $user['User']['id'])); ?>
			<?php echo $user['User']['ticket']?></td>
		<td class="small"><?php 
			echo $this->Html->link("[zm] ", array("action" => "chadmin", $user['User']['id']));
			if (strcmp($user['User']['admin'], "Y")) echo "-"; else echo "Administrator";
		?></td>
	</tr>
	<?php endforeach ?>
</table>
