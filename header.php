<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class();?>>

    <header class="container-fluid pt-1 pt-xl-5 py-1" role="banner">
        <div class="container">
            <div class="row justify-content-end">
                <?php get_template_part( 'global-templates/logo' ); ?>
            </div>
        </div>
    </header>

    <?php get_template_part( 'global-templates/navbar' ); ?>