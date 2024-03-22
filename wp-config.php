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
define( 'DB_NAME', 'camping_dawii' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'ptM%^9mT&qt!i`],NVMY8?hZP#`&cVXBK#]cs4Mc54Sau{1oF|/Owv5_.X?f)gNg' );
define( 'SECURE_AUTH_KEY',  '%#{(!WWbN@Qypk#^r.Q6ZF,`AhWH+T69%4ygk=b0^<)oEaFoJ^lm!,UoJ`:c7A/8' );
define( 'LOGGED_IN_KEY',    '^DKGXsYF)D!X4(YhNrgiZ?5,)9oT&,v7YArPDD#B#o~<T4D:dOz0P*vFXF6d3tb4' );
define( 'NONCE_KEY',        '^0egwy-_Sj7Asa-Mptq|Hmn]kX=cfARk|~y1T]tktpWq*WH^Au_M2L>s?KJ%Zh51' );
define( 'AUTH_SALT',        'e,KF~{G+5&{}ln dMFKNcRCU]8`QH_Gj3y{bJn@iFT{4.iGT19^jB i=TbZtPNU<' );
define( 'SECURE_AUTH_SALT', 'FUN9j@.Iy>|C6U%@_;^bl+=7v;O07aRp2C#3}t[@1o8,I,QGZVxuoq9/66E~}nz/' );
define( 'LOGGED_IN_SALT',   'VB<t<(#2O7$h1+d `!O;kYf]O#S;>bFBm9@ku<5J$/o4([v~bE:T$V.?<v_*lc`_' );
define( 'NONCE_SALT',       'FsyI)X_7vGcy@N_/2ewWlQ7{u/1V&>|:ppCD&NLOt.>L!HJ|;K,bx>kTz)tQKlH9' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'cp_';

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
