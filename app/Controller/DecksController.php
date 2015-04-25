<?php
class DecksController extends AppController {
	
	public $use = [ 'User' ];
 
    public function index() {
        /* $this->paginate = array(
            'order' => array( 'decks.name' => 'asc' )
        );
        $decks = $this->paginate('Deck'); */
		/* $decks = $this->Deck->find( array( 'all',
							array(
										'contain' => false,
										'group' => 'decks.name',
										'order' => array('decks.name ASC')
							)
		)); */
		
		/* $decks = $this->Deck->find('all',
							array(
								// 'contain' => false,
								'group' => 'decks.name',
								'order' => array('decks.name ASC'),
								'fields' => array('name')
							)
		); */
		
        $decks = $this->paginate('Deck');
        // $this->set(compact('decks'));
		$this->set('decks', $decks);
    }
 
}
?>