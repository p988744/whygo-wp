<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'whygo_wp');

/** MySQL database username */
define('DB_USER', 'whygo_wp');

/** MySQL database password */
define('DB_PASSWORD', 'whygo12');

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
define('AUTH_KEY',         'Q*K/ {Kd!@txCIid [{_WD7iQ*^|.kvb#T6?eoM,_Bhn7B3+ NR&|c|tqfMQdT8S');
define('SECURE_AUTH_KEY',  'IcX3mV74-ch+X8~|,`+NfB9+O{[yz`1A4{[6bJ5}xLxz-sG*o6#jH~>2& 4bns++');
define('LOGGED_IN_KEY',    'F|M{p;9v ~8JRo!SKUoHBa/Hx)Hq)uIS`3!LgJ_m,(f-EQ!;m8<,e DeDi|fYP`w');
define('NONCE_KEY',        '[+bjW+CtpTRS^T{]7xZJ&*(yWp(Kz (-]Q.M>;n|i7>m*#%{-gqV$&_.,.6-`WbL');
define('AUTH_SALT',        'y2a*m!*Hp]g$H%S).HF)$&,)+h[]t9Btlw!p~z-vgnZb$G}oYvGSy+aRb1.QGadf');
define('SECURE_AUTH_SALT', 'k;n~Q|54&5wnA7?O[O-FSP>m-h3l7pmjP&(2DS?Q+JCtDG[$Bn-uEjR  YjMD_2;');
define('LOGGED_IN_SALT',   '<HFH;c )C]_fxj)g,lW*n+f0#lo#r|mDPuY|nv^Y`rgf`l8)P86Y_|+4wS-]f00O');
define('NONCE_SALT',       'P+zcboRul~_i|PSK g62e;[Jq+t]/<0T8q 1 aj.v$kQ_f4U4+oBoED~5Q^qXW4+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

