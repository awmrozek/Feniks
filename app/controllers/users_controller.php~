<?php
class UsersController extends AppController {
	var $components = array("Auth", "Session", "Email");
	var $name = "Users";
	var $layout = "feniks";
	
	function beforeFilter () {
		parent::beforeFilter();
		$this->Auth->loginRedirect = array('controller' => 'subscriptions', 'action' => 'index');
	}
	
	function login() {
	}
	
	function logout() {
		$this->redirect($this->Auth->logout());
	}
	
	function index() {
		$this->set ('users', $this->User->find("all"));
	}
	
	function adduser() {
		if (strcmp($this->Session->read('Auth.User.admin'), "Y")) die ("with honor");
		
		if (!empty($this->data)) {
			
			$ticket = substr(md5(time()), 0, 4)."-".substr(md5(time()), 5, 4);
			
			$this->data['User']['ticket'] = $ticket;
			$this->data['User']['password'] = $ticket;
			
			$hashedPasswords = $this->Auth->hashPasswords($this->data);
			if ($this->User->save($hashedPasswords))
				$this->Session->setFlash ("Zapis zakończony powodzeniem");
			else
				$this->Session->setFlash ("Zapis zakończony niepowodzeniem!");
			$this->redirect (array("action" => "index"));
		}
	}
	
	function edituser($id = null) {
		if (strcmp($this->Session->read('Auth.User.admin'), "Y")) die ("with honor");
		
		$this->User->id = $id;
		if (empty($this->data))
			$this->data = $this->User->read();
		else {
			$this->data['User']['password'] = $this->data['User']['ticket'];
			
			$hashedPasswords = $this->Auth->hashPasswords($this->data);
			
			if ($this->User->save($hashedPasswords))
				$this->Session->setFlash ("Pomyślnie zmodyfikowano użytkownika");
			else
				$this->Session->setFlash ("Nie udało się zmodyfikować użytkownika!");
			$this->redirect(array("action" => "index"));
		}
	}
	
	function remuser($id = null) {
		if (strcmp($this->Session->read('Auth.User.admin'), "Y")) die ("with honor");
		
		if ($this->User->delete($id))
			$this->Session->setFlash ("Pomyślnie usunięto użytkownika");
		else
			$this->Session->setFlash ("Błąd w trakcie usuwania użytkownika!");
		$this->redirect (array("action" => "index"));
	}
	
	function chadmin($id = null) {
		if (strcmp($this->Session->read('Auth.User.admin'), "Y")) die ("with honor");
		
		$this->User->id = $id;
		$this->data = $this->User->read();
		
		if (!strcmp($this->data['User']['admin'], 'Y')) {
			$this->data['User']['admin'] = null;
			$msg = "odebrano";
		}
		else {
			$this->data['User']['admin'] = 'Y';
			$msg = "przyznano";
		}
		
		/* TODO: W systemie musi być min. 1 admin */
		if ($this->User->save($this->data))
			$this->Session->setFlash ("Pomyślnie $msg uprawnienia");
		else
			$this->Session->setFlash ("Błąd w trakcie operacji: $msg uprawnienia!");
		$this->redirect (array("action" => "index"));
	}

	function send_tickets($id = null) {
		if (strcmp($this->Session->read('Auth.User.admin'), "Y")) die ("with honor"); // never yield();
		
		$from = "no_reply@hermin.edu.pl";
		/* czy szablon emaila zostal wlasnie potwierdzony? */
		if (!empty($this->data)) {
			/* Postdata zawiera jakies dane. Mamy potwierdzenie. Stamtad wezmiemy id 
			   uzytkownika do ktorego chcemy wyslac e-maila */
			$id = $this->data['users']['id'];
			if ($id != null) {
				/* wyslanie e-maila do konkretnego uzytkownika */

				/* odczytaj rekord z bazy danych, pobierz stamtad maila */
				$this->User->id = $id;
				$recipient = $this->User->read();

				/* znajdz i zamien w szablonie */
				$subject = $this->data['users']['subject'];	// users od nazwy formularza
				$contents = $this->data['users']['contents'];

				$subject = str_replace("%u", $recipient['User']['username'], $subject);
				$subject = str_replace("%p", $recipient['User']['ticket'], $subject);

				$contents = str_replace("%u", $recipient['User']['username'], $contents);
				$contents = str_replace("%p", $recipient['User']['ticket'], $contents);

				/* wypelnij potrzebne pola i slij! */
				$this->Email->to = $recipient['User']['email'];
				$this->Email->from = $from;
				$this->Email->subject = $subject;
				$this->Email->send($contents);

				echo "<pre>Debug: Sending for $id finished.</pre>";
			} else {
				/* hulaj dusza: slemy do wszystkich! */
				$usrs = $this->User->find('all');

				foreach ($usrs as $user) {
					/* analogicznie, jak wyzej */
					echo "<p>".$user['User']['username']."</p>";

					$this->User->id = $user['User']['id'];
					$recipient = $this->User->read();

					$subject = $this->data['users']['subject'];
					$contents = $this->data['users']['contents'];

					$subject = str_replace("%u", $recipient['User']['username'], $subject);
					$subject = str_replace("%p", $recipient['User']['ticket'], $subject);

					$contents = str_replace("%u", $recipient['User']['username'], $contents);
					$contents = str_replace("%p", $recipient['User']['ticket'], $contents);

					$this->Email->to = $recipient['User']['email'];
					$this->Email->from = $from;
					$this->Email->subject = $subject;
					$this->Email->send($contents);

					echo "<pre>Debug: Sending for ".$user['User']['id']." finished.</pre>";
				}
			}

			$this->Session->setFlash ("Wysyłanie wiadomości e-mail zakończone!");
			$this->redirect (array('action' => 'index'));
		} else
			if (!$id)
				$this->Session->setFlash ("Wysyłanie biletów do wszystkich użytkowników");
			else {
				$this->set(array('id' => $id));
			}
	}

# Funkcje do importu/eksportu
	function import() {
		if (strcmp($this->Session->read('Auth.User.admin'), "Y")) die ("with honor"); // never yield();

		if (!empty($this->data)) {
			$this->Session->setFlash ("Redirekt pagar");
			$this->redirect (array('action' => 'index'));

			// zapisz dane, ktore zostaly uprzednio potwierdzone
		}
	}

	function valImport() {
		if (strcmp($this->Session->read('Auth.User.admin'), "Y")) die ("with honor"); // never yield();
		// tutaj trafiamy z formluarza pt. Wyslij plik CSV
		
		$contents = file($this->data['Users']['File']['tmp_name']);
		$this->set(array('file'=>implode($contents)));
		// dalej wyswietlamy formularz
	}

	function saveValidated() {
	}
}

# nagroda dla wytrwałych
# http://www.youtube.com/watch?v=i_y_Pa-AIB4i
# http://www.youtube.com/watch?v=9QFK1cLhytY (lepsze)
?>
