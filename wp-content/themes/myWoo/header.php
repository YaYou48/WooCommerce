<!DOCTYPE html>
<html class="m-0" lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CODISHOP</title>
    <?php wp_head() ?>
</head>
<body>
    <header>
        <nav class="row">
            <div class="text-center position-absolute pl-5">
                <h1><?php echo get_bloginfo(); ?></h1> 
            </div>
            <div class="col-12 text-center">
                <?php wp_nav_menu(array('menu' => 'Main')); ?>
            </div>
        </nav>
        <div id="carouselControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            <?php 
            // The Filter
            $products = wc_get_products(array("category" => "diaporama"));
            // The Loop
            $c = 0;
            foreach ($products as $product):
               
                $c += 1;
                if ($c == 1): ?>
                    <div class="carousel-item active"> <?php
                else: ?>
                    <div class="carousel-item"> <?php
                endif;?>     
                    <img class="d-block w-100" src="<?php echo wp_get_attachment_url($product->get_image_id())?>" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?php echo $product->get_name()?></h5>
                         <a href="<?php echo $product->get_permalink() ?>">Voir plus</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>
