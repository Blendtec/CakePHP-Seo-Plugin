<?php
App::uses('SeoAppController', 'Seo.Controller');
class SeoTitlesController extends SeoAppController {

	var $name = 'SeoTitles';
	
	function admin_index() {
        $this->Prg->commonProcess($this->model->alias, array('action' => 'index'));
        $this->Paginator->settings['conditions']
            = $this->SeoTitle->parseCriteria($this->passedArgs);
        $this->set('seoTitles', $this->Paginator->paginate($this->model->alias));
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid seo title'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('seoTitle', $this->SeoTitle->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->SeoTitle->clear();
			if ($this->SeoTitle->save($this->data)) {
				$this->Session->setFlash(__('The seo title has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The seo title could not be saved. Please, try again.'));
			}
		}
		$seoUris = $this->SeoTitle->SeoUri->find('list');
		$this->set(compact('seoUris'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid seo title'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->SeoTitle->save($this->data)) {
				$this->Session->setFlash(__('The seo title has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The seo title could not be saved. Please, try again.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SeoTitle->read(null, $id);
		}
		$seoUris = $this->SeoTitle->SeoUri->find('list');
		$this->set(compact('seoUris'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for seo title'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SeoTitle->delete($id)) {
			$this->Session->setFlash(__('Seo title deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Seo title was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
?>