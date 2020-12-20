<?php
/* ProductImage Test cases generated on: 2020-12-19 04:16:19 : 1608331579*/
App::import('Model', 'ProductImage');

class ProductImageTestCase extends CakeTestCase {
	var $fixtures = array('app.product_image', 'app.product', 'app.category', 'app.sub_category');

	function startTest() {
		$this->ProductImage =& ClassRegistry::init('ProductImage');
	}

	function endTest() {
		unset($this->ProductImage);
		ClassRegistry::flush();
	}

}
?>