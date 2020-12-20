<?php
/* SubCategories Test cases generated on: 2020-12-19 03:58:39 : 1608330519*/
App::import('Controller', 'SubCategories');

class TestSubCategoriesController extends SubCategoriesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SubCategoriesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.sub_category', 'app.category', 'app.product');

	function startTest() {
		$this->SubCategories =& new TestSubCategoriesController();
		$this->SubCategories->constructClasses();
	}

	function endTest() {
		unset($this->SubCategories);
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