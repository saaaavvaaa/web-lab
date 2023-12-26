<?php
namespace Your\Store;

class PeperoniPizzaStore extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        switch ($type) {
            case 'peperoni':
                $pizza = new PeperoniPizza();
                return $pizza;
            default:
                throw new \InvalidArgumentException("Неизвестный тип пиццы: $type");
        }
    }
}
