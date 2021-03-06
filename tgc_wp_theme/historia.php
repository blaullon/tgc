<?php
$tarjetaID = get_post_meta($post->ID, 'tarjeta', true);
?>
<div id="post-<?php the_ID(); ?>" <?php post_class("historia seccion"); ?>>
    <div class="cabecera clearfix">
        <h1 class="titulo"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
        <div class="meta">
            <p class="fecha">
                <?php the_date() ?>
            </p>
            <?php if ($tarjetaID) : ?>
                    <p class="tarjeta">Tarjeta: <a href="/tarjeta/<?php echo $tarjetaID ?>"><?php echo $tarjetaID ?></a></p>
            <?php endif; ?>
                    <p class="lugar"><?php echo get_post_meta($post->ID, 'lugar', true) ?></p>
                </div>
            </div>
            <div class="texto"><?php is_single () ? the_content() : the_excerpt(); ?></div>
    <?php if (is_single ()) : ?>
                        <p class="tags"><?php the_tags() ?></p>
    <?php else: ?>
                        <a href="<?php the_permalink() ?>">Leer -&gt;</a>
    <?php endif; ?>
</div>
