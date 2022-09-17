<?php
namespace SOLID\OCP;

class Trip
{
	/**
	* @var IVehicle
	*/
	private $vehicle;
	
	/**
	* @var string
	*/
	private $tripNumber;
	
	/**
	* @var float
	*/
	private $tripPrice;
	
	/**
	* @var int
	*/
	private $duration;
	
	public function __construct(IVehicle $vehicle, string $tripNumber, float $tripPrice, int $duration)
	{
		$this->setVehicle($vehicle);
		$this->setTripNumber($tripNumber);
		$this->setTripPrice($tripPrice);
		$this->setDuration($duration);
	}
	
	/**
	* @return IVehicle
	*/
	public function getVehicle(): IVehicle
	{
		return $this->vehicle;
	}
	
	/**
	* @param IVehicle $vehicle
	*/
	public function setVehicle($vehicle): void
	{
		$this->vehicle = $vehicle;
	}
	
	
	/**
	* @return string
	*/
	public function getTripNumber(): string
	{
		return $this->tripNumber;
	}
	
	/**
	* @param string $tripNumber
	*/
	public function setTripNumber($tripNumber): void
	{
		$this->tripNumber = $tripNumber;
	}
	
	/**
	* @return float
	*/
	public function getTripPrice(): float
	{
		return $this->tripPrice;
	}
	
	/**
	* @param float $tripPrice
	*/
	public function setTripPrice($tripPrice): void
	{
		$this->tripPrice = $tripPrice;
	}
	
	/**
	* @return int
	*/
	public function getDuration(): int
	{
		return $this->duration;
	}
	
	/**
	* @param int $duration
	*/
	public function setDuration($duration): void
	{
		$this->duration = $duration;
	}
	
	public function move(): string
	{
		return $this->vehicle->getMovement()->move();
	}
	
	
	
}
