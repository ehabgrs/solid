<?php
namespace SOLID\OCP;

abstract class Vehicle implements IVehicle
{
	private $color;
	private $maximumSpeed;
	
	/**
	*@var Driver
	*/
	private $driver;
	
	/**
	*@var array
	*/
	private $routes = [];
	
	/**
	*@var IMove
	*/
	private $movement;
	
	
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
	
	public function getRoutes() : Route
	{
		return $this->routes;
	}
	
	public function addRoute(Route $route) : void
	{
		$this->routes[] = $route; 
	}
	
	public function getDriver() : Driver
	{
		return $this->driver;
	}
	
	public function setDriver(Driver $driver) : void
	{
		$this->driver = $driver;
	}
	
	public function getMovement() : IMove
	{
		return $this->movement;
	}
	
	public function setMovement(IMove $movement) : void
	{
		$this->movement = $movement;
	}
	
}