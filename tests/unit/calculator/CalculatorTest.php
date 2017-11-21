<?php
/**
 * Created by PhpStorm.
 * User: anuragbaral
 * Date: 11/20/17
 * Time: 7:39 PM
 */

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
   /** @test */
   public function can_set_single_operation()
   {
       $addition = new \App\Calculator\Addition;
       $addition-> setOperands([5,10]);

       $calculator = new \App\Calculator\Calculator;
       $calculator->setOperation($addition);

       $this->assertCount(1, $calculator->getOperations());
   }

   /** @test */
   public function can_set_operations()
   {
       $addition1 = new \App\Calculator\Addition;
       $addition1-> setOperands([5,10]);

       $addition2 = new \App\Calculator\Addition;
       $addition2-> setOperands([2,2]);

       $calculator = new \App\Calculator\Calculator;
       $calculator->setOperations([$addition1, $addition2]);

       $this->assertCount(2, $calculator->getOperations());

   }

   /** @test */
   public function operations_ignored()
   {
       $addition = new \App\Calculator\Addition;
       $addition-> setOperands([5,10]);

       $calculator = new \App\Calculator\Calculator;
       $calculator->setOperations([$addition, 'cats']);

       $this->assertCount(1, $calculator->getOperations());


   }

   /** @test */

   public function calculate_result()
    {
        $addition = new \App\Calculator\Addition;
        $addition-> setOperands([5,10]);

        $calculator = new \App\Calculator\Calculator;
        $calculator->setOperation($addition);

        $this->assertEquals(15, $calculator->calculate());

    }

    /** @test */

    public function calculate_multiple_returns()
    {
        $addition = new \App\Calculator\Addition;
        $addition-> setOperands([5,10]);

        $division = new \App\Calculator\Division;
        $division-> setOperands([50,2]);

        $calculator = new \App\Calculator\Calculator;
        $calculator->setOperations([$addition, $division]);

        $this->assertInternalType('array', $calculator->calculate());

        $this->assertEquals(15, $calculator->calculate()[0]);
        $this->assertEquals(25, $calculator->calculate()[1]);

    }

}


?>
