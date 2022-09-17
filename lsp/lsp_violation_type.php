<?php
namespace SOLID\LSP;

class LSP_violation_type
{
	protected $salary;
	
	public function getSalary() : int
	{
		return $this->salary;
	}
	
	public function setSalary($salary) : void
	{
		$this->salary = $salary;
	}
	
	public function calculateSalary(int $tax)
	{
		//precondition 
		if($tax > 15) {
			return 'sorry tax can\'t be more than 15';
		}
		return $this->getSalary() - ($this->salary * ($tax/100)) ; 
	}
	
}