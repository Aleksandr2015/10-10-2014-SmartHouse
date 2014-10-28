<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset');?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description');?>">    
        <title><?php the_title(); ?> | <?php bloginfo('name');?></title>
        <link rel="shortcut icon" href="">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap-theme.css">

        <!--[if IE]>
            <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php if ( is_user_logged_in() ) {echo '<style>.navbar.navbar-inverse.navbar-fixed-top {margin-top:32px;}</style>';} ?>
        <?php wp_head(); ?>  
    </head>

    <body>
    
        <!-- Navigation primary / Start -->
        <?php include(TEMPLATEPATH . '/navigation-primary.php'); ?>
        <!-- Navigation primary / End -->

        <div class="container page-home">
            <div class="row">
                <div class="col-xs-12 ph-bg-cont">
                    <!-- Pins -->
                    <a href=""><div class="ph-bg-pin sun-batteries" data-toggle="tooltip" data-placement="left" title="Солнечные батареи">Солнечные батареи</div></a>
                    <a href=""><div class="ph-bg-pin condicioner-1" data-toggle="tooltip" data-placement="left" title="Кондиционер">Кондиционер</div></a>
                    <a href=""><div class="ph-bg-pin condicioner-2" data-toggle="tooltip" data-placement="left" title="Кондиционер">Кондиционер</div></a>
                    <a href=""><div class="ph-bg-pin videocamera" data-toggle="tooltip" data-placement="left" title="Видеокамера">Видеокамера</div></a>
                    <a href=""><div class="ph-bg-pin weather-stations" data-toggle="tooltip" data-placement="right" title="Погодные станции">Погодные станции</div></a>
                    <a href=""><div class="ph-bg-pin condicioners-and-ventilations" data-toggle="tooltip" data-placement="left" title="Кондиционеры и вентиляция">Кондиционеры и вентиляция</div></a>
                    <a href=""><div class="ph-bg-pin fluger" data-toggle="tooltip" data-placement="left" title="Флюгер">Флюгер</div></a>
                    <a href=""><div class="ph-bg-pin electric-rollets-and-shutters" data-toggle="tooltip" data-placement="left" title="Электро роллеты и ставни">Электро роллеты и ставни</div></a>
                    <a href=""><div class="ph-bg-pin multimedia" data-toggle="tooltip" data-placement="left" title="Мультимедия">Мультимедия</div></a>
                    <a href=""><div class="ph-bg-pin fountains-and-ponds" data-toggle="tooltip" data-placement="left" title="Фонтаны и водоемы">Фонтаны и водоемы</div></a>
                    <a href=""><div class="ph-bg-pin ponds-and-controls" data-toggle="tooltip" data-placement="left" title="Пруды и управление">Пруды и управление</div></a>
                    <a href=""><div class="ph-bg-pin watering-and-irrigation-controls" data-toggle="tooltip" data-placement="left" title="Управление поливом и орошением">Управление поливом и орошением</div></a>
                    <a href=""><div class="ph-bg-pin canalization" data-toggle="tooltip" data-placement="left" title="Канализация">Канализация</div></a>
                    <a href=""><div class="ph-bg-pin water-treatment-system" data-toggle="tooltip" data-placement="left" title="Система водоподготовки">Система водоподготовки</div></a>
                    <!-- Background image -->
                    <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/1170x820_page-home-bg.png" alt="">
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.js"></script>
        <script>
            $('.ph-bg-pin').tooltip();
        </script>
        <?php wp_footer(); ?>
    </body>
</html>
