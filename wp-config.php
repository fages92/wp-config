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
define( 'DB_USER', 'wp_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', '3.83.98.146' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'N+n-T?`%y@;~tVN933 NR20xQc9-RGUpc(6JTH|5$xPZfr@dX&$9*r_-w&h40r~z');
define('SECURE_AUTH_KEY',  'hi u{|TD7lY8}3L{Exz[p5LkaEy.iLNlTu6abo,T-(5C@);)d> iIx,}(Dk,5Zxb');
define('LOGGED_IN_KEY',    '&P~wH.K4pM)aKH;E7i{`+x`/[dXWR/(U[*Vg-iVsELqE*[D>u.$|X*RyeE}E-j}w');
define('NONCE_KEY',        'pk)tRHMsm<yVyX5%qxvn{DQBv*=MMTgup?#UI:l)%-5-qpA,]@{g5BGXPuK)$UCW');
define('AUTH_SALT',        '1=+rZC2nWoz8fxteQs4gdR9{K~Kwi8![`I+].|O3p}@jK>wEXVsdFHG2+`}y}=5G');
define('SECURE_AUTH_SALT', '?&j$* ~S}WmvJT<S<xat0Igtv U~I^=-zfc)(o<p:|pH4-r}AfLVT9c>v;X~U#o8');
define('LOGGED_IN_SALT',   'nY;P$V.E}VPldu+EFY+]6>|iLQ<[Z$&:MBzrpQ7ks+6kalIh,m<IPTwu}OA_ma!&');
define('NONCE_SALT',       '0A5|b$3*w>S&ISu2U31++,%a.5c~^|_|6+!t F^N[2P*OgZ9jDMnNV;ajEBQJ~Gj');

/**#@-*/
