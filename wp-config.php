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
define( 'DB_NAME', 'wisiplor_callpay' );

/** MySQL database username */
define( 'DB_USER', 'wisiplor_callpay' );

/** MySQL database password */
define( 'DB_PASSWORD', 'callpay123' );

/** MySQL hostname */
define( 'DB_HOST', '204.93.216.11' );

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
define( 'AUTH_KEY',         'L%spdLR,C^vb*d`8W~Mld.1n^lSMm1ctcG~G?8lNo[n6qjq3Q7{Z#ak.@e}s7BB9' );
define( 'SECURE_AUTH_KEY',  '9R&i>RQh`&)9<bjzl`sZeo1$330aO+JDh&eT21bYWyP^FGL:}7:oL>S1Z(%?pUCY' );
define( 'LOGGED_IN_KEY',    '!DlQV:xazqP%Pjrotk!95)VD<cNe6CWwc].T*etJKX;uaRWYo8dpX:Ej+8Y@zOTj' );
define( 'NONCE_KEY',        '+gbO[oUd^>S!ZK~gQG3z5-6CQ?y;T%wE,7lKqrp,~y/t[774TEm{$t,4|`-(LL7;' );
define( 'AUTH_SALT',        'X|8Ll 9sKa`nGRALX&c@zm$]6=eIDCe){4Nb!+<w>%ZV~2x8oJo=OMH++BK#T0~9' );
define( 'SECURE_AUTH_SALT', 'NZ .2J62f9Dyd6]Wmu6>dD2A`wRhAEStn>$zGB77*$vtEhz/k)sg#V^M32DQCSzB' );
define( 'LOGGED_IN_SALT',   '*)K<pC>$SP1kNsM)BCh|Q]/%pvq mGzSuFR=/_nls)pMaWolbG(VY<EcU?!Lp+Yl' );
define( 'NONCE_SALT',       '~j6s.R1#gNi`EV>I?UQAYK1;M.7`wS`2i~ %wO`g|})wZ+-=W;SUpO}*+Aq9CdUb' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
