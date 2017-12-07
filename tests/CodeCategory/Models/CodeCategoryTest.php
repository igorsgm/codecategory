<?php

namespace CodePress\CodeCategory\Tests\Models;


use CodePress\CodeCategory\Models\Category;
use CodePress\CodeCategory\Tests\AbstractTestCase;

class CodeCategoryTest extends AbstractTestCase
{
	public function setUp()
	{
		parent::setUp();
		$this->migrate();
	}

	public function testCheckIfACategoryCanBePersisted()
	{
		$category = Category::create(['name' => 'Category Test', 'active' => true]);

		$this->assertEquals('Category Test', $category->name);
	}
}