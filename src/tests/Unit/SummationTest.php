<?php
namespace Tests\Unit;

use App\Summation;
use App\Multiple;
use PHPUnit\Framework\TestCase;

class SummationTest extends TestCase
{
    /** @test */
    public function summation_test()
    {
        $summationObj = new Summation();

        $result = $summationObj->sum(10, 10);

        //assertion - expectation
        $this->assertEquals(20, $result);
    }

    public function test_can_mulitple()
    {
        $multipleObj = new Multiple();

        $result = $multipleObj->multiple(10, 10);

        //assertion
        $this->assertEquals(100, $result);
    }
}