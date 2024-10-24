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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_db');

/** Database username */
define('DB_USER', 'user');

/** Database password */
define('DB_PASSWORD', 'password');

/** Database hostname */
define('DB_HOST', 'db');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',          '1E$|sAga<E3~zL([;@E.1!o7`!3%pd5G04,my$sBt*l~(9@v;nvdz`rPM5**`!D#');
define('SECURE_AUTH_KEY',   'f&lsswd-ffhA[Z.mBZpWlI`-/I]Wy]c9!gA_r$l:5{^VUjnN9f+@NmkUz0+$PDN2');
define('LOGGED_IN_KEY',     'SoMhER6O-zY1us<4)-=] 2A>T]Pk2?sbMwFQnm3U.rD^g`HVt*]XHfK$}-]cDX|t');
define('NONCE_KEY',         '5Zm?Us*Id^U!O.:ZKtL O2csi+-.me0s{jSp$P:K }ammL,)1kDnb%k`0.>05C3?');
define('AUTH_SALT',         '$/A@VQz$K~0@(w*/8p6,W@pwPW;n0fwsiQ@U0@BKsWl[^)-hcInhI G R`k#TxDv');
define('SECURE_AUTH_SALT',  'si=@W6J?CP{_fxh|)iCn!p:?iVgz9<aOt<Fe;.C]0U{~O)*nGG&DziD~o_OzB|?9');
define('LOGGED_IN_SALT',    '{4#K1Y;-b#fghx$%}-Gpwxm[{`F`NOcf<ehpY<My_0.]eMw69$5B0#cMrNuf 8o.');
define('NONCE_SALT',        '{$`6cU(:<I.UF@KwI>.iPE]ZYI)d3<;# h~Hbf0:%-]eki%@}9ckDs/et>X9OVFH');
define('WP_CACHE_KEY_SALT', '!8U7,_$o1`U i<xC24`48C27KvmBP;K)_;NkS-o*xFr#!qz<=[V^vOq|rRiE:COa');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */

define('DOMAIN_CURRENT_SITE', 'localhost');
define('FS_METHOD', 'direct');

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if (! defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
