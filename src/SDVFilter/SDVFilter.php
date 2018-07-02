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
        $this->arr_elements = array_map([$this, 'checkElement'], $incom_arrray);
    }

    /**
     * Check elements for numeric value
     *
     * @param $elem
     * @return mixed
     */
    public function checkElement($elem)
    {
        try {
            if (!is_numeric($elem)) {
                throw new \Exception("Array has element with non-numeric value");
            }
        } catch (\Exception $e) {
            print_r($e->getMessage());
            return;
        }
        return $elem;
    }

    /**
     * Filter elements more than value
     *
     * @param $value
     * @return array
     */
    public function moreThan($value)
    {
        foreach ($this->arr_elements as $arr_element) {
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
        foreach ($this->arr_elements as $arr_element) {
            if ($arr_element < $value) {
                $this->arr_outgoing[] = $arr_element;
            }
        }
        return $this->arr_outgoing;
    }
}