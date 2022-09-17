<?php
namespace SOLID\SRP;
class Driver
{
	/**
	* @var string
	*/
	private $name;
	/**
	* @var int
	*/
	private $age;
	private $insuranceNumber;
	private $address;
	
	public function __construct(string $name,int $age,int $insuranceNumber,string $address)
	{
		$this->setName($name);
		$this->setAge($age);
		$this->setInsuranceNumber($insuranceNumber);
		$this->setAddress($address);
	}
	
	
	public function getAge() : int
	{
		return $this->age;
	}
	
	public function setAge(int $age) : void
	{
		$this->age = $age;
	}
	
	public function getName() : string
	{
		return $this->name;
	}
	
	public function setName(string $name) : void
	{
		$this->name = $name;
	}
	
	
	public function getInsuranceNumber() : int
	{
		return $this->insuranceNumber;
	}
	
	public function setInsuranceNumber(int $insuranceNumber) : void
	{
		$this->insuranceNumber = $insuranceNumber;
	}
	
	public function getAddress() : string
	{
		return $this->address;
	}
	
	public function setAddress(string $address) : void
	{
		$this->address = $address;
	}
}