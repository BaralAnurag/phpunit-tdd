<?php
/**
 * Created by PhpStorm.
 * User: anuragbaral
 * Date: 11/20/17
 * Time: 5:25 PM
 */


class AdditionTest extends \PHPUnit_Framework_TestCase
{

    /** @test */
    public function adding_operands()
    {
        $addition = new \App\Calculator\Addition;
        $addition-> setOperands([5,10]);

        $this->assertEquals(15, $addition->calculate());

    }

    /** @test */
    public function operands_no_exception()
    {
        $this->expectException(\App\Calculator\Exceptions\NoOperandsExceptions::class);

        $addition = new \App\Calculator\Addition;
        $addition->calculate();

    }
}


 ?>