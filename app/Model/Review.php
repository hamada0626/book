<?php
App::uses('AppModel', 'Model');
class Review extends AppModel {

	public $belongsTo = array(
			'Library');

}