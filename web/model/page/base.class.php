<?php
/**
 * Created by PhpStorm.
 * User: kkosu
 * Date: 19.03.2018
 * Time: 22:07
 */

namespace page;
use core\core;
use database\database;


class basepage
{
    public function getRenderer($method = NULL)
    {
        if (empty($method[1])) {
            $this->renderDefault();
        } else {
            $render = $method[1];
            $render = ucfirst($render);
            $render = "render".$render;
            unset($method[1]);
            foreach ($method as $key => $value){
                $options[] = $value;
            }

            $this->$render($options);
        }
    }

    public function renderDefault(){
        echo "render default";
    }

}