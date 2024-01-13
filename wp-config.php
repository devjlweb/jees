<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jees-db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'SUTr/4RvsDd!5W>(`{6D!i=<jdOR7?gl{+wK^F6H>|-$A:pjtg;,(u`Jm^YN5s(=' );
define( 'SECURE_AUTH_KEY',  'qCz<wJ$BixXAprppI=?(Iq~=C)CA<`z3y>K7SPnO!X!nPwOMKoMZ= i(_IN/)F>o' );
define( 'LOGGED_IN_KEY',    '9OBj*nzFn>Qn&E{{A]S: )VnBNs|*v0eTCh,SX|QM}MB[Gq=JxQ76ctm>gfwD?$U' );
define( 'NONCE_KEY',        'c7*=/f{{kd.51jK!2P;^lzis[g`.X6*W*gO+6T{DzZ$;k>!x]l-,LQ%v$_!{ku*3' );
define( 'AUTH_SALT',        'gbqu6AJ&99O3mXGj<Up+F$8aH6Sbno*pz3Gra/YpbN }a;ijAoY,&7j~8(k}$R_F' );
define( 'SECURE_AUTH_SALT', '-[UTwHlLtI0X,qakz)lx>NSIqVjv@>tLe|PBUM; ;+k27LQw-v{-[xKFRl:3{F*N' );
define( 'LOGGED_IN_SALT',   'jUma82o*lm&Ld3&Ka%%:A])YuRL 0/Y}`.H0UMBKA.HfgVvB0,h3F}mtyu&.X,`%' );
define( 'NONCE_SALT',       'nu/EE&p4+UV>#SJT vZ4aF=WRE f)h6-W%j&9yU>!5@-aQ.t,@5}6zr#ox:h{V){' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
