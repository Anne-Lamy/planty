<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

define( 'ITSEC_ENCRYPTION_KEY', 'dXF8SU8vXk02Ol9QfWQoKDw5Z3IjIUlle19CTi1gVEkyM2RlKWh0SGBUSjFydFgqR25CIGs5KmBHMktURkVlJA==' );

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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         '^~40tz.zg&Gcdhp&9@WXHc/88R2zufx y>M$D:ryFneT[],O]rgr;?d!A^os~Yhg' );
define( 'SECURE_AUTH_KEY',  '+hMm9`<W2y6:VcJZgTqx4seT!{)]pceXkkiMlaF~JBqhY[MDwLwpraw=ERK_Gw(,' );
define( 'LOGGED_IN_KEY',    '{!V*$bcWK}Ff)LczTMSzbK>d@_kqSwo/(20=k5ERR!Shx0DSDlm*65<bg1$}*(9`' );
define( 'NONCE_KEY',        '&.HvF: ZcJk;yIVTPMD|S_L_W]j.f8J YMoMg.$0[0TL`]Y ]ipuo(8-j2R*krp|' );
define( 'AUTH_SALT',        'X1]Ea&z=c&=.l-]pTS}+lwvzzB!Z<+651;aiB2^FE7yG6AR.F3A-.^Q{JOm>;?v}' );
define( 'SECURE_AUTH_SALT', ';R6ER4Z(Y6y}1).N;meQ8GugOVBMh1FQHTbzCF!]ip>wyW6COLTHN7Y)^%B[jYCt' );
define( 'LOGGED_IN_SALT',   '}[tI9iltHJ9ccd=j*RT`cp#s*526D`}jEPj:=`5Cqw7]J91w?T*GDxH@?||#LxlT' );
define( 'NONCE_SALT',       '~?G~w<klTPZ<BYT@3EK&B*):(+52C|[[b;]$>/VV@v,rO$&CS,lU&EBG9ik`I`Y,' );
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
define('WP_DEBUG', true);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
