<?php
class SeoCanonicalsController extends SeoAppController {

	var $name = 'SeoCanonicals';

	function admin_index() {
        $this->Prg->commonProcess($this->model->alias, array('action' => 'index'));
        $this->Paginator->settings['conditions']
            = $this->SeoCanonical->parseCriteria($this->passedArgs);
        $this->set('seoCanonicals', $this->Paginator->paginate($this->model->alias));
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid seo canonical'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('seoCanonical', $this->SeoCanonical->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->SeoCanonical->clear();
			if ($this->SeoCanonical->save($this->data)) {
				$this->Session->setFlash(__('The seo canonical has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The seo canonical could not be saved. Please, try again.'));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid seo canonical'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->SeoCanonical->save($this->data)) {
				$this->Session->setFlash(__('The seo canonical has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The seo canonical could not be saved. Please, try again.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SeoCanonical->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for seo canonical'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SeoCanonical->delete($id)) {
			$this->Session->setFlash(__('Seo canonical deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Seo canonical was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
