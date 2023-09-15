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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'c6}JgkI?wAUs:3.Z^ Mi4@_Q[{RW@v8qA0M?~M*;p/(YsQurmlG6b#VC0.Sz=c.x' );
define( 'SECURE_AUTH_KEY',  'HD#~Bs[)u&4OW=QT!Irs~;.X|+Ni6$IY]DojG_;yT&yos}E[5I$XkN}TupBEwM|8' );
define( 'LOGGED_IN_KEY',    'G9G*MZck$i@c6`?eqWGydETb:>4,_u^5[0CG,H$0>*.)3A?45kD;^ptlBTp0!5rx' );
define( 'NONCE_KEY',        'LvKaY5$NAk[68qSi}_>XS[N(b5]Y*48q?I6+n^esBRAAN1#RW/St66fWM!N@nPv:' );
define( 'AUTH_SALT',        '#VyQUT4a6K)?JUMilSRxh^nKf4|qg;1wh=UQ~@%M6fYdra?q1s3_{)fi:[BI5 1d' );
define( 'SECURE_AUTH_SALT', 'FZ5@bwl0MBGws8%[Z@fB3(aSt(o%N`=ISnyxf}zS_`^F&p{3Jb):;~voM=S:vL4r' );
define( 'LOGGED_IN_SALT',   '[/|<rpJVePVTe[iFOfIK~:q#QM]W}MP_/auw=NJCu`kRvSY-kGvl]pJ;sx0n3zl.' );
define( 'NONCE_SALT',       '7zp,!q.{;{ci5FJrnhSU`wtxx5+:UrqE$~|rDfrz!@D]K^I`Nzc}KY6`TR&LTBrW' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
