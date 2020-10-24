<?php
/**
 * Setările de bază pentru WordPress.
 *
 * Acest fișier este folosit la crearea wp-config.php în timpul procesului de instalare.
 * Folosirea interfeței web nu este obligatorie, acest fișier poate fi copiat
 * sub numele de „wp-config.php”, iar apoi populate toate detaliile.
 *
 * Acest fișier conține următoarele configurări:
 *
 * * setările MySQL
 * * cheile secrete
 * * prefixul pentru tabele
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Setările MySQL: aceste informații pot fi obținute de la serviciile de găzduire ** //
/** Numele bazei de date pentru WordPress */
define( 'DB_NAME', 'popa' );

/** Numele de utilizator MySQL */
define( 'DB_USER', 'root' );

/** Parola utilizatorului MySQL */
define( 'DB_PASSWORD', 'root' );

/** Adresa serverului MySQL */
define( 'DB_HOST', 'localhost' );

/** Setul de caractere pentru tabelele din baza de date. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Schema pentru unificare. Nu face modificări dacă nu ești sigur. */
define('DB_COLLATE', '');

/**#@+
 * Cheile unice pentru autentificare
 *
 * Modifică conținutul fiecărei chei pentru o frază unică.
 * Acestea pot fi generate folosind {@link https://api.wordpress.org/secret-key/1.1/salt/ serviciul pentru chei de pe WordPress.org}
 * Pentru a invalida toate cookie-urile poți schimba aceste valori în orice moment. Aceasta va forța toți utilizatorii să se autentifice din nou.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4~9*VZ8pGAs(up9x>#xa1yn>sBzmh8Q6Avmx6IAA/g49q+,!poZ9)d{F`MNYzuHa' );
define( 'SECURE_AUTH_KEY',  'iaeQgJXWP9r>y!Bq+)$y97{}gj!<r3RVQkGi3/b7ap%+W,5^{TKW+Y)UgI{H%-<8' );
define( 'LOGGED_IN_KEY',    'fl4]RjmdS!fHS)%ZiFKGe3*yuX*:2I[_C*gI26[D2AeR4YK7g??ax**>#U(5;6lK' );
define( 'NONCE_KEY',        'C%LRqP5V^[;E?.R]:ETIaZCeKy10TO?SlS=(CEZyKiAc@Km(hQ(X!cjo(x&h,S-/' );
define( 'AUTH_SALT',        '*;%7N4,s)USHUj_*>x28)7&]k*ciP<1XiDDWT.hI{VGDd{,ePX&JdtN2S%5}tIxc' );
define( 'SECURE_AUTH_SALT', '?P[12C`Q1jT#LL/o`_xHqE]1iky!()QBks3RIpC>N>q)*U/QRHrf0PXEu*;hsjBC' );
define( 'LOGGED_IN_SALT',   'r8s(76~N#&7pfY:rORC$Yc6GcH0tXo^tqT|.*dsI]:9[%T R1Ct6}Bxl[F;,v{}D' );
define( 'NONCE_SALT',       '&F++/)fJ>DDSZ`X<:^B2])QA)KBSn7=@<IUGeU83P^@%`b>QMP3OC^>}~~Bji^_k' );

/**#@-*/

/**
 * Prefixul tabelelor din MySQL
 *
 * Acest lucru permite instalarea mai multor instanțe WordPress folosind aceeași bază de date
 * dacă prefixul este diferit pentru fiecare instanță. Sunt permise doar cifre, litere și caracterul liniuță de subliniere.
 */
$table_prefix = 'wp_';

/**
 * Pentru dezvoltatori: WordPress în mod de depanare.
 *
 * Setează cu true pentru a permite afișarea notificărilor în timpul dezvoltării.
 * Este recomadată folosirea modului WP_DEBUG în timpul dezvoltării modulelor și
 * a șabloanelor/temelor în mediile personale de dezvoltare.
 *
 * Pentru detalii despre alte constante ce pot fi utilizate în timpul depanării,
 * vizitează Codex-ul.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Asta e tot, am terminat cu editarea. Spor! */

/** Calea absolută spre directorul WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Setează variabilele WordPress și fișierele incluse. */
require_once(ABSPATH . 'wp-settings.php');
