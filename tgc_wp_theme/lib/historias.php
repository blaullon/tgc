<?php

function tgc_lista_historias_usuario() {
    if (is_user_logged_in ()) {
        $user = wp_get_current_user();
        $user_id = $user->ID;

        $posts = get_posts(array("author" => $user_id));
        echo "<ul class='lista_tarjetas'>";
        foreach ($posts as $post) {
            $url=get_permalink($post->ID);
            $title=get_the_title($post->ID);
            echo "<li><a href='{$url}'>{$title}</a></li>";
        }
        echo "</ul>";
        $user_url=get_author_posts_url($user->ID);
        echo "<a href='{$user_url}'>Mas...</a>";
    }
}
?>