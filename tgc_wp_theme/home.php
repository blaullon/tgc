<?php get_header(); ?>
<div id="cuerpo" class="exterior clearfix">
    <div class="interior clearfix fondo">
        <div id="codigos" class="izq">
            <h3>¿Has recibido una tarjeta?</h3>
            <p>Introduce el código y descubre su historia</p>
            <input type="textbox" name="tarjeta"/>
                <a id="tarjeta" class="ir" href="/tarjeta/">ir &gt;</a>
            <!-- Noticia incluida por pablodgavilan@gmail.com el 10-02-2011 a instancia de Johnny -->
            
            <!-- FIN Noticia  -->
            </div>
            <div id="portada" class="der">
            <?php if (!is_user_logged_in()) : ?>
                    <div id="sencillo" class="seccion">
                        <h2>ES MUY SENCILLO</h2>
                        <ul>
                            <li>Alguien te hace un favor</li>
                            <li>Te entrega una tarjeta</li>
                            <li>Registras el favor en la web</li>
                            <li>Haces un favor y entregas la tarjeta</li>
                        </ul>
                    </div>
                    <div id="accion" class="seccion">
                        <h1>Una pequeña acción</h1>
                        <h2>puede cambiar el mundo</h2>
                        <h2>si se hace con el corazón</h2>
                    </div>
                    <div class="seccion">
                        <p class="usuCadena">¿Ya eres usuario y quieres seguir tus Tarjetas/Historias?</p>
                <?php get_template_part("login_form") ?>
                </div>

            <?php else : ?>
            <?php $user = wp_get_current_user(); ?>
                        <div id="userhome">
                            <h1>Hola <?php echo $user->display_name ?></h1>
                            <div class="seccion">
                                <h2 class="widgettitle">Tus Tarjetas:</h2>
                    <?php tgc_lista_tarjetas_usuario(); ?>
                    </div>
                    <div class="seccion">
                        <h2 class="widgettitle">Tus Historias:</h2>
                    <?php tgc_lista_historias_usuario(); ?>
                    </div>
                </div>
            <?php endif; ?>
                        <div id="links" class="seccion">
                            <a href="tarjetas/">COMPRA TARJETAS</a>
                            <a href="como-funciona/">C&Oacute;MO FUNCIONA</a>
                        </div>
                    </div>
                </div>
            </div>
<?php get_footer(); ?>
