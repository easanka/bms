<?php 

class Application_Model_Alarms_Alarm{

	public $message;

	public function __construct(){
		$this->message = "Hi Hello Asanka";
	}

	public function GetMessage(){
		return $this->message;
	}
}

?>