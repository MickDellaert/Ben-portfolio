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
                <div class="nav__burger-btn">
                    <div class="nav__burger"></div>
                </div>
                <?php wp_nav_menu(

                    array(
                        'theme_location' => 'top-nav'
                    )
                );
                ?>
            </nav>
        </header>