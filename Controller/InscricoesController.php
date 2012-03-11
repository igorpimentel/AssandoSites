<?php
class InscricoesController extends AppController {
	public $uses = array('Inscricao');
	
	public function inscrever() {	
						
		if ($this->request->is('post') && !empty($this->request->data)) {			
			
			if ($this->Inscricao->save($this->request->data)) {				
			
				$this->redirect('/inscricoes/obrigado');
			}
		}
	
		$this->render('form_inscricoes');
	}
}
?>