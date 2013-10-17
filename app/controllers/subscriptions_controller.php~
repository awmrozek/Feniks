<?php
class SubscriptionsController extends AppController {
	var $helpers = array ('Html','Form');
	var $components = array("Auth", "Session");
	var $name = 'Subscriptions';
	var $layout = "feniks";
	
	function beforeFilter () {
		$this->Auth->loginAction = array('admin' => false, 'controller' => 'users', 'action' => 'login');
		$this->Auth->loginRedirect = array('controller' => 'subscriptions', 'action' => 'index');
	}
	
	function index() {
		if (!strcmp($this->Session->read('Auth.User.admin'), "Y"))
			$this->set('admin', true);
		$this->set('subscriptions', $this->Subscription->find('all'));
	}
	
	function subscribe($id = null) {
		$this->Subscription->id = $id;
		$username = $this->Session->read('Auth.User.username');
		
		if (!$this->Subscription->find('first', array("conditions" => array("attendant" => $username)))) {
			$this->data = $this->Subscription->read();
			$this->data['Subscription']['attendant'] = $username;
			
			
			if ($this->Subscription->save($this->data))
				$this->Session->setFlash("Zapisano na nowy termin");
			else
				$this->Session->setFlash("Błąd w trakcie zapisu");
			$this->redirect (array("action" => "index"));
		} else {
			$this->Session->setFlash("Nie można zapisać sie na więcej, niż 1 termin");
			$this->redirect (array("action" => "index"));
		}
	}
	
	function unsubscribe() {
		$username = $this->Session->read('Auth.User.username');
		$zapis = $this->Subscription->find('first', array("conditions" => array("attendant" => $username)));
		
		if (!$zapis['Subscription']['id']) {
			$this->Session->setFlash ("Nie jesteś zapisany na żaden termin");
		} else {
			//echo (int)$zapis['Subscription']['id'];
			$this->Subscription->id = $zapis['Subscription']['id'];
			$this->data = $this->Subscription->read();
			$this->data['Subscription']['attendant'] = NULL;
			
			if ($this->Subscription->save ($this->data))
				$this->Session->setFlash ("Wypisano z terminu");
			else
				$this->Session->setFlash ("Błąd w trakcie wypisu");
		}
		$this->redirect (array("action" => "index"));
	}
	
# admin stuff
	function add() {
# niestety nie mam glowy, jak to zrobic na acl-ach albo jakos madrzej
		if (strcmp($this->Session->read('Auth.User.admin'), "Y")) die ("with honor");
		
		if (!empty($this->data)) {
			if ($this->Subscription->save($this->data))
				$this->Session->setFlash("Pomyślnie dodano nowy termin");
			else
				$this->Session->setFlash("Błąd w trakcie dodawania terminu!");
			$this->redirect(array("action" => "index"));
		}
	}
	
	function edit($id = null) {
		if (strcmp($this->Session->read('Auth.User.admin'), "Y")) die ("with honor");
		
		$this->Subscription->id = $id;
		if (empty($this->data))
			$this->data = $this->Subscription->read();
		else {
			if ($this->Subscription->save($this->data))
				$this->Session->setFlash ("Pomyślnie zmodyfikowano termin");
			else
				$this->Session->setFlash ("Nie udało się zmodyfikować terminu!");
			$this->redirect(array("action" => "index"));
		}
		
	}
	
	function remove($id = null) {
		if (strcmp($this->Session->read('Auth.User.admin'), "Y")) die ("with honor");
		
		if ($this->Subscription->delete($id))
			$this->Session->setFlash ("Pomyślnie usunięto dany termin");
		else
			$this->Session->setFlash ("Usunwanie terminu zakończone niepowodzeniem");
		$this->redirect(array("action" => "index"));
	}
}
?>