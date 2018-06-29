<?php

namespace SDVFilter;

class SDVFilter
{
    protected $arr_elements = [];
    protected $arr_outgoing = [];

    /**
     * SDVFilter constructor.
     *
     * @param $incom_arrray
     */
    public function __construct($incom_arrray)
    {
        $this->arr_elements = $incom_arrray;
    }

    /**
     * Filter elements more than value
     *
     * @param $value
     * @return array
     */
    public function moreThan($value)
    {
        foreach ($this->arr_elements as $arr_element)
        {
            if ($arr_element > $value) {
                $this->arr_outgoing[] = $arr_element;
            }
        }
        return $this->arr_outgoing;
    }

    /**
     * Filter elements less than value
     *
     * @param $value
     * @return array
     */
    public function lessThan($value)
    {
        foreach ($this->arr_elements as $arr_element)
        {
            if ($arr_element < $value) {
                $this->arr_outgoing[] = $arr_element;
            }
        }
        return $this->arr_outgoing;
    }
}