<?php
/**
 * Created by PhpStorm.
 * User: anuragbaral
 * Date: 11/20/17
 * Time: 5:31 PM
 */

namespace App\Calculator;

use App\Calculator\Exceptions\NoOperandsExceptions;

class Addition extends OperationAbstract implements OperationInterface
{
    protected $operands;

    public function setOperands(array $operands)
    {
        $this->operands = $operands;
    }

    public function calculate()
    {
        if(count($this->operands)===0)
        {
            throw new NoOperandsExceptions;
        }
        return array_sum($this->operands);
    }
}