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
define('DB_NAME', 'testdb');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'test');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'password');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'lh%C#[J-t{.B5PpsTVP`0C`0n9K+%,fu$?B)htJ|alks4hwRcTr_F%`!A/-)J*Z|');
define('SECURE_AUTH_KEY',  '1zK++`K-lzYq*([Xg|b{fnQ$e|5Z|-lpd[HF%U(bwg>tH.c^b./RNhA)4gSxA-r?');
define('LOGGED_IN_KEY',    '>EOC:IPciX1^3K=-n 730/~3{UP6hm1wGD<*u>aPr[*na6gJ9eUP1A!wN.KY,u8w');
define('NONCE_KEY',        '[bWvLXcL/q- X(#E{_7RYpOx#O>I2^N !?Q@|3h7g+r}|w}Hsj!XuST~Gwrkgx+m');
define('AUTH_SALT',        'r2z@0b?57yt{~|I~[1S>3?mkq7{tw[F{0~G5Z.vu~L1Upg/_kQNALUDbzxMAzF|p');
define('SECURE_AUTH_SALT', '=sGoB71#>G |F2L~Ke4qP(1aI)+B3yr.h$#rOZ 11YUE!hyCdlYLNafpfN>@N)l ');
define('LOGGED_IN_SALT',   'Xk>=E>f(;bkzs>h@&YwVdv;|Mw[l3J<78OES[H.T3-q(YrC%vw=Smx5(O+pvoL=F');
define('NONCE_SALT',       'OMME&IW9A2]8Cy.24F7Ae]jh+6|})rYpe&?mR{r31@P=zj0pn;xfB||7I}}s#-CY');/**#@-*/

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
