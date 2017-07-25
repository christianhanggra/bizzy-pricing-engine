<?php

namespace Christianhanggra\Bizzy\PricingEngine;

use Christianhanggra\Bizzy\PricingEngine\Contracts\CalculatorInterface;

class Calculator implements CalculatorInterface
{
	protected $variable;

	/*
	 * Intialize depedency injection
	 */
	function __construct()
	{
		$this->variable = '';
	}

	/*
	 * Function foo
	 *
	 * Get id foo
	 *
	 * @return string
	 */
	public function foo()
	{
		return ['foo' => 'bar'];
	}
}