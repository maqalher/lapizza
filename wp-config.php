<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'lapizza');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'Maqueda31');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'jUz<u-Rwi1,MMx<<o.i[Pt7Y0<`4U;{+V4D:V8i;<UOoB:|AwSXvyWV!>fjOPT=3');
define('SECURE_AUTH_KEY', 'Y7WmIUp%1M}$c:zdHG~2EQh]_XQvlLM}^3}21s?OWY.]#VqHEo@I{5!1|jk4C-#0');
define('LOGGED_IN_KEY', '.?}$lfh,H?=V-fJN|$RH/::N!#h0R]s_W*RX4um=9CXx}lT~[V#S8T-g?`}F;7}v');
define('NONCE_KEY', 'j MVb7Ydc_N&w(1A75a:yke=FE:(`$w]R3XQfsP6*_ar5-|G!%|}bC-igME~Bdy5');
define('AUTH_SALT', 'RE.EiK{DFT3H$yDo=SUN|Kh<kY]$rd=}]`T42!K|JyQt+ay1[*9>uEU,tZeb6?Un');
define('SECURE_AUTH_SALT', 'ZgI3oY/-bfg3E|MyZJs^LvcB(@q~Bls}a;OI19(J$8*g2JzoHd%S#v5n3`YKxWDE');
define('LOGGED_IN_SALT', 'rRk.QroNB6#32=&9w~A+Kr.oGNuK8;s)4|#Xx#[m eOwISODJRN~HDpaC:u[,_$w');
define('NONCE_SALT', '+P&[<<ojW}PTH<,D>@N1P44at(sn^5wOlr {m)iSzo9*!2VNjdII7#im<[P?I#d(');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

