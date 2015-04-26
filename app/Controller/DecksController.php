<?php
class DecksController extends AppController {
	
	public $use = [ 'User' ];
 
    public function index( $user_id=null ) {

		$decks = $this->Deck->find('all',
							array(
								'order' => array('Deck.name'=>'asc')
							)
		); 
		
        // $decks = $this->paginate('Deck');
        // $this->set(compact('decks'));
		$this->set('decks', $decks);
    }
 
}
?>