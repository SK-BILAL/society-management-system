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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'society' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';J_2V}+GvN8:L8MnyQI{})dZM{kKOd[lnnRfI9MO)FQ@f%ij-<t/.8fM3~<h6f>A' );
define( 'SECURE_AUTH_KEY',  '5mxZnS|)4*fs%J}eOV0C,mO|w+jLXEbTW9@73$qmLk!HuBoUi?Yk9QpWND w}e4~' );
define( 'LOGGED_IN_KEY',    'Me%q.4z~RiY=Dqt.)R#%U[!Qa/T/d{17*oX~#^^?^pI1qQ@<<0,TrpT/nv8&zv/n' );
define( 'NONCE_KEY',        'ka^{40c?19z]Jg~duUB;<uQ-n0^GqPdwJ>.#<U<Q-Mg+`t<0N_z^Nm{4Q}?,%}vk' );
define( 'AUTH_SALT',        '(QR(fWU=m$r6&:v;*a6$16Ggu1RJ7@R~hU0H_sw)^O>qP8Z,Qh_c79lhN4YRs`3^' );
define( 'SECURE_AUTH_SALT', '@IL4vWtbH9YvL}{t#.:Y(VkMQv#m:%FZ-VaLhy{$Dvc0$be}EH|IjR6{W8%2t|_|' );
define( 'LOGGED_IN_SALT',   'YbMa)q&rv>*>d!H4E/U2-tQ]65MD_dcdcBi})Z^}^4mJs-(`+|qNd6j&VSk0@k#v' );
define( 'NONCE_SALT',       '?r|LQAuv%F-9aJtn 4?3qxY[]eVU)--uKdGYR=e2-2B=sBK{oL43&Qnn,Rs^{$6;' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
