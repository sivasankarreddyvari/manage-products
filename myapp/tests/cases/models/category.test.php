<?php
/* Category Test cases generated on: 2020-12-19 03:53:26 : 1608330206*/
App::import('Model', 'Category');

class CategoryTestCase extends CakeTestCase {
	var $fixtures = array('app.category');

	function startTest() {
		$this->Category =& ClassRegistry::init('Category');
	}

	function endTest() {
		unset($this->Category);
		ClassRegistry::flush();
	}

}
?>