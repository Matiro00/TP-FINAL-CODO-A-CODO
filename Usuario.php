<?php
class Usuario{
    private  $name;
    private  $clave; 

	

	
    function __construct($name,$clave)
    {
        $this->name=$name;
        $this->clave=$clave;
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
    



}