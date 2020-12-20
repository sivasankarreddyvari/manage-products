<?php
/* Product Test cases generated on: 2020-12-19 04:06:52 : 1608331012*/
App::import('Model', 'Product');

class ProductTestCase extends CakeTestCase {
	var $fixtures = array('app.product', 'app.category', 'app.sub_category', 'app.product_image');

	function startTest() {
		$this->Product =& ClassRegistry::init('Product');
	}

	function endTest() {
		unset($this->Product);
		ClassRegistry::flush();
	}

}
?>