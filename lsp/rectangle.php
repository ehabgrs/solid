<?php
namespace SOLID\LSP;

class Rectangle
{
	protected $width;
	protected $height;
	
	public function getWidth() : int
	{
		return $this->width;
	}
	
	
	public function setWidth($width) : void
	{
		$this->width = $width;
	}
	
	public function getHeight() : int
	{
		return $this->height;
	}
	
	
	public function setHeight($height) : void
	{
		$this->height = $height;
	}
	
	public function getArea()
	{
		return $this->getWidth() * $this->getHeight();
	}
	
}