<?php defined('SYSPATH') or die('No direct script access.');

class Model_Empleave extends ORM {
	protected $_table_name = 'empleave';
	public function __construct($id = NULL)
	{
		parent::__construct();
		$this->_table_name='empleave';
		
	}
	
}
