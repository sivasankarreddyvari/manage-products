<?php
/* ProductImages Test cases generated on: 2020-12-19 04:08:25 : 1608331105*/
App::import('Controller', 'ProductImages');

class TestProductImagesController extends ProductImagesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProductImagesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.product_image', 'app.product', 'app.category', 'app.sub_category');

	function startTest() {
		$this->ProductImages =& new TestProductImagesController();
		$this->ProductImages->constructClasses();
	}

	function endTest() {
		unset($this->ProductImages);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

	function testAdminIndex() {

	}

	function testAdminView() {

	}

	function testAdminAdd() {

	}

	function testAdminEdit() {

	}

	function testAdminDelete() {

	}

}
?>