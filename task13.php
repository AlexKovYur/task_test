<?php
//13. Создайте массив продуктов с параметрами id, price, name.
// Выведите каждый товар в виде "id. name - price". После каждого добавьте форму с кнопкой купить.
// Сделать обработку этой кнопки с добавлением товара в корзину. Сделать через сессию.
// При повторном нажатие, если товар уже в корзине, то его количество должно увеличиваться на 1.
// Снизу сделать вывод, что уже есть в корзине.

session_start();

$products = [
    [
        'id' => 1,
        'price' => 100,
        'name' => 'Продукт'
    ],
    [
        'id' => 2,
        'price' => 200,
        'name' => 'Продукт2'
    ],
    [
        'id' => 3,
        'price' => 300,
        'name' => 'Продукт3'
    ],
];

$idBuy = $_POST['id_buy'] ?? 0;
$name = $_POST['name_buy'] ?? '';

if ($idBuy && $name) {

    if (empty($_SESSION['product'][$idBuy])) {
        $_SESSION['product'][$idBuy] = [
            'name' => $name,
            'count' => 1
        ];
    } else {
        $_SESSION['product'][$idBuy]['count'] = $_SESSION['product'][$idBuy]['count'] + 1;
    }


}
?>

    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>price</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($products as $keyProducts => $valProducts) {

            $id = $valProducts['id'] ?? '';
            $name = $valProducts['name'] ?? '';
            $price = $valProducts['price'] ?? '';

            if ($id && ($name || $price)):
                ?>
                <tr align="center">
                    <td><?= $id ?></td>
                    <td><?= $name ?></td>
                    <td><?= $price ?></td>
                    <td>
                        <form class="form-buy" method="post" style="margin: 0">
                            <input type="hidden" name="name_buy" value="<?= $name ?>">
                            <input type="hidden" name="id_buy" value="<?= $id ?>">
                            <input type="submit" class="buy" name="buy" value="Купить">
                        </form>
                    </td>
                </tr>
            <?php
            endif;
        } ?>
        </tbody>
    </table>

    <br>

<?php
$sessionData = $_SESSION['product'] ?? [];

if ($sessionData) {
    ?>
    <div class="wrapper-output">
        <table class="table-output">
            <caption>Корзина</caption>
            <thead>
            <tr>
                <th>name</th>
                <th>count</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($sessionData as $sessionId => $valSessionData) {

                $name = $valSessionData['name'] ?? '';
                $count = $valSessionData['count'] ?? '';

                if ($name && $count) :
                    ?>
                    <tr align="center">
                        <td><?= $name ?></td>
                        <td><?= $count ?></td>
                    </tr>
                <?php
                endif;
            }
            ?>
            </tbody>
        </table>
    </div>
<?php } ?>