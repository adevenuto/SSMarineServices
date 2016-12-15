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
define('DB_NAME', 'ss-marine');

/** MySQL database username */
define('DB_USER', 'lindsay-boot');

/** MySQL database password */
define('DB_PASSWORD', '7KpJJymsd3SeyfVu');

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
define('AUTH_KEY',         'vY[MC!3Kt7MCL+oYH>5%&#ME5l>w%V(R[.y+,1IA5fjj6cg,p0_C)?m+G.[p+Q+%');
define('SECURE_AUTH_KEY',  '8,9=B<]F%ZKSw$jnLcY=;ONKD+7|})]oZa/7-^GW3%5~@#:*N;|_v>U@.DekgvI@');
define('LOGGED_IN_KEY',    '*X+D#zsg<lG&E,@y<EzRJA+^,t*z&&6T.y[3Dri.!{<->dT&-l<#$sysRJgE*nwG');
define('NONCE_KEY',        '#TMECR/-m`G*B-v-<ry{JEI3#J<V[$UMEF .Jj04cZEcZsW$h+eI3BJO9${0No-6');
define('AUTH_SALT',        'J|Fr7)p-3n[:M=t@)$Hr-b!2zh?I.jNZnq_o#a^-vEHEKJD2+$2~o+^93s@QlVS1');
define('SECURE_AUTH_SALT', 'FSUFQugSW_PES^.L:NqI?OCUd&%9#pGATjAF-_@1VLi{_7=J8JA?Mu)Y7_|M:Z=Y');
define('LOGGED_IN_SALT',   '3_KMpx<Rm&d+^*TIW^.XML{r|t`v,|t3B]:l{wA6*Bl~$?oz0C)z )-heye| S:+');
define('NONCE_SALT',       ':RtIJbAhs4$+Ll@8%mp1yfA+>ua.3KkispneumUuPsaJKZC?^8nUZvRKuv#wv QK');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ionfuel_';

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
