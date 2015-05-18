<?php
App::uses('AppController', 'Controller');
/**
 * Libraries Controller
 *
 * @property Library $Library
 * @property PaginatorComponent $Paginator
 */
class LibrariesController extends AppController {

/**
 * Components
 *
 * @var array
 */


/**
 * index method
 *
 * @return void
 */
	public function old() {
		$this->Library->recursive = 0;

		$count = 10;

		$this->paginate = array(
			'conditions' => array(
					array(
			'Library.used' =>1,
		)
		),
		'order' => 'Library.id ASC',
		'limit' => $count,);

		$this->set('libraries', $this->paginate());
		$this->render('index');
	}

	public function index() {
		$this->Library->recursive = 0;

		$count = 10;

		$this->paginate = array(
			'conditions' => array(
					array(
			'Library.used' =>0,
		)
		),
		'order' => 'Library.id ASC',
		'limit' => $count,);

		$this->set('libraries', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Library->exists($id)) {
			throw new NotFoundException(__('Invalid library'));
		}
		$options = array('conditions' => array('Library.' . $this->Library->primaryKey => $id));
		$this->set('library', $this->Library->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Library->create();
			if ($this->Library->save($this->request->data)) {




				$this->Session->setFlash(__('The library has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The library could not be saved. Please, try again.'));
			}
		}
		$categories = $this->Library->Category->find('list');
		$publishers = $this->Library->Publisher->find('list');
		$this->set(compact('categories', 'publishers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Library->exists($id)) {
			throw new NotFoundException(__('Invalid library'));
		}
		if ($this->request->is(array('post', 'put'))) {

			debug($this->request->data);
			exit;

			if ($this->Library->save($this->request->data)) {
				$this->Session->setFlash(__('The library has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The library could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Library.' . $this->Library->primaryKey => $id));
			$this->request->data = $this->Library->find('first', $options);
		}
		$categories = $this->Library->Category->find('list');
		$publishers = $this->Library->Publisher->find('list');
		$this->set(compact('categories', 'publishers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Library->id = $id;
		if (!$this->Library->exists()) {
			throw new NotFoundException(__('Invalid library'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Library->delete()) {
			$this->Session->setFlash(__('The library has been deleted.'));
		} else {
			$this->Session->setFlash(__('The library could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function search() {
		if ($this->request->is('post')) {
		$key = $this->request->data['Library']['title'];
				//debug($key);
				//exit;

		$options = array(
		'conditions' => array('Library.title LIKE' => "%$key%"));
		$data = $this->Library->find('all',$options);
		//debug($data);
		//exit;
		$this->set('libraries',$this->paginate());
		$this->render('index');
		}
	}
}
