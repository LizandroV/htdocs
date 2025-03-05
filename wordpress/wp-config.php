<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'cwYCdF!O4V~>5Q?54wHsem2Ym~XquxB=x:N$$We,_B @>g@6dD[Gvo |gHIm1yf4' );
define( 'SECURE_AUTH_KEY',  '`Q~*)[lv~=6@U!-^)y=m_j~ +9d,Q|_i~>odoJUBy]kV,[[dkZ4]ka!VTo%p,1AP' );
define( 'LOGGED_IN_KEY',    'n?0zzKDe%C8e!)Ox<.8UR=B^.<MdbJ2nqrlr>K1EzOLl+MN))!JE?<xMh[c`nU#*' );
define( 'NONCE_KEY',        'FO:4wRI.Ho%Hh>0i9i4F)DEdrEo|jM>&6)+?*({?O<NIjK>oYBk6^}2`GE&S%:/R' );
define( 'AUTH_SALT',        'fkV[t[Pza%TE0|V_)^A*1.H0X[xJsVHu![w^E4#OnB}yX}xYmodGD^!?*WM1$rrs' );
define( 'SECURE_AUTH_SALT', '9I5C ;<W%MfS0hm/x5.%=JwPw|n3;ctMRlHFMm;5L.|t;(9Jy&j$Gd6m~K*~d0&e' );
define( 'LOGGED_IN_SALT',   '+FK1|B6q@=55a6I;.L6NgZJT8@QP/Iih^TZFY2)E}@+H{J;$ -3vT<C3W$]p+Gbk' );
define( 'NONCE_SALT',       '=U;)fk]MXw}O5EMjUtE-Y2s%FL>&W6[ h]j_95#EzK B4p;itKEgzV5K{UlAX!]]' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
