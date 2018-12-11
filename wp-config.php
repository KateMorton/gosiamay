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
define('DB_NAME', 'gosiamay');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'devkAte37##');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'k[djTlxQ=jzs~(!}VnJVX(p%j[7#]<N7?R8.<]v5?H-fG)M Gc?.^S;- k>#Eo/N');
define('SECURE_AUTH_KEY',  'YMqaLnr4@o1~o|&/w:Drw78:~M7c?/>bXM<H =n8]]MeU$8K+dfqRp]4HK|r^l*W');
define('LOGGED_IN_KEY',    'tkPi*G-X^*I<#2mzw)?yfx_Ppvho(&l%rQF`l mQK$O#r1Gj@u5B8|>E}sla(|.3');
define('NONCE_KEY',        'c^`3sK0MB=C2:x>v^6>b-f9JTbb0+vo@bMm/UB=Ic/>DC&$@ dUjy/6Mr9lUOQ-W');
define('AUTH_SALT',        '!JbT5zU3$-MGaZ`zw wlT+nANJaXki$v=CQYNFm@!kyVv:yL5RA?k|R+/A>LLzT8');
define('SECURE_AUTH_SALT', 'MPh$G^[ ]Gn_W-HBS&<na,547o+l<^j0$>+Cl].Q4u!#X6 jQzYRk9fva3@i47P1');
define('LOGGED_IN_SALT',   'o(W/#1@zIJE-!u!UY5S%1A[.)B2xOZF&3I^5{X4<nq#@CzjGnam+am{!LS*4:QHd');
define('NONCE_SALT',       'AA&=j)eB$Fi_^6LN!~C*~[<HEGs9cEs2!c9gR]-/i(w(Tt$hGIe-.~JD{#.ug}1,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_gosiamay';

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

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
