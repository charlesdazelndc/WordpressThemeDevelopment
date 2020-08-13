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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'creative_theme' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Gy.<J{H.a4))gso9[&Ppu6e]`yN2gx42AYELHH|#jg-6XB{=JE5(,eDI~510EP^(' );
define( 'SECURE_AUTH_KEY',  'Fl-[70By%NV_~*Q|.un!!G!Q+,/%wA%T*6q9sL>HnGs|3oT`{mr)_r7{pB0E+6kX' );
define( 'LOGGED_IN_KEY',    'uX$Ea5O+dUi{.E}gbn%(.=VGNSV%L7uH#Sfks(DJf[I)rxRFiVhxU;6S&~aj9?T?' );
define( 'NONCE_KEY',        ']h|?gv=ZQ0+#>ECh/9N5UjBUWP[gh9#;o?b~WLib8n(^=.W@3R2gvp1:>z|jnYDz' );
define( 'AUTH_SALT',        'Q$`d1<8U]ZT5Tqc~KR:r_|v&%ZI#DH&R$iYh}X<aKEQA?;{=5W<JE{u:tI@>.=>p' );
define( 'SECURE_AUTH_SALT', '-hoXH@)Qj>`lD&E-/fwq8PizJ8@BK8Ql]V[h`o5LMOJt%s+q2mbE:MbfHp}du*Sj' );
define( 'LOGGED_IN_SALT',   ']8>w2Y)G]~]=}BnrQ[efQW-Wyus?tbq[Qr=ZB1-M=Lp{7;cO*xhK@ED7]P%}U;+[' );
define( 'NONCE_SALT',       '<I0p*}FoVE82D6@Gft]_fX?ti%XfqWAM`*zqFV ]:o@Tq}q//Ww{:sbgiAo qY3_' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_theme';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
