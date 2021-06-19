<!--6. Создать форму, назвать "Поиск". Завести input[type="text"].
При отправке формы с непустым значением - выводить "Вы искали: text", где text - значение отправленного input.-->

<div class="wrapper-form">
    <form method="get" class="search">
        <label for="text-search">Поиск:</label>
        <input type="text" id="text-search" name="text_search" placeholder="Поиск..." required>
        <button type="submit" class="button-search">Поиск</button>
    </form>

    <?php
    $textSearch = $_GET['text_search'] ?? '';

    if ($textSearch) :
        ?>
        <div class="wrapper-output">
            <span class="output">Вы искали: <?= $textSearch ?></span>
        </div>
    <?php endif; ?>
</div>
