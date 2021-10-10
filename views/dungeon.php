<!-- Блок где мы фиксируем в переменные признаки страницы -->
<?php
    $is_image = $url == '/dungeon/image';
    $is_info = $url == '/dungeon/info';
?>
<!-- Шапка страницы -->
<h1>Лига теней</h1>

<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link <?= $is_image ? "active" : '' ?>" href="/dungeon/image">
        Картинка
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?= $is_info ? "active" : '' ?>" href="/dungeon/info">
        Описание
    </a>
  </li>
</ul>
<!-- Блок в который мы выводим информацию или картинку -->
<ul class = "list-group">
    <li class="list-group-item"> 
        <?php if ($is_image) { ?>
            <img src="https://lh3.googleusercontent.com/proxy/p34oN3kIW5kcMRZX0g_PK54xAehn6rPe3CjikzxvnKGcYitdK3RrNyrULcy4uR_3jM7tfy_i66udehJvujTs-xloEDmMbIGV6cMARyFkU04te8oVM2vmr7U7kIplr-maFQQzXoFP5yt3SW9k98OTFRaC4gyN" alt="">
        <?php }  else if ($is_info) { ?>
            Тёмные эльфы – это потомки обычных, лесных эльфов, они отвернулись от поклонения Силанне, теперь их будоражит тьма и секреты, находящиеся в ней. Они ренегаты, подобно некромантам, позже превратившиеся в отдельную расу. Главная жизненная цель тёмного эльфа – познать все секреты тьмы и научиться управлять ею. Эти жители подземелий поклоняются Малассе, которая изредка посвящает высших жрецов тёмных эльфов и безликих в секреты тьмы.
        <?php }  ?>
    </li>
</ul>
