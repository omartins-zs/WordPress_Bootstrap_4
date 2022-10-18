<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress_bootstrap4' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')1FFEily=+>o2iG#:k$S5m9FHHSQB302&I~N5v!njGw {,[&MS[S2J|~;B7vs>dj' );
define( 'SECURE_AUTH_KEY',  'NT3bNw4pj#lk&DnkmSF9@%s<bt2!X]*uTL=itO:6 4:Q}sN-C/>mHyTfNQ+6RxCp' );
define( 'LOGGED_IN_KEY',    '/NS;B0b~[3l1y<w=0<!>`>DhEbK|<$j63Hy*:{hw{&6+pxy|@:lLirOPBFeX2V/~' );
define( 'NONCE_KEY',        'XkX|Ej3jx_*M!/*_t4:N~PPI$|-&b4dpLR&&7z2{nO_uXn$7cfW_Zw}u+qEP&Q.m' );
define( 'AUTH_SALT',        '){%86Xiui2`r&U_D)H1dV_aOG*hC.n@~h{).rN$WBEHRcm=$qlDxCFH;Xx#Fnm@#' );
define( 'SECURE_AUTH_SALT', 'PHr~Y0MX}nMEgB0LHJ%5&<hB&VSN=lC}6ii:30+ATq{>sA*B@8gsadFH@;/rlO0u' );
define( 'LOGGED_IN_SALT',   'mo:Ja$RB6j9 r!^)Eq,,Fb>MEQQ91M};h6.c?f|uU-doS`}M[?Rl(]K^pXh}d9|]' );
define( 'NONCE_SALT',       '0@HD$wX RpjXD_,&: AR#:L%<Ls=C-JIo@M2;`FnO=3xKfP#|Smf&lY^w*9SD%3P' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
