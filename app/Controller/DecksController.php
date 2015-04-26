<?php
class DecksController extends AppController {
	
	// public $uses = [ 'User' ];
	
    public function index() {
		$cat_id = isset($this->request->query['cat_id']) ? $this->request->query['cat_id'] : null;
		$cat_name = isset($this->request->query['cat_name']) ? $this->request->query['cat_name'] : null;
		
		// $user = $this->User->find('all');
		// $this->set('user', $user);
		
		if( $cat_id !== null ){
			$decks = $this->Deck->find('all',
							array(
								'order' => array('Deck.name'=>'asc'),
								'conditions' => [
									'Deck.category_id' => $cat_id
								]
							)
			);
		}else{
			$cat_name = "Lastest Deck";
			$decks = $this->Deck->find('all',
							array(
								'order' => array('Deck.id'=>'asc'),
								'limit' => 10
							)
			);
		}
		
        // $decks = $this->paginate('Deck');
        // $this->set(compact('decks'));
		$this->set('decks', $decks);
		$this->set('cat_name', $cat_name);
    }
	
	public function add(){
		
	}
}
?>