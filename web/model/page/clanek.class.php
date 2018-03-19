<?php
/**
 * Created by PhpStorm.
 * User: kkosu
 * Date: 19.03.2018
 * Time: 22:45
 */


namespace page;
use page\basepage;

class clanekpage extends basepage {
    public function __construct($method)
    {
        parent::getRenderer($method);
    }

    public function renderDefault(){
        echo "render default Clanek";
    }


} // */