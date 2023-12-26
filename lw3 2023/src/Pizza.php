<?php
namespace Your\Store;

abstract class Pizza
{

    protected string $name;

    protected string $sauce;


    protected int $toppings = [];


    abstract public function prepare();


    public function cut(): void
    {
        echo "Данную пиццу нарезают по диагонали\n";
    }
}
