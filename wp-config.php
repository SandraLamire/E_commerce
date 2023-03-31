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
define( 'DB_NAME', 'e_commerce' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'S1{((lNk1d<5qT7v2<oP.2X?R#b&B-:m2HiRC:6}f(Sj(qC-d.)(4VH)]>(iQ}c+' );
define( 'SECURE_AUTH_KEY',  'ph)&(&41xI.cov1c$@S|NN$~4KL?i8|z(`yEJ?8Q32n&tXjGnuvvw:EOU(TZ`A=G' );
define( 'LOGGED_IN_KEY',    'vgN^uwQ%3S]/6beH&-RQ/X{Q[pL);V[KW*bA`P:F:+U1hT*eEg froeYFi<u,!XK' );
define( 'NONCE_KEY',        's*keD|3<bEvI.}_9&CN@^3%.QC).J!#rLGC%,W]OL$gC.;Dm8+vR3.[:Z6ua39|~' );
define( 'AUTH_SALT',        'FT#q Gi5cVDKyUb%( R[07HqKF97+AgBSma:#`K5Zn<:oy<,eR2D(6hQfRk+UPHq' );
define( 'SECURE_AUTH_SALT', '9,Y;eSaCBd$]z93b_G#w(AEt@ z[XFjVg3Fx0G(J&Pyq_~X{&bU~S31*R:$q-+^q' );
define( 'LOGGED_IN_SALT',   'Iu[{`?a))lv/g>s{/=zfMZ*F?RV#MPthMfX @VLwTUkqz}m?]&R1^eeRKRMA6uq%' );
define( 'NONCE_SALT',       '/=}l3pn^G{S T@Nx&S~-$wSD^wjhr]-+p/l8,~HP9NpRW#N ].K&v.G)M+N.`|T?' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'comm_';

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
