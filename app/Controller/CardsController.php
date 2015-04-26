<?php
class CardsController extends AppController {
	
	public $use = [ 'User' ];
 
    public function index( $deck_id=null ){
		
		$this->paginate = $this->Card->find('all',
							array(
								'order' => array('Card.id'=>'asc'),
								'conditions' => [
									'Card.deck_id' => $deck_id
								],
								'limit' => 1
							)
		);
		$cards = $this->paginate('Card');
        $this->set(compact('cards'));
	}
 
}
?>