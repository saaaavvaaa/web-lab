<?php

namespace Your\Store;

abstract class PizzaStore
{
    abstract public function createPizza(string $type): Pizza;

    public function orderPizza(string $type): void
    {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->cut();
    }
}
