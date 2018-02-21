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
define('DB_NAME', 'esae_wordpress');

/** MySQL database username */
define('DB_USER', 'esae');

/** MySQL database password */
define('DB_PASSWORD', 'Electric1Racing');

/** MySQL hostname */
define('DB_HOST', 'mysql.ecn.purdue.edu');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'GTb_yq~A|``k4C&cTF/v;mZ9OTsQ7Ay92W+9KOFJNd6>&=Ujti7})X?57!DE[ciT');
define('SECURE_AUTH_KEY',  'F~r6]z^s86f|xXlBbDVC4WTecyurn0)$b< [HP6_k1]fF#7U1ccc]wO?9@QK@sD*');
define('LOGGED_IN_KEY',    '[NzTmqQ[g4va,fBjQ,Af1ZW_Lc:Ftu4sh /c6wuJ(?^][YD4+zxDVzLize/orJEf');
define('NONCE_KEY',        '}(9a02Guoc9Y}Ic}y/6u>GiUG743dd_`qsJ-)Trpcd2]G|CP=Fzv{GS1RH?`BDXE');
define('AUTH_SALT',        'HE`GFhH(,98*Bss~K~B%,Ju-pI8c.,%^{Ge8@qoHZg<_tS_[aNn[ 1APZ0o/N<kJ');
define('SECURE_AUTH_SALT', 'P Q>6e05d 47bi&*C:6X&#w+%Ut2/A<%R`,+j5MD(?Ft54I;L`B5 g)Rfv$Y||zp');
define('LOGGED_IN_SALT',   'DU$0zo/z=(dU~^q]n4$_3@}nx(Nq^SGd.l<#.bYC#ovkRiwOUMZ)Wkk01FyV1GD$');
define('NONCE_SALT',       '|U!lv88Gj56P&t s_jX;k^Bh/rsU+:7St%B`2Yu4TmK!!U?SQd,qeGc[fr#Va%T9');

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
