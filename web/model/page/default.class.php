<?php
/**
 * Created by PhpStorm.
 * User: kkosu
 * Date: 19.03.2018
 * Time: 22:07
 */

namespace page;


class defaultpage
{
    public function __construct($method)
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

    public function renderA($options = NULL){
        echo "A<br>";
        echo $options[0];
    }

}