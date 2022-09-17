<?php
namespace SOLID\OCP;

class Bus extends Vehicle
{
	private $busNumber;
	private $numberOfPassenger;
	private $doors;

	public function __construct()
	{
		
	}
	
	public function getBusNumber() :int
	{
		return $this->busNumber;
	}
	
	public function setBusNumber(int $busNumber): void
	{
		$this->busNumber = $busNumber;
	}
	
	public function getNumberOfPassenegr() : int
	{
		return $this->numberOfPassenger;
	}
	
	/**
	*@param int $numberOfPassenger numberOfPassenger 
	*/
	
	public function setNumberOfPassenegr(int $numberOfPassenger) : void
	{
		$this->numberOfPassenger = $numberOfPassenger;
	}
	
	
	public function getDoors() :int
	{
		return $this->doors;
	}
	
	public function setDoors(int $doors) : void
	{
		$this->doors = $doors;
	}

	
	public function doMaintenance()
	{
		return 'this bus doing maintenance right now';
	}
	
	
	
}