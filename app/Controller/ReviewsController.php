<?php
App::uses('AppController', 'Controller');
class ReviewsController extends AppController {

	public $uses =array('Review','Library');


	public function index() {
		$this->Review->recursive = 0;

		$count = 10;

		$this->paginate = array(
				'conditions' => array(
						array(
								'Review.used' =>0,
						)
				),
				'order' => 'Review.id ASC',
				'limit' => $count,);


		$libraries = $this->Library->find('list');
		$this->set('libraries',$libraries);
		$this->set('reviews', $this->paginate());
		//debug($libraries);
		//exit;
	}
	public function add($library=null){
		$this->Review->create();
		if ($this->request->is('post')) {
			$this->request->data['Review']['used']=0;
			if ($this->Review->save($this->request->data)) {
				$this->Session->setFlash(__('The review has been saved.'));
				return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The publisher could not be saved. Please, try again.'));
					return $this->redirect(array('action' => 'index'));
				}

		}
		$this->set('library',$library);
	}

}




