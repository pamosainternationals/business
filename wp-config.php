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

define( 'DB_NAME', '' );


/** MySQL database username */

define( 'DB_USER', '' );


/** MySQL database password */

define( 'DB_PASSWORD', '' );


/** MySQL hostname */

define( 'DB_HOST', '' );


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

define( 'AUTH_KEY',         ':x)S-<nT6yyMm&bFNW>h[9t=b)*Tj_403S:YU5Nau6+%QOvolGjba-O`:GoSV?f7' );

define( 'SECURE_AUTH_KEY',  '?(aL#+JzW@#6N^`M=:iLA9(VZ>$o2m>By~j7;EtM^(LSlWulCLS/._,G`q_Eu%N;' );

define( 'LOGGED_IN_KEY',    'hU!E6-u@ySA=u|w(_rv^{c`j6C+n{OWrY/wGde/=Vvx.1d< $0SJAG9+(LLeu+DO' );

define( 'NONCE_KEY',        'lcpObpj1n%xFy/p+F2.x`*Jdl+,XZR8]/EQg7UFdf+oeP;H5`FO|SQf2$he90uz;' );

define( 'AUTH_SALT',        'Jf00<IF4S(.4>Y*-9h[<2~mm eVD,[:^+WrRWF3g<PFKd]#5)WOSd#o{gHMU7}7Z' );

define( 'SECURE_AUTH_SALT', '`GGK`t|n(ZB$T`duO&|Jq5tn/,av0.M`(jO6{ R{vMI*mHOM4sJRdv}y|>f0>7(?' );

define( 'LOGGED_IN_SALT',   'jXk~};f~&;s1=79F&g@SUS#-3j<*4E#4-K]>@2mukYY|k ydQe-*8j^VBfRvG))J' );

define( 'NONCE_SALT',       'IfrCbP52y7y=dxso_-7fw{4M9 jo3?.?YQ+,Ti=v-mXieq;N{RD%/{V~V3MeB3`+' );


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

 * visit the documentation.

 *

 * @link https://wordpress.org/support/article/debugging-in-wordpress/

 */

define( 'WP_DEBUG', false );


/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

