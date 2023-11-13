<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'portfolio' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'PG[(;30Fpa:/`He0+;St (X}pzpG~W( H3{:r^#$SqkTZiR~5Ns2>P%Iwf{TU3Rd' );
define( 'SECURE_AUTH_KEY',  'E[Dr&1f1Sj=+0;F+a=0 ,o=l1dB8$GTi.=%Hr#v[TDrYzApR7gB#Tv?4DlS,Gv.D' );
define( 'LOGGED_IN_KEY',    'wSY {7Mr- <NPgjHp?A4}4}mpimJlyho2WJSBv?Oli|o 5@Cy}qNQ|41 ol&OO#/' );
define( 'NONCE_KEY',        '!v>=.S4h1Z~Q+|x:c?PKjrK/M3o(DM3g*=U*M*4F1*-r4F<5 }0{ TW4{2SeVS$2' );
define( 'AUTH_SALT',        'fJ(s:<>imc@RVmZABQ?v3(>Q+l[Z)T!PWw9&f#~qFk~k>4!WV`z(%^1yzL(S/!QK' );
define( 'SECURE_AUTH_SALT', 'xLkMVO3-bx?#P?2XAKYe@/,khJT2L_z#2_(BQ!DLNXk@?)8al[!|79rm>F=;2zE^' );
define( 'LOGGED_IN_SALT',   'UJD_7RU#?>-rf!{P4?f.o}cUE^{9+.i,0Zt%F7^y$X|p5<AbXnFD=[&W]7;6fMm?' );
define( 'NONCE_SALT',       'd=x7`v1^a@#2}onR7!6JZL}xM}x6OO^Krq?3B.Vg5.>HGIbx|C#cS>&wH&7!)(t}' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
