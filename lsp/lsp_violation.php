<?php
namespace SOLID\LSP;

class LSP_violation
{
	
	public function calculateSalaryofEmployee(LSP_violation_type $type, int $tax)
	{
		return $type->calculateSalary($tax); 
	}
	
}