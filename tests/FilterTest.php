<?php

use PHPUnit\Framework\TestCase;
use SDVFilter\SDVFilter;

class FilterTest extends TestCase
{
    public $sdvFilter;
    public $arr_elements = [];
    public $arr_outgoing = [];
    public $arr_waiting = [];
    
    public function testSetArraySuccess()
    {
        $this->arr_elements = [1, 2, 3, 4, 5, 6];
        $this->sdvFilter = new SDVFilter($this->arr_elements);
    }

    public function testSetArrayFailed()
    {
        $this->arr_elements = [1, 2, 3, 'non-numeric', 5, 6];
        $this->sdvFilter = new SDVFilter($this->arr_elements);
    }

    public function testMoreThanSuccess($value = 3)
    {
        $this->arr_elements = [1, 2, 3, 4, 5, 6];
        $this->sdvFilter = new SDVFilter($this->arr_elements);
        $this->arr_outgoing = $this->sdvFilter->moreThan($value);
        $this->arr_waiting = [4, 5, 6];
        $this->assertEquals($this->arr_waiting, $this->arr_outgoing);
    }

    public function testMoreThanFailed($value = 3)
    {
        $this->arr_elements = [1, 2, 3, 4, 5, 6];
        $this->sdvFilter = new SDVFilter($this->arr_elements);
        $this->arr_outgoing = $this->sdvFilter->moreThan($value);
        $this->arr_waiting = [3, 4, 5, 6];
        $this->assertNotEquals($this->arr_waiting, $this->arr_outgoing);
    }

    public function testLessThanSuccess($value = 3)
    {
        $this->arr_elements = [1, 2, 3, 4, 5, 6];
        $this->sdvFilter = new SDVFilter($this->arr_elements);
        $this->arr_outgoing = $this->sdvFilter->lessThan($value);
        $this->arr_waiting = [1, 2];
        $this->assertEquals($this->arr_waiting, $this->arr_outgoing);
    }

    public function testLessThanFailed($value = 3)
    {
        $this->arr_elements = [1, 2, 3, 4, 5, 6];
        $this->sdvFilter = new SDVFilter($this->arr_elements);
        $this->arr_outgoing = $this->sdvFilter->lessThan($value);
        $this->arr_waiting = [1, 2, 3,];
        $this->assertNotEquals($this->arr_waiting, $this->arr_outgoing);
    }
}