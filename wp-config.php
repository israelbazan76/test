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
define('DB_NAME', 'sed2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'S*(EBJtU=DwC*L`<w*{GR^UPVD;CrixLLRBrg6bkT@iMj58Ta@Yo>mIjV@]3sqba');
define('SECURE_AUTH_KEY',  ':,!-7qfoI&j}$:}aC%W1D5&2UJ],aI9egF2:3QsjYvO(mGE$xg B%>nMvh5?}`XP');
define('LOGGED_IN_KEY',    '(vp&$$bbC8$@<I.YvpTcgZ2 &EWKl*%qe@$oQz|2f|~Z([3C#WR*u@R*/CI90KRX');
define('NONCE_KEY',        'H#Y.:FAD`[PA[L-DX,SI_GW21EKHE!CK8bW@th4/:Oe1etonFC[jm=.Lf)|Td-w/');
define('AUTH_SALT',        '1O@c:(Xz}w/bc/_?ChD}Aoils`9qP h&.=dElJ#}L}nW2TrHVM yTopd7KF;#!}>');
define('SECURE_AUTH_SALT', '*st|S+~>`LYB}!3_K~;SVU^{r)t/ L6`,o]$)cqTWRxPxh*{?FTgVJEz_9ad%PP@');
define('LOGGED_IN_SALT',   'OMH*8kXX(ViI%dOH&AE,tpM750b<+cr>juHJXM8^=N$ripGXl..J:{@LFC-S0;](');
define('NONCE_SALT',       'y& 08a_5j&Q~_Tm<7:bxdw=[J-1(GwnpU+q|N`>;%Sm=-j(qe<A.t=(V]X$;8DJq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
