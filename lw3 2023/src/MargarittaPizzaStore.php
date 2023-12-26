<?php
namespace Your\Store;

class MargarittaPizzaStore extends Store
{
    public function createPizza(string $type): Pizza
    {
        switch ($type) {
            case 'margaritta':
                $pizza = new MargarittaPizza();
                return $pizza;
            default:
                throw new \InvalidArgumentException("Неизвестный тип пиццы: $type");
        }
    }
}
