<?php
require_once 'vendor/autoload.php';

use Your\Store\MargarittaPizzaStore;
use Your\Store\PeperoniPizzaStore;

$pizzaType = $_POST['pizzaType'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && is_string($pizzaType) && $pizzaType !== '') {
    if ($pizzaType === 'margaritta') {
        $pizzaStore = new MargarittaPizzaStore();
    } elseif ($pizzaType === 'peperoni') {
        $pizzaStore = new PeperoniPizzaStore();
    } else {
        die("Неизвестный тип пиццы: $pizzaType");
    }

    $pizzaStore->orderPizza((string) $pizzaType);

} else {
    ?>
    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pizza Shop</title>
    </head>

    <body>
        <h1>Выбери вид пиццы:</h1>

        <form method="post">
            <button type="submit" name="pizzaType" value="margaritta">Margarita Pizza</button>
            <button type="submit" name="pizzaType" value="peperoni">Peperoni Pizza</button>
        </form>
    </body>

    </html>
    <?php
}
?>