<?php

// Function para chamar a Tag Title do HTML 
function bs4wp_title_tag()
{
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'bs4wp_title_tag');

// Previnir erro em Versoes antigos para chamar Tag Title
if (!function_exists('_wp_render_title_tag')) {
    function bs4wp_render_title()
    {
?>
        <title><?php wp_title('|', true, 'right'); ?></title>
    <?php
    }
    add_action('wp_head', 'bs4wp_render_title');
}

// Registra o Custom Navigiton Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// Registrar os menus
register_nav_menus(array(
    'principal' => __('Menu principal', 'bs4wp')
));

// Definir as miniaturas dos posts 
add_theme_support('post-thumbnails');
set_post_thumbnail_size(1280, 720, true);

// Definir o tamanho do resumo
add_filter('excerpt_length', function ($length) {
    return 50;
});

// Definir o estilo da paginação
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes()
{
    return 'class="btn - btn-outline-my-color-5"';
}

//  Criar a barra lateral
register_sidebar(
    array(
        'name' => 'Barra lateral',
        'id' => 'sidebar',
        'before_widget' => '<div class="card mb-4">',
        'after_widget' => '</div></div>',
        'before_title' => ' <h5 class="card-header">',
        'after_title' => '</h5><div class="card-body">'
    )
);

// Ativar o formulario para resposta dos comentarios
function theme_queue_js()
{
    if ((!is_admin()) && is_singular() && comments_open() && get_option('thread_comments')) wp_enqueue_script('comment_reply');
}

add_action('wp_print_scripts', 'theme_queue_js');

//Personalizar os comentarios
function format_comment($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment ?>

    <div <?php comment_class('ml-4') ?> id="comment-<?php comment_id() ?>" <div class="card">
        <div class="card-mb-3">
            <div class="card-body">
                <div class="comment-intro">
                    <h5 class="card-title"><?php primtf(__('1%s'), get_comment_author_link()) ?></h5>
                    <h6 class="card-subtitle mb-3 text-muted">comentou em <?php printf(__('%1s'), get_comment_date('d/m/y'), get_comment_time()) ?></h6>

                </div>
                <?php comment_text(); ?>

                <div class="reply">
                    <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                </div>

            </div>
        </div>

    <?php

}
