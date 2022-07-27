<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package adminlte
 * @since 1.0
 */

?>
   <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php home_url( '/' ) ?>" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    
    <?php 
    $cadena = wp_nav_menu( 
      array( 
              'theme_location' => 'main-menu', // Alias de navegación
              'menu'            => '', // menú esperado
              'container'       => '',// etiqueta del contenedor
              'container_class' => 'navbar-nav', // valor de clase de nodo primario ul
              'container_id'  => '',  // valor de id del nodo primario ul
              'menu_class'   => 'navbar-nav',   // valor de clase de nodo ul
              'menu_id'   => '',  // valor de id del nodo ul
              'echo'  => false,// Ya sea para mostrar el menú, el valor predeterminado es verdadero
              'fallback_cb' => 'wp_page_menu',  // Si el menú no existe, regrese al menú predeterminado, ajústelo en falso para que no regrese
              'before' => '', // Texto antes del enlace
              'after'  => '', // Texto después del enlace
              'link_before'  => '',   // Antes del texto del enlace
              'link_after'  => '',// Después del texto del enlace
              'items_wrap'  => '%3$s',   // Cómo empacar la lista // <ul id="%1$s" class="%2$s">%3$s</ul> // <ul class="navbar-nav">%3$s</ul>
              'depth' => 0,   // Profundidad del menú, predeterminado 0
              'walker' => ''  // Walker personalizado
      )
    );

  $patrones = array();
  $patrones[0] = '#<li[^>]+>#';
  $patrones[1] = '/itemprop="url"/';

  $sustituciones = array();
  $sustituciones[1] = '<li class="nav-item d-none d-sm-inline-block">';
  $sustituciones[0] = ' class="nav-link" itemprop="url" ';

  echo preg_replace($patrones,$sustituciones,$cadena);
  
    ?>
</ul>
