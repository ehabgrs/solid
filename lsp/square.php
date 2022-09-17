<?php
namespace SOLID\LSP;

class Square extends Rectangle
{
	
	public function setWidth($width) : void
	{
		$this->width = $width;
		$this->height = $width;	
	}
	
	public function setHeight($height) : void
	{
		$this->height = $height;
		$this->width = $height;	
	}
}