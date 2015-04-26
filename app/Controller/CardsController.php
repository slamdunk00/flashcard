<?php
class CardsController extends AppController {
	
	public $use = [ 'User' ];
 
    public function index(){
		$cards = $this->Card->find('all',
							array(
								'order' => array('Card.id'=>'asc')
							)
		); 
		
		$this->set('cards', $cards);
	}
 
}
?>