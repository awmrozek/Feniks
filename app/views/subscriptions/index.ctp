<div id="mast" class="circlemenu">
	<ul>
	<li><?php	echo $this->Html->link("Wyloguj", array("controller" => "users", "action" => "logout")); ?></li>
	<li><?php echo $this->Html->link("Wypisz się", array("controller" => "subscriptions", "action" => "unsubscribe")); ?></li>
	<?php if (isset($admin)): ?>
	<li><?php echo $this->Html->link("Dodaj termin", array("controller" => "subscriptions", "action" => "add")); ?></li>
	<li><?php echo $this->Html->link("Użytkownicy", array("controller" => "users", "action" => "index")); ?></li>
	<?php endif ?>
	</ul>
</div>

<h1>Zapisy</h1>

<table>
	<tr>
		<?php if (isset($admin)): ?>
		<th>admin</th>
		<?php endif ?>
		
		<th>termin</th>
		<th>szczegóły</th>
		<th>kto zapisany</th>
	</tr>
<?php if (!count($subscriptions)): ?>
	<div class="welcome">
		<h1>Witaj w Feniksie!</h1>
		<?php if (!isset($admin)): ?>
		<p>Lista terminów jest aktualnie pusta. Aby dodać lub zapisać się na termin skontaktuj się z administratorem.</p>
		<?php else: ?>
		<p>Gratulacje! Aby dodać termin skorzystaj z odpowiedniej opcji powyżej. Dodawanie lub zmienianie użytkowników jest równie intuicyjne!</p>
		<?php endif; ?>
	</div>
<?php endif ?>
<?php foreach ($subscriptions as $sub): ?>
	<tr>
		<?php if (isset($admin)): ?>
		<td>
			<?php echo $this->Html->link("[usuń]", array("controller" => "subscriptions", "action" => "remove", $sub['Subscription']['id']), null, "Czy na pewno usunąć dany termin?") ?>
			<?php echo $this->Html->link("[edytuj]", array("controller" => "subscriptions", "action" => "edit", $sub['Subscription']['id'])); ?>
		</td>
		<?php endif ?>
		
		<td><?php echo $sub['Subscription']['title']; ?></td>
		<td><?php echo $sub['Subscription']['body']; ?></td>
		<td><?php 
				$t = $sub['Subscription']['attendant'];
				if (strcmp($t, "")) 
					// TODO: nie działają avatary
					//echo $this->Html->link("$t", array("controller" => "users", "action" => "avatar", $t));
					echo "$t";
				else
					echo $this->Html->link("Zapisz się!", array("action" => "subscribe", $sub['Subscription']['id']));
			?></td>
	</tr>
<?php endforeach; ?>
</table>