<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
	<?php wp_head() ?>
</head>
<body>
    <header>
        <div>Header menu</div>
        <?php wp_nav_menu( ['theme_location' => 'header-menu'] ); ?>
        <div>Header mobile menu</div>
        <?php wp_nav_menu( ['theme_location' => 'header-mobile-menu'] ); ?>

        <!-- Language menu -->

        <?php $languages = pll_the_languages(['raw' => 1]); ?>

        <?php foreach($languages as $language) : ?>
            <a class="dropdown-item" href="<?= $language["url"] ?>"><img src="<?= $language["flag"] ?>" alt=""> <?= $language["name"] ?></a>
        <?php endforeach; ?>

    </header>
    <hr>
