<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\CarBrand;

class CarBrandTest extends TestCase
{
    public function test_instantiation_without_errors()
    {
        $carBrand = new CarBrand();
        $this->assertInstanceOf(CarBrand::class, $carBrand);
    }
}
