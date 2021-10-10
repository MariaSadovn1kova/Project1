<!-- Блок где мы фиксируем в переменные признаки страницы -->
<?php
    $is_image_sylvan = $url == '/sylvan/image';
    $is_info_sylvan = $url == '/sylvan/info';
    $is_image_dungeon = $url == '/dungeon/image';
    $is_info_dungeon = $url == '/dungeon/info';
?>
<ul class = "list-group mt-5">
    <li class = "list-group-item">
        <a type = "button" class = "btn btn-primary" href="/sylvan">Лесной союз</a>
        <a type = "button" class = "btn btn-light" href="/sylvan/image">Картинка</a>
        <a type = "button" class = "btn btn-light" href="/sylvan/info">Описание</a>
    </li>
    <li class = "list-group-item">
        <a type = "button" class = "btn btn-primary" href="/dungeon">Лига теней</a>
        <a type = "button" class = "btn btn-light" href="/dungeon/image">Картинка</a>
        <a type = "button" class = "btn btn-light" href="/dungeon/info">Описание</a>
    </li>
</ul>

