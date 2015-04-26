<?php
class DecksController extends AppController {
	
	public $use = [ 'User' ];
	
    public function index( $cat_id=null ) {
		
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
			$decks = $this->Deck->find('all',
							array(
								'order' => array('Deck.id'=>'asc'),
								'limit' => 2
							)
			);
		}
		
        // $decks = $this->paginate('Deck');
        // $this->set(compact('decks'));
		$this->set('decks', $decks);
    }
	
	public function add(){
		
	}
}
?>