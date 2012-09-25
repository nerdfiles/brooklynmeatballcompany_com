<?php
/**
* The base configurations of the WordPress.
*
* This file has the following configurations: MySQL settings, Table Prefix,
* Secret Keys, WordPress Language, and ABSPATH. You can find more information
* by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
* wp-config.php} Codex page. You can get the MySQL settings from your web host.
*
* This file is used by the wp-config.php creation script during the
* installation. You don't have to use the web site, you can just copy this file
* to "wp-config.php" and fill in the values.
*
* @package WordPress
*/

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'brooklynmeatballcompany_com');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'hiD Wci$vwhHdMie!U>~BNno~$N5j p$*VHMtaqssF-O7A8mk8$7 cGd(8}-(_(!');
define('SECURE_AUTH_KEY',  '@:Q i&1TD-3Z|L/RnEBXV4i~?8:V03FtGtYX@^]^>P^#Ia(Fad}1gMwavoXEy:v6');
define('LOGGED_IN_KEY',    'bSrssCBV17Hu Dw%2ex6Yaz6|Tdwd0oU{#.UonwTB>$Bc?8Fes}*FZlaB9^m2W^S');
define('NONCE_KEY',        '2&Ez@Q/E+&eolq%`xTBR1v7{cUPu18d=xn`pNrxF_79EFYARdTy9%mg.9?XC$auf');
define('AUTH_SALT',        'R6l)C,}JO Oz|tXS5eq=l],|:*s(0xK*a26S^CuYArJjLt%?_;wf7pL,HJ9bgfkE');
define('SECURE_AUTH_SALT', '*r|b-Q4Aa</o-k)WWjyS%q Or)P.odv!zF7N3{A6@,Wuq:$bEjS~_Y@.Y4/[g~F/');
define('LOGGED_IN_SALT',   'zW;Z~Jn_zF>}>CMe[#4_7I2G5pFzx]SW>@YHa# Zi3*C;UeQ&sT_IdVEQAbO^Zgf');
define('NONCE_SALT',       '?h4R}I2[4d>5[Rl(  cU4CqHim.W E{f,Gq![jv$?$<B|HFBH3agh~S6~! hC(;s');

/**#@-*/

/**
* WordPress Database Table prefix.
*
* You can have multiple installations in one database if you give each a unique
* prefix. Only numbers, letters, and underscores please!
*/
$table_prefix  = 'wp_';

/**
* WordPress Localized Language, defaults to English.
*
* Change this to localize WordPress. A corresponding MO file for the chosen
* language must be installed to wp-content/languages. For example, install
* de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
* language support.
*/
define('WPLANG', '');

/**
* For developers: WordPress debugging mode.
*
* Change this to true to enable the display of notices during development.
* It is strongly recommended that plugin and theme developers use WP_DEBUG
* in their development environments.
*/
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

