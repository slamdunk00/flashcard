<?php
class CardsController extends AppController {
	
	/* var $uses = [ 'User' ]; */
 
    public function index( $deck_id=null ){
		
		$this->paginate = array(
								'order' => array('Card.id'=>'asc'),
								'conditions' => [
									'Card.deck_id' => $deck_id
								],
								'limit' => 1
							);
		$cards = $this->paginate('Card');
        $this->set(compact('cards'));
	}
 
}
?>