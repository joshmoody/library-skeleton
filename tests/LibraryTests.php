<?php
namespace joshmoody\Library\Tests;

use joshmoody\Library\FooBar;

class LibraryTests extends \PHPUnit_Framework_TestCase
{
	public $instance = null;
	
	public function __construct()
	{
		$this->instance = new FooBar();
	}
	
	public function testFooShouldReturnBar()
	{
		$this->assertEquals('bar', $this->instance->foo('bar'));
	}

	/**
	 * @expectedException \InvalidArgumentException
	 */
	public function testMissingParamShouldThrowException()
	{
		$result = $this->instance->foo();
	}
}
