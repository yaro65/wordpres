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
define( 'DB_NAME', 'projet8' );

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
define( 'AUTH_KEY',         '^ZF@gW~.3^mRO ?>u20F@G3D10q1Z^>xP*xnn2n,bHGSoKqa]t`Fqs{5x&ee@.XG' );
define( 'SECURE_AUTH_KEY',  '4-36Obg~H,@@t{S c+V@u$k`1CM;`bDFU!_v|.I]L5<tLM4u^enM3tXMXGGylAn|' );
define( 'LOGGED_IN_KEY',    '/:/g8>g*9G)CQ<<b8~iZYb{kJtWYlH*&T?8DGCK>(H2zHl1;kJgR[N5dS{4_;.D5' );
define( 'NONCE_KEY',        'a*#8)EoI|yd*5T25iocU/,nTmr!mrzqX]g|-]cfN>xStqM8U+PAs7KH.s>~fWLV;' );
define( 'AUTH_SALT',        '$+d,!PKzD <Iuy-Zv$=}p|2O0Xo_?j,p=_0wOXH ka3->/^,Vci<?y2J_W9^`8jW' );
define( 'SECURE_AUTH_SALT', '~7t^EmkuWaI=])+>r!9I-MTC|z@F}dupq1U<m*!uq451)eNn1?9CN$eeBYnHld0f' );
define( 'LOGGED_IN_SALT',   '-u7wLYeCy+s*G39^]ktzyh8.HP^d*?%u(4=v-G0grkV1TX6Z(#7:_U!~V&Ei 9:$' );
define( 'NONCE_SALT',       'x8I@(2&HpKGY/XYpC_Non )ni*0.haHj_Se9{cpG-]XQdPY_]6,(}c]Hhs~d$mqJ' );

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
