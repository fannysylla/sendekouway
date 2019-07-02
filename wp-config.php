<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'saimmo' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'fanny' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'fannysylla' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'eZZlJ5}M!:BqNRZZ=jU91D/+T6?Zi$L[7XVtD_#79[W7]>_ev7DJzX22jh&ENnp]' );
define( 'SECURE_AUTH_KEY',  'zK]??p0V<u%b.%AYp8l|M:9pP@X{W*Pwb-*jT-+kr.v?K;Y7v?B}}A:56FyT>Ukf' );
define( 'LOGGED_IN_KEY',    'n:ju|XCB|qpt_EOj=8]:zRr`gRONoh LqI@5bt6bVGpn%`uP[j,@UY!la4vot@M]' );
define( 'NONCE_KEY',        '|@vFr*HK.N(0%$xT50eOpLYlImI&y,/)=Ra&TtfN>7pErOF#!j*AY:ZI=c%7ju2W' );
define( 'AUTH_SALT',        'P~5ZzIeG%5N,LnevwOI?U2.Dqyoth8n3_EplAd+uAq>OS_,Fw>l[lro{:K v@*SV' );
define( 'SECURE_AUTH_SALT', '&&#O}60+Ec&#XBCKSt3-=Bal[LszE/V:k+oKW)Z*Lwh S30~ncxto%k}A_<gOD]J' );
define( 'LOGGED_IN_SALT',   'YS<Le@AN6nWM:_uqQhv]>`td_&n{Ne-qO6h 3[zLcu>V{*Q,G97Pkp=MR~MxFlJh' );
define( 'NONCE_SALT',       'Y96N&=,Wo aB& LJ{gK-m2U?[Twq/-/.7V.!QAFZceJRb:8O!<7QFZt}LMbOOGa#' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
define('FS_METHOD','direct');
