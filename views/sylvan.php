<!-- Блок где мы фиксируем в переменные признаки страницы -->
<?php
    $is_image = $url == '/sylvan/image';
    $is_info = $url == '/sylvan/info';
?>
<!-- Шапка страницы -->
<h1>Лесной союз</h1>

<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link <?= $is_image ? "active" : '' ?>" href="/sylvan/image">
        Картинка
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?= $is_info ? "active" : '' ?>" href="/sylvan/info">
        Описание
    </a>
  </li>
</ul>
<!-- Блок в который мы выводим информацию или картинку -->
<ul class = "list-group">
    <li class="list-group-item"> 
        <?php if ($is_image) { ?>
            <img src="https://i.playground.ru/i/wiki/32584/content/my0qymdq.jpg" alt="">
        <?php }  else if ($is_info) { ?>
            Лесные эльфы выше всего чтят природу её созданий, а особенно – леса и растения. У эльфов в Ироллане очень много различных святых мест, связанных с природой: леса, озера, поляны... Именно их эльфы защищают яростнее всего при вторжении врага, так как считают сердце леса святым местом. А главным богом и покровителем Лесного Союза является Силанна.
        <?php }  else  { ?>
            Лесной Союз (ориг. Sylvan) — фракция, добавленная в игре Герои Меча и Магии V.
        <?php }  ?>
    </li>
</ul>
