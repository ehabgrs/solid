<?php
namespace SOLID\ISP;

class Car implements Vehicle,Entertainment,Speed
{
	public function move(){
		echo 'moving';
	}
	
	public function stop(){
		echo 'stop';
	}
	
	public function musicPlay(){
		echo 'music play';
	}
	public function pause(){
		echo 'pause';
	}
	public function accelerate(){
		echo 'accelerate';
	}
}