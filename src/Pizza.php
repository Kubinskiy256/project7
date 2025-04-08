<?php

namespace Kubinskiy\project;

class Pizza{
    public $name;
    public $sauce;
    public $toppings=[];
    public function prepare(){
        echo "Началась готовка пиццы: this->name\n";
        echo "Добавлен соус this->sauce\n";
        echo "Добавлены топики:";
        foreach($this-> toppings as $toppings){
            echo " $toppings ";
        }
        echo "\n";
    }
    public function cut(){
        echo "Данную пиццу нарезают по диагонали\n";
    }
    
}