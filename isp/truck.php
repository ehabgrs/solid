<?php
namespace SOLID\ISP;

class Truck implements Vehicle,Cargo
{
	public function move(){
	    echo 'moving';	
	}
	public function stop(){
		echo 'stop';
	}
	
	public function carryCargo(){
		echo 'carrying cargo';
	}
	public function cargoWeight(){
		echo 'cargo weight';
	}
}