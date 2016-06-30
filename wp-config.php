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
define('DB_NAME', ( getenv('ProjectNami.DBName') ? getenv('ProjectNami.DBName') : 'WordpressSQL'));

/** MySQL database username */
define('DB_USER', ( getenv('ProjectNami.DBUser') ? getenv('ProjectNami.DBUser') : 'wordpress@wordpresssql'));

/** MySQL database password */
define('DB_PASSWORD', ( getenv('ProjectNami.DBPass') ? getenv('ProjectNami.DBPass') : 'wpressAXA01$'));

/** MySQL hostname */
define('DB_HOST', ( getenv('ProjectNami.DBHost') ? getenv('ProjectNami.DBHost') : 'wordpresssql.database.windows.net'));

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
define('AUTH_KEY',         'EppKcIm~R3DmfOW3Q)v.N#lv:8z_Y7i|&;jq{3,_o>;({%+q;5c!+gN[8[J>:&cU');
define('SECURE_AUTH_KEY',  'OHb@d35^00!5;4Z~=}+U.W|lm~oDPtStD1G7eA@6dx44B]0Af*N>V,^dB!4ow:<1');
define('LOGGED_IN_KEY',    'hsvg6}&CC$L9Q{TF1Y%y T=];1#FC#x<+~{2(:h8{1TlNPnUb~,X1i#h5@UUFRmb');
define('NONCE_KEY',        '^^{9Vq?QQw}vk-S0Q,CB4RNlEyEXNSFyn)oM%LuTh,Wb`rV)~VJzaO]vKu7KC;SJ');
define('AUTH_SALT',        '*aG#o&e0v-W&~{c,+:gb2..ZQgFbB.M+g@m> ,9G/#!+LzfSMt*HbspN6jHt<)j]');
define('SECURE_AUTH_SALT', 'OhXk9zp)JI?>JX(?;a4`KHi&e}j9kU>$K0LpidDT4FJpB+#j;xIuz+Jczh8`.99i');
define('LOGGED_IN_SALT',   'lp/]z;kt8h,8xKEiu#nZb.m-y;.Jt<VGVek2XK%-g,UF%=;,Cr+N&c7*Ad[i#h{/');
define('NONCE_SALT',       'ZfHYm?E9;hW[() Zp`|n{h38{q$KIutQKiDb}WtG0Do:o]_7|Z7@;_NLvbxe>6G7');
define('WP_HOME','http://cmsaxa.decagone.net');
define('WP_SITEURL','http://cmsaxa.decagone.net');

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
