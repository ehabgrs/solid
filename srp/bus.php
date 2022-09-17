<?php
namespace SOLID\SRP;

class Bus 
{
	private $busNumber;
	private $numberOfPassenger;
	private $color;
	private $maximumSpeed;
	private $doors;
	/**
	*@var Driver
	*/
	private $driver;
	/**
	*@var array
	*/
	private $routes = [];
	
	public function __construct()
	{
		
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
	
	public function getColor() : string
	{
		return $this->color;
	}
	
	public function setColor(string $color) : void
	{
		$this->color = $color;
	}
	
	public function getMaximumSpeed() : string
	{
		return $this->maximumSpeed. ' km/hr';
	}
	
	public function setMaximumSpeed(int $maximumSpeed) :void
	{
		$this->maximumSpeed = $maximumSpeed;
	}
	

	
	public function getDoors() :int
	{
		return $this->doors;
	}
	
	public function setDoors(int $doors) : void
	{
		$this->doors = $doors;
	}
	
	public function getRoutes() : Route
	{
		return $this->routes;
	}
	
	//encapsulate the route class inside the bus class
	public function addRoute(Route $route) : void
	{
		$this->routes[] = $route; 
	}
	
	public function getBusNumber() :int
	{
		return $this->busNumber;
	}
	
	public function setBusNumber(int $busNumber): void
	{
		$this->busNumber = $busNumber;
	}
	
	public function getDriver() : Driver
	{
		return $this->driver;
	}
	
	public function setDriver(Driver $driver) : void
	{
		$this->driver = $driver;
	}
	
	
	/**
	*@param string $from the from destination
	*@param string $to the to destination
	*@return string the output 
	*/
	public function driveToRoute(string $from, string $to) : string
	{
		return 'i\'m driving from '.$from.' to ' . $to;
	}
	
	public function doMaintenance()
	{
		return 'this bus doing maintenance right now';
	}
	
	public function move() : string
	{
		$output = '<p> I\'m a bus my color is '.$this->getColor().
		          ' and my driver name is '.$this->getDriver()->getName().'</p>';
		foreach($this->routes as $route)
		{
			$output .='<p> I\'m moving now from '.$route->getSource().
			          ' to '.$route->getDestination().
					  ' at a maximum speed '.$this->maximumSpeed.'k/h</p>';
		}
		return $output;
	}
	
	
}