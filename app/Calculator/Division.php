<?php
/**
 * Created by PhpStorm.
 * User: anuragbaral
 * Date: 11/20/17
 * Time: 6:14 PM
 */


namespace App\Calculator;

use App\Calculator\Exceptions\NoOperandsExceptions;

class Division extends OperationAbstract implements OperationInterface
{

    public function calculate()
    {
        if(count($this->operands)===0)
        {
            throw new NoOperandsExceptions;
        }



        return array_reduce(array_filter($this->operands), function($a,$b){
            if($a !==null && $b !== null){
                return $a/$b;
            }
            return $b;

        },null);

    }
}