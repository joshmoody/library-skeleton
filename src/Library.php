<?php

namespace joshmoody\Library;

class Library
{
	public function __construct()
	{
	
	}
	
	public function foo($bar = null)
	{
		if (empty($bar)) {
			throw new \InvalidArgumentException('$bar is required');
		} else {
			return $bar;
		}
	}
}
