<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Document</title>


    <?php wp_head();?>


</head>
<body>

<header>

    <div class="container">
        <?php
        wp_nav_menu (
            array(
                'theme-location' => 'top-menu',
                'menu_class' => 'top-bar',
            )
        );
        ?>
    </div>
</header>