<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'onepointfive' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'placebo1' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'M0MiA8R>pNJNlk$D&@Y:bOzHv5>_prQ6~fuR82zdUT<s}9`|)X_(1RL]37e*@/Fb' );
define( 'SECURE_AUTH_KEY',  '<Ui&FmxP9WA$nrI2C,yta%sTJa_69=9A+,G@OlFCyFO40F&29T]vo&hCa6SxtTfG' );
define( 'LOGGED_IN_KEY',    'fZ24!Ep~e|i.,oDB@+@8_;#jcP{^BU/nrw0w0|-<`Ekr=mm{|clP0ZFg=?M?,kqo' );
define( 'NONCE_KEY',        '!(Vk->iaHqVimI{Hh_7mGjt2IS_qo4H]6yr&S413)ZzE:g[3DyHSq;EI4Rm/:gJy' );
define( 'AUTH_SALT',        'nw`O`T.xUs!c!,ZIGCx[!@P,*&D+}7i002fpfGHX^?Cu48Q_cG3ip.lewNXyvo0-' );
define( 'SECURE_AUTH_SALT', 'vN4f&Q?$2.89:8jOUXJ01U]!Bf:x9RGJ1b`sv%A YBg^@3@g}K}qO~!.^J<!8KHa' );
define( 'LOGGED_IN_SALT',   '6bco%/]^Mu+Ls=9oTOm~4|?fPTa9a*:L%qIh,ud,XxV#|EJK>*-.ky.Yzgs<p e(' );
define( 'NONCE_SALT',       '`8QxDxIT+{I0;;4FW@_-(npQ<X5^)q~DM.%1EX38$e4!@GG*X!nUQY.t0@@ODgb5' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'one_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

