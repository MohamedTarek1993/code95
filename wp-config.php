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
define( 'DB_NAME', 'code95' );

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
define( 'AUTH_KEY',         'd?z Hy;!>DGzy^OLXodq }>WsMt*~j&Ap]k#Us[@Big(R,s>%1=2E8i8]k5TycFo' );
define( 'SECURE_AUTH_KEY',  'z8!Wr9d}7xdoen0|@H)|J$0.]o>@DB^5cAv~k[LnB^;VrnJ&5D9:o06s%PJlqAif' );
define( 'LOGGED_IN_KEY',    'ZHu=vXWw?zl~0_=(:|B}wC1xbr8HnF<rHA$ =S;-y;bZQp5{o,Zl%kgqDC@4:/Kw' );
define( 'NONCE_KEY',        '3nrC1+/+/5k!aYt^. FnC]ZYS?7gx]L?@ a1.6Z*6d8#&NS^SfY&LvZkJH3&^//-' );
define( 'AUTH_SALT',        'fgC0[qSRq4fC~eU{CQRSeB[-yGJ.Cdxn5[D+B#v^z~(_5-HeAPAzHDmCCr{F)KX7' );
define( 'SECURE_AUTH_SALT', 'tUG$3H+=V-GWULBiMbjo4wEYTg2/ -Wy~6oPh]WP0p.OhGQpMx47N;ATV+F,ltqF' );
define( 'LOGGED_IN_SALT',   '[?m1N_NN EhvUnU</1^qvyQ0y5r&OFW*(/HzC|)@*kz__8ZPN+uv[lw-EWf+hb/[' );
define( 'NONCE_SALT',       'J1@u1 j$I<2j-e7*y:Vn/fC!%if>Z*Y^HfJdqt.O,]yL}&<9Cw}P7G8$n^N3Oy=P' );

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
