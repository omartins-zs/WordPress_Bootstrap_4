<!doctype html>
<html <?php language_attributes() ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

 <?php wp_head() ?>

    <?php wp_head() ?>
</head>

<body>

    <div class="container">

        <div class="row my-5 align-items-center">

            <div class="col-md-8 col-sm-12">
                <h1>Meu primeiro tema</h1>
                <p class="lead">Fiz com WordPress</p>
            </div>

            <div class="col-md-4 col-sm-12">
                <form>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="O que procura?">
                        <div class="input-group-append">
                            <button class="btn btn-my-color-5" type="button">Buscar</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>