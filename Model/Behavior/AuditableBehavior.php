<?php
class AuditableBehavior extends ModelBehavior {

	public function setup(Model $Model, $settings) {
		$this -> Model = $Model;
		if (!isset($this -> settings[$Model -> alias])) {
			$this -> settings[$Model -> alias] = array();
		}
		$this -> settings[$Model -> alias] = array_merge($this -> settings[$Model -> alias], (array)$settings);
	}

	public function beforeSave() {
		//if(isset($_SESSION['Auth']['User']['id']) && !empty($_SESSION['Auth']['User']['id'])) {
		if (isset($_SESSION) && !empty($_SESSION)) {
			if ($this -> Model -> id) {
				//EDICION
				$this -> Model -> recursive = -1;
				$oldData = $this -> Model -> findById($this -> Model -> id);
				$this -> oldData = array($this -> Model -> id => $oldData);
			} else {
				// CREACION
			}
			//do something
			return true;
		} else {
			return false;
		}
	}

	public function afterSave($created) {
		if (isset($_SESSION) && !empty($_SESSION)) {
			if (isset($this -> oldData[$this -> Model -> id])) {
				//EDICION
				App::import("Model", "Ez.Audit");
				$this -> Audit = new Audit;
				$this -> Audit -> create();
				$audit['Audit'] = array('user_id' => $_SESSION['Auth']['User']['id'], 'model' => $this -> Model -> alias, 'model_id' => $this -> Model -> id, 'previus_data' => $this -> parseData($this -> oldData[$this -> Model -> id]), 'current_data' => $this -> parseData($this -> Model -> data), 'action' => 'EDIT');

				$this -> Audit -> save($audit);
				unset($this -> oldData[$this -> Model -> id]);
			} else {
				//CREACION
				App::import("Model", "Ez.Audit");
				$this -> Audit = new Audit;
				$this -> Audit -> create();

				$audit['Audit'] = array('user_id' => $_SESSION['Auth']['User']['id'], 'model' => $this -> Model -> alias, 'model_name' => $this -> Model -> id, 'previus_data' => 'No existen datos previos', 'current_data' => $this -> parseData($this -> Model -> data), 'action' => 'ADD', );
				$this -> Audit -> save($audit);
			}
		}
	}

	function beforeDelete() {

		if (isset($_SESSION) && !empty($_SESSION)) {
			if ($this -> Model -> id) {
				//EDICION
				$this -> Model -> recursive = -1;
				$oldData = $this -> Model -> findById($this -> Model -> id);
				$this -> oldData = array($this -> Model -> id => $oldData);
			}

			return true;
		} else {
			return false;
		}
	}

	function afterDelete() {

		if (isset($_SESSION) && !empty($_SESSION)) {
			App::import("Model", "Ez.Audit");
			$this -> Audit = new Audit;
			$this -> Audit -> create();
			$audit['Audit'] = array('user_id' => $_SESSION['Auth']['User']['id'], 'model' => $this -> Model -> alias, 'model_id' => $this -> Model -> id, 'previus_data' => $this -> parseData($this -> oldData[$this -> Model -> id]), 'current_data' => 'No existen datos nuevos', 'action' => 'DELETE');
			$this -> Audit -> save($audit);
		}

		unset($this -> oldData[$this -> Model -> id]);
	}

	private function parseData($data) {
		$newData = "";
		if ($data && is_array($data)) {
			foreach ($data as $alias => $rows) {
				$newData .= '<div class="audit">';
				foreach ($rows as $row => $value) {
					$newData .= "<div class='audit-entity'>";
					$newData .= "<label>";
					$newData .= $row;
					$newData .= "</label>";
					$newData .= "<span>";
					$newData .= $value;
					$newData .= "</span><div style='clear:both'></div>";
					$newData .= "</div>";
				}
				$newData .= '</div>';
			}
		}
		return $newData;
	}

}
