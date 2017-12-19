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
define('DB_NAME', 'webapp-vtj');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin@pwddb1');

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
define('AUTH_KEY',         'NK&#pI(|ct*seRRDl6Q&%Fc$42u,WKYyI>Ca?Di*_-yq >I=9-SIH8S32KD`M8[5');
define('SECURE_AUTH_KEY',  '4!/nNktT-77VO*>H:HWFv0+D{[&!C&sV4x}~[#57Edn`Ke8t|7Kl|Q/iOP{lK%)j');
define('LOGGED_IN_KEY',    '!CGmO]He]qKUbFQ|nurC.H]85uz8cB_hLNcVZ&)D8=AiDbvt$ujagQlGy(pj.tlQ');
define('NONCE_KEY',        'wJ%9M;nEDGpwW#0L~BJfe.^SAbeDN##vz:4qc*#L4big-Z?)LTPY*o`mvf4igTWx');
define('AUTH_SALT',        '&px~K8c5%_Eisr9oSM+5_-8vU+yp7E{rtz~^F~3S06E!<x}XD]~k>]?Uo b?DEe1');
define('SECURE_AUTH_SALT', 'G,hU#k>:W}+)<xp2j]Js?[o[sc&!{D7xG$V+n#n[%i,G8k+^@M MZqeUl6<MlHit');
define('LOGGED_IN_SALT',   ',kV>013k8[@L8VT?5)%165b!EZMn]Q{&OcU1oS$ayF;insIAS4ySBBBe~y,f3T{p');
define('NONCE_SALT',       '>MQsG^EeJ3uyu&gC4Nvw/9U;/1|9p%xkL#.3.Flc.~g^#C5YuKfm*{V!x.wH&Ah#');

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
