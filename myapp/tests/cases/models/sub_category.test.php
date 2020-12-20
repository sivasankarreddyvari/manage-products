<?php
/* SubCategory Test cases generated on: 2020-12-19 04:01:55 : 1608330715*/
App::import('Model', 'SubCategory');

class SubCategoryTestCase extends CakeTestCase {
	var $fixtures = array('app.sub_category', 'app.category', 'app.product');

	function startTest() {
		$this->SubCategory =& ClassRegistry::init('SubCategory');
	}

	function endTest() {
		unset($this->SubCategory);
		ClassRegistry::flush();
	}

}
?>