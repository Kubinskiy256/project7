<?php

namespace kubinskiy\project;

class PizzaStore {
   
    public array $speciePizza=["Пицца пеппероний", "Пицца маргарита", "Пицца с сыром"];

    public function orderPizza(string $type):void
    {
        $pizza = $this->createPizza($type);
        $pizza->prepare();
    }
    public function createPizza(string $type): Pizza|string
        {
            if($type === "Пицца пеппероний") {
                $newPizza1 = new PizzaWithPepperoni();
                return $newPizza1;
            }

            if($type === "Пицца  маргарита"){
                $newPizza2 = new PizzaWithMargherita();
                return $newPizza2;
            }
            
            if($type ==="Пицца с сыром"){
                $newPizza3 = new PizzaWithCheese();
                return $newPizza3;
            }

            $i=0;
            foreach($this->speciesPizza as $speciePizza){
                if($type === $speciePizza){
                    $i=$i+1;
                }
            }

            if($i===0){
                return"Такой пиццы нет в списке возможных";
            }
            $i=0;
            exit;


        }


    }

