<?php
class SubCategoriesController extends AppController {

	var $name = 'SubCategories';

	function index() {
		$this->SubCategory->recursive = 0;
		$this->set('subCategories', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid sub category', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('subCategory', $this->SubCategory->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SubCategory->create();
			if ($this->SubCategory->save($this->data)) {
				$this->Session->setFlash(__('The sub category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sub category could not be saved. Please, try again.', true));
			}
		}
		$categories = $this->SubCategory->Category->find('list');
		$this->set(compact('categories'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid sub category', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->SubCategory->save($this->data)) {
				$this->Session->setFlash(__('The sub category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sub category could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SubCategory->read(null, $id);
		}
		$categories = $this->SubCategory->Category->find('list');
		$this->set(compact('categories'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for sub category', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SubCategory->delete($id)) {
			$this->Session->setFlash(__('Sub category deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Sub category was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->SubCategory->recursive = 0;
		$this->set('subCategories', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid sub category', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('subCategory', $this->SubCategory->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->SubCategory->create();
			if ($this->SubCategory->save($this->data)) {
				$this->Session->setFlash(__('The sub category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sub category could not be saved. Please, try again.', true));
			}
		}
		$categories = $this->SubCategory->Category->find('list');
		$this->set(compact('categories'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid sub category', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->SubCategory->save($this->data)) {
				$this->Session->setFlash(__('The sub category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sub category could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SubCategory->read(null, $id);
		}
		$categories = $this->SubCategory->Category->find('list');
		$this->set(compact('categories'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for sub category', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SubCategory->delete($id)) {
			$this->Session->setFlash(__('Sub category deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Sub category was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>