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
define('DB_NAME', 'mindlink_wordpress30a');

/** MySQL database username */
define('DB_USER', 'mindlink_word30a');

/** MySQL database password */
define('DB_PASSWORD', 'Gt54CtlBJb66');

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
define('AUTH_KEY', 'W<W{qeJB}VoXuuScBl_$TeuB?/jTvSfoDM{HFxa]f!rm{!)gEk%UV]AHWIxTtodsVHs@lkk@K[+!XDRJ|f$LU|QBW-)NShd[)))mw;^[+jqWI!G_LP-wNo^+il*yrn(K');
define('SECURE_AUTH_KEY', 'lO_ejGoA^_TVaA-ou?utn}m]E_erJzGD+MSQ^-)bid^-Hld*Yz=EId?%KOV=y}aHQkZ&I[]nKtRSjYCrEEE^q]C$OIF^CeYS**{[=SvisTj)@_SK[f+|nAtjNpqNLQD>');
define('LOGGED_IN_KEY', 'MPfcqR%[foqJN(;%iWggev=)u}W%PyeQ*jpIAO-jrAMa==|cE;WX|TofBsDNVwj<fDRU&tHx+dX^C%u+<AcI?NQyZ)oWz_d=nShprw}mSXtpG[H[wDGhk]Uczvus_ijD');
define('NONCE_KEY', 'E]<rYUl!hgV(&TkRsL@TfNQaq?imE<Wc@C-mC<Rh?qVYx!iyDHBIx[+o(Ig%jq@b*sM;hihuN$E&LuJyPyDDkJ*Y|Q^Q-plsp&x{OeU}GSM)FLJz%gcosF[lAnf)!Fc=');
define('AUTH_SALT', '([zxOTdRL@(Ct}vP!_xGN!k)vNrJ]Vzg(dnvQ^AanDm/j%mYo+d?*G&TTh[ts</rVtnN!ZcDCvy|Pcj[cSQFbHsb[B}[%TQzdTMWwtIHRUKRgg%l!O;aKcOGKo>|neZf');
define('SECURE_AUTH_SALT', 'IhzHeeISD_OIJi]a=PkqD$jx$P%F|P}^_+Rkp->iW|elNO(gj>]<G/&P!o+QYTCFkfAavAg=!gkf!fVNuVrhQBC+b?+|kzzJ(p&JvQ!|K;Nt><kPKcQly{-*u_OR?-=z');
define('LOGGED_IN_SALT', 'lzfvkPtGX)uNvwHn)Yoru(Uw@ggaHIn+oS%>jj<&^A[uwqKnr[Gdc&{IrE]H@;TTP@lqC*{q+*dU$FP<j)/awH@]p!Mb!r?nn=L%XIahZd[i&[P_PpOF^LlFFWuSE/X/');
define('NONCE_SALT', '=U$ABlY=<A_IlyMRZJKG(@xb!;N@yU%;<jja&nQ=QthEj&KV+&()?yRh|(o_]%m;+NcmpBqYWP=YIZh&G%qMOMvO=<DhMM_S)IQdHK}!%}^RLWbgI%ir]]<UcwPf_E[v');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_hkcu_';

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
