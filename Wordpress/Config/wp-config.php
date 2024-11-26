<?php
// Configuración de la base de datos
define( 'DB_NAME', 'wordpress' );
define( 'DB_USER', 'wordpress' );
define( 'DB_PASSWORD', 'password' );
define( 'DB_HOST', 'db' ); // Nombre del servicio definido en docker-compose.yml
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// Depuración en WordPress
define( 'WP_DEBUG', true );

// Generadores de claves únicas y sal para autenticación
define( 'AUTH_KEY',         'pon-tu-frase-única-aquí' );
define( 'SECURE_AUTH_KEY',  'pon-tu-frase-única-aquí' );
define( 'LOGGED_IN_KEY',    'pon-tu-frase-única-aquí' );
define( 'NONCE_KEY',        'pon-tu-frase-única-aquí' );
define( 'AUTH_SALT',        'pon-tu-frase-única-aquí' );
define( 'SECURE_AUTH_SALT', 'pon-tu-frase-única-aquí' );
define( 'LOGGED_IN_SALT',   'pon-tu-frase-única-aquí' );
define( 'NONCE_SALT',       'pon-tu-frase-única-aquí' );

// Prefijo de tabla para la base de datos
$table_prefix = 'wp_';

// Configuración de HTTPS si es necesario (opcional)
// define('FORCE_SSL_ADMIN', true);

// Configuración absoluta de WordPress
if ( !defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

// Configuración de los archivos principales de WordPress
require_once ABSPATH . 'wp-settings.php';
