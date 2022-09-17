<?php
namespace SOLID\LSP;

class LSP_violation_subtype extends LSP_violation_type
{
	
	public function calculateSalary(int $tax)
	{
		//precondition 
		if($tax > 10) {
			return 'sorry tax can\'t be more than 10';
		}
		//post
		return $this->getSalary() - ($this->salary * ($tax + 2) /100) ; 
	}
	
}