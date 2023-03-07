<?php

namespace Tests\Unit;

use App\Models\Entites\Customer;
use Tests\TestCase;
class CustomerTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function testGetAll(): void
    {
        $model = new Customer();
        $data = $model->get();
        $this->assertTrue(true);
    }
}
