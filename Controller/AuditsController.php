<?php
App::uses('EzAppController', 'Ez.Controller');
/**
 * Audits Controller
 *
 * @property Audit $Audit
 */
class AuditsController extends EzAppController {

	/**
	 * Listado de audits
	 *
	 * @return void
	 */
	public function index() {
		$this -> Audit -> recursive = 0;
		$this -> set('audits', $this -> paginate());
	}

	/**
	 * Ver una audits
	 *
	 * @param int $id ID de la audits
	 * @return void
	 */
	public function view($id) {
		$this -> Audit -> id = $id;
		if (!$this -> Audit -> exists()) {
			throw new NotFoundException(__('Invalid audit'));
		}
		$this -> set('audits', $this -> Audit -> read(null, $id));
	}

}
