<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'salon_coiffure' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Andranik1' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         ':Nrd0t,zj Paf/nu$d]oo7RhE6LJ9S@zLEGnnLAFcE}YCNaE/Wa+`GsN %5z5[Gz' );
define( 'SECURE_AUTH_KEY',  'X.|q$1IEAZq+sUdARoxiHb`Pd3&/f/=D!2)smUOa.#d< Z]}gB8kZ)8up5@dQ~L|' );
define( 'LOGGED_IN_KEY',    'axOlwkGY,P(`91Dbhl{xsJRSx4QUa&Hp]H}[.m:Fu:i4K|,-nFlHJ>P!^w,st.$+' );
define( 'NONCE_KEY',        '*40|0GZMgTRGV7Uc`s~JF|_ri=!gSZYkLI*{q8!hF$i!.qce>plH.3v+3.?Nb?^S' );
define( 'AUTH_SALT',        'h<:NgSNO(1l[dPXF&;DjxaFi^J}X/D!4,HZ=w.SUrwmJ4EvP/>|SuQO`uNz!lY}4' );
define( 'SECURE_AUTH_SALT', '1CZ!`Olkr(Cx=b5K.8wJq}LRGKykr*5xPx&Q 88=oa:GRX<|u$V}&nm<QkUNX2$*' );
define( 'LOGGED_IN_SALT',   '_zQ!` p;3[(hK`7wQ,/EIGC$BA6R8&8E&]z1;X1e+z!6>xduJdpat(^%aFvo?KE%' );
define( 'NONCE_SALT',       'J.n$of``Im<=k)xGh6&Xc4v|yky]u[)evRw__uzN219$N&N*$rVy1dcy#;hml[NO' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
