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
define('DB_NAME', 'db_vinx');

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
define('AUTH_KEY',         'KmZyrU`<GeGxsj.c32po0-(3Gk V4dogfM:N:HadS BBx];8!N-^Zz$B+:4@%JMX');
define('SECURE_AUTH_KEY',  'S}strV<rpF A[cy|P!vBEo$i&a}C&8W|F<%WeTzMsEN//&x>nsE,7qq e_sW+.2t');
define('LOGGED_IN_KEY',    'D%:7kC.9O7U aK*})aBcFbWE1CbeR[#@zy3V>Px4NzJ<V0t)z{=V;D1Pw_&qE~1E');
define('NONCE_KEY',        'eYZ;3r>ME=;-^W:Zc~.aPuJk,cr}l{r@*24J~Iz<;E~ds9Y$}sl/)9~CN6OqKA_]');
define('AUTH_SALT',        '*d}>9z0Yb%a7$S*_y,E(JmH4ydL pX7/[aU|bu yFYltT/%9d;FR?&IEle(8q7:q');
define('SECURE_AUTH_SALT', 'SzwsX_=@BL_.&T&ZS9(p-I>W;BRZU)yAQWag<DRRd2[xVt4bzpj=%d}V/Q1]t4Vw');
define('LOGGED_IN_SALT',   '@ndT$l.%D6z6$sdM!XFD_q]Sz6nHhmBCZ^C4~=qZVy_s%t;*sZTdc]+kMlD$V8z2');
define('NONCE_SALT',       'o<.&M>co+33Qo6(;rexD`)PtT$U`v}:rFQ?.HUy6o7Ft*sXN]psc[H:P|[h}0rEk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vvc_';

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
