<?php
class Usuario{
    private  $name;
    private  $clave; 
	private $prioridad;

	

	
    function __construct($name,$clave,$prioridad)
    {
        $this->name=$name;
        $this->clave=$clave;
		$this->prioridad=$prioridad;
    }
    public function getName() {
		return $this->name;
	}

	public function getClave() {
		return $this->clave;
	}

	public function setClave($clave) {
		$this->clave=$clave;
	}


	public function setName($name) {
		$this->name=$name;
	}
	public function getPrioridad(){
		return $this->prioridad;
	}
	public function setPrioridad($prioridad){
		$this->prioridad=$prioridad;
	}
    



}