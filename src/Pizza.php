<?php

namespace kubinskiy\project;

class Pizza{
    public  string $name;
    public string $sauce;
    public array $toppings=[];
    public function prepare(): string
    {
        echo "Началась готовка пиццы: $this->name\n";
        echo "Добавлен соус $this->sauce\n";
        echo "Добавлены топики:";
        foreach($this-> toppings as $toppings){
            echo " $toppings ";
        }
        echo "\n";
    }
    public function cut(): string
    {
        echo "Данную пиццу нарезают по диагонали\n";
    }
    
}