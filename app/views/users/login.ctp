<h1>Zapisy</h1>

<p>Witaj! Zaloguj się, aby móc zapisać się na oddawanie projektów!</p>

<?php
    if  ($session->check('Message.auth')) echo $session->flash('auth');
    echo $form->create('User', array('action' => 'login'));
    echo $form->input('username');
    echo $form->input('password');
    echo $form->end('Login');
?>