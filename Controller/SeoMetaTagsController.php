<?php
class SeoMetaTagsController extends SeoAppController {

	var $name = 'SeoMetaTags';
	
	function admin_index() {
        $this->Prg->commonProcess($this->model->alias, array('action' => 'index'));
        $this->Paginator->settings['conditions']
            = $this->SeoMetaTag->parseCriteria($this->passedArgs);
        $this->set('seoMetaTags', $this->Paginator->paginate($this->model->alias));
	}
	
	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid seo meta tag'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('seoMetaTag', $this->SeoMetaTag->read(null, $id));
		$this->set('id', $id);
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->SeoMetaTag->clear();
			if ($this->SeoMetaTag->save($this->data)) {
				$this->Session->setFlash(__('The seo meta tag has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The seo meta tag could not be saved. Please, try again.'));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid seo meta tag'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->SeoMetaTag->save($this->data)) {
				$this->Session->setFlash(__('The seo meta tag has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The seo meta tag could not be saved. Please, try again.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SeoMetaTag->read(null, $id);
		}
		$this->set('id', $id);
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for seo meta tag'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SeoMetaTag->delete($id)) {
			$this->Session->setFlash(__('Seo meta tag deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Seo meta tag was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
?>