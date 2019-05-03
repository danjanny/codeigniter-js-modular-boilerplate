<?php
/**
 * Created by PhpStorm.
 * User: DANJANNY
 * Date: 03/05/2019
 * Time: 10:26
 */

namespace Danjan;

class Testing {
    private $name = "Ridha Danjanny";
    public function __construct()
    {
    }

    public function getData() {
        echo $this->name;
    }
}