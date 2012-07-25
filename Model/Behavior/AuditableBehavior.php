<?php
class AuditableBehavior extends ModelBehavior {
	
	public function setup(Model $Model, $settings) {
		$this -> Model = $Model;
	    if (!isset($this->settings[$Model->alias])) {
	        $this->settings[$Model->alias] = array(
	            
	        );
	    }
   	 	$this->settings[$Model->alias] = array_merge(
        $this->settings[$Model->alias], (array)$settings);
	}
	
    public function beforeSave() {
    	if ($this -> Model = 'Audit') return true;
        if($this -> Model -> id){
        	//EDICION
        	$this -> Model -> recursive = -1;
        	$oldData = $this -> Model -> findById($this -> Model -> id);
        $this -> oldData = array($this -> Model -> id => $oldData);
        }else{
        	// CREACION
        	
        }
        //do something
        return true;
    }
	public function afterSave($created){
		if ($this -> Model = 'Audit') return true;
		if(isset($this -> oldData[$this -> Model -> id]) && isset($_SESSION)){
			//EDICION
			App::import("Model", "Ez.Audit"); 
			$this -> Audit = new Audit;
			$this -> Audit -> create();
			$audit['Audit'] = array(
				'user_id' => $_SESSION['Auth']['User']['id'],
				'model' => $this -> Model -> alias,
				'model_id' => $this -> Model -> id,
				'previus_data' => $this -> parseData($this -> oldData[$this -> Model -> id]),
				'current_data' =>$this -> parseData($this -> Model -> data),
				'action' => 'EDIT'
			);
			
			$this -> Audit -> save($audit);
			unset($this -> oldData[$this -> Model -> id]);
		}else{
			//CREACION
			if(isset($_SESSION)){
				App::import("Model", "Ez.Audit"); 
				$this -> Audit = new Audit;
				$this -> Audit -> create();
				
				$audit['Audit'] = array(
					'user_id' => $_SESSION['Auth']['User']['id'],
					'model' => $this -> Model -> alias,
					'model_name' => $this -> Model -> id,
					'previus_data' => 'No existen datos previos',
					'current_data' =>  $this -> parseData($this -> Model -> data),
					'action' => 'ADD',
				);
				
				$this -> Audit -> save($audit);
			}
		}
		return true;
	}
	function beforeDelete(){
		if ($this -> Model = 'Audit') return true;
		if($this -> Model -> id){
        	//EDICION
        	$this -> Model -> recursive = -1;
        	$oldData = $this -> Model -> findById($this -> Model -> id);
        	$this -> oldData = array($this -> Model -> id => $oldData);
        }
	
		return true;
	}
	function afterDelete(){
		if ($this -> Model = 'Audit') return true;
		if(isset($_SESSION)){
			App::import("Model", "Ez.Audit"); 
			$this -> Audit = new Audit;
			$this -> Audit -> create();
			$audit['Audit'] = array(
				'user_id' => $_SESSION['Auth']['User']['id'],
				'model' => $this -> Model -> alias,
				'model_id' => $this -> Model -> id,
				'previus_data' => $this -> parseData($this -> oldData[$this -> Model -> id]),
				'current_data' => 'No existen datos nuevos',
				'action' => 'DELETE'
			);
		$this -> Audit -> save($audit);
		}
		unset($this -> oldData[$this -> Model -> id]);
		return true;
	}
	private function parseData($data){
		if ($this -> Model = 'Audit') return true;
		$newData="";
		if($data && is_array($data)){
		foreach($data as $alias => $rows){
			$newData.='<div class="audit">';
			foreach($rows as $row => $value){
				$newData.="<div class='audit-entity'>";
					$newData.="<label>";
						$newData.=$row;
					$newData.="</label>";
					$newData.="<span>";
						$newData.=$value;
					$newData.="</span><div style='clear:both'></div>";
				$newData.="</div>";
			}
			$newData.='</div>';
		}	
		}
		return $newData;
	}
}