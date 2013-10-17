<h1>Treść E-maila</h1>
<p>Wyrażenia %u i %p zostanią zamienione na nazwę użytkownika i poprawny bilet podczas procedury wysyłania e-maila.</p>
<?php
	echo $this->Form->create('users', array("action" => "send_tickets"));
	echo $this->Form->input('subject', array('value' => "Twój bilet"));
	echo $this->Form->input('contents', array('rows' => '3', 'value' => 'Witaj! Na ten adres e-mail został wysłany bilet, którego możesz użyć do zalogowania się w serwisie hermin.edu.pl/bilety. Aby zapisać się na termin, proszę wejść na stronę a następnie zalogować się jako %u przy użyciu hasła %p'));
	if (isset($id))
		echo $this->Form->input('id', array('type' => 'hidden', 'value' => $id));
	echo $this->Form->end("Wyślij!");
?>
