<?php
namespace SOLID\OCP;

class Move_flying implements IMove
{
	public function move(): string
	{
		return 'I\'m flying in the sky';
	}

}