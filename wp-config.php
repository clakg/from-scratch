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
define( 'DB_NAME', 'wp-theming' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'm*qMLf8R]L/H(JAza H?]^1{xE(!W`)t9=y:Ib5SM=0m.!jU^eGT3 !-Emma},(Z' );
define( 'SECURE_AUTH_KEY',  'k(2*P,SF/: ^tzxMkUpR!$4>~.hW6!:VvM!WXtOL&Txj#PHOeD7Xx@3l(@PeXNOJ' );
define( 'LOGGED_IN_KEY',    '0V};8kO7[dq}6ZcDpm1]QVE)g_a$0pdG;h:Nd0Vt]1Zqnc?cI 0[*SmivqwIE>;u' );
define( 'NONCE_KEY',        '6/xQ?Q~N3dr}v=v}3ap:.$Z#C@ED3V/v~5Yq5meW2T<sLf@UOJ@=C_88GN;7X4#`' );
define( 'AUTH_SALT',        'X?&Ce{O)$hU@::QxpjgoU9o$tJq.}r0M(K/!/>_D$d<q*IQb;(TBGC?%pMzsCD4:' );
define( 'SECURE_AUTH_SALT', '}O*!no6w&#<+H-p1|d.UC-EJwUvh>f{N9}59R_leF5szj04;o`<P!Ph1yAxQOJw/' );
define( 'LOGGED_IN_SALT',   'u}~yg`f &WQq9shDCS[)Ce$7r5Wdv;62W IM-/*O_DRIn)Dh>JU{Rr8Spba*TXW?' );
define( 'NONCE_SALT',       '$E_2/yUZqS{&puUnOx+F+Yk5.iZijRI<cJ<X %XYxiCfkKO3Hh3Z8lcSA(u5vU/B' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
