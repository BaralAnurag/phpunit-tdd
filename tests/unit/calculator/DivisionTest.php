<?php
/**
 * Created by PhpStorm.
 * User: anuragbaral
 * Date: 11/20/17
 * Time: 6:11 PM
 */


class DivisionTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function divide_operands()
    {
        $division = new \App\Calculator\Division;
        $division-> setOperands([100,2]);

        $this->assertEquals(50, $division->calculate());
    }
    /** @test */
    public function operands_no_exception()
    {
        $this->expectException(\App\Calculator\Exceptions\NoOperandsExceptions::class);

        $addition = new \App\Calculator\Division;
        $addition->calculate();

    }




    /** @test */
    public function remove_zero()
    {
        $division = new \App\Calculator\Division;
        $division-> setOperands([10, 0, 0, 5, 0]);

        $this->assertEquals(2, $division->calculate());

    }

}


?>
