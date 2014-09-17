<?php
Class user{
	private $name;
	private $availableSlot;

	/**
	 * 
	 * Enter description here ...
	 * @param string $n
	 * @param array $slot 
	 */
	public function __construct($n,$slot){
		$this->name = $n;
		$availableSlot[] = $slot; //<-maybe not correct
		
	}
	public function getName(){
		return $this->name;
	}

	public function __toString(){
		$result = "Name:".$this->name;
		return $result;
	}
}
?>