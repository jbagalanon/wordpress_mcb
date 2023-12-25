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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '(55{)IIoHAo;MLs+vz jf]XP3sFsD&2&@jimS*h*e8|-Lxk54-6q/4gqO~Ase9)R' );
define( 'SECURE_AUTH_KEY',   'TJ-kATSRj(6oSF$)F7H3,4;GK^yth?++6:S-VM+c;o%zu]fSBZa!uJ!j3r}D!/fy' );
define( 'LOGGED_IN_KEY',     'C.b_bYV1UkNe7hPS8ZOHJmQZ?PG:y}a$ql4uePR]88|Scr&c?(q%>aoX$=Iw;x[@' );
define( 'NONCE_KEY',         'O(Dj1P}p%tzHCG>%nYyZ@3/((c?H&o8QlcO_RL2;Rl3ckcM=3IAaI*nT}h2q5V.<' );
define( 'AUTH_SALT',         '0wyl*|d?5Z~|Sz{Scol%#~b!1ysqNBu/]qW+,qVN.<$X{K2sqlW@VCyEMRy2C5Z5' );
define( 'SECURE_AUTH_SALT',  '`H)/[pL,V{*{/L7r3@#VRJ|hk5>h ((pJ$37lLIHGD%zyO`6Ri%MbJbp 4#[%0e0' );
define( 'LOGGED_IN_SALT',    'zJs7mQRiPw&+JHr#ewH.9qggF[d@ib}xawgm`.}7@*g|=p:1*8kcP9>McIeH0P/o' );
define( 'NONCE_SALT',        'U^!/gzXR@]Z%n:|xz Q8gA&<:>QuI]Q_k_AG.DN>Z?v 2Cvwt?g =w:Q$8.GeLK`' );
define( 'WP_CACHE_KEY_SALT', 'FfO@`IvcK|chhegcGLNU@|H:#n!uT<Q*Yiui=~6=gj`_+A,M0pH`B8n>ipR`T;=9' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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

	// wp_debug should be false in	production

	define( 'WP_DEBUG', true );
	define('WP_DISABLE_FATAL_ERROR_HANDLER', true);


define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
