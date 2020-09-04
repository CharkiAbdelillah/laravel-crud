<?php

namespace Tests\Unit;
use PHPUnit\Framework\TestCase;
use App\Http\Controllers\ProductsController;
// use WithFaker;
class ProductTest extends TestCase
{

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testsetUp(){
        parent::setUp();
        $this->setBaseRoute('products');
    }
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        
        $response = $this->assertFalse('GET', 'ProductsController@index');
    }
}
