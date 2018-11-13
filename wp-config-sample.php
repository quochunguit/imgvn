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
define('DB_NAME', 'db_img_holding');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '118.69.108.107');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=nnav&[3Z4a6~M#xUU;Z<3I7H7)~i)-*VQ~![,nmZvm4DVB0^r*;4A.E-jNKkGbf');
define('SECURE_AUTH_KEY',  '<QFcqddBF2<+u}5 tWc E?N%=z%#z4klj~C8?o:B{R{&<B8iQm7yf%1T6XhZm-XS');
define('LOGGED_IN_KEY',    '&.AL1ih6xAB*i=7uy-d}*s>GYE@`?qa#I]}FRp23,-$bVgM,C2Vor<]$r~+i/9q~');
define('NONCE_KEY',        '(!B;RI/I%9QnG_eq+sV42<$*Y?z.Uq(n%?#g4U*P%h{.NbWPj1W^lbm^NP)tDkv-');
define('AUTH_SALT',        'hN}({K:zfzHAv<Uz:Kr!xCu4b;fnT9|D-VJ8HJ:4tGE-91z%8jzre2to!_A8i]^ ');
define('SECURE_AUTH_SALT', 'q/AV#K%]H/5Qos:dhj%e4%EXM&#hlhN+,9=&-RO_z.jBy 4]`*,qX+D.x{jdkY[$');
define('LOGGED_IN_SALT',   'gQcDmsc{cDXe09|wNYaKt050J.%`rQMnSg}^~R^/j<gkqR&DDz)%L$.u=n`EB4!K');
define('NONCE_SALT',       '2),%*`MF6PdtC+uC|nlF]Cr^!~w*mGzL~X>Y={2uyso40:/xOtiRd_y5q]oAd: P');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'im_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

define('WP_HOME','http://localhost/img');
define('WP_SITEURL','http://localhost/img');

define('PROJECT_CATE_ID', 3);
define('PROJECT_COMPLETED_CATE_ID', 4);
define('PROJECT_GOING_CATE_ID', 5);

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
