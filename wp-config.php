<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'staging' );

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
define( 'AUTH_KEY',         'n_;Vxmcwj/&tWrKB$Zu)rbKY~x7i~QUNN,9%-v[1UNGrPBs1F3d)Jm)cMd.euO5.' );
define( 'SECURE_AUTH_KEY',  '+X Rfp)<]hsou40^-sPTK>htp]Q#S$<08p7>K[RsV#`I54X3_&Zmq&fg`i~O0#Hp' );
define( 'LOGGED_IN_KEY',    'stPVDtL&8d]!Ap`6=W.um;#6[v}^7SZ|6hFL/.!5K5/-zR#~=F1F?*7=y6Xz+^b9' );
define( 'NONCE_KEY',        'Ig4XH#<PB3~i?bFJx2UNWVa@|19+@^HF?3@haE?T<sg6~ 0du~#Cmw2_/{x/j7a+' );
define( 'AUTH_SALT',        '?E4X^oL_Tw0MY]zC}6(&W.&?b>}8~*j7;Z-B;kX}+Rh4+K4)ZF]Te!oR*4XF]+b2' );
define( 'SECURE_AUTH_SALT', '14A4^bacpDx^J$9lSf8We8xCf}wSP<}TmY%+tuL5S,vTi7:`b3JJ1JZF36Zy|ex.' );
define( 'LOGGED_IN_SALT',   '0@$pJdby77|o{n[d54IvN=JiSv2@k?Jla6R16g?*!pn7oy8,F:nDRfZ3ZAB:]JT(' );
define( 'NONCE_SALT',       'UXa_=7s|rqHT[f$/k4?}=Pb<agBwV5uG|+rU~xq+7##p$&IIN#G-keLAROf%R`t^' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
