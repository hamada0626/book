<?php
App::uses('AppModel', 'Model');
/**
 * Library Model
 *
 * @property Category $Category
 * @property Publisher $Publisher
 */
class Library extends AppModel {

public $validate = array(
	'book_no' => array(
		'rule' => 'notEmpty',
		'required' => true,
		'message' => '入力してください'
),
	'title' => array(
		'rule' => 'notEmpty',
		'required' => true,
		'message' => '入力してください'
	)
);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Category' => array(
			'className' => 'Category',
			'foreignKey' => 'category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Publisher' => array(
			'className' => 'Publisher',
			'foreignKey' => 'publisher_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	public $hasMany = array(
		'Review');


}
