<?php 

class Person{
	private $name;
	private $email;

	public function __construct($name, $email){
		$this->name = $name;
		$this->email = $email;
	}
	public function setName($name){
		$this->$name = $name;
	}
	public function getName(){
		return $this->name;
	}
	public function setEmail($email){
		$this->$email = $email;
	}
	public function getEmail($email){
		return $this->email;
	}

}
class Customer extends Person{
	private $balance;
	public function __construct($name, $email, $balance){
		parent::__construct($name,$email);
		$this->balance=$balance;
	}
	public function getBalance(){
		return $this->balance;
	}
}

//$person1 = new Person('john doe', 'j@doe.com');
//var_dump($person1);
// echo $person1->getName();
$custormer1=new Customer('john doe', 'john@gmail.com', 300);
echo $custormer1->getBalance();



?>