<?php
/**
 * Created by PhpStorm.
 * User: anuragbaral
 * Date: 11/20/17
 * Time: 6:18 PM
 */
namespace App\Calculator;

abstract class OperationAbstract
{
    protected $operands;

    public function setOperands(array $operands)
    {
        $this->operands = $operands;
    }

}