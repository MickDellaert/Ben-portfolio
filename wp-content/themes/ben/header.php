<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benjamin Jordens</title>

    <?php wp_head(); ?>
</head>

<body>
    <div class=wrapper>

        <header>
            <nav class="nav">
                <div class="nav-container">

                    <div class="burger-btn">
                        <div class="burger-lines"></div>
                    </div>

                    <?php $items = wp_get_nav_menu_items('top-nav'); ?>

                    <h1 class="site-title">
                        <a class="nav-link" href="<?php echo $items[0]->url; ?>">
                            <?php echo $items[0]->post_title; ?>
                        </a>
                    </h1>

                    <ul class="nav-list">
                        <?php
                        $counter = 0;
                        foreach ($items as $item) :
                            if ($counter++ == 0) continue; ?>

                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo $item->url; ?>">
                                    <?php echo $item->title; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </nav>
        </header>